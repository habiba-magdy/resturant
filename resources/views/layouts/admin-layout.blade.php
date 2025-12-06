<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar bg-light mt-4">
            <ul class="nav flex-column py-4">
            <h3>Resturant admin</h3>

            <li class="nav-item"><a href="{{route('dashboard') }}" class="nav-link">Dashbord</a></li>
            <li class="nav-item"><a href="{{ route('categories.index') }}" class="nav-link">Category</a></li>
            <li class="nav-item"><a href="{{ route('meals.index') }}" class="nav-link">Meal</a></li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger">Layout</button>
                </form>
            </li>
            </ul>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>