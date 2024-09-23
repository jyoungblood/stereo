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

  
  <body>

    <header>
    </header>

    <main class="p-6">
    @yield('main')
    </main>

    <script src="https://instant.page/5.1.1" type="module" integrity="sha384-MWfCL6g1OTGsbSwfuMHc8+8J2u71/LA8dzlIN3ycajckxuZZmF+DNjdm7O6H3PSq"></script>

    <footer>
    </footer>

  </body>
</html>
