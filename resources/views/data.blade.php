<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Form</title>
  </head>
  <body>
    @if (session()->has('success'))
        <div class="alert alert-success text-center" role="alert">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    @foreach ($data as $item)
        <h1>{{$item['chanel']}}</h1>
        <p>{{$item->event}}</p>
        <p>{{$item['id']}}</p>
        <form action="/delete/{{$item->id}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger m-4">hapus</button>
        </form>
        <a href="{{ url('/edit',+$item->id) }}" class="btn btn-primary m-4">Edit</a>
    @endforeach
    <a class="btn btn-primary" href="/">Back</a>
    <a href="/export" class="btn btn-primary">Export Excel</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>