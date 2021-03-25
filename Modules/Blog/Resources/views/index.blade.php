<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Blog</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        <link rel="stylesheet" href="{{Module::asset('blog:css/blog-style.css')}}">

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/blog.css') }}"> --}}

    </head>
    <body>
        <h1 class="fontColor">Hello World</h1>

    <p class="fontModuleColor">
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
    <div id="app">
    	<App/>
    </div>


        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/blog.js') }}"></script>
    </body>
</html>



