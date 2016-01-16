<!DOCTYPE html>
<html>
<head>
	<title>.:: @yield('title') ::.</title>
</head>
<body>
<header>
	<p>Header - Company Logo and other header stuff goes here</p>
</header>


<section class="mainNave" style="background:red">
	<p>@yield('main_nav')</p>
</section>


<section class="side_nav_bar" style="background:black;color:white">
	<p>@yield('side_nav_bar')</p>
</section>

<section class="continer" style="background:#F7F7F7">
	<p>@yield('content')</p>
</section>	


<footer style="background:green">
	<p>Footer Goes here </p>
</footer>



</body>
</html>