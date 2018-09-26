<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name','Laravel Firebase CRUD')}}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="GWAXABa4jcIK2IgMlxy0929x6UEvVl0YoylZpKwr">

    <!-- Styles -->
    <link href="http://demo.laravelcode.com/css/app.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <style type="text/css">
    .desabled {
        pointer-events: none;
    }
    </style>
</head>
<body>
       @yield('content')
</body>