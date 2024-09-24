@extends('_layouts.demo')
@section('title', 'HELLO | ' . $_ENV['SITE_TITLE'])
@section('main')



  <div class="flex justify-center items-center h-full">
    <div class="text-center">

      just came to say HELLO {{ $name }}

    </div>
  </div>



@endsection