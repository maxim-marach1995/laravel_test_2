@extends('admin.layouts.app')

@section('title', 'Create')

@section('content')
    @push('styles')
        @livewireStyles
    @endpush

    @livewire('products')

    @push('scripts')
        @livewireScripts
    @endpush
@endsection
