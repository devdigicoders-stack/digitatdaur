<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    private string $apiEndpoint = 'https://thedigicoders.com/api/blogs?location=digitaldaur';

    private string $trackViewEndpoint = 'https://thedigicoders.com/api/blogs/track-view';

    /**
     * Display a listing of blogs.
     */
    public function index()
    {
        $blogs = $this->fetchBlogsFromApi();

        return view('blogs.index', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Get top N blogs for home page section.
     */
    public function getHomeBlogs(int $limit = 3): array
    {
        $blogs = $this->fetchBlogsFromApi();

        return array_slice($blogs, 0, $limit);
    }

    /**
     * Display the specified blog details.
     */
    public function show($identifier)
    {
        $blogs = $this->fetchBlogsFromApi();

        // Find blog by url slug or id
        $blog = collect($blogs)->first(function ($item) use ($identifier) {
            return ($item['url'] ?? '') === $identifier
                || ($item['id'] ?? '') === (string) $identifier;
        });

        if (! $blog) {
            abort(404, 'Blog post not found.');
        }

        // Track view in API with IP address
        if (! empty($blog['id'])) {
            $this->trackView($blog['id']);
        }

        // Parse FAQs
        $faqs = [];
        if (! empty($blog['faqs'])) {
            if (is_string($blog['faqs'])) {
                $decoded = json_decode($blog['faqs'], true);
                if (is_array($decoded)) {
                    $faqs = $decoded;
                }
            } elseif (is_array($blog['faqs'])) {
                $faqs = $blog['faqs'];
            }
        }

        // Latest blogs for sidebar (excluding current)
        $latestBlogs = collect($blogs)->reject(function ($item) use ($blog) {
            return ($item['id'] ?? '') === ($blog['id'] ?? '');
        })->take(4)->values()->all();

        return view('blogs.show', [
            'blog' => $blog,
            'faqs' => $faqs,
            'latestBlogs' => $latestBlogs,
            'allBlogs' => $blogs,
        ]);
    }

    /**
     * Fetch blogs from Digicoders API.
     */
    private function fetchBlogsFromApi(): array
    {
        try {
            $response = Http::timeout(8)->get($this->apiEndpoint);
            if ($response->successful()) {
                $data = $response->json();
                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        } catch (\Exception $e) {
            Log::warning('Blog API Fetch Exception: '.$e->getMessage());
        }

        return [];
    }

    /**
     * Send track view notification to API with user IP address.
     */
    private function trackView($blogId): void
    {
        try {
            $userIp = request()->ip();
            Http::timeout(5)->post($this->trackViewEndpoint, [
                'id' => $blogId,
                'blog_id' => $blogId,
                'ip' => $userIp,
                'ip_address' => $userIp,
            ]);
        } catch (\Exception $e) {
            Log::info('Blog Track View exception: '.$e->getMessage());
        }
    }
}
