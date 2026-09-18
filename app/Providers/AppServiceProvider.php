<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('partials.footer', function ($view) {
            $footerBlogs = Cache::remember('footer_blogs_v2', 1800, function () {
                try {
                    $response = Http::withoutVerifying()->timeout(8)->get('https://thedigicoders.com/api/blogs?location=digitaldaur');
                    if ($response->successful()) {
                        $data = $response->json();
                        if (is_array($data) && count($data) > 0) {
                            return array_slice($data, 0, 2);
                        }
                    }
                } catch (\Throwable $e) {
                    // Failover log
                }

                return [];
            });

            $view->with('footerBlogs', $footerBlogs);
        });
    }
}
