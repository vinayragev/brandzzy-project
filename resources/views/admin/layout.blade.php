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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/index.php">Brandzzy</a>

  <div id="navbarSearch" class="navbar-search w-100 collapse">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Brandzzy</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/admin/role/list">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Roles
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="/admin/user/list">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                User
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="/admin/post/list">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Post
              </a>
            </li>
            
          </ul>



          
        </div>
      </div>
    </div>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('main')
    </main>
  </div>
</div>
    <script src="{{ asset('/bootstrap/assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
      
    </script></body>
</html>
