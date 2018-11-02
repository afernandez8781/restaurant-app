@extends('admin.layout')

@section('title','About')
@section('content')

<div class="row">
	<div class="col-md-12">
		
	  	@include('admin.partials.message')

	  <div class="card">
	    <div class="card-header card-header-primary">
	      <h4 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar About</font></font></h4>
	      <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">completa tu edición</font></font></p>
	    </div>
	    <div class="card-body">
	      <form method="POST" action="{{ route('about.update', $about->id) }}" enctype="multipart/form-data">
	      	@csrf
	      	@method('PUT')
	        <div class="row">
	          <div class="col-md-6">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título sobre nosotros</font></font></label>
	              <input type="text" class="form-control" name="title" value="{{ $about->title }}">
	            </div>
	          </div>
	          <div class="col-md-6">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sub título sobre nosotros</font></font></label>
	              <input type="text" class="form-control" name="subTitle" value="{{ $about->sub_title }}">
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group">
	              <div class="form-group bmd-form-group">
	                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Descripción about.</font></font></label>
	                <textarea class="form-control" rows="5" name="description">{{ $about->description }}</textarea>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-6">
	            {{-- <div class="form-group bmd-form-group"> --}}
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagen grande</font></font></label>
	              <input type="file" class="form-control" name="largeImage">
	            {{-- </div> --}}
	          </div>
	          <div class="col-md-6">
	            {{-- <div class="form-group bmd-form-group"> --}}
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Imagen pequeño</font></font></label>
	              <input type="file" class="form-control" name="smallImage">
	            {{-- </div> --}}
	          </div>
	        </div>




	        <br><br>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título menú especial</font></font></label>
	              <input type="text" class="form-control" name="title2" value="{{ $about->title2 }}">
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group">
	              <div class="form-group bmd-form-group">
	                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Descripción menu especial.</font></font></label>
	                <textarea class="form-control" rows="5" name="description2">{{ $about->description2 }}</textarea>
	              </div>
	            </div>
	          </div>
	        </div>
	        
	        

	        <br><br>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título para menú</font></font></label>
	              <input type="text" class="form-control" name="titleMenu" value="{{ $about->title_menu }}">
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group">
	              <div class="form-group bmd-form-group">
	                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Descripción para el menu</font></font></label>
	                <textarea class="form-control" rows="5" name="descriptionMenu">{{ $about->description_menu }}</textarea>
	              </div>
	            </div>
	          </div>
	        </div>



	        <br><br>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group bmd-form-group">
	              <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título para Galeria</font></font></label>
	              <input type="text" class="form-control" name="titleGallery" value="{{ $about->title_gallery }}">
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12">
	            <div class="form-group">
	              <div class="form-group bmd-form-group">
	                <label class="bmd-label-floating"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Descripción para Galeria</font></font></label>
	                <textarea class="form-control" rows="5" name="descriptionGallery">{{ $about->description_gallery }}</textarea>
	              </div>
	            </div>
	          </div>
	        </div>

	        <a href="{{ route('about.index') }}" class="btn btn-default pull-left text-white">Atrás</a>

	        <button type="submit" class="btn btn-primary pull-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Actualizar</font></font></button>
	        <div class="clearfix"></div>
	      </form>
	    </div>
	  </div>
	</div>
</div>


@endsection