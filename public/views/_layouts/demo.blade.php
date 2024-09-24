<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title')</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="@relative('/css/lib/tailwind.min.css')" />
    <link rel="stylesheet" href="@relative('/css/styles.css')" />
    @stack('styles')

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script> 
    <script src="@relative('/js/scripts.js')"></script>
    @stack('scripts')
    
  </head>

  
  <body class="bg-gray-100 p-3 text-gray-800">

{{-- bg-gray-500 p-3 --}}
{{-- bg-green-600 --}}
    <header class=" rounded flex justify-between items-center">
      <div>
        <a class=" @if ($current_home)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/demo">
{{-- 
          <svg class="w-8 h-8" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
            stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
            </path>
          </svg>        
           --}}

<svg class="h-6 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 298 274">
  <g fill="none" fill-rule="evenodd">
    <rect width="57" height="103" x="205.5" y="164.5" fill="#000" stroke="#000" rx="8"/>
    <rect width="57" height="103" x="35.5" y="164.5" fill="#000" stroke="#000" rx="8"/>
    <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="19" d="M13,246.877831 C13,204.339675 13,343.972343 13,156.559576 C13,-30.8531919 285,-30.8531919 285,156.559576 C285,343.972343 285,206.23212 285,246.877831"/>
  </g>
</svg>


        </a>
      </div>
      <div>
        &nbsp;&nbsp; <a class="text-black @if ($current_elements)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/elements">ELEMENTS</a> 
        &nbsp;&nbsp; <a class="text-black @if ($current_hello)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/hello/human">HELLO</a> 
        &nbsp;&nbsp; <a class="text-black @if ($current_json)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/json">JSON</a> 
        &nbsp;
      </div>
    </header>

    <main class="p-6">
    @yield('main')
    </main>

    <script src="https://instant.page/5.1.1" type="module" integrity="sha384-MWfCL6g1OTGsbSwfuMHc8+8J2u71/LA8dzlIN3ycajckxuZZmF+DNjdm7O6H3PSq"></script>
{{-- bg-gray-300 p-3  --}}
    <footer class="text-xs text-black">
      <div class="flex justify-between">
        <div>
          &copy; {{ date('Y') }} {{ $_ENV['SITE_TITLE'] }}
        </div>
        <div>
          <a class="text-black hover:text-green-600" href="https://stereotk.com">( ( IN STEREO ) )</a>
        </div>
      </div>
    </footer>

  </body>
</html>
