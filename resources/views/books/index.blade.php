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
    <h1>Enter your complete name</h1>

    <!-- 1. point to the appropriate form handler with the proper HTTP request method -->
    <form action="/register-user" method="post">
    <!-- 2. add the cross site request forgery blade tag here -->
    @csrf
    <div class="row">
        <div class="col col-md-6">
            <label>First Name:</label>
            <input type="text" name="first_name" class="form-control">
        </div>
        <div class="col col-md-6">
            <label>Last Name:</label>
            <input type="text" name="last_name" class="form-control">
        </div>
    </div>
    <hr />
    <div class="row">
        <button class="btn btn-primary btn-lg">Select Books</button>
    </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>