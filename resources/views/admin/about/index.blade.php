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

    <a href="{{ route('aboutimage.create')}}" class="btn btn-primary">
      <i class="material-icons">create_new_folder</i>
      <spano >Crear imagen</span>
    </a>

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
              @foreach($aboutsImage as $key=>$abouts)
              <tr>
                <td>
                  {{ $key + 1 }}
                </td>
                <td>
                  <img class="img-fluid" width="80" src="{{ asset('uploads/about/'.$abouts->image) }}" alt="Card image cap">
                </td>
                <td>
                  {{ $abouts->title }}
                </td>
                <td>
                  {{ $abouts->description}}
                </td>
                <td>
                  
                  <div class="row">
                    <a href="{{ route('aboutimage.edit', $abouts->id) }}" class="btn btn-info btn-sm">
                      <i class="material-icons">edit</i>
                    </a>
                  </div>

                  <div class="row">
                    <form id="delete-form-{{ $abouts->id }}" action="{{ route('aboutimage.destroy',$abouts->id) }}" style="display: none;" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>

                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Estas seguro que quieres eliminar?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $abouts->id }}').submit();
                    }else {
                        event.preventDefault();
                            }"><i class="material-icons">delete</i>
                    </button>
                    
                  </div>
                  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>


@endsection