<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
use File;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = DB::table('homes')->first();
        return view('admin/home/index', compact('home'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $home = Home::find($id);

        return view('admin.home.edit', compact('home'));
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
            'logo' => 'mimes:jpeg,jpg,png,gif',
            'backgroundImage' => 'mimes:jpeg,jpg,png,gif',
            'title' => 'required',
            'titleAnimate' => 'required',
            'subTitle' => 'required',
            'description' => 'required'
        ]);

        $path = public_path() . '/uploads/home/';
        $home = Home::find($id);

        if($logoFile = $request->file('logo')){
            $fileNameLogo = uniqid() .'-'. $logoFile->getClientOriginalName();
            $movedLogo = $logoFile->move($path, $fileNameLogo);

            $logoPath = $path.$home->logo;
            $deleted = File::delete($logoPath);
        }else{
            $fileNameLogo = $home->logo;
        }

        if($backgroundImageFile = $request->file('backgroundImage')){
            $fileNameBackgroundImage = uniqid() .'-'. $backgroundImageFile->getClientOriginalName();
            $movedBackgroundImage = $backgroundImageFile->move($path, $fileNameBackgroundImage);

            $backgroundImagePath = $path.$home->background_image;
            $deleted = File::delete($backgroundImagePath);
        }else{
            $fileNameBackgroundImage = $home->background_image;
        }

        $home->logo = $fileNameLogo;
        $home->background_image = $fileNameBackgroundImage;
        $home->title = $request->title;
        $home->title_animate = $request->titleAnimate;
        $home->sub_title = $request->subTitle;
        $home->description = $request->description;
        $home->save();

        return redirect()->route('home.index')->with('successMessage','Página Home Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
