<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="_token" content="{{ csrf_token() }}" />
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<script src="{{ mix('js/app.js') }}" type="text/javascript" charset="utf-8" ></script>
	<title>@yield('title')</title>
</head>
<body>