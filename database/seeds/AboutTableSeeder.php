<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::truncate();
    	
        $about = new About;
        $about->title = 'Sobre nosotros';
        $about->sub_title = 'nuestra empresa esta orientado a servicio de software';
        $about->description = '
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco.

Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, Aenean commodo ligula eget dolor penatibu set magnis is parturient montes, nascetur ridiculus mus. quam felisorat, ultricies nec, pellentesque eu, pretium quis, sem. quat massa quis enim. Donec vitae sapien ut libero venenatis fauci Nullam quis ante. Etiam sit amet rci eget eros.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, nostrud exercitation ullamco.';
		$about->large_image = 'about-main.jpg';
		$about->small_image = 'about-inset.jpg';


		$about->title2 = 'Hoy es especial';
		$about->description2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud exercitation ullamco.';

        $about->title_menu = 'Nuestro Menú';
        $about->description_menu = 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.';

        $about->title_gallery = 'Nuestra Galeria';
        $about->description_gallery = 'There are many variations of passages of Lorem Ipsum available';

        // $about->title_reservation = 'Reservaciones';
        // $about->sub_title_reservation = 'Formulario de Reserva';
        // $about->description_reservation = 'Por Favor llene todos los campos';

        // $about->title_subscribe = 'Suscríbete';
        // $about->description_subscribe = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit';

        $about->save();
    }
}
