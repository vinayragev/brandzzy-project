<!doctype html>
<html lang="en" data-bs-theme="auto">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
      <head><script src="{{ asset('/bootstrap/assets/js/color-modes.js') }}"></script>
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Dashboard Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    
    <link href="{{ asset('/bootstrap/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/bootstrap/dashboard/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>

    

    


<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/admin">Brandzzy</a>

  <?php if (auth()->user()): ?>
  {{ auth()->user()->full_name }}
  <a href="/logout" class="btn btn-light">Log out</a>
  <?php else: ?>
  <a href="/login" class="btn btn-light">Log In</a>
  <?php endif ?>
</header>

<div class="container-fluid">
  <div class="row">

    <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
        @yield('main')
    </main>
  </div>
</div>
    <script src="{{ asset('/bootstrap/assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
      
    </script></body>
</html>
