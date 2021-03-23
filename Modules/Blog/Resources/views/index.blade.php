@extends('blog::layouts.master')

@section('content')
    <h1 class="fontColor">Hello World</h1>

    <p class="fontModuleColor">
        This view is loaded from module: {!! config('blog.name') !!}
    </p>
@endsection
