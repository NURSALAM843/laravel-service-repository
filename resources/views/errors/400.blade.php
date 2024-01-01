@extends('layouts.error')

    
@section('title', __('Bad Request'))

@section('message')
<main id="main-container">
    <!-- Page Content -->
    <div class="hero">
      <div class="hero-inner text-center">
        <div class="bg-body-extra-light">
          <div class="content content-full">
            <div class="py-4">
              <!-- Error Header -->
              <h1 class="display-1 fw-bolder text-default">
                400
              </h1>
              <h2 class="h4 fw-normal text-muted mb-5">
                We are sorry but your request contains bad syntax and cannot be fulfilled..
              </h2>
              <!-- END Error Header -->

              <div>
                <a class="btn btn-warning-gradien btn-lg" href="javascript:history.back()">
                    BACK TO HOME PAGE
                </a>
            </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
    <!-- END Page Content -->
  </main>
@endsection