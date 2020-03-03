@extends('adminlte::page')

@section('title', 'Nova Página')

@section('content_header')
	<h1>Nova Página</h1>
@endsection

@section('content')
	
	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				<h5>
					<i class="icon fas fa-ban"></i>
					Ocorreu um erro
				</h5>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@else

	@endif

	<div class="card">
		<div class="card-body">
			<form action="{{route('pages.store')}}" method="POST" class="form-horizontal">
				@csrf
				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Título da Página</label>
					<div class="col-sm-9">
						<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label">Corpo da Página</label>
					<div class="col-sm-9">
						<textarea name="body" class="form-control" style="height: 300px;">{{old('body')}}</textarea>
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label"></label>
					<div class="col-sm-9">
						<input type="submit" class="btn btn-success" value="Criar">
					</div>
				</div>
			</form>
		</div>
	</div>

@endsection