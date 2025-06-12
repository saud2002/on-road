@extends('layouts.dashboard')
@section('content')
@include('components.dashboard.main.header')
@include('components.dashboard.garages.garages_sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        @include('components.dashboard.main.footer')
    </div>
</div>
@endsection