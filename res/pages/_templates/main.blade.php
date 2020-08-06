@extends('_templates/basic')
@push('head-styles')
    <link rel="stylesheet" href="{{ URL }}res/css/style.css">
@endpush
@section('body')
    <header></header>

    <main>
        <div class="container">@yield('main-content')</div>
    </main>
    
    <footer></footer>
@endsection