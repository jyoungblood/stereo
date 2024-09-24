@extends('_layouts.demo')
@section('title', 'DEMO | ' . $_ENV['SITE_TITLE'])
@section('main')


@php

  $salutations = [
    [ 'I DONT CARE ABOUT MONEY', 'SO YEAH I SPEND IT QUICK' ],
    [ 'ARIZONA ICED TEA', 'EMOTIONS MAKE ME WEAK' ],
    [ 'GUCCI ON MY FEET', 'SADNESS IN MY SLEEP' ],
    [ 'DIAMONDS ON MY WRIST', 'FEELINGS I DISMISS' ],
    [ 'LOUIS V BACKPACK', 'MEMORIES ATTACK' ],
    [ 'VERSACE SHADES ON', 'REALITY IS GONE' ],
    [ 'LEAN IN MY CUP', 'DREAMS ARE WAKING UP' ],
    [ 'POLO SPORT JACKET', 'EMOTIONS I CANT HACK IT' ],
    [ 'BAPE HOODIE ZIPPED', 'TEARS HAVE NEVER DRIPPED' ],
    [ 'NIKE AIR MAX SWOOSH', 'FEELINGS THAT I PUSH' ],
    [ 'SUPREME BOX LOGO', 'PAIN I NEVER SHOW' ],
    [ 'ICED OUT CHAIN GLOW', 'HEART REMAINS HOLLOW' ],
    [ 'FENDI BELT BUCKLE', 'EMOTIONS I DONT JUGGLE' ],


  ];
  $salutation = $salutations[array_rand($salutations)];




    // [ 'IN THIS ARID WILDERNESS OF STEEL AND STONE', 'I LIFT UP MY VOICE SO THAT YOU MAY HEAR' ],
    // [ 'I AM THE SENTINEL', 'I AM THE GUARDIAN' ],
    // [ 'FROM THE SHADOWS I EMERGE', 'INTO THE LIGHT I BRING CHANGE' ],
    // [ 'THROUGH FIRE AND STORM', 'I FORGE MY PATH' ],
    // [ 'IN THE FACE OF ADVERSITY', 'I STAND UNBROKEN' ],
    // [ 'WHISPERS OF THE PAST', 'ECHO IN MY FOOTSTEPS' ],
    // [ 'BENEATH THE VEIL OF NIGHT', 'I AM THE UNSEEN FORCE' ],
    // [ 'AGAINST THE TIDE OF CHAOS', 'I AM THE BASTION OF ORDER' ],
    // [ 'IN THE CRUCIBLE OF DESTINY', 'I AM TEMPERED' ],
    // [ 'THROUGH THE MISTS OF TIME', 'I CARVE MY LEGEND' ],
    // [ 'AMIDST THE ROAR OF BATTLE', 'MY RESOLVE IS UNSHAKEN' ],
    // [ 'FROM THE ASHES OF DEFEAT', 'I RISE ANEW' ],
    // [ 'IN THE DANCE OF SHADOWS', 'I LEAD THE WAY' ],
    // [ 'AGAINST THE WINDS OF FATE', 'I CHART MY COURSE' ]


@endphp


  <div class="flex justify-center items-center h-full">
    <div class="text-center">

      <div class="font-bold text-4xl mb-4">{{ $salutation[0] }}</div>
      <div class="font-bold text-4xl mb-8">{{ $salutation[1] }}</div>

      <div class="bg-gray-200 text-gray-800 text-xs p-2 text-left leading-relaxed">
        <b>check out the source files for this section:</b><br />
        ./app/routes/demo.php<br />
        ./public/views/_layouts/demo.blade.php<br />
        ./public/views/demo/*
      </div>

    </div>
  </div>


@endsection