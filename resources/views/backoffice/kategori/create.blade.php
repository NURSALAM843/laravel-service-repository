@extends('layouts.app')


@section('title', $title)

@section('css')
    <!-- Kalau Ada Plugin Tambahan -->
@endsection

@section('style')

@endsection

@section('breadcrumb-title')
    <h3> Halaman {{ $title }}</h3>
@endsection

@section('content')

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">{{ $title }}</h3>
            <div class="block-options">
               
            </div>
        </div>
        <div class="block-content">
            <form class="theme-form needs-validation" novalidate="" method="POST" action="{{ route('backoffice.master-data.kategori.store') }}" enctype="multipart/form-data">
                @csrf
                @include('backoffice.kategori.form')
            </form>
        </div>
    </div>

@endsection

@section('script')

@endsection
