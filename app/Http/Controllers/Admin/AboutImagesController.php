<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AboutsImage;
use File;

class AboutImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.about.aboutImages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required:mimes:jpeg,jpg.png,gif',
            'title' => 'required',
            'description' => 'required'
        ]);

        $path = public_path() . '/uploads/about/';
        $aboutImage = new AboutsImage;

        if($image = $request->file('image')){
            $fileNameimage = uniqid() .'-'. $image->getClientOriginalName();
            $image->move($path, $fileNameimage);
        }
        
        $aboutImage->image = $fileNameimage;
        $aboutImage->title = $request->title;
        $aboutImage->description = $request->description;
        $aboutImage->save();

        return redirect()->route('about.index')->with('successMessage','Menú especiales fué creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $aboutImage = AboutsImage::find($id);
        // dd($aboutImage);
        return view('admin.about.aboutImages.edit')->with(compact('aboutImage'));
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
            'image' => 'mimes:jpeg,jpg.png,gif',
            'title' => 'required',
            'description' => 'required'
        ]);

        $path = public_path() . '/uploads/about/';
        $aboutImage = AboutsImage::find($id);

        if($image = $request->file('image')){
            $fileNameimage = uniqid() .'-'. $image->getClientOriginalName();
            $image->move($path, $fileNameimage);

            $imagePath = $path.$aboutImage->image;
            File::delete($imagePath);
        }else {
            $fileNameimage = $aboutImage->image;
        }
        
        $aboutImage->image = $fileNameimage;
        $aboutImage->title = $request->title;
        $aboutImage->description = $request->description;
        $aboutImage->save();

        return redirect()->route('about.index')->with('successMessage','Menú especial actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = public_path() . '/uploads/about/';
        $aboutImage = AboutsImage::find($id);

        $imagePath = $path.$aboutImage->image;
        File::delete($imagePath);

        $aboutImage->delete();

        return redirect()->back()->with('successMessage','Menú especial eliminado');
        

    }
}
