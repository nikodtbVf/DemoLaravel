@extends('layouts.admin')
@section('content')

  {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
  		@include('usuario.forms.user')
  		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
  {!!Form::close()!!}
@stop