@php
    use \App\Setting;
    $setting = Setting::first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>

    <!--
		Basic
	-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$setting->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="{{ $setting->description }}" />
    <meta name="keywords" content="{{ $setting->keyword }}" />

    <!--
        Note : Please Dont Remove Author Name
    -->
    <meta name="author" content="Shakil Ahamed" />


    <!--
		Load Fonts
	-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css">

    <!--
		Load CSS
	-->
    <link rel="stylesheet" href="{{ asset('frontend/css/basic.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/blogs.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />

    <!--
		Background Gradient
	-->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/gradient.css') }}"
    /> --}}

    <!--
		Template New-Skin
	-->
    <link rel="stylesheet" href="{{ asset('frontend/css/new-skin/new-skin.css') }}" />

    <!--
		Template RTL
	-->
    <!--<link rel="stylesheet" href="css/rtl.css" />-->

    <!--
		Template Colors
	-->
    <link rel="stylesheet" href="{{ asset('frontend/css/template-colors/green.css') }}" />
    <!--<link rel="stylesheet" href="css/template-colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/template-colors/red.css" />-->

    @if($setting->theme == 2)
        <!--
		Template Dark
	-->
        <link rel="stylesheet" href="{{ asset('frontend/css/template-dark/dark.css') }}" />

    @endif

    <!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

    <!--
		Favicons
	-->
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAANDAwA8sQKAA8PDgDV4eYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwMDAwMDAwMDAwMDAwMDAwMDAQEBAQEBAQEBAQEBAQEDAwEAAAAAAAECAQEBAgIBAwMBAAEBAQABAgEBAQECAQMDAQAAAQEAAQIBAQECAQEDAwEBAQEBAAECAQECAQEBAwMBAQEBAQABAgECAQEBAQMDAQAAAAAAAQICAgEBAQEDAwEAAQEBAQECAQIBAQEBAwMBAAEBAQEBAgEBAgEBAQMDAQABAQEBAQIBAQECAQEDAwEAAQEAAgECAQEBAQIBAwMBAAEBAQABAgEBAQECAQMDAQAAAAAAAQIBAQECAgEDAwEBAQEBAQICAQEBAQEBAwMBAQEBAQEBAQEBAQEBAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
    {{-- extra design fixes css --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/fixes.css') }}">

    {{-- responsive profile profile section will --}}
    {{-- auto hide in mobile devices --}}
    @if(!Request::segment(1) == null)
        <style>
           @media(max-width : 1200px)
           {
               #home-card {
                    display: none;
                }
            }

        </style>
    @endif
    {{-- responsive profile end --}}


</head>
<div class="background"></div>
