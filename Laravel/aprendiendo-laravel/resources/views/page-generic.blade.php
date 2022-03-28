{{--LAYOUT--}}
{{--Con views>layout>master.blade.php--}}

{{--Extending A Layout--}}
{{--When defining a child view, use the Blade @extends directive to specify which layout the child view should "inherit".--}}
@extends('layout.master')

{{--Views which extend a Blade layout may inject content into the layout's sections using @section directives--}}
@section('title','Pag gener')

@section('header')
    @parent {{--Heredo lo que contiene el master--}}
    <h1>Pagina generica</h1> {{--Agrego valores--}}
@endsection

@section('content')
    <p>Plantilla baso o layout</p>
@endsection

