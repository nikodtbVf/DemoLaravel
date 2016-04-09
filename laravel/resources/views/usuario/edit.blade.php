@extends('layouts.admin')
@section('content')
	{!!Form::model($user,['route'=>['usuario.update',$user->id,'method'=>'POST']])!!}
	   <?php csrf_field(); ?> 
  		@include('usuario.forms.user')
  	  {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
  	  <input type="hidden" value="PUT" name="_method">;
    {!!Form::close()!!}
@stop