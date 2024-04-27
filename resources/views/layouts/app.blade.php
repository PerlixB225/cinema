<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Bootstrap 5 Navbar -->
        <nav class="navbar navbar-expand-sm bg-info navbar-light">
          <div class="container-fluid">
            <!-- Cinema heading -->
            <h1 class="navbar-brand">Cinema</h1>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{ route('members.index')}}">Members List</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('movies.index')}}">Movies List</a></li>
			  <li class="nav-item"><a class="nav-link" href="{{ route('screenings.index')}}">Screenings List</a></li>
			  <li class="nav-item"><a class="nav-link" href="{{ route('tickets.index')}}">Tickets List</a></li>
            </ul>
          </div>
        </nav>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                  
                    <div class="col-lg-2"></div>
                   
                    <div class="col-lg-8"> @yield('content') </div>
                  
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}"></script>
        @stack('js_scripts')
    </body>
</html>
