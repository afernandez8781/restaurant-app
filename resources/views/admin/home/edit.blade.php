@extends('admin.layout')

@section('title','editar')

@section('content')

<div class="row">
	<div class="col-md-12">
		
	  	@include('admin.partials.message')

	  <div class="card">
	    <div class="card-header card-header-primary">
	      <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar home</font></font></h4>
	      <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">completa tu edición</font></font></p>
	    </div>
	    <div class="card-body">
	      <form method="POST" action="{{ route('home.update', $home->id) }}" enctype="multipart/form-data">
	      	@csrf
	      	@method('PUT')
	        <div class="row">
	          <div class="col-md-6">
	            {{-- <div class="form-group bmd-form-group"> --}}
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Logotipo</font></font></label>
	              <input type="file" class="form-control" name="logo">
	            {{-- </div> --}}
	          </div>
	          <div class="col-md-6">
	            {{-- <div class="form-group bmd-form-group"> --}}
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagen de fondo</font></font></label>
	              <input type="file" class="form-control" name="backgroundImage">
	            {{-- </div> --}}
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-6">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título</font></font></label>
	              <input type="text" class="form-control" name="title" value="{{ $home->title }}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título animado</font></font></label>
	              <input type="text" class="form-control" name="titleAnimate" value="{{ $home->title_animate }}">
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sub título</font></font></label>
	              <input type="text" class="form-control" name="subTitle" value="{{ $home->sub_title }}">
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group">
	              <div class="form-group bmd-form-group">
	                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Describe un mensaje breve.</font></font></label>
	                <textarea class="form-control" rows="5" name="description">{{ $home->description }}</textarea>
	              </div>
	            </div>
	          </div>
	        </div>
	        <a href="{{ route('home.index') }}" class="btn btn-default pull-left text-white">Atrás</a>

	        <button type="submit" class="btn btn-primary pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar</font></font></button>
	        <div class="clearfix"></div>
	      </form>
	    </div>
	  </div>
	</div>
</div>

@endsection