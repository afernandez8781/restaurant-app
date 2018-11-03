@extends('admin.layout')

@section('title','Crear imagen para platos especiales')
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




        <form method="POST" action="{{ route('aboutimage.store') }}" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="row">
            <div class="col-md-6">
              {{-- <div class="form-group bmd-form-group"> --}}
                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">imagen</font></font></label>
                <input type="file" class="form-control" name="image">
              {{-- </div> --}}
            </div>
            <div class="col-md-6">
              <div class="form-group bmd-form-group">
                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título</font></font></label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-group bmd-form-group">
                  <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Describe un mensaje breve.</font></font></label>
                  <textarea class="form-control" rows="5" name="description">{{ old('description') }}</textarea>
                </div>
              </div>
            </div>
          </div>
          <a href="{{ route('about.index') }}" class="btn btn-default pull-left text-white">Atrás</a>

          <button type="submit" class="btn btn-primary pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar</font></font></button>
          <div class="clearfix"></div>
        </form>


      {{--   </div>
      </div> --}}
                	
      </div>
    </div>
  </div>
</div>


@endsection