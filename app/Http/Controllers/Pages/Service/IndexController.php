<?php

namespace App\Http\Controllers\Pages\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view("pages.service");
    }
}
