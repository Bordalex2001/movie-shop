<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Shopping Cart Example - Tutsmake.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-3">Laravel 11 Shopping Add To Cart Example - Tutsmake.com</h2>

    @php
    $totalQuantity = 0;
    @endphp

    @if(session('cart'))
    @foreach(session('cart') as $item)
        @php
        $totalQuantity += $item['quantity'];
        @endphp
    @endforeach
    @endif

    <div class="col-12">
        <div class="dropdown d-flex justify-content-between">
            <a class="btn btn-outline-dark" href="{{ url('cart-list') }}">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge text-bg-danger" id="cart-quantity">{{ $totalQuantity }}</span>
            </a>
            <form class="d-flex" role="search" method="get">
                <input class="form-control me-2" type="search" placeholder="Search movies" aria-label="Search" name="search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <a href="{{ route('add-new-movie') }}" class="btn btn-outline-success ms-2">Add new movie</a>
        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>

@yield('scripts')

</body>
</html>
