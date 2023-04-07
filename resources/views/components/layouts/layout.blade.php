<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.scss','resources/js/app.js','resources/css/style.css'])
    <title>FidePuntos- {{ $title ?? ''}}</title>
    <link rel="icon" href="{{URL::asset('/images/logo.png')}}">
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-900">

    <x-layouts.nav/>

    @if(session('guardarCanje')!= null)
    <div class="alert alert-success">{{session('guardarCanje')}}</div>
    @endif

    {{$slot}}




    <x-layouts.footer/>
</body>
</html>
