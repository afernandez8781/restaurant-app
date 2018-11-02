@extends('admin.layout')

@section('title','About')
@section('content')



<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title ">Edita apartir acerca de</h4>
        <p class="card-category"> Edita todo sobre about y titulos de Especial, Menús, Galeria</p>
      </div>
      <div class="card-body">

      {{-- <div class="card">
        <div class="card-body"> --}}
        	
        	@include('admin.partials.message')

          <h4 class="card-title">{{ $about->title }}</h4>
          <p class="card-text">{{ $about->sub_title }}</p>
          <p class="card-text"><small class="text-muted">{{ $about->description }}</small></p>
      	  <div class="row">
      		  <div class="col-md-7">
      		  	<img class="card-img-bottom" src="{{ asset('uploads/about/' . $about->large_image) }}" alt="Card image cap">
      		  </div>
      		  <div class="col-md-5">
      		  	<img class="card-img-bottom" src="{{ asset('uploads/about/' . $about->small_image) }}" alt="Card image cap">
      		  </div>
      	  </div>

          <br>
      	  <h4 class="card-title">{{ $about->title2 }}</h4>
      	  <p class="card-text"><small class="text-muted">{{ $about->description2 }}</small></p>

      	  <h4 class="card-title">{{ $about->title_menu }}</h4>
      	  <p class="card-text"><small class="text-muted">{{ $about->description_menu }}</small></p>

      	  <h4 class="card-title">{{ $about->title_gallery }}</h4>
      	  <p class="card-text"><small class="text-muted">{{ $about->description_gallery }}</small></p>

      	<a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary pull-right">
      		<i class="material-icons">edit</i>
      	</a>
      {{--   </div>
      </div> --}}
                	
      </div>
    </div>
  </div>


  <div class="col-md-12">
    <div class="card card-plain">
      <div class="card-header card-header-primary">
        <h4 class="card-title mt-0"> Foto de platos especiales </h4>
        <p class="card-category"> En esta sessión puede subir imagenes para platos especiales</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="">
              <tr><th>
                ID
              </th>
              <th>
                Imagen
              </th>
              <th>
                Título
              </th>
              <th>
                Descripción
              </th>
              <th>
                Acción
              </th>
            </tr></thead>
            <tbody>
              @foreach($aboutsImage as $abouts)
              <tr>
                <td>
                  1
                </td>
                <td>
                  {{ $abouts->image }}
                </td>
                <td>
                  {{ $abouts->title }}
                </td>
                <td>
                  {{ $abouts->description}}
                </td>
                <td>
                  $36,738
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary pull-right">
          <i class="material-icons">edit</i>
        </a>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection