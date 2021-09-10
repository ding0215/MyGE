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

        <div class="container" style="margin-top:5%">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Voters_id</th>
                        <th scope="col">ic</th>
                        <th scope="col">name</th>
                        <th scope="col">birthday</th>
                        <th scope="col">phone_no</th>
                        <th scope="col">email</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($voters as $voter)
                        <tr>
                            <th scope="row">{{ $voter->Voter_id }}</th>
                            <td>{{ $voter->Ic }}</td>
                            <td>{{ $voter->Name }}</td>
                            <td>{{ $voter->Birthday }}</td>
                            <td>{{ $voter->Phone_no }}</td>
                            <td>{{ $voter->Email }}</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><form method="POST" action="delete/{{ $voter->Voter_id }}">@csrf @method('DELETE')<input class="btn btn-danger" type="submit" value="Delete"></form></td>
                        </tr>
                    @empty 
                        <tr>
                            <td colspan="8" class="text-center">No voters</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </body>
</html>
