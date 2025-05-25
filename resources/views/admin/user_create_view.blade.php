@extends('layouts.dashboard')
@section('content')
@include('components.dashboard.main.header')
@include('components.dashboard.admin.admin_sidebar')
<div class="page-wrapper">
    <div class="content container-fluid">
        @include('admin.user_create_view')
        @include('components.dashboard.main.footer')
    </div>
</div>
@endsection