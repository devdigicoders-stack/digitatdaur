<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display the Privacy Policy page.
     */
    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    /**
     * Display the Terms & Conditions page.
     */
    public function terms()
    {
        return view('pages.terms');
    }
}
