<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="ELITE CREDIT - Votre partenaire" name="description">
		<meta content="ELITE CREDIT" name="Levis">
		<meta name="keywords" content="ELITE CREDIT, Logiciel de gestion"/>	
		@include('layouts.head')
		
	</head>

	<body class="app sidebar-mini">
		<!---Global-loader-->
		<div id="global-loader" >
			<img src="{{URL::asset('assets/images/svgs/loader.svg')}}" alt="loader">
		</div>
		<!--- End Global-loader-->
		<!-- Page -->
		<div class="page">
			<div class="page-main">
				@include('layouts.aside-menu')
				<!-- App-Content -->			
				<div class="app-content main-content">
					<div class="side-app">
						@include('layouts.header1')
						@yield('page-header')
						@yield('content')
						<br>
						<br><br><br><br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<br><br><br><br><br><br><br><br><br><br><br><br>
						<br><br><br><br>
						<br><br><br><br>
						@include('layouts.footer1')
		</div><!-- End Page -->
			@include('layouts.footer-scripts')
	</body>
</html>
		