<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $title ?? '-' }}</title>


    @include('layouts.include.head')
  </head>

  <body>
 
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
     
      @include('layouts.include.navbar')
      <!-- END Sidebar -->

      <!-- Header -->
      
      @include('layouts.include.header')
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
              <div class="flex-grow-1">
                <h1 class="h3 fw-bold mb-1">
                 @yield('breadcrumb-title')
                </h1>
              
              </div>
              <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                  <li class="breadcrumb-item">
                    <a class="link-fx" href="javascript:void(0)">Dashboard</a>
                  </li>
                    @yield('breadcrumb-items')
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <!-- END Hero -->

          
        <!-- Page Content -->
        <div class="content">
          @include('layouts.include.component.alert')
         
          @yield('content')
         
          <!-- END Partial Table -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      @include('layouts.include.footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    @include('layouts.include.foot')
    
  </body>
</html>
