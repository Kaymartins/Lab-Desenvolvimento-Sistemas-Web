<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Banner::create(["path" => "/img/banner1.jpg"]);

        Banner::create(['path' => "/img/banner2.png"]);

        Banner::create(['path' => "/img/banner3.jpg"]);
    }

}
