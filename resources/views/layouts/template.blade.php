<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('js/Lightweight-Chart/cssCharts.css')}}"> 
</head>
<body>
@include('layouts.pages.sidebar')
@yield('main')


<script src="{{ asset('js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{ asset('js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{ asset('js/morris/morris.js')}}"></script>
	
	
	<script src="{{ asset('js/easypiechart.js')}}"></script>
	<script src="{{ asset('js/easypiechart-data.js')}}"></script>
	
	 <script src="{{ asset('js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{ asset('js/custom-scripts.js')}}"></script>

      <script>
    
      </script>

</body>
</html>