@extends('_layouts.base')
@section('title', 'HELLO | ' . $_ENV['SITE_TITLE'])
@section('main')



  <div class="flex justify-center items-center h-full">
    <div class="text-center">

      HELLO {{ $name }}

    </div>
  </div>



@endsection