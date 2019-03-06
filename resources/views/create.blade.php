<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Show Book</title>

    </head>
    <body>
       <div class="container">
            <h1>Add New Book</h1>
            <form action="/store" method="POST">
                @csrf
                <div class="form-group">
                  <label>Book Title:</label>
                  <input type="text" class="form-control" name="title" placeholder="Book Title">
                </div>
                <div class="form-group">
                  <label>Book Author:</label>
                  <input type="text" class="form-control" placeholder="Book Author" name="author">
                </div>
                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
       </div>
    </body>
</html>
