@extends('_layouts.base')
@section('title', $_ENV['SITE_TITLE'])
@section('main')



  <div class="flex justify-center items-center h-full">
    <div class="text-center">

      <div class="font-bold text-2xl">IN THIS ARID WILDERNESS OF STEEL AND STONE</div>
      <div class="font-bold text-2xl">I LIFT UP MY VOICE SO THAT YOU MAY HEAR</div>


{{-- 

  @php
    $test_list = \VPHP\db::find('test_static', 'id IS NOT NULL');
  @endphp

  @foreach($test_list['data'] as $test)
    <p class="mb-3"><b>{{ $test['title'] }}</b> <span class="text-gray-400">({{ $test['subtitle'] }})</span></p>
  @endforeach

 --}}


    </div>
  </div>



@endsection