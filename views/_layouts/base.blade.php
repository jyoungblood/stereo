<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title') | {{ $_ENV['SITE_TITLE'] }}</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="@relative('/css/lib/tailwind.min.css')" />
    <link rel="stylesheet" href="@relative('/css/styles.css')" />
    @stack('styles')

<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
 
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/alpinejs" defer></script> 
    <!-- <script src="https://unpkg.com/htmx.org@1.7.0" integrity="sha384-EzBXYPt0/T6gxNp0nuPtLkmRpmDBbjg6WmCUZRLXBBwYYmwAUxzlSGej0ARHX0Bo" crossorigin="anonymous" defer></script> -->


    <script src="@relative('/js/scripts.js')"></script>
    @stack('scripts')

  </head>

  
  <body class="bg-gray-100 p-3 text-gray-800">

    <header class="bg-gray-500 p-3 flex justify-between items-center">
      <div>
        <a class="text-white @if ($current_home)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/"><pre class="whitespace-pre">¯\_(ツ)_/¯</pre></a>
      </div>
      <div>
        &nbsp;&nbsp; <a class="text-white @if ($current_blade)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/blade">BLADE</a> 
        &nbsp;&nbsp; <a class="text-white @if ($current_blade_template)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/blade-template">BLADE-TEMPLATE</a> 
        &nbsp;&nbsp; <a class="text-white @if ($current_hello)  @else opacity-60 @endif text-sm no-underline font-medium hover:opacity-100" href="/hello/human">HELLO</a> 
      </div>
    </header>

    <main class="p-6">
    {{-- @stack('testpushstyles') --}}
    {{-- @stack('testpushscripts') --}}
    @yield('content')
    </main>

    <script src="https://instant.page/5.1.1" type="module" integrity="sha384-MWfCL6g1OTGsbSwfuMHc8+8J2u71/LA8dzlIN3ycajckxuZZmF+DNjdm7O6H3PSq"></script>

    <footer class="bg-gray-300 p-3 text-xs text-right text-gray-500">
      &copy; {{ date('Y') }} {{ $_ENV['SITE_TITLE'] }}
    </footer>

  </body>
</html>
