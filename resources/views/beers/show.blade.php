<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beer</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="product-container">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{$beer->image}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$beer->name}}</h5>
            <p class="card-text">{{$beer->nation}}</p>
            <a href="/beers" class="btn btn-primary">Home</a>
            </div>
        </div>
    </div>
</body>
</html>
