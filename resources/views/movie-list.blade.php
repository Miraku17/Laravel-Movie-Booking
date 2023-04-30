<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Customer List</h2>
                <div style="margin-right:120px;float:right;">
                    <a href="{{url('add-book')}}">Add</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Movie</th>
                            <th>Screen</th>
                            <th>Show Time</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($data as $movie)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$movie->firstName}}</td>
                            <td>{{$movie->lastName}}</td>
                            <td>{{$movie->phone}}</td>
                            <td>{{$movie->movie}}</td>
                            <td>{{$movie->screen}}</td>
                            <td>{{$movie->showtime}}</td>
                            <td>{{$movie->date}}</td>
                            <td>Edit | Delete</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>