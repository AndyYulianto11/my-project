@extends('layouts.template')

@section('main')
<div class="main-content">
    @include('layouts.pages.top-nav')
    @yield('content')
    @include('layouts.pages.footer')
</div>

@endsection