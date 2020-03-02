@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
	<h1>Configurações</h1>
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
	@endif

	@if(session('warning'))
		<div class="alert alert-success">
			{{session('warning')}}
		</div>
	@endif


	<div class="card">
		<div class="card-body">
			<form action="{{route('settings.save')}}" method="POST" class="form-horizontal">
				@method('PUT')
				@csrf
				
				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Título do Site</label>
					<div class="col-sm-10">
						<input type="text" name="title" value="{{$settings['title']}}" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Subtítulo do Site</label>
					<div class="col-sm-10">
						<input type="text" name="subtitle" value="{{$settings['subtitle']}}" class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Email de Contato</label>
					<div class="col-sm-10">
						<input type="email" name="email" value="{{$settings['contact_email']}}"  class="form-control">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Cor de Fundo</label>
					<div class="col-sm-10">
						<input type="color" name="background_color" value="{{$settings['background_color']}}" class="mt-2">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label">Cor dos Textos</label>
					<div class="col-sm-1">
						<input type="color" name="text_color" value="{{$settings['text_color']}}" class="mt-2">
					</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<input type="submit" value="salvar" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
