<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index(){
        $banner = Banner::get()->first();

        return view('welcome', compact('banner'));
    }

    public function show(){
        $banner = Banner::get()->first();

        return view('posts.banner.show', compact('banner'));
    }

    public function edit($id){
        $banner = Banner::where('id', $id)->get()->first();

        return view('posts.banner.edit', compact('banner'));
        
    }

    public function update(Request $request, Banner $banner){
        $banner->update($request->all());
        return redirect('/admin/banner');
    }


}
