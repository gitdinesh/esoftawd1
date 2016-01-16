@extends('layouts.itemlayout')<!-- Define Which layout you are using -->

@section('title', 'Item Page Title') <!-- Section that you are defin in the view -->

@section('main_nav', 'Main Nav bar')

@section('side_nav_bar')
	<ul>
		<li>Home</li>
		<li>Items</li>

	</ul>
@endsection

@section('content')
	@foreach($item_list as $item)
		<li>{{$item}}</li>
	@endforeach
@endsection





@section('test')
<div style="background:pink">
PINK SECTION
</div>
@show





