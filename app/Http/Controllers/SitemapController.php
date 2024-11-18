<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Metas;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $metas = Metas::all(['sitemap_url', 'updated_at']);

        $sitemapContent = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemapContent .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($metas as $meta) {
            $sitemapContent .= '<url>';
            $sitemapContent .= '<loc>' . e($meta->sitemap_url) . '</loc>';
            $sitemapContent .= '<lastmod>' . $meta->updated_at->toAtomString() . '</lastmod>';
            $sitemapContent .= '<changefreq>daily</changefreq>';
            $sitemapContent .= '<priority>0.8</priority>';
            $sitemapContent .= '</url>';
        }

        $sitemapContent .= '</urlset>';

        // Save the sitemap to the public directory
        $filePath = public_path('sitemap.xml');
        File::put($filePath, $sitemapContent);

        return Response::make($sitemapContent, 200)->header('Content-Type', 'application/xml');
    }
}