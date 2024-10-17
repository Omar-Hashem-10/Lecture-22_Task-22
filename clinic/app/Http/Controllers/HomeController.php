<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $majors = Major::orderBy('id', 'desc')->get();
        return view('web.site.pages.home.index', compact('majors'));
    }
}
