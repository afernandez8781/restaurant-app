@extends('admin.layout')

@section('title','Home')
@section('content')

<div class="row">
	<div class="col-md-12">
	  <div class="card card-plain">
	    <div class="card-header card-header-primary">
	      <h4 class="card-title mt-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Editar página home de la vista</font></font></h4>
	      <p class="card-category"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{ $home->sub_title }}</font></font></p>
	    </div>
	    <div class="card-body">

	    @include('admin.partials.message')
			
			<div class="card col-md-12">
			  	<img class="card-img-top" src="{{ asset('uploads/home/'.$home->background_image) }}" alt="Card image cap">
			  ​<div>
			  	<img class="img-fluid" src="{{ asset('uploads/home/'.$home->logo) }}" alt="Card image cap">
			  </div>
			  <div class="card-body">
			    <h4 class="card-title">{{ $home->title }} <strong>{{ $home->title_animate }}</h4>
			    <p class="card-text">{{ $home->sub_title }}</p>
			    <p class="card-text"><small class="text-muted">{{ $home->description }}</small></p>

				<a href="{{ route('home.edit', $home->id) }}" class="btn btn-primary pull-right">
					<i class="material-icons">edit</i>
				</a>
			  </div>
			</div>

	    </div>
	  </div>
	</div>
</div>
@endsection
