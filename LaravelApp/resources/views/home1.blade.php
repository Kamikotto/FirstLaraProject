@extends('layout')
@section('title') Главная страница@endsection
@section('main_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container py-3">
        <header>
          <div class="p-3 mx-auto text-center pricing-header pb-md-4">
            <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
            <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
          </div>
        </header>

        <main>
          <div class="mb-3 text-center row row-cols-1 row-cols-md-3">
            <div class="col">
              <div class="mb-4 shadow-sm card rounded-3">
                <div class="py-3 card-header">
                  <h4 class="my-0 fw-normal">Free</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                  <ul class="mt-3 mb-4 list-unstyled">
                    <li>10 users included</li>
                    <li>2 GB of storage</li>
                    <li>Email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mb-4 shadow-sm card rounded-3">
                <div class="py-3 card-header">
                  <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                  <ul class="mt-3 mb-4 list-unstyled">
                    <li>20 users included</li>
                    <li>10 GB of storage</li>
                    <li>Priority email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="mb-4 shadow-sm card rounded-3 border-primary">
                <div class="py-3 card-header text-bg-primary border-primary">
                  <h4 class="my-0 fw-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                  <ul class="mt-3 mb-4 list-unstyled">
                    <li>30 users included</li>
                    <li>15 GB of storage</li>
                    <li>Phone and email support</li>
                    <li>Help center access</li>
                  </ul>
                  <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                </div>
              </div>
            </div>
          </div>

          <h2 class="mb-4 text-center display-6">Compare plans</h2>

          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th style="width: 34%;"></th>
                  <th style="width: 22%;">Free</th>
                  <th style="width: 22%;">Pro</th>
                  <th style="width: 22%;">Enterprise</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-start">Public</th>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start">Private</th>
                  <td></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
              </tbody>

              <tbody>
                <tr>
                  <th scope="row" class="text-start">Permissions</th>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start">Sharing</th>
                  <td></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start">Unlimited members</th>
                  <td></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
                <tr>
                  <th scope="row" class="text-start">Extra security</th>
                  <td></td>
                  <td></td>
                  <td><svg class="bi" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
          <div class="row">
            <div class="col-12 col-md">
              <img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
              <small class="mb-3 d-block text-body-secondary">© 2017–2023</small>
            </div>
            <div class="col-6 col-md">
              <h5>Features</h5>
              <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>Resources</h5>
              <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
              </ul>
            </div>
            <div class="col-6 col-md">
              <h5>About</h5>
              <ul class="list-unstyled text-small">
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
      @endsection
</body>
</html>
