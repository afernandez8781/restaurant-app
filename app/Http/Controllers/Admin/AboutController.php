<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\About;
use File;

use App\AboutsImage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = DB::table('abouts')->first();

        $aboutsImage = AboutsImage::all();

        return view('admin.about.index')->with(compact('about', 'aboutsImage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);

        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required', 
            'subTitle' => 'required',
            'description' => 'required',
            'largeImage' => 'mimes:jpeg,jpg.png,gif',
            'smallImage' => 'mimes:jpeg,jpg.png,gif',
            'title2' => 'required',
            'description2' => 'required',
            'titleMenu' => 'required',
            'descriptionMenu' => 'required',
            'titleGallery' => 'required',
            'descriptionGallery' => 'required'
        ]);
        $path = public_path() . '/uploads/about/';
        $about = About::find($id);

        if($largeImage = $request->file('largeImage')){
            $fileNameLargeImage = uniqid() .'-'. $largeImage->getClientOriginalName();
            $largeImage->move($path, $fileNameLargeImage);

            $LargeImagePath = $path.$about->large_image;
            File::delete($LargeImagePath);
        }else{
            $fileNameLargeImage = $about->large_image;
        }

        if($smallImageFile = $request->file('smallImage')){
            $fileNameSmallImage = uniqid() .'-'. $smallImageFile->getClientOriginalName();
            $smallImageFile->move($path, $fileNameSmallImage);

            $smallImagePath = $path.$about->small_image;
            File::delete($smallImagePath);
        }else{
            $fileNameSmallImage = $about->small_image;
        }

        $about->title = $request->title;
        $about->sub_title = $request->subTitle;
        $about->description = $request->description;
        $about->large_image = $fileNameLargeImage;
        $about->small_image = $fileNameSmallImage;
        $about->title2 = $request->title2;
        $about->description2 = $request->description2;
        $about->title_menu = $request->titleMenu;
        $about->description_menu = $request->descriptionMenu;
        $about->title_gallery = $request->titleGallery;
        $about->description_gallery = $request->descriptionGallery;

        $about->save();

        return redirect()->route('about.index')->with('successMessage','Página About Actualizado');
    }
}
