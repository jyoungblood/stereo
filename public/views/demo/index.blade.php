@extends('_layouts.demo')
@section('title', 'DEMO | ' . $_ENV['SITE_TITLE'])
@section('main')


@php

  $salutations = [];

  $salutations[] = [
    'IN THIS ARID WILDERNESS OF STEEL AND STONE',
    'I LIFT UP MY VOICE SO THAT YOU MAY HEAR'
  ];

  $salutations[] = [
    'TAKE A KNIFE',
    'AND DRAIN YOUR LIFE'
  ];

  $salutations[] = [
    'COME HERE BABY',
    'AND KISS ME LIKE YOU MEAN IT'
  ];

  $salutations[] = [
    'I AM THE SENTINEL',
    'I AM THE GUARDIAN'
  ];
  
  $salutation = $salutations[array_rand($salutations)];

@endphp


  <div class="flex justify-center items-center h-full">
    <div class="text-center">

      <div class="font-bold text-4xl mb-4">{{ $salutation[0] }}</div>
      <div class="font-bold text-4xl">{{ $salutation[1] }}</div>

    </div>
  </div>


@endsection