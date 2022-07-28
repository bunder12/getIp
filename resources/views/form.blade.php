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
    <div style="height: 100vh" class="container d-flex align-items-center justify-content-center">
      <form action="/freebet" method="POST" class="card d-flex flex-column align-items-center justify-content-center bg-danger p-4">
        @csrf
        <h1 style="width: 400px;margin-bottom:30px; color: white;">Form Freebet</h1>
        <div class="mb-4 w-100">
        <input type="text" name="idGame" id="idGame" class="form-control" placeholder="Masukan id anda" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
        <div class="mb-4 w-100">
          <select class="form-select" aria-label="Default select example" name="chanel" id="chanel">
            <option selected>Nama Chanel</option>
            <option value="Asia77">Asia77</option>
            <option value="Yes77">Yes77</option>
            <option value="Pop77">Pop77</option>
          </select>
        </div>
        <div class="mb-4 w-100">
          <input type="text" class="form-control" name="event" id="event" placeholder="Event Web" aria-label="Recipient's username" aria-describedby="button-addon2">
        </div>
        <div class="mb-4 w-100">
          <select class="form-select" aria-label="Default select example" name="web" id="web">
            <option selected>Nama Web</option>
            <option value="1">Asia77</option>
            <option value="2">Yes77</option>
            <option value="2">Pop77</option>
          </select>
        </div>
        <div class="mb-4 w-100">
          <select class="form-select" aria-label="Default select example" name="member" id="member">
            <option selected>Type Member</option>
            <option value="1">New Member</option>
            <option value="2">Old Member</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">Save</button>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>