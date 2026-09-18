<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SitemapController extends Controller
{
    private string $apiEndpoint = 'https://thedigicoders.com/api/blogs?location=digitaldaur';

    /**
     * Generate dynamic sitemap.xml with home, blogs list, and dynamic blog detail URLs.
     */
    public function index()
    {
        $baseUrl = url('/');

        // Static Page URLs
        $urls = [
            [
                'loc' => $baseUrl,
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '1.0',
            ],
            [
                'loc' => route('blogs.index'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'daily',
                'priority' => '0.8',
            ],
            [
                'loc' => route('privacy-policy'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.5',
            ],
            [
                'loc' => route('terms'),
                'lastmod' => date('Y-m-d'),
                'changefreq' => 'monthly',
                'priority' => '0.5',
            ],
        ];

        // Fetch Dynamic Blogs from API
        try {
            $response = Http::timeout(8)->get($this->apiEndpoint);
            if ($response->successful()) {
                $blogs = $response->json();
                if (is_array($blogs)) {
                    foreach ($blogs as $blog) {
                        $slug = $blog['url'] ?? $blog['id'] ?? null;
                        if ($slug) {
                            $lastmod = ! empty($blog['date']) ? date('Y-m-d', strtotime($blog['date'])) : date('Y-m-d');
                            $urls[] = [
                                'loc' => route('blogs.show', ['url' => $slug]),
                                'lastmod' => $lastmod,
                                'changefreq' => 'weekly',
                                'priority' => '0.7',
                            ];
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            Log::warning('Sitemap Blog API Exception: '.$e->getMessage());
        }

        return response()->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml; charset=utf-8');
    }

    /**
     * Generate dynamic robots.txt content.
     */
    public function robots()
    {
        $sitemapUrl = route('sitemap');

        $content = "User-agent: *\n";
        $content .= "Allow: /\n\n";
        $content .= "Sitemap: {$sitemapUrl}\n";

        return response($content, 200)
            ->header('Content-Type', 'text/plain; charset=utf-8');
    }
}
