<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Books</title>
</head>
<body>
<div class="container-sm">
    <h1>Hello {{ $first_name }} {{ $last_name }}!</h1>

    <!-- 1. point to the appropriate form handler with the proper HTTP request method -->
    <form action="/reserve-books" method="POST">
    @csrf
    @foreach ($books as $book)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="books[]" value="{{ $book['code'] }}">
        <label class="form-check-label">
            <!-- 2. Display the Book TITLE, AUTHOR, and YEAR PUBLISHED -->
            <strong>{{ $book['title'] }}</strong> by {{ $book['author'] }}, {{ $book['year_published'] }}
        </label>
    </div>
    @endforeach
    <hr />
    <div class="row">
        <button class="btn btn-primary btn-lg">Reserve Books</button>
    </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>