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

    <script src="@relative('/js/lib/alpine.collapse.min.js')" defer></script>
    <script src="@relative('/js/lib/alpine.min.js')" defer></script>
    <script src="@relative('/js/scripts.js')"></script>
    <script src="@relative('/js/lib/instant.page.min.js')" type="module" defer></script>
    @stack('scripts')
    
  </head>

  
  <body>

    <header>
    </header>

    <main class="p-6">
    @yield('main')
    </main>

    <footer>
    </footer>

  </body>
</html>
