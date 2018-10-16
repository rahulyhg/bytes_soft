<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="canonical" href="{{ url('/') }}">
        <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">


        {!! Theme::header() !!}
    </head>
    <body>
        {!! Theme::partial('header') !!}

            {!! Theme::content() !!}
        </main>
            

        {!! Theme::partial('footer') !!}

        {!! Theme::footer() !!}
    </body>
</html>