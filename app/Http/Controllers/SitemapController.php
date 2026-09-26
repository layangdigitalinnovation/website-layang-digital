<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Career;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [];
        $baseUrl = url('/');

        // 1. Static Pages
        $staticPages = [
            '/',
            '/about',
            '/portfolio',
            '/karir',
            '/blog',
            '/privacy-policy',
            '/terms-of-service',
        ];

        foreach ($staticPages as $path) {
            $urls[] = [
                'loc' => $baseUrl . $path,
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => $path === '/' ? '1.0' : '0.8'
            ];
        }

        // 2. Services
        $services = [
            'pengembangan-web',
            'sistem-bisnis',
            'pengembangan-saas',
            'pengembangan-mobile',
            'software-kustom',
            'integrasi-api'
        ];

        foreach ($services as $slug) {
            $urls[] = [
                'loc' => $baseUrl . '/layanan/' . $slug,
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.9'
            ];
        }

        // 3. Blog Posts
        $posts = BlogPost::where('is_published', true)->get();
        foreach ($posts as $post) {
            $urls[] = [
                'loc' => $baseUrl . '/blog/' . $post->slug,
                'lastmod' => $post->updated_at->format('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ];
        }

        // 4. Careers
        $careers = Career::where('is_active', true)->get();
        foreach ($careers as $career) {
            $urls[] = [
                'loc' => $baseUrl . '/karir/' . $career->slug,
                'lastmod' => $career->updated_at->format('Y-m-d'),
                'changefreq' => 'weekly',
                'priority' => '0.8'
            ];
        }

        return response()->view('sitemap.index', [
            'urls' => $urls
        ])->header('Content-Type', 'text/xml');
    }
}
