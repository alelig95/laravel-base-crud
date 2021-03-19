<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{route('beers.store')}}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" name="type" placeholder="Type">
            </div>

            <div class="form-group">
                <label for="nation">Nation</label>
                <input class="form-control" type="text" name="nation" placeholder="Nation">
            </div>

            <div class="form-group">
                <label for="alcohol">Alcohol</label>
                <input class="form-control" type="text" name="alcohol" placeholder="Alcohol">
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input class="form-control" type="text" name="image" placeholder="Image URL">
            </div>

            <input type="submit" value="Send">
        </form>
    </div>

</body>
</html>
