@extends('_layouts.base')
@section('title', $_ENV['SITE_TITLE'])
@section('main')



  <div class="flex justify-center items-center h-full">
    <div class="text-center">

      <a href="/demo" class="opacity-30 hover:opacity-80">
        <svg class="h-30 mb-8 w-auto mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298 274">
          <g fill="none" fill-rule="evenodd">
            <rect width="57" height="103" x="205.5" y="164.5" fill="#000" stroke="#000" rx="8"/>
            <rect width="57" height="103" x="35.5" y="164.5" fill="#000" stroke="#000" rx="8"/>
            <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="19" d="M13,246.877831 C13,204.339675 13,343.972343 13,156.559576 C13,-30.8531919 285,-30.8531919 285,156.559576 C285,343.972343 285,206.23212 285,246.877831"/>
          </g>
        </svg>
      </a>

      <a class="text-black opacity-30 hover:opacity-80 font-semibold" href="https://stereotk.com">( ( IN STEREO ) ) <span class="block text-xs mt-1">WHERE AVAILABLE</span></a>

    </div>
  </div>



@endsection