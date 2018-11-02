<?php

use Illuminate\Database\Seeder;
use App\AboutsImage;

class AboutImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutsImage::truncate();
    	
        $aboutImages = new AboutsImage;
        $aboutImages->image = 'special-menu-1.jpg';
        $aboutImages->title = 'titulo de la imagen';
        $aboutImages->description = 'aqui va un pequeño descripción sobre el plato especial';

        $aboutImages->save();
    }
}
