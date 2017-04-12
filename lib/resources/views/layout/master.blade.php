<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Khóa học lập trình @yield('title')</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		*{
			margin: 0;
			padding: 0;
		}
		#wrapper{
			width: 1200px;
			background: #eeeeee;
			margin: 0 auto;
		}
		.header{
			height: 200px;
			background: red;
		}
		.content{
			height: 500px;
			background: blue;
		}
		.footer{
			height: 200px;
			background: green;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<div class="header">
			đây là header
		</div>
		<div class="content">
			@yield('body')
		</div>
		<div class="footer">
			đây là footer
		</div>
	</div>
</body>
</html>