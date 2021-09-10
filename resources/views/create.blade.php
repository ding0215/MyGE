<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <!-- Camera -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    </head>
    <body class="antialiased">

        <div class="container">
        <form method="POST" action="/insert">
            @csrf
            <div class="form-group">
                <label>Identification card number</label>
                <input type="text" class="form-control" name="Ic" placeholder="Enter ic no">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="Name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="date" class="form-control" name="Birthday" placeholder="Enter your birthday">
            </div>
            <div class="form-group">
                <label>Phone number</label>
                <input type="text" class="form-control" name="Phone_no" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="Email" placeholder="Enter your email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>

    </body>
</html>
