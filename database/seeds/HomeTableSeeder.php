<?php

use Illuminate\Database\Seeder;
use App\Home;

class HomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Home::truncate();
    	
        $home = new Home;
        $home->background_image = 'frontend/images/banner.jpg';
        $home->logo = 'frontend/images/logo.png';
        $home->title = 'Cena con tus';
        $home->title_animate = 'Amigos:Familiares:Compañeros';
        $home->sub_title = 'Promociones y descuentos';
        $home->description = 'Los lunes tenemos con un 20% de descuentos de todos nuestros menus, si consume arriba de 200bs sin importar el dia puede venificiarse de los 20% de descuento';
        $home->save();
    }
}
