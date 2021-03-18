<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Beers</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Nation</th>
            <th scope="col">Alcohol</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $beers as $beer )
                <tr>
                    <th scope="row">{{ $beer->id }}</th>
                    <td>{{ $beer->name }}</td>
                    <td>{{ $beer->type }}</td>
                    <td>{{ $beer->nation }}</td>
                    <td>{{ $beer->alcohol }}</td>
                    <td><img src="{{ $beer->image }}" width="190" height="300" alt=""></td>
                </tr>
            @endforeach
        </tbody>
      </table>

</body>
</html>
