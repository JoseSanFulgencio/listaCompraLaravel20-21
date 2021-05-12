@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-4">

	    	<a {{href="url('/views/productos/show' . $producto->id)}}">

	        	<img src="https://picsum.photos/200/300/?random" style="height:200px"/>

	        </a>
	    </div>
	    <div class="col-sm-8">

	        {{-- TODO: Datos del producto --}}

	    </div>
	</div>

@stop