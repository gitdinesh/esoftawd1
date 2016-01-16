@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    


	@foreach($names as $name)
    <p>{{$name}}</p>
    @endforeach
    
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection


