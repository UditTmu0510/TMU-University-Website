<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Models\Metas;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $metas = Metas::all(['sitemap_url', 'updated_at']);
        $baseUrl = env('app.url'); // Correctly accessing the base URL from env

        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($metas as $meta) {
            // Ensure no extra slashes are added or missing
            $fullUrl = rtrim($baseUrl, '/') . '/' . ltrim($meta->sitemap_url, '/');

            $sitemapContent .= '<url>';
            $sitemapContent .= '<loc>' . e($fullUrl) . '</loc>';
            $sitemapContent .= '<lastmod>' . $meta->updated_at->toAtomString() . '</lastmod>';
            $sitemapContent .= '<changefreq>daily</changefreq>';
            $sitemapContent .= '<priority>0.8</priority>';
            $sitemapContent .= '</url>';
        }

        $sitemapContent .= '</urlset>';

        // Save the sitemap to the public directory
        $filePath = public_path('sitemap.xml');
        File::put($filePath, $sitemapContent);

        // Return the sitemap content as response
        return Response::make($sitemapContent, 200)->header('Content-Type', 'application/xml');
    }
}
