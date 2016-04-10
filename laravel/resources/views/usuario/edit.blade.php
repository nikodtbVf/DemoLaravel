@extends('layouts.admin')
@section('content')
  @include('alerts.request')
	{!!Form::model($user,['route'=>['usuario.update',$user->id,'method'=>'POST']])!!}
	   <?php csrf_field(); ?> 
  		@include('usuario.forms.user')
  	  {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
  	  <input type="hidden" value="PUT" name="_method">
    {!!Form::close()!!}

    {!!Form::open(['route'=>['usuario.destroy',$user->id,'method'=>'POST']])!!}
	   <?php csrf_field(); ?> 
  	  {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
  	  <input type="hidden" value="DELETE" name="_method">
    {!!Form::close()!!}
@stop