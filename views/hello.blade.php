@extends('_layouts.base')
@section('title', 'Hello ' . $name . ' - ' . $_ENV['SITE_TITLE'])
@section('content')

  <h1 class="text-3xl font-bold mb-4">Hello, {{ $name }}!</h1>
  <h4 class="text-gray-500 text-sm">(`{{ $name }}` is a url parameter)</h4>

{{-- 
@push('testpushstyles')
piss
@endpush
 --}}


@endsection