@extends('_layouts.base')
@section('title', 'DEMO | ' . $_ENV['SITE_TITLE'])
@section('main')

<div class="container mx-auto px-4">
  <div class="py-8">
    <div class="flex items-center justify-between">
      <div>
        <div class="text-sm text-gray-500">
          0.6.1
        </div>
        <h2 class="text-3xl font-bold">
          D A R K W A V E
        </h2>
      </div>
      <div>
        <form action="/" method="get" autocomplete="off">
          <div class="relative">
            <input type="text" name="k" value="{{ $_GET['k'] }}" class="pl-10 pr-4 py-2 border rounded-md" placeholder="Search something…">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
      <div class="bg-white shadow rounded-lg p-6">
        <p class="text-lg text-gray-600 italic mb-4">Here's a quick demo of some things you can do with this tool kit. If you know what you're doing, feel free to delete everything and start from scratch. If not, allow us to introduce some of the features of Darkwave:</p>
        <p class="mb-4">DW is a "batteries-included" tool kit for quickly developing data-driven web applications. It's a pragmatic configuration of helpful libraries, light application boilerplate, and a turn-key solution for user authentication and management. It also establishes sensible conventions you can use to quickly build custom CRUD apps or SaaS projects to suit your individual needs.</p>
        <h3 class="text-xl font-semibold mb-2">What's included?</h3>
        <ul class="list-disc pl-5 space-y-2">
          <li><a href="https://slimframework.com/" class="text-blue-600 hover:underline" target="_blank">Slim</a> <span class="text-gray-500">- base PHP framework</span></li>
          <li><a href="https://slime.technology/" class="text-blue-600 hover:underline" target="_blank">Slime</a> <span class="text-gray-500">- Slim application scaffolding and rendering helpers</span></li>
          <li><a href="https://handlebarsjs.com/" class="text-blue-600 hover:underline" target="_blank">Handlebars</a> <span class="text-gray-500">- template rendering via <a href="https://github.com/zordius/lightncandy" class="text-blue-600 hover:underline" target="_blank">LightnCandy</a></span></li>
          <li><a href="https://getbootstrap.com/" class="text-blue-600 hover:underline" target="_blank">Bootstrap</a> <span class="text-gray-500">- base UI framework</span></li>
          <li><a href="https://tabler.io/" class="text-blue-600 hover:underline" target="_blank">Tabler</a> <span class="text-gray-500">- Bootstrap-based UI kit</span></li>
          <li><a href="https://alpinejs.dev/" class="text-blue-600 hover:underline" target="_blank">Alpine.js</a> <span class="text-gray-500">- JS utility framework</span></li>
          <li><a href="https://htmx.org//" class="text-blue-600 hover:underline" target="_blank">htmx</a> <span class="text-gray-500">- utilities for AJAX, CSS transitions, websockets, SSE</span></li>
          <li><a href="https://github.com/jyoungblood/dw-utilities-php" class="text-blue-600 hover:underline" target="_blank">DW Utilities (PHP)</a> <span class="text-gray-500">- back-end utility functions for authentication, image conversion, etc.</span></li>
          <li><a href="https://github.com/jyoungblood/dw-utilities-js" class="text-blue-600 hover:underline" target="_blank">DW Utilities (JS)</a> <span class="text-gray-500">- front-end utility functions for authentication, modals, form handlers, etc.</span></li>
          <li><a href="https://github.com/gumlet/php-image-resize" class="text-blue-600 hover:underline" target="_blank">php-image-resize</a> <span class="text-gray-500">- GD-based image manipulation library</span></li>
          <li><a href="https://github.com/vlucas/phpdotenv" class="text-blue-600 hover:underline" target="_blank">phpdotenv</a> <span class="text-gray-500">- automatic .env variable loading</span></li>
          <li><a href="https://github.com/RobDWaller/psr-jwt" class="text-blue-600 hover:underline" target="_blank">psr-jwt</a> <span class="text-gray-500">- PSR-compliant JWT middleware</span></li>
        </ul>
        <h3 class="text-xl font-semibold mt-4 mb-2">Optional included libraries:</h3>
        <ul class="list-disc pl-5 space-y-2">
          <li><a href="https://www.dropzone.dev/" class="text-blue-600 hover:underline" target="_blank">Dropzone</a> <span class="text-gray-500">- file uploader</span></li>
          <li><a href="https://litepicker.com/" class="text-blue-600 hover:underline" target="_blank">Litepicker</a> <span class="text-gray-500">- date picker</span></li>
          <li><a href="https://listjs.com/" class="text-blue-600 hover:underline" target="_blank">List.js</a> <span class="text-gray-500">- table sorter</span></li>
          <li><a href="https://github.com/tinymce/tinymce" class="text-blue-600 hover:underline" target="_blank">TinyMCE</a> <span class="text-gray-500">- WYSIWYG text editor</span></li>
        </ul>
        <h3 class="text-xl font-semibold mt-4 mb-2">Boilerplate functionality!</h3>
        <ul class="list-disc pl-5 space-y-2">
          <li>Full authentication process - <a href="/login" class="text-blue-600 hover:underline" target="_blank">login</a>, <a href="/register" class="text-blue-600 hover:underline" target="_blank">register</a>, <a href="/forgot" class="text-blue-600 hover:underline" target="_blank">forgot pw</a></li>
          <li>Sample blank application starter <span class="text-gray-500">(you're looking at it)</span></li>
          <li><a href="/users" class="text-blue-600 hover:underline" target="_blank">User management</a> system which also provides full-stack examples of how to use DW for CRUD operations, form handling, photo uploading, and more</li>
        </ul>
      </div>
    </div>
    
    <div>
      <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-xl font-semibold mb-4">Resources</h3>
        <div class="grid grid-cols-3 gap-4">
          <div>
            <h4 class="font-semibold mb-2">DW / Core</h4>
            <a href="https://github.com/jyoungblood/darkwave" class="text-blue-600 hover:underline block" target="_blank">DW source</a>
            <a href="https://darkwave.ltd/docs" class="text-blue-600 hover:underline block" target="_blank">DW docs</a>
            <a href="https://darkwave.ltd/guide" class="text-blue-600 hover:underline block" target="_blank">DW field guide</a>
            <a href="https://www.slimframework.com/docs/v4/" class="text-blue-600 hover:underline block" target="_blank">Slim 4 docs</a>
            <a href="https://blog.programster.org/slim-4-cheatsheet" class="text-blue-600 hover:underline block" target="_blank">Slim 4 cheatsheet</a>
            <a href="https://github.com/jyoungblood/slime-render" class="text-blue-600 hover:underline block" target="_blank">SLIME Render</a>
            <a href="https://github.com/jyoungblood/dbkit" class="text-blue-600 hover:underline block" target="_blank">VPHP - DB Kit</a>
            <a href="https://github.com/jyoungblood/x-utilities" class="text-blue-600 hover:underline block" target="_blank">VPHP - X-Utilities</a>
            <a href="https://github.com/jyoungblood/http-request" class="text-blue-600 hover:underline block" target="_blank">VPHP - HTTP Request</a>
            <a href="https://zordius.github.io/HandlebarsCookbook/" class="text-blue-600 hover:underline block" target="_blank">HBS Cookbook</a>
            <a href="https://gist.github.com/nessthehero/4ea763350fc93100f002" class="text-blue-600 hover:underline block" target="_blank">HBS Cheatsheet</a>
          </div>
          <div>
            <h4 class="font-semibold mb-2">Bootstrap / UI</h4>
            <a href="https://www.wpkube.com/html5-cheat-sheet/" class="text-blue-600 hover:underline block" target="_blank">HTML5 Cheatsheet</a>
            <a href="https://getbootstrap.com/docs" class="text-blue-600 hover:underline block" target="_blank">Bootstrap docs</a>
            <a href="https://bootstrap-cheatsheet.themeselection.com/" class="text-blue-600 hover:underline block" target="_blank">Bootstrap cheatsheet</a>
            <a href="https://github.com/awesome-bootstrap-org/awesome-bootstrap" class="text-blue-600 hover:underline block" target="_blank">Awesome Bootstrap</a>
            <a href="https://tabler.io/docs/" class="text-blue-600 hover:underline block" target="_blank">Tabler docs</a>
            <a href="https://preview.tabler.io/" class="text-blue-600 hover:underline block" target="_blank">Tabler components</a>
            <h4 class="font-semibold mt-4 mb-2">Colors</h4>
            <a href="https://reasonable.work/colors/" class="text-blue-600 hover:underline block" target="_blank">Reasonable Colors</a>
            <a href="https://yeun.github.io/open-color/" class="text-blue-600 hover:underline block" target="_blank">Open Color</a>
          </div>
          <div>
            <h4 class="font-semibold mb-2">JS libraries</h4>
            <a href="https://alpinejs.dev/start-here" class="text-blue-600 hover:underline block" target="_blank">Alpine.js docs</a>
            <a href="https://www.alpinetoolbox.com/" class="text-blue-600 hover:underline block" target="_blank">Alpine Toolbox</a>
            <a href="https://listjs.com/" class="text-blue-600 hover:underline block" target="_blank">List.js docs</a>
            <a href="https://docs.dropzone.dev/" class="text-blue-600 hover:underline block" target="_blank">Dropzone docs</a>
            <a href="https://litepicker.com/" class="text-blue-600 hover:underline block" target="_blank">Litepicker docs</a>
            <a href="https://www.tiny.cloud/docs/tinymce/6/" class="text-blue-600 hover:underline block" target="_blank">TinyMCE 6 docs</a>
            <h4 class="font-semibold mt-4 mb-2">Icons</h4>
            <a href="https://icons.getbootstrap.com/" class="text-blue-600 hover:underline block" target="_blank">Bootstrap Icons</a>
            <a href="https://tabler-icons.io/" class="text-blue-600 hover:underline block" target="_blank">Tabler Icons</a>
            <a href="https://react-icons.github.io/react-icons/" class="text-blue-600 hover:underline block" target="_blank">React Icons</a>
          </div>
        </div>
        <h3 class="text-xl font-semibold mt-4 mb-2">Basic UI Components</h3>
        <div class="flex space-x-2">
          <a href="#form-elements" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Form Elements</a>
          <a href="#buttons" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buttons</a>
          <a href="#colors" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Colors</a>
          <a href="#modals" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modals</a>
          <a href="#other-dialogs" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Other Dialogs</a>
          <a href="#typography" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Typography</a>
          <a href="#tables" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tables</a>
          <a href="#misc-elements" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Misc Elements</a>
        </div>
        <h3 class="text-xl font-semibold mt-4 mb-2">Additional Resources</h3>
        <ul class="list-disc pl-5 space-y-2">
          <li><strong>Subnav</strong> <span class="text-gray-500">- When using the default base template and components, a subnav can be easily added using a simple PHP array. See the <code>/demo</code> section of the <a href="https://github.com/jyoungblood/darkwave/blob/master/controllers/index.php" class="text-blue-600 hover:underline" target="_blank">index controller</a> and the <code>subnav</code> section of the <a href="https://github.com/jyoungblood/darkwave/blob/master/templates/_layouts/base.html" class="text-blue-600 hover:underline" target="_blank">base template</a>.</span></li>
          <li><strong>HBS helpers</strong> <span class="text-gray-500">- Slime-render provides a couple custom HBS helpers and makes it easy to add your own. See the <code>initialize_handlebars_helpers()</code> section of the <a href="https://github.com/jyoungblood/slime-render/blob/master/src/render.php" class="text-blue-600 hover:underline" target="_blank">slime-render</a> class for an example. The <a href="https://zordius.github.io/HandlebarsCookbook/" class="text-blue-600 hover:underline" target="_blank">HBS Cookbook</a> provides more information for building <a href="https://zordius.github.io/HandlebarsCookbook/0021-customhelper.html" class="text-blue-600 hover:underline" target="_blank">simple</a> and <a href="https://zordius.github.io/HandlebarsCookbook/0022-blockhelper.html" class="text-blue-600 hover:underline" target="_blank">block</a> custom helpers.</span></li>
          <li><strong>More BS components</strong> <span class="text-gray-500">- There are <em>A LOT</em> of Bootstrap components out there. The official <a href="https://getbootstrap.com/docs/5.3/examples/" class="text-blue-600 hover:underline" target="_blank">BS examples</a> and <a href="https://getbootstrap.com/docs/5.3/examples/cheatsheet/" class="text-blue-600 hover:underline" target="_blank">BS cheatsheet</a> are good places to start.</span></li>
          <li><strong>Customizing Tabler</strong> <span class="text-gray-500">- Tabler is designed to be easily customized with css variables added to the <code>:root</code> element. See the <a href="https://tabler.io/docs/getting-started/customize" class="text-blue-600 hover:underline" target="_blank">Tabler docs</a> for a customization example, and <a href="https://github.com/tabler/tabler/blob/dev/dist/css/tabler.css" class="text-blue-600 hover:underline" target="_blank">tabler.css</a> for the default variable names and values.</span></li>
        </ul>
      </div>
    </div>
  </div>
  
  <a class="anchor" name="form-elements"></a>
  <div class="mt-6">
    <div class="bg-white shadow rounded-lg p-6">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-semibold">Form Elements</h3>
        <div>
          <a href="https://getbootstrap.com/docs/5.3/forms/overview" class="text-blue-600 hover:underline mr-2" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </a>
          <a href="https://tabler.io/docs/forms/form-elements" class="text-blue-600 hover:underline" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <div class="mb-4">
            <label for="example-text-input" class="block text-sm font-medium text-gray-700">Text</label>
            <input type="text" id="example-text-input" name="example-text-input" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Input placeholder">
          </div>
          <div class="mb-4">
            <label for="example-password-input" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="example-password-input" name="example-password-input" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Input placeholder">
          </div>
          <div class="mb-4">
            <label for="example-disabled-input" class="block text-sm font-medium text-gray-700">Disabled</label>
            <input type="text" id="example-disabled-input" name="example-disabled-input" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100 cursor-not-allowed" placeholder="Disabled..." value="Moon rock, it's from Mars" disabled>
          </div>
          <div class="mb-4">
            <label for="example-readonly-input" class="block text-sm font-medium text-gray-700">Readonly</label>
            <input type="text" id="example-readonly-input" name="example-readonly-input" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm bg-gray-100" placeholder="Readonly..." value="Silver teeth, like I'm Jaws" readonly>
          </div>
          <div class="mb-4">
            <label for="example-required-input" class="block text-sm font-medium text-gray-700">Required</label>
            <input type="text" id="example-required-input" name="example-required-input" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Required...">
          </div>
          <div class="mb-4">
            <label for="example-textarea-input" class="block text-sm font-medium text-gray-700">Textarea <span class="text-gray-500">56/100</span></label>
            <textarea id="example-textarea-input" name="example-textarea-input" rows="6" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Content..">Golden ticket, golden star, black heart like Jafar. Night call, Ecco park, rain falls from my charms. Trash star, beat the odds. Night crawl, for my job. Moon rock it's from Mars, silver teeth, like I'm Jaws.</textarea>
          </div>
          <div class="mb-4">
            <label for="example-select" class="block text-sm font-medium text-gray-700">Select</label>
            <select id="example-select" name="example-select" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="example-select-multiple" class="block text-sm font-medium text-gray-700">Select multiple</label>
            <select id="example-select-multiple" name="example-select-multiple" multiple class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div>
          <div class="mb-4">
            <label for="example-input-group" class="block text-sm font-medium text-gray-700">Input group</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-input-group" name="example-input-group" class="block w-full pr-10 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search for…">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <button type="button" class="bg-white rounded-md p-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  <span class="sr-only">Go!</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="example-icon-input" class="block text-sm font-medium text-gray-700">Icon input</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-icon-input" name="example-icon-input" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search…">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="example-loader-input" class="block text-sm font-medium text-gray-700">Loader input</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-loader-input" name="example-loader-input" class="block w-full pr-10 pl-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Loading…">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <div class="animate-spin rounded-full h-5 w-5 border-t-2 border-b-2 border-gray-400"></div>
              </div>
            </div>
            <div class="mt-1 relative rounded-md shadow-sm">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <div class="animate-spin rounded-full h-5 w-5 border-t-2 border-b-2 border-gray-400"></div>
              </div>
              <input type="text" id="example-loader-input-2" name="example-loader-input-2" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Loading…">
            </div>
          </div>
          <div class="mb-4">
            <label for="example-rounded-input" class="block text-sm font-medium text-gray-700">Form control rounded</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-rounded-input" name="example-rounded-input" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Search…">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="example-input-group-2" class="block text-sm font-medium text-gray-700">Input group</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm">@</span>
              </div>
              <input type="text" id="example-input-group-2" name="example-input-group-2" class="block w-full pl-7 pr-12 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="username" autocomplete="off">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <span class="text-gray-500 sm:text-sm">.domain.com</span>
              </div>
            </div>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-input-group-3" name="example-input-group-3" class="block w-full pr-12 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="subdomain" autocomplete="off">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm">.domain.com</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="example-input-prepended" class="block text-sm font-medium text-gray-700">Input with prepended text</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm">https://domain.com/users/</span>
              </div>
              <input type="text" id="example-input-prepended" name="example-input-prepended" class="block w-full pl-28 pr-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="" autocomplete="off">
            </div>
          </div>
          <div class="mb-4">
            <label for="example-input-appended" class="block text-sm font-medium text-gray-700">Input with appended text</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-input-appended" name="example-input-appended" class="block w-full pr-12 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" value="" autocomplete="off">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <span class="text-gray-500 sm:text-sm">.domain.com</span>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="example-input-appended-icons" class="block text-sm font-medium text-gray-700">Input with appended icon links</label>
            <div class="mt-1 relative rounded-md shadow-sm">
              <input type="text" id="example-input-appended-icons" name="example-input-appended-icons" class="block w-full pr-16 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" autocomplete="off">
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <a href="#" class="text-gray-400 hover:text-gray-500 mr-2" data-bs-toggle="tooltip" aria-label="Clear search" data-bs-original-title="Clear search">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500 mr-2" data-bs-toggle="tooltip" aria-label="Search settings" data-bs-original-title="Search settings">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M5 4a2 2 0 01-2-2v14a2 2 0 012-2h10a2 2 0 012 2V4a2 2 0 01-2-2H5zm3 6a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H8zm5-6a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V4a2 2 0 00-2-2h-2z" />
                  </svg>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500" data-bs-toggle="tooltip" aria-label="Add notification" data-bs-original-title="Add notification">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


              <div class="col-xl-4">
                <div class="row gx-4">
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label">Color Input</label>
                      <div class="row g-2">
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="dark" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-dark rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput form-colorinput-light">
                            <input name="color-rounded" type="radio" value="white" class="form-colorinput-input" checked="">
                            <span class="form-colorinput-color bg-white rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="blue" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-blue rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="azure" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-azure rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="indigo" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-indigo rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="purple" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-purple rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="pink" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-pink rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="red" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-red rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="orange" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-orange rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="yellow" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-yellow rounded-circle"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color-rounded" type="radio" value="lime" class="form-colorinput-input">
                            <span class="form-colorinput-color bg-lime rounded-circle"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Color picker</label>
                      <input type="color" class="form-control form-control-color" value="#206bc4" title="Choose your color">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Validation States </label>
                      <input type="text" class="form-control is-valid mb-2" placeholder="Valid State..">
                      <input type="text" class="form-control is-invalid" placeholder="Invalid State..">
                      <div class="invalid-feedback">Invalid feedback</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Validation States (alt)</label>
                      <input type="text" class="form-control is-valid is-valid-lite mb-2" placeholder="Valid State..">
                      <input type="text" class="form-control is-invalid is-invalid-lite" placeholder="Invalid State..">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Form fieldset</label>
                      <fieldset class="form-fieldset">
                        <div class="mb-3">
                          <label class="form-label required">Full name</label>
                          <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Company</label>
                          <input type="text" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Email</label>
                          <input type="email" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Phone number</label>
                          <input type="tel" class="form-control" autocomplete="off">
                        </div>
                        <label class="form-check">
                          <input type="checkbox" class="form-check-input">
                          <span class="form-check-label required">I agree to the Terms &amp; Conditions</span>
                        </label>
                      </fieldset>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label">Simple selectgroup</label>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked="">
                          <span class="form-selectgroup-label">HTML</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">CSS</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">PHP</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">JavaScript</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Icon input</label>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="sun" class="form-selectgroup-input" checked="">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                              <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                              </path>
                            </svg>
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="moon" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                              </path>
                            </svg>
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="cloud-rain" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud-rain -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7"></path>
                              <path d="M11 13v2m0 3v2m4 -5v2m0 3v2"></path>
                            </svg>
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="cloud" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/cloud -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M6.657 18c-2.572 0 -4.657 -2.007 -4.657 -4.483c0 -2.475 2.085 -4.482 4.657 -4.482c.393 -1.762 1.794 -3.2 3.675 -3.773c1.88 -.572 3.956 -.193 5.444 1c1.488 1.19 2.162 3.007 1.77 4.769h.99c1.913 0 3.464 1.56 3.464 3.486c0 1.927 -1.551 3.487 -3.465 3.487h-11.878">
                              </path>
                            </svg>
                          </span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="Other" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">Other</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Selectgroup with icons and text</label>
                      <div class="form-selectgroup">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="home" class="form-selectgroup-input" checked="">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                            </svg>
                            Home</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="user" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            </svg>
                            User</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="circle" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/circle -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            </svg>
                            Circle</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="radio" name="icons" value="square" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">
                            <!-- Download SVG icon from http://tabler-icons.io/i/square -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-1" width="24" height="24"
                              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                              stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                              </path>
                            </svg>
                            Square</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Different style</label>
                      <div class="form-selectgroup form-selectgroup-pills">
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="HTML" class="form-selectgroup-input" checked="">
                          <span class="form-selectgroup-label">HTML</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="CSS" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">CSS</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="PHP" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">PHP</span>
                        </label>
                        <label class="form-selectgroup-item">
                          <input type="checkbox" name="name" value="JavaScript" class="form-selectgroup-input">
                          <span class="form-selectgroup-label">JavaScript</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Buttons group</label>
                      <div class="btn-group w-100" role="group">
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-1" autocomplete="off" checked="">
                        <label for="btn-radio-basic-1" type="button" class="btn">1 min</label>
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-2" autocomplete="off">
                        <label for="btn-radio-basic-2" type="button" class="btn">5 min</label>
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-3" autocomplete="off">
                        <label for="btn-radio-basic-3" type="button" class="btn">10 min</label>
                        <input type="radio" class="btn-check" name="btn-radio-basic" id="btn-radio-basic-4" autocomplete="off">
                        <label for="btn-radio-basic-4" type="button" class="btn">30 min</label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Toolbar</label>
                      <div class="btn-group w-100" role="group">
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-1" autocomplete="off" checked="">
                        <label for="btn-radio-toolbar-1" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/bold -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z"></path>
                            <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7"></path>
                          </svg>
                        </label>
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-2" autocomplete="off">
                        <label for="btn-radio-toolbar-2" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/italic -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 5l6 0"></path>
                            <path d="M7 19l6 0"></path>
                            <path d="M14 5l-4 14"></path>
                          </svg>
                        </label>
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-3" autocomplete="off">
                        <label for="btn-radio-toolbar-3" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/underline -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 5v5a5 5 0 0 0 10 0v-5"></path>
                            <path d="M5 19h14"></path>
                          </svg>
                        </label>
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-4" autocomplete="off">
                        <label for="btn-radio-toolbar-4" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/copy -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z">
                            </path>
                            <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2"></path>
                          </svg>
                        </label>
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-5" autocomplete="off">
                        <label for="btn-radio-toolbar-5" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/scissors -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M6 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M8.6 8.6l10.4 10.4"></path>
                            <path d="M8.6 15.4l10.4 -10.4"></path>
                          </svg>
                        </label>
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-6" autocomplete="off">
                        <label for="btn-radio-toolbar-6" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/file-plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M12 11l0 6"></path>
                            <path d="M9 14l6 0"></path>
                          </svg>
                        </label>
                        <input type="radio" class="btn-check" name="btn-radio-toolbar" id="btn-radio-toolbar-7" autocomplete="off">
                        <label for="btn-radio-toolbar-7" class="btn btn-icon">
                          <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <path d="M9 14l6 0"></path>
                          </svg>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Range input</label>
                      <input type="range" class="form-range" value="40" min="0" max="100" step="10">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Progress</label>
                      <div class="progress mb-2">
                        <div class="progress-bar" style="width: 38%" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" aria-label="38% Complete">
                          <span class="visually-hidden">38% Complete</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-indeterminate bg-green"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="row gx-4">
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <div class="form-label">Radios</div>
                      <div>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="radios" checked="">
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" name="radios">
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="radio" disabled="">
                          <span class="form-check-label">Option 3 (disabled)</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Inline Radios</div>
                      <div>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radios-inline" checked="">
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radios-inline">
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radios-inline" disabled="">
                          <span class="form-check-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Radio Buttons</div>
                      <div class="bs-component mb-3">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
                          <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked="">
                          <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked="">
                          <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Checkboxes</div>
                      <div>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label">Checkbox input</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" disabled="">
                          <span class="form-check-label">Disabled checkbox input</span>
                        </label>
                        <label class="form-check">
                          <input class="form-check-input" type="checkbox" checked="">
                          <span class="form-check-label">Checked checkbox input</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Inline Checkboxes</div>
                      <div>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label">Option 1</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" disabled="">
                          <span class="form-check-label">Option 2</span>
                        </label>
                        <label class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" checked="">
                          <span class="form-check-label">Option 3</span>
                        </label>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Button Checkboxes</div>
                      <div>
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                          <input type="checkbox" class="btn-check" id="btncheck1" checked="" autocomplete="off">
                          <label class="btn btn-primary" for="btncheck1">Checkbox 1</label>
                          <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                          <label class="btn btn-primary" for="btncheck2">Checkbox 2</label>
                          <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                          <label class="btn btn-primary" for="btncheck3">Checkbox 3</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Checkboxes with description</label>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">
                          Default checkbox
                        </span>
                        <span class="form-check-description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </span>
                      </label>
                      <label class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">
                          Longer checkbox item that wraps on to two separate lines
                        </span>
                        <span class="form-check-description">
                          Ab alias aut, consequuntur cumque esse eveniet incidunt laborum minus molestiae.
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-12">
                    <div class="mb-3">
                      <div class="form-label">Toggle switches</div>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" checked="">
                        <span class="form-check-label">Option 1</span>
                      </label>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 2</span>
                      </label>
                      <label class="form-check form-switch">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-label">Option 3</span>
                      </label>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Toggle switches (alt)</label>
                      <div class="divide-y">
                        <div>
                          <label class="row">
                            <span class="col">Option 1</span>
                            <span class="col-auto">
                              <label class="form-check form-check-single form-switch">
                                <input class="form-check-input" type="checkbox" checked="">
                              </label>
                            </span>
                          </label>
                        </div>
                        <div>
                          <label class="row">
                            <span class="col">Option 2</span>
                            <span class="col-auto">
                              <label class="form-check form-check-single form-switch">
                                <input class="form-check-input" type="checkbox">
                              </label>
                            </span>
                          </label>
                        </div>
                        <div>
                          <label class="row">
                            <span class="col">Option 3</span>
                            <span class="col-auto">
                              <label class="form-check form-check-single form-switch">
                                <input class="form-check-input" type="checkbox" checked="">
                              </label>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-label">Custom File Input</div>
                      <input type="file" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Date of birth</label>
                      <div class="row g-2">
                        <div class="col-5">
                          <select name="user[month]" class="form-select">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option selected="selected" value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                          </select>
                        </div>
                        <div class="col-3">
                          <select name="user[day]" class="form-select">
                            <option value="">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20" selected="">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                          </select>
                        </div>
                        <div class="col-4">
                          <select name="user[year]" class="form-select">
                            <option value="">Year</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989" selected="">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1945">1945</option>
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                            <option value="1922">1922</option>
                            <option value="1921">1921</option>
                            <option value="1920">1920</option>
                            <option value="1919">1919</option>
                            <option value="1918">1918</option>
                            <option value="1917">1917</option>
                            <option value="1916">1916</option>
                            <option value="1915">1915</option>
                            <option value="1914">1914</option>
                            <option value="1913">1913</option>
                            <option value="1912">1912</option>
                            <option value="1911">1911</option>
                            <option value="1910">1910</option>
                            <option value="1909">1909</option>
                            <option value="1908">1908</option>
                            <option value="1907">1907</option>
                            <option value="1906">1906</option>
                            <option value="1905">1905</option>
                            <option value="1904">1904</option>
                            <option value="1903">1903</option>
                            <option value="1902">1902</option>
                            <option value="1901">1901</option>
                            <option value="1900">1900</option>
                            <option value="1899">1899</option>
                            <option value="1898">1898</option>
                            <option value="1897">1897</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Datepicker</label>
                      <input class="form-control mb-2" placeholder="Select a date" id="datepicker-default" />
                    </div>
                    <script>
                      document.addEventListener("DOMContentLoaded", function () {
                        window.Litepicker && (new Litepicker({
                          element: document.getElementById('datepicker-default'),
                          buttonText: {
                            previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                            nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                          },
                        }));
                      });
                    </script>
                    <div class="mb-3">
                      <label class="form-label">Text mask</label>
                      <input type="text" name="input-mask" class="form-control" data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Telephone mask</label>
                      <input type="text" name="input-mask" class="form-control" data-mask="(00) 0000-0000" data-mask-visible="true" placeholder="(00) 0000-0000" autocomplete="off">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Autosize textarea</label>
                      <textarea class="form-control" data-bs-toggle="autosize" placeholder="Type something…" style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 56px;"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Datalist example</label>
                      <input class="form-control" list="datalistOptions" placeholder="Type to search...">
                      <datalist id="datalistOptions">
                        <option value="Aruba"></option>
                        <option value="Jamaica"></option>
                        <option value="Key Largo"></option>
                        <option value="Montego"></option>
                        <option value="Kokomo"></option>
                        <option value="Afghanistan"></option>
                      </datalist>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="anchor" name="buttons"></a>
    <div class="row pb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header align-items-center justify-content-between">
            <h3 class="card-title">Buttons</h3>
            <div>
              <a href="https://getbootstrap.com/docs/5.3/components/buttons" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
              </svg></a>
              <a href="https://tabler.io/docs/components/buttons" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 9l3 3l-3 3"></path>
                <path d="M13 15l3 0"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
              </svg></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive mb-3">
              <table class="table color-table">
                <tbody>
                  <tr>
                    <td class="align-middle ps-0">
                      Standard
                    </td>
                    <td>
                      <a href="#" class="btn btn-primary w-100">
                        Primary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-secondary w-100">
                        Secondary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-success w-100">
                        Success
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-warning w-100">
                        Warning
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-danger w-100">
                        Danger
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-info w-100">
                        Info
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-dark w-100">
                        Dark
                      </a>
                    </td>
                    <td class="bg-dark">
                      <a href="#" class="btn btn-light w-100">
                        Light
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle ps-0">
                      Square
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-primary w-100">
                        Primary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-secondary w-100">
                        Secondary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-success w-100">
                        Success
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-warning w-100">
                        Warning
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-danger w-100">
                        Danger
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-info w-100">
                        Info
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-square btn-dark w-100">
                        Dark
                      </a>
                    </td>
                    <td class="bg-dark">
                      <a href="#" class="btn btn-square btn-light w-100">
                        Light
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle ps-0">
                      Pill
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-primary w-100">
                        Primary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-secondary w-100">
                        Secondary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-success w-100">
                        Success
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-warning w-100">
                        Warning
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-danger w-100">
                        Danger
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-info w-100">
                        Info
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-pill btn-dark w-100">
                        Dark
                      </a>
                    </td>
                    <td class="bg-dark">
                      <a href="#" class="btn btn-pill btn-light w-100">
                        Light
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle ps-0">
                      Outline
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-primary w-100">
                        Primary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-secondary w-100">
                        Secondary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-success w-100">
                        Success
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-warning w-100">
                        Warning
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-danger w-100">
                        Danger
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-info w-100">
                        Info
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-outline-dark w-100">
                        Dark
                      </a>
                    </td>
                    <td class="bg-dark">
                      <a href="#" class="btn btn-outline-light w-100">
                        Light
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle ps-0">
                      Ghost
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-primary w-100">
                        Primary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-secondary w-100">
                        Secondary
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-success w-100">
                        Success
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-warning w-100">
                        Warning
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-danger w-100">
                        Danger
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-info w-100">
                        Info
                      </a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-ghost-dark w-100">
                        Dark
                      </a>
                    </td>
                    <td class="bg-dark">
                      <a href="#" class="btn btn-ghost-light w-100">
                        Light
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .color-table>:not(caption)>*>* {
        border-bottom-width: 0;
      }
    </style>
    <a class="anchor" name="colors"></a>
    <div class="row pb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header align-items-center justify-content-between">
            <h3 class="card-title">Colors</h3>
            <div>
              <a href="https://getbootstrap.com/docs/5.3/utilities/colors" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
              </svg></a>
              <a href="https://tabler.io/docs/base/colors" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 9l3 3l-3 3"></path>
                <path d="M13 15l3 0"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
              </svg></a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive mb-3">
              <table class="table text-center color-table">
                <tbody>
                  <tr>
                    <td>
                      <div class="avatar bg-blue text-blue-fg" data-demo-color="">bl</div>
                    </td>
                    <td>
                      <div class="avatar bg-azure text-azure-fg" data-demo-color="">az</div>
                    </td>
                    <td>
                      <div class="avatar bg-indigo text-indigo-fg" data-demo-color="">in</div>
                    </td>
                    <td>
                      <div class="avatar bg-purple text-purple-fg" data-demo-color="">pu</div>
                    </td>
                    <td>
                      <div class="avatar bg-pink text-pink-fg" data-demo-color="">pi</div>
                    </td>
                    <td>
                      <div class="avatar bg-red text-red-fg" data-demo-color="">re</div>
                    </td>
                    <td>
                      <div class="avatar bg-orange text-orange-fg" data-demo-color="">or</div>
                    </td>
                    <td>
                      <div class="avatar bg-yellow text-yellow-fg" data-demo-color="">ye</div>
                    </td>
                    <td>
                      <div class="avatar bg-lime text-lime-fg" data-demo-color="">li</div>
                    </td>
                    <td>
                      <div class="avatar bg-green text-green-fg" data-demo-color="">gr</div>
                    </td>
                    <td>
                      <div class="avatar bg-teal text-teal-fg" data-demo-color="">te</div>
                    </td>
                    <td>
                      <div class="avatar bg-cyan text-cyan-fg" data-demo-color="">cy</div>
                    </td>
                    <td>
                      <div class="avatar bg-dark text-dark-fg" data-demo-color="">da</div>
                    </td>
                    <td>
                      <div class="avatar bg-muted text-muted-fg" data-demo-color="">mu</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="avatar bg-blue-lt" data-demo-color="">bl</div>
                    </td>
                    <td>
                      <div class="avatar bg-azure-lt" data-demo-color="">az</div>
                    </td>
                    <td>
                      <div class="avatar bg-indigo-lt" data-demo-color="">in</div>
                    </td>
                    <td>
                      <div class="avatar bg-purple-lt" data-demo-color="">pu</div>
                    </td>
                    <td>
                      <div class="avatar bg-pink-lt" data-demo-color="">pi</div>
                    </td>
                    <td>
                      <div class="avatar bg-red-lt" data-demo-color="">re</div>
                    </td>
                    <td>
                      <div class="avatar bg-orange-lt" data-demo-color="">or</div>
                    </td>
                    <td>
                      <div class="avatar bg-yellow-lt" data-demo-color="">ye</div>
                    </td>
                    <td>
                      <div class="avatar bg-lime-lt" data-demo-color="">li</div>
                    </td>
                    <td>
                      <div class="avatar bg-green-lt" data-demo-color="">gr</div>
                    </td>
                    <td>
                      <div class="avatar bg-teal-lt" data-demo-color="">te</div>
                    </td>
                    <td>
                      <div class="avatar bg-cyan-lt" data-demo-color="">cy</div>
                    </td>
                    <td>
                      <div class="avatar bg-dark-lt" data-demo-color="">da</div>
                    </td>
                    <td>
                      <div class="avatar bg-muted-lt" data-demo-color="">mu</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="avatar text-blue bg-transparent" data-demo-color="">bl</div>
                    </td>
                    <td>
                      <div class="avatar text-azure bg-transparent" data-demo-color="">az</div>
                    </td>
                    <td>
                      <div class="avatar text-indigo bg-transparent" data-demo-color="">in</div>
                    </td>
                    <td>
                      <div class="avatar text-purple bg-transparent" data-demo-color="">pu</div>
                    </td>
                    <td>
                      <div class="avatar text-pink bg-transparent" data-demo-color="">pi</div>
                    </td>
                    <td>
                      <div class="avatar text-red bg-transparent" data-demo-color="">re</div>
                    </td>
                    <td>
                      <div class="avatar text-orange bg-transparent" data-demo-color="">or</div>
                    </td>
                    <td>
                      <div class="avatar text-yellow bg-transparent" data-demo-color="">ye</div>
                    </td>
                    <td>
                      <div class="avatar text-lime bg-transparent" data-demo-color="">li</div>
                    </td>
                    <td>
                      <div class="avatar text-green bg-transparent" data-demo-color="">gr</div>
                    </td>
                    <td>
                      <div class="avatar text-teal bg-transparent" data-demo-color="">te</div>
                    </td>
                    <td>
                      <div class="avatar text-cyan bg-transparent" data-demo-color="">cy</div>
                    </td>
                    <td>
                      <div class="avatar text-dark bg-transparent" data-demo-color="">da</div>
                    </td>
                    <td>
                      <div class="avatar text-muted bg-transparent" data-demo-color="">mu</div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="anchor" name="modals"></a>
    <div class="row pb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header align-items-center justify-content-between">
            <h3 class="card-title">Modals</h3>
            <div>
              <a href="https://getbootstrap.com/docs/5.3/components/modal" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
              </svg></a>
              <a href="https://tabler.io/docs/components/modals" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 9l3 3l-3 3"></path>
                <path d="M13 15l3 0"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
              </svg></a>
            </div>
          </div>
          <div class="card-body">
            <div class="row gx-6">
              <div class="col-md-6">
                <p>Bootstrap provides excellent support and configuration options for <a href="https://getbootstrap.com/docs/5.3/components/modal" target="_blank">modal components</a>. However, the process of using them programmatically with JS is cumbersome and involved, so we've developed an abstraction function that writes the required markup as needed and accepts JSON parameters for configuration.</p>
                <p>See the <a href="https://github.com/jyoungblood/dw-utilities-js" target="_blank">DW JS utility library</a> for more information on how to use and configure the <code>dw.modal()</code> function.</p>
                <p>The <a href="https://preview.tabler.io/modals.html" target="_blank">Tabler Preview</a> also provides some more modal configuration examples.</p>
              </div>
              <div class="col-md-6">
                <p>Here's a simple demo of some of the kinds of modals you can make. If you inspect the source, you'll notice they're all triggered with JS <code>onclick</code> events.</p>
                <div class="input-group w-75 mb-4 mt-4">
                  <input type="text" class="form-control" name="modaltext" value="Type custom modal content here.<br /><br />You can even use <b>html elements</b> if you want.<br /><br />Amazing! 🤠">
                  <button class="btn btn-secondary" onclick="dw.modal({'content':document.querySelector('input[name=modaltext]').value, 'modal_footer_extra': 'd-none'})">Launch Modal</button>
                </div>
                <div class="btn-list mb-3">
                  <button class="btn btn-secondary" onclick="dw.modal({
                    title: 'This is a Modal',
                    content: `Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi beatae delectus deleniti dolorem eveniet facere fuga iste nemo nesciunt nihil odio perspiciatis, quia quis reprehenderit sit tempora totam unde.<br /><br />✌️😎`,
                    // modal_id: 'custom_modal_id',
                    // fade: true,
                    // blur: true,
                    // centered: true,
                    // scrollable: true,
                    // hide_x: true,
                    // form: true,
                    // format: 'small',
                    // format: 'large',
                    // format: 'full-width',
                    // theme: 'success',
                    // theme: 'danger',
                    // modal_title_extra: 'text-center w-100 py-5 fs-1',
                    // modal_body_extra: 'text-center py-5 fs-1',
                    // modal_footer_extra: 'text-center py-5 fs-1',
                    // modal_header_extra: 'text-center py-5 fs-1',
                    // modal_content_extra: 'text-center py-5 fs-1',
                    // modal_dialog_extra: 'text-center py-5 fs-1',
                    buttons: [
                      {
                        label: 'Cancel',
                        close_modal: true,
                        class_extra: 'me-auto',
                        // class_extra: 'btn-link link-secondary',
                        callback: function(id){
                          alert('called after no');
                          // dw.modal_destroy(id);
                        }
                      },
                      {
                        label: 'Google me',
                        color: 'secondary',
                        // class_extra: 'me-auto',
                        callback: function(id){
                          window.open('https://www.google.com/search?q=bladee', '_blank');
                        }
                      },
                      {
                        label: 'OK',
                        // color: 'danger',
                        // class_extra: 'w-100',
                        // class_extra: 'w-50 mx-auto',
                        color: 'primary',
                        close_modal: true,
                        callback: function(id){
                          alert('called after yes');
                          console.log(`modal: id: ${id}`);
                        }
                      },
                    ]
                  })">Simple modal</button>
                  <button class="btn btn-secondary" onclick="trigger_error()">Error / Danger</button>
                  <button class="btn btn-secondary" onclick="js_dw_alert(modal_form_big)">Advanced form</button>
                  <button class="btn btn-secondary" onclick="js_dw_alert(modal_form_simple)">Simple form</button>
                </div>
                <script>
                  function trigger_error() {
                    dw.modal({
                      title: `<svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 9v2m0 4v.01"></path><path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75"></path></svg><br />Incomplete Data`,
                      content: `<span class="text-muted">Please add missing information to<br /> any <span class="text-danger">required</span> fields and try again.</span>`,
                      format: 'small',
                      theme: 'danger',
                      modal_title_extra: 'text-center w-100 pt-2 fs-2',
                      modal_body_extra: 'text-center',
                      modal_footer_extra: 'border-top-0 bg-transparent',
                      buttons: [
                        {
                          label: 'OK',
                          color: 'danger',
                          class_extra: 'w-75 mx-auto mb-3',
                          close_modal: true,
                        },
                      ]
                    })
                  }
                </script>
                <script>
                  var modal_form_big = `
                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Your report name">
                    </div>
                    <label class="form-label">Report type</label>
                    <div class="form-selectgroup-boxes row mb-3">
                      <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="report_type" value="simple" class="form-selectgroup-input" checked>
                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                            <span class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </span>
                            <span class="form-selectgroup-label-content">
                              <span class="form-selectgroup-title strong mb-1">Simple</span>
                              <span class="d-block text-muted">Provide only basic data needed for the report</span>
                            </span>
                          </span>
                        </label>
                      </div>
                      <div class="col-lg-6">
                        <label class="form-selectgroup-item">
                          <input type="radio" name="report_type" value="advanced" class="form-selectgroup-input">
                          <span class="form-selectgroup-label d-flex align-items-center p-3">
                            <span class="me-3">
                              <span class="form-selectgroup-check"></span>
                            </span>
                            <span class="form-selectgroup-label-content">
                              <span class="form-selectgroup-title strong mb-1">Advanced</span>
                              <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the
                                report</span>
                            </span>
                          </span>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="mb-3">
                          <label class="form-label">Report url</label>
                          <div class="input-group input-group-flat">
                            <span class="input-group-text">
                              https://tabler.io/reports/
                            </span>
                            <input type="text" name="report_url" class="form-control ps-0" value="report-01" autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label">Visibility</label>
                          <select class="form-select" name="visibility">
                            <option value="1" selected>Private</option>
                            <option value="2">Public</option>
                            <option value="3">Hidden</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  <!-- 
                  </div>
                  <div class="modal-body">
                  -->
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label">Client name</label>
                          <input type="text" name="client_name" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="mb-3">
                          <label class="form-label">Reporting period</label>
                          <input type="date" name="reporting_period" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div>
                          <label class="form-label">Additional information</label>
                          <textarea name="additional_information" class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                    `;
                  var modal_form_simple = `
                    <div class="row mb-3 align-items-end">
                      <div class="col-auto">
                        <a href="#" class="avatar avatar-upload rounded">
                          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                          </svg>
                          <span class="avatar-upload-text">Add</span>
                        </a>
                      </div>
                      <div class="col">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" />
                      </div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Pick your team color</label>
                      <div class="row g-2">
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="dark" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-dark"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput form-colorinput-light">
                            <input name="color" type="radio" value="white" class="form-colorinput-input" checked />
                            <span class="form-colorinput-color bg-white"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="blue" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-blue"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="azure" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-azure"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="indigo" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-indigo"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="purple" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-purple"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="pink" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-pink"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="red" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-red"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="orange" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-orange"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="yellow" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-yellow"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="form-colorinput">
                            <input name="color" type="radio" value="lime" class="form-colorinput-input" />
                            <span class="form-colorinput-color bg-lime"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div>
                      <label class="form-label">Additional info</label>
                      <textarea name="additional_info" class="form-control"></textarea>
                    </div>
                    `;
                  function js_dw_alert(modal_form) {
                    dw.modal({
                      content: modal_form,
                      title: 'This is a Modal Form!<div class="fw-normal text-muted fs-5">It can even have a second line for instructions...it\'s just a div</div>',
                      modal_header_extra: 'py-3',
                      form: true,
                      format: 'large',
                      buttons: [
                        {
                          label: 'Cancel',
                          close_modal: true,
                          class_extra: 'me-auto',
                          callback: function (id) {
                            alert('called after cancel');
                          }
                        },
                        {
                          label: `<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mood-smile-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.8 10.946a1 1 0 0 0 -1.414 .014a2.5 2.5 0 0 1 -3.572 0a1 1 0 0 0 -1.428 1.4a4.5 4.5 0 0 0 6.428 0a1 1 0 0 0 -.014 -1.414zm-6.19 -5.286l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993zm6 0l-.127 .007a1 1 0 0 0 .117 1.993l.127 -.007a1 1 0 0 0 -.117 -1.993z" stroke-width="0" fill="currentColor"></path></svg> Submit`,
                          color: 'primary',
                          close_modal: true,
                          callback: function (id) {
                            alert('look at the console!');
                            console.log('Here\'s the serialized form content:');
                            console.log(dw.serialize(document.querySelector('#' + id + ' form')));
                          }
                        },
                      ]
                    })
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="anchor" name="other-dialogs"></a>
    <div class="row pb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Other Dialogs</h3>
          </div>
          <div class="card-body">
            <div class="row gx-6 mb-5">
              <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Tooltips</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/tooltips" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://tabler.io/docs/components/tooltips" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="btn-list mb-3">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Tooltip on left">Left</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Tooltip on top">Top</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Tooltip on bottom">Bottom</button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Tooltip on right">Right</button>
                </div>
                <p class="muted">Placeholder text to demonstrate some <a href="#" data-bs-toggle="tooltip" data-bs-title="Default tooltip">inline links</a> with tooltips. This is now just filler, no killer. Content placed here just to mimic the presence of <a href="#" data-bs-toggle="tooltip" data-bs-title="Another tooltip">real text</a>. And all that just to give you an idea of how tooltips would look when used in real-world situations. So hopefully you've now seen how <a href="#" data-bs-toggle="tooltip" data-bs-title="Another one here too">these tooltips on links</a> can work in practice, once you use them on <a href="#" data-bs-toggle="tooltip" data-bs-title="The last tip!">your own</a> site or project.</p>
              </div>
              <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Popovers</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/popovers" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://tabler.io/docs/components/popover" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="btn-list mb-5">
                  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Left</button>
                  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Top</button>
                  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Bottom</button>
                  <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Right</button>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h3 class="mb-0">Offcanvas</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/offcanvas" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://preview.tabler.io/offcanvas.html" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="btn-list mb-5">
                  <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart">Start</a>
                  <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasEnd" role="button" aria-controls="offcanvasEnd">End</a>
                  <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasTop" role="button" aria-controls="offcanvasTop">Top</a>
                  <a class="btn btn-secondary" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button" aria-controls="offcanvasBottom">Bottom</a>
                </div>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
                  <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasStartLabel">Start offcanvas</h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                    </div>
                  </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                  <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasEndLabel">End offcanvas</h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                    </div>
                  </div>
                </div>
                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasTopLabel">Top offcanvas</h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                    </div>
                  </div>
                </div>
                <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
                  <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasBottomLabel">Bottom offcanvas</h2>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda ea est, eum exercitationem fugiat illum itaque laboriosam magni necessitatibus, nemo nisi numquam quae reiciendis repellat sit soluta unde. Aut!
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">Close offcanvas</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Toasts</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/toasts" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://tabler.io/docs/components/toasts" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="toast show w-100" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                      <strong class="me-auto">Hello!</strong>
                      <small>11 mins ago</small>
                      <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true"></span>
                      </button>
                    </div>
                    <div class="toast-body">
                      This is a toast message. <br />You're welcome to close it if you want.
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <button type="button" class="btn btn-secondary" onclick="document.querySelector('#liveToast').classList.add('show')">Trigger live toast</button>
                  <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                      <div class="toast-header">
                        <strong class="me-auto">Hello!</strong>
                        <small>13 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                      </div>
                      <div class="toast-body">
                        This is a live toast message generated from a button click 👍
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="mb-0">Alerts</h3>
              <div>
                <a href="https://getbootstrap.com/docs/5.3/components/alerts" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                  <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                  <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                </svg></a>
                <a href="https://tabler.io/docs/components/alerts" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M8 9l3 3l-3 3"></path>
                  <path d="M13 15l3 0"></path>
                  <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                </svg></a>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="alert alert-dismissible alert-warning">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <h4 class="alert-heading">Warning!</h4>
                  <p class="mb-0">To be honest, if it's wrong, I don't want to be right. I don't wanna talk if you're not gonna <a href="#" class="alert-link">talk to me nice</a>.</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>ERROR - </strong> Please fill out any missing fields and <a href="#" class="alert-link">try submitting again.</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>EXCELLENT - </strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-info">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Heads up - </strong> This alert <a href="#" class="alert-link">needs attention</a>, but it's not super important.
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>HEY - </strong> This is a generic alert message. Got it? OK you can close this now.
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-secondary">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>HEY - </strong> This is a generic alert message. Got it? OK you can close this now.
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bs-component">
                  <div class="alert alert-dismissible alert-dark">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>HEY - </strong> This is a generic alert message. Got it? OK you can close this now.
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-2">
              <button type="button" class="btn btn-secondary" onclick="document.body.innerHTML+=`<div class='position-fixed top-0 end-0 pt-4' style='z-index:9999;'>
                  <div class='alert alert-dismissible alert-warning'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <h4 class='alert-heading'>Warning!</h4>
                    <p class='mb-0'>This alert was generated by an <code>onclick</code> event.</p>
                  </div>
              </div>`">Trigger live alert</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="anchor" name="typography"></a>
    <div class="row pb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header align-items-center justify-content-between">
            <h3 class="card-title">Typograpy</h3>
            <div>
              <a href="https://getbootstrap.com/docs/5.3/content/typography" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
              </svg></a>
              <a href="https://tabler.io/docs/base/typography" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 9l3 3l-3 3"></path>
                <path d="M13 15l3 0"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
              </svg></a>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-5 gx-6">
              <div class="col-md-8 markdown mb-sm-5">
                <h1>Walk on promised roads</h1>
                <h2>I could take a joke</h2>
                <p>
                  Have you ever seen a ghost pop out like a toast?
                  You woke up late, <s>the breakfast's closed</s>.
                  You know I don't brag, but I'm about to boast.
                  Fabrics on my body, it's designer probably.
                  <small>Can't you see I'm litty? Rollin' like a trolley?</small>
                </p>
                <p>
                  <mark>Won't come to your party 'cause your friends are boring.</mark>
                  I'll be in the city walking around like a tourist.
                </p>
                <p>When you look at me and hate on me, I'm a mirror. <b>If you look at me and don't like me what doesthat say about you?</b>
                  I am King Nothing, I am nothing, <u>take a bunch of empty words and make them mean something</u>.
                  I've been getting no gifts for a while, is Christmas coming?
                  I'm a good boy on the track, no cussing.
                </p>
                <p>
                  Please do not give me any more flak, <a href="https://www.youtube.com/watch?v=84ZqscEnq2c" target="_blank">I am struggling</a>. I'm about to start crying in my bed, evil words spin around my head.
                </p>
                <p>
                  I'm going Trash Star crazy.
                  I'm Bladee, she call me Bladey.<sup>[1]</sup>
                  Angel or demon maybe...I'm trying do what I can.
                  Can you please comprehend me? Why can't you understand?
                </p>
                <p>
                  I'll shine some glory on your life.
                </p>
                <p class="display-6">𓆩♡𓆪</p>
                <blockquote class="blockquote fst-italic">
                  <p>
                    I am not anyone, I'm just some air inside the air.
                    A piece of sand in all the sand, drop of water in the ocean.
                    It may not seem that way, but I can promise you it's that.
                    But enough of that, I'm coming back...<br />
                    I jump right back into the trash
                  </p>
                  <footer class="blockquote-footer pt-2">Benjamin Reichwald</footer>
                </blockquote>
                <p>
                  Use the <code>&lt;abbr&gt;</code> tag like this: <abbr title="OK, thank you. Good bye.">kthxbi</abbr>
                </p>
                <p>
                  Select some text, then press
                  <kbd>⌘</kbd> + <kbd>C</kbd> to copy.
                  To paste, press <kbd>⌘</kbd> + <kbd>V</kbd>
                </p>
                <p>
                  Use NPX to get a quick DW clone: <code>npx degit jyoungblood/darkwave#0.6.1 .</code>
                </p>
                <pre>// preformatted text block — no syntax highlighting tho ¯\_(ツ)_/¯

const notify = function(message){
  alert(message);
}</pre>
              </div>
              <div class="col-md-4 markdown">
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h3>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
                <h3 class="mt-4 mb-2">Text color</h3>
                <div class="mb-5">
                  <div class="text-primary">This is an example of 'text-primary'</div>
                  <div class="text-secondary">This is an example of 'text-secondary'</div>
                  <div class="text-success">This is an example of 'text-success'</div>
                  <div class="text-warning">This is an example of 'text-warning'</div>
                  <div class="text-danger">This is an example of 'text-danger'</div>
                  <div class="text-info">This is an example of 'text-info'</div>
                  <div class="text-dark">This is an example of 'text-dark'</div>
                  <div class="bg-dark text-light">This is an example of 'text-light'</div>
                  <div class="text-blue">This is an example of 'text-blue'</div>
                  <div class="text-azure">This is an example of 'text-azure'</div>
                  <div class="text-indigo">This is an example of 'text-indigo'</div>
                  <div class="text-purple">This is an example of 'text-purple'</div>
                  <div class="text-pink">This is an example of 'text-pink'</div>
                  <div class="text-red">This is an example of 'text-red'</div>
                  <div class="text-orange">This is an example of 'text-orange'</div>
                  <div class="text-yellow">This is an example of 'text-yellow'</div>
                  <div class="text-lime">This is an example of 'text-lime'</div>
                  <div class="text-green">This is an example of 'text-green'</div>
                  <div class="text-teal">This is an example of 'text-teal'</div>
                  <div class="text-cyan">This is an example of 'text-cyan'</div>
                  <div class="text-muted">This is an example of 'text-muted'</div>
                </div>
                <h3 class="mb-2">Antialiasing</h3>
                <div class="mb-3">
                  <div class="antialiased">Text with antialiasing</div>
                  <div class="subpixel-antialiased">Text without antialiasing</div>
                </div>
              </div>
            </div>
            <div class="row gx-5 mb-3">
              <div class="col-md-2 markdown mb-sm-4">
                <h3 class="mb-2">Ordered list</h3>
                <ol>
                  <li>Spiderr</li>
                  <li>Icedancer</li>
                  <li>The Fool</li>
                  <li>Crest</li>
                  <li>333</li>
                  <li>Gluee</li>
                  <li>Exeter</li>
                  <li>Good Luck</li>
                  <li>Eversince</li>
                  <li>Red Light</li>
                  <li>rip bladee</li>
                </ol>
              </div>
              <div class="col-md-2 markdown mb-sm-4">
                <h3 class="mb-2">Unordered list</h3>
                <ul>
                  <li>Icedancer</li>
                  <li>Eversince</li>
                  <li>Red Light</li>
                  <li>The Fool</li>
                  <li>Crest
                    <ul class="ps-2">
                      <li>Desire is a Trap</li>
                      <li>Faust</li>
                    </ul>
                  </li>
                  <li>333</li>
                  <li>Exeter</li>
                  <li>Gluee</li>
                  <li>Spiderr</li>
                </ul>
              </div>
              <div class="col-md-4 markdown mb-sm-4">
                <h3 class="mb-2">Inline list</h3>
                <ul class="list-inline">
                  <li class="list-inline-item">Spiderr</li>
                  <li class="list-inline-item">Icedancer</li>
                  <li class="list-inline-item">The Fool</li>
                  <li class="list-inline-item">Crest</li>
                  <li class="list-inline-item">333</li>
                  <li class="list-inline-item">Gluee</li>
                  <li class="list-inline-item">Exeter</li>
                  <li class="list-inline-item">Good Luck</li>
                  <li class="list-inline-item">Eversince</li>
                  <li class="list-inline-item">Red Light</li>
                </ul>
                <h3 class="mb-2">Description List</h3>
                <dl>
                  <dt>Spiderr</dt>
                  <dd>I am slowly but surely losing hope</dd>
                  <dt>Icedancer</dt>
                  <dd>Mallwhore Freestyle</dd>
                  <dt>Red Light</dt>
                  <dd>Steve Jobs</dd>
                </dl>
              </div>
              <div class="col-md-4 markdown">
                <h3 class="mb-2">Unstyled list</h3>
                <ul class="list-unstyled">
                  <li>This is a list.</li>
                  <li>It appears completely unstyled.</li>
                  <li>Structurally, it's still a list.</li>
                  <li>However, this style only applies to immediate child elements.</li>
                  <li>Nested lists:
                    <ul>
                      <li>are unaffected by this style</li>
                      <li>will still show a bullet</li>
                      <li>and have appropriate left margin</li>
                    </ul>
                  </li>
                  <li>This may still come in handy in some situations.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="anchor" name="tables"></a>
    <div class="row pb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header align-items-center justify-content-between">
            <h3 class="card-title">Tables</h3>
            <div>
              <a href="https://getbootstrap.com/docs/5.3/content/tables" target="_blank"><svg
                xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
              </svg></a>
              <a href="https://tabler.io/docs/components/tables" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M8 9l3 3l-3 3"></path>
                <path d="M13 15l3 0"></path>
                <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
              </svg></a>
            </div>
          </div>
          <div class="card-body overflow-scroll">
            <h3>Bootstrap Default Table</h3>
            <div class="mb-5">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Column heading</th>
                    <th scope="col">Column heading</th>
                    <th scope="col">Column heading</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Default</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr>
                    <th scope="row">Default</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr>
                    <th scope="row">Default</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr>
                    <th scope="row">Default</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-primary">
                    <th scope="row">Primary</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-secondary">
                    <th scope="row">Secondary</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-success">
                    <th scope="row">Success</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-danger">
                    <th scope="row">Danger</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-warning">
                    <th scope="row">Warning</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">Info</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-dark">
                    <th scope="row">Dark</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-light">
                    <th scope="row">Light</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h3>Responsive Table</h3>
            <div class="table-responsive mb-5">
              <table class="table table-vcenter card-table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Paweł Kuna</td>
                    <td class="text-muted">UI Designer, Training</td>
                    <td class="text-muted"><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                    <td class="text-muted">User</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Jeffie Lewzey</td>
                    <td class="text-muted">Chemical Engineer, Support</td>
                    <td class="text-muted"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                    <td class="text-muted">Admin</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Mallory Hulme</td>
                    <td class="text-muted">Geologist IV, Support</td>
                    <td class="text-muted"><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                    <td class="text-muted">User</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Dunn Slane</td>
                    <td class="text-muted">Research Nurse, Sales</td>
                    <td class="text-muted"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                    <td class="text-muted">Owner</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Emmy Levet</td>
                    <td class="text-muted">VP Product Management, Accounting</td>
                    <td class="text-muted"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                    <td class="text-muted">Admin</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Maryjo Lebarree</td>
                    <td class="text-muted">Civil Engineer, Product Management</td>
                    <td class="text-muted"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                    <td class="text-muted">User</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Egan Poetz</td>
                    <td class="text-muted">Research Nurse, Engineering</td>
                    <td class="text-muted"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                    <td class="text-muted">Admin</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                  <tr>
                    <td>Kellie Skingley</td>
                    <td class="text-muted">Teacher, Services</td>
                    <td class="text-muted"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                    <td class="text-muted">Owner</td>
                    <td><a href="#">Edit</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-center mb-3"><b>HOT TIP</b> - See the <a href="/users" target="_blank">DW Users screen</a> for a good example of a sortable and striped responsive table.</div>
          </div>
        </div>
      </div>
    </div>
    <a class="anchor" name="misc-elements"></a>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Misc Elements</h3>
          </div>
          <div class="card-body">
            <div class="row gx-5 mb-5">
              <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Tabbed Sections</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#tabs" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://tabler.io/docs/components/tabs" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="mb-3">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" data-bs-toggle="tab" href="#first" aria-selected="true" role="tab">First</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-bs-toggle="tab" href="#second" aria-selected="false" role="tab" tabindex="-1">Second</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link disabled" href="#" aria-selected="false" tabindex="-1" role="tab">Third</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" data-bs-toggle="tab" aria-selected="false" role="tab" href="#fourth">Fourth</a>
                        <a class="dropdown-item" data-bs-toggle="tab" aria-selected="false" role="tab" href="#fifth">Fifth</a>
                      </div>
                    </li>
                  </ul>
                  <div id="myTabContent" class="tab-content p-2">
                    <div class="tab-pane fade active show" id="first" role="tabpanel">
                      <p>
                        I stay out of sight, it's a satellite life.
                        Got a shadow ice knife, Gucci lenses on my eyes.
                        Bank account match my clothing size.
                        That explains the price of my shoes.
                        I got news, you can get cut up like fruit.
                        Bladee one sound like Akon when I make songs.
                        Say some wrong, you may run, you get rained on.
                      </p>
                    </div>
                    <div class="tab-pane fade" id="second" role="tabpanel">
                      <p>
                        Someone rather than no one, I got no one.
                        I was so wrong, waiting so long.
                        You were no one, hold on.
                        I should go home to the chrome zone.
                        No ozone, sold my soul, now my soul's gone.
                      </p>
                    </div>
                    <div class="tab-pane fade" id="fourth">
                      <p>
                        I hold the map, I got the keys to the city.
                        GTB, I see machines in the city.
                        Helicopters when we leave in December.
                        On my LG, call my team, we assemble.
                        I'm beyond, I don't believe in the system.
                        You can sing, I press delete, I don't listen.
                        I got items, I'm complete for no reason.
                        Got no meaning, pull the card, get a reading.
                      </p>
                    </div>
                    <div class="tab-pane fade" id="fifth">
                      <p>
                        Thaiboy Goon, I got that weed in my system.
                        You can sing, I press delete, I don't listen.
                        I got cash, I pull up clean for no reason.
                        On my iPhone, call my team, now I'm beaming.
                        Thaiboy Goon, I make the scene when I'm dreaming.
                        GTBSBE, we riding with no ceiling.
                        Yung Thaiboy Goon, I'm posted in the building.
                        You can sing, I press delete, I don't listen.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Pagination</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/pagination" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://preview.tabler.io/pagination.html" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="mb-5">
                  <ul class="pagination">
                    <li class="page-item disabled">
                      <a class="page-link" href="#">«</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">»</a>
                    </li>
                  </ul>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Badges</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/badge" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://tabler.io/docs/components/badges" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="btn-list">
                  <span class="badge bg-primary">Primary</span>
                  <span class="badge bg-secondary">Secondary</span>
                  <span class="badge bg-success">Success</span>
                  <span class="badge bg-danger">Danger</span>
                  <span class="badge text-bg-warning">Warning</span>
                  <span class="badge text-bg-info">Info</span>
                  <span class="badge bg-dark">Dark</span>
                  <span class="badge text-bg-light">Light</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h3 class="mb-0">Accordion</h3>
                  <div>
                    <a href="https://getbootstrap.com/docs/5.3/components/accordion" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                      <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                      <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                    </svg></a>
                    <a href="https://preview.tabler.io/accordion.html" target="_blank"><svg
                      xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 9l3 3l-3 3"></path>
                      <path d="M13 15l3 0"></path>
                      <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                    </svg></a>
                  </div>
                </div>
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion Item #1</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h3 class="mb-0">List Groups</h3>
              <div>
                <a href="https://getbootstrap.com/docs/5.3/components/list-group" target="_blank"><svg
                  xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M2 12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2"></path>
                  <path d="M2 12a2 2 0 0 1 2 2v4a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-4a2 2 0 0 1 2 -2"></path>
                  <path d="M9 16v-8h3.5a2 2 0 1 1 0 4h-3.5h4a2 2 0 1 1 0 4h-4z"></path>
                </svg></a>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-lg-4">
                <div class="mb-4">
                  <ul class="list-group">
                   <li class="list-group-item d-flex justify-content-between align-items-center">
                      Unknown Memory <span class="badge bg-primary rounded-pill">13</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Warlord (Deluxe) <span class="badge bg-primary rounded-pill">19</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Frost God <span class="badge bg-primary rounded-pill">8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Stranger <span class="badge bg-primary rounded-pill">14</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Poison Ivy <span class="badge bg-primary rounded-pill">8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Starz <span class="badge bg-primary rounded-pill">16</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      Stardust <span class="badge bg-primary rounded-pill">12</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-4">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Trash Island</a>
                    <a href="#" class="list-group-item list-group-item-action">Tiger</a>
                    <a href="#" class="list-group-item list-group-item-action">E</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">D&G</a>
                    <a href="#" class="list-group-item list-group-item-action">Legendary Member</a>
                    <a href="#" class="list-group-item list-group-item-action">PXE</a>
                    <a href="#" class="list-group-item list-group-item-action">Crest</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-4">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small>Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">6 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">9 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















@endsection