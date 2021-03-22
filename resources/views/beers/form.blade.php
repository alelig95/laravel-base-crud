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
    <a href="{{ route('beers.index') }}">
        <button type="submit" class="btn btn-primary home-button">
            <i class="fas fa-home"></i>
        </button>
    </a>

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

        <div class="form-group position-relative">
            <label for="type">Type</label>
            <input class="form-control {{ $errors->has('type') ? 'is-invalid' : ''}}" type="text" name="type" placeholder="Type" value="{{isset($beer) ? $beer->type : '' }}">
            <div class="invalid-tooltip">
                {{ $errors->first('type') }}
            </div>
        </div>

        <div class="form-group position-relative">
            <label for="nation">Nation</label>
            <input class="form-control {{ $errors->has('nation') ? 'is-invalid' : ''}}" type="text" name="nation" placeholder="Nation" value="{{isset($beer) ? $beer->nation : '' }}">
            <div class="invalid-tooltip">
                {{ $errors->first('nation') }}
            </div>
        </div>

        <div class="form-group position-relative">
            <label for="alcohol">Alcohol</label>
            <input class="form-control {{ $errors->has('alcohol') ? 'is-invalid' : ''}}" type="text" name="alcohol" placeholder="Alcohol" value="{{isset($beer) ? $beer->alcohol : '' }}">
            <div class="invalid-tooltip">
                {{ $errors->first('alcohol') }}
            </div>
        </div>

        <div class="form-group position-relative">
            <label for="image">Image</label>
            <input class="form-control {{ $errors->has('image') ? 'is-invalid' : ''}}" type="text" name="image" placeholder="Image URL" value="{{isset($beer) ? $beer->image : '' }}">
            <div class="invalid-tooltip">
                {{ $errors->first('image') }}
            </div>
        </div>

        <input type="submit" value="Send">
    </form>

</body>
</html>
