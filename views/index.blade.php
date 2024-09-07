@extends('_layouts.base')
@section('title', $_ENV['SITE_TITLE'])
@section('content')
    
  <h1 class="text-3xl font-bold mb-12 ">
    <a href="/hello/blade" class="underline hover:no-underline">Hello Blade</a>
  </h1>

  <h2 class="text-2xl mb-12">
    this is the best ever, we stan 
  </h2>

  <h3 class="text-xl mb-12">
    i kinda just love tailwind now. i love tachyons but tw does so much more! and looks badass with minimal effort.
  </h3>

  <h4 class="text-l mb-12">
    i know it's the right move for the future (more "corporate" and professional looking), and the process of setting it up isn't THAT hard. it will be easier to use on every project now that i have it set up here :)
  </h4>

{{-- 
@php
      $test_list = \VPHP\db::find('test_static', 'id IS NOT NULL');
@endphp
 --}}
  @foreach($test_list['data'] as $test)
    <p class="mb-3"><b>{{ $test['title'] }}</b> <span class="text-gray-400">({{ $test['subtitle'] }})</span></p>
  @endforeach


<br /><br />

copy/paste all the components from pines ui and call it a day ... 
SICK<br /><br />
check it out: <a href="https://devdojo.com/pines" class="text-red-500 underline hover:no-underline">devdojo.com/pines</a>
<br /><br />






<button type="button" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
    Button
</button>



<button type="button" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 rounded-md bg-neutral-950 hover:bg-neutral-900 focus:ring-2 focus:ring-offset-2 focus:ring-neutral-900 focus:shadow-outline focus:outline-none">
    Button
</button>


<br /><br />


<div x-data="{
    radioGroupSelectedValue: null,
    radioGroupOptions: [
        {
            title: 'Tailwind CSS',
            description: 'A utility-first CSS framework for rapid UI development.',
            value: 'tailwind'
        },
        {
            title: 'Alpine JS',
            description: 'A rugged and lightweight JavaScript framework.',
            value: 'alpine'
        },
        {
            title: 'Laravel',
            description: 'The PHP Framework for Web Artisans.',
            value: 'laravel'
        }
    ]
}" class="space-y-3">
    <template x-for="(option, index) in radioGroupOptions" :key="index">
        <label @click="radioGroupSelectedValue=option.value" class="flex items-start p-5 space-x-3 bg-white border rounded-md shadow-sm hover:bg-gray-50 border-neutral-200/70">
            <input type="radio" name="radio-group" :value="option.value" class="text-gray-900 translate-y-px focus:ring-gray-700" />
            <span class="relative flex flex-col text-left space-y-1.5 leading-none">
                <span x-text="option.title" class="font-semibold"></span>
                <span x-text="option.description" class="text-sm opacity-50"></span>
            </span>
        </label>
    </template>
</div>



<br /><br />


<div x-data="{ 
        activeAccordion: '', 
        setActiveAccordion(id) { 
            this.activeAccordion = (this.activeAccordion == id) ? '' : id 
        } 
    }" class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
        <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
            <span>What is Pines?</span>
            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class="p-4 pt-0 opacity-70">
                Pines is a UI library built for AlpineJS and TailwindCSS.
            </div>
        </div>
    </div>
    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
        <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
            <span>How do I install Pines?</span>
            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class="p-4 pt-0 opacity-70">
                Add AlpineJS and TailwindCSS to your page and then copy and paste any of these elements into your project.
            </div>
        </div>
    </div>
    <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
        <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
            <span>Can I use Pines with other libraries or frameworks?</span>
            <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div x-show="activeAccordion==id" x-collapse x-cloak>
            <div class="p-4 pt-0 opacity-70">
                Absolutely! Pines works with any other library or framework. Pines works especially well with the TALL stack.
            </div>
        </div>
    </div>
</div>



<br /><br />


@endsection
