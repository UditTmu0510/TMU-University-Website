<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Models\Metas;
use App\Models\Blogs;
use App\Models\News;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $metas = Metas::where('status', '=', 'Y')
            ->get(['sitemap_url', 'updated_at', 'image_alt_tag', 'slug2', 'slug1', 'meta_title']);

        $baseUrl = env('APP_URL'); // Correctly accessing the base URL from env

        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
                                     xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

        foreach ($metas as $meta) {
            // Ensure no extra slashes are added or missing
            $fullUrl = rtrim($baseUrl, '/') . '/' . ltrim($meta->sitemap_url, '/');

            $sitemapContent .= '<url>';
            $sitemapContent .= '<loc>' . e($fullUrl) . '</loc>';
            $sitemapContent .= '<lastmod>' . $meta->updated_at->toAtomString() . '</lastmod>';
            $sitemapContent .= '<changefreq>daily</changefreq>';
            $sitemapContent .= '<priority>0.8</priority>';

            // Match slug2 from Metas to n_slug from Blogs
            if ($meta->slug1 === 'blog') {
                $blog = Blogs::where('n_slug', $meta->slug2)->first(['post_path']);

                if ($blog && !empty($meta->meta_title) && !in_array(strtolower($meta->meta_title), ['na', 'n/a'])) {
                    $imageUrl = rtrim($baseUrl, '/') . '/' . ltrim($blog->post_path, '/');
                    $sitemapContent .= '<image:image>';
                    $sitemapContent .= '<image:loc>' . e($imageUrl) . '</image:loc>';
                    $sitemapContent .= '<image:caption>' . e($meta->meta_title) . '</image:caption>';
                    $sitemapContent .= '<image:title>' . e($meta->meta_title) . '</image:title>';
                    $sitemapContent .= '</image:image>';
                }
            }
            // Match slug2 from Metas to n_slug from News
            if ($meta->slug1 === 'news') {
                $News = News::where('n_slug', $meta->slug2)->first(['ei1_path', 'ti_path']);

                if ($News && !empty($meta->meta_title) && !in_array(strtolower($meta->meta_title), ['na', 'n/a'])) {
                    $imagePath = !empty($News->ei1_path) ? $News->ei1_path : (!empty($News->ti_path) ? $News->ti_path : null);

                    if ($imagePath) {
                        $imageUrl = rtrim($baseUrl, '/') . '/' . ltrim($imagePath, '/');
                        $sitemapContent .= '<image:image>';
                        $sitemapContent .= '<image:loc>' . e($imageUrl) . '</image:loc>';
                        $sitemapContent .= '<image:caption>' . e($meta->meta_title) . '</image:caption>';
                        $sitemapContent .= '<image:title>' . e($meta->meta_title) . '</image:title>';
                        $sitemapContent .= '</image:image>';
                    }
                }
            }

            $sitemapContent .= '</url>';
        }

        $sitemapContent .= '</urlset>';

        // Save the sitemap to the public directory
        $filePath = public_path('sitemap.xml');
        File::put($filePath, $sitemapContent);

        // Clear any cached version
        clearstatcache();

        // Return the sitemap content as response
        return Response::make($sitemapContent, 200)->header('Content-Type', 'application/xml');
    }
}
