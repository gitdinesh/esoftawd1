<!DOCTYPE html>
<html>
<head>
	<title>This is Item File</title>
</head>
<body>
	<h1 class="dispaly_var">Print variable from controller</h1>
	<h2>{{$item_title}}</h2>
  
	<div class="item_count">Item Count -> {{count($item_list)}}</div>
	<h3 class="single_item">{{$item_list[0]}}</h3>
	<hr/>
	<h1 class="display_array">Print Array from controller</h1>

	<h3>With foreach</h3>
	<ul>
		@foreach($item_list as $item)
			<li>{{$item}}</li>
		@endforeach
	</ul>
	<h3> with for</h3>
	<ul>
		@for($i = 0;$i< count($item_list); $i++)
			<li>{{$item_list[$i]}}</li>
		@endfor	
	</ul>
	<hr/>

	<h1 class="with_if">Using Conditional flow</h1>
	<div class="item_count">Reorder Level -> {{$min_item_count}}</div>
	@if($min_item_count < count($item_list))
		<div class="show_green" style="color:green">Inventory full with Items</div>

	@else
		<div class="show_green" style="color:red">Oops You need to re order items</div>

	@endif



</body>
</html>