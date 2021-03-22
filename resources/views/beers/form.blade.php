<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>
</head>
<body>

    @php
        if (isset($edit) && !empty($edit)) {
            $method = 'PUT';
            $url = route('beers.update', compact('beer'));
        } else {
            $method = 'POST';
            $url = route('beers.store');
        }
    @endphp

<div class="container">
    <form action="{{ $url }}" method="post">
        @csrf
        @method($method)

        <div class="form-group position-relative">
            <label for="name" class="form-label">Name</label>
            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" placeholder="Name" value="{{isset($beer) ? $beer->name : '' }}">
            <div class="invalid-tooltip">
                {{ $errors->first('name') }}
            </div>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input class="form-control {{ $errors->has('type') ? 'is-invalid' : ''}}" type="text" name="type" placeholder="Type">
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

</body>
</html>
