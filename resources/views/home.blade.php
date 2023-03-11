<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Giti Bala</title>
    <style>
        body {
            font-family: monospace;
            scroll-behavior: smooth;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Giti Bala</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-3" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link fs-3" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{route('logout')}}">
                            @csrf

                            <button style="border: none; background-color:transparent" class="nav-link fs-3"  type="submit" >Logout</i></button>

                        </form>

                    </li>
                    
                    @else
                    <li class="nav-item">
                        <a class="nav-link fs-3" aria-current="page" href="{{ route('login') }}">Login</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link fs-3" aria-current="page" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth


                </ul>
            </div>
        </div>
    </nav>

    <div class="container " style="margin-top:150px;">
        <div class="col-md-12">
            @if (count($posts)>0)
            @foreach ($posts as $post)
            <div class="border-bottom pb-3 mb-4">
                <h1 class="text-primary text-uppercase fw-bolder mb-2">{{$post->title}}</h1>
                <p><span class="text-primary fw-bold">Auther : </span>{{$post->user->name}}</p>
                <p>{{$post->body}}</p>
                <div class="d-flex justify-content-between">
                    <div class=""><span class="text-primary fw-bold">Posted : </span> {{$post->created_at->diffForHumans()}}</div>
                    <div class="">
                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge bg-warning text-dark">Warning</span>
                        <span class="badge bg-info text-dark">Info</span>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="alert alert-info mt-4" role="alert">
                Something went wrong!
            </div>

            @endif




        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>