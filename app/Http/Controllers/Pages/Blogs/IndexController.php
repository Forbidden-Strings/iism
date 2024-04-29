<?php

namespace App\Http\Controllers\Pages\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        return view('pages.blogs');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function show(Request $request, string $slug)
    {
        return view("pages.blogs.{$slug}");
    }
}
