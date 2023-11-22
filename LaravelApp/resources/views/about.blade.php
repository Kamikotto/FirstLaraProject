@extends('layout')
@section('title') Страница о нас@endsection
@section('main_content')
<main>
    <div class="p-3 overflow-hidden text-center position-relative p-md-5 m-md-3 bg-body-tertiary">
      <div class="mx-auto my-5 col-md-6 p-lg-5">
        <h1 class="display-3 fw-bold">Designed for engineers</h1>
        <h3 class="mb-3 fw-normal text-muted">Build anything you want with Aperture</h3>
        <div class="gap-3 d-flex justify-content-center lead fw-normal">
          <a class="icon-link" href="#">
            Learn more
            <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
          <a class="icon-link" href="#">
            Buy
            <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
          </a>
        </div>
      </div>
      <div class="shadow-sm product-device d-none d-md-block"></div>
      <div class="shadow-sm product-device product-device-2 d-none d-md-block"></div>
    </div>


    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="px-3 pt-3 overflow-hidden text-center bg-body-tertiary me-md-3 pt-md-5 px-md-5">
        <div class="p-3 my-3">
          <h2 class="display-5">Another headline</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="mx-auto shadow-sm bg-body" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="row py-lg-5">
        <div class="mx-auto col-lg-6 col-md-8">
          <h1 class="fw-light">Album example</h1>
          <p class="lead text-body-secondary">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="my-2 btn btn-primary">Main call to action</a>
            <a href="#" class="my-2 btn btn-secondary">Secondary action</a>
          </p>
        </div>
      </div>
  </main>
@endsection
