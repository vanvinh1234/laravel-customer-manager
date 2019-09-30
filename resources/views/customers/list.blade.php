<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Customer List</title>
</head>
<body>
<h2 style="text-align: center; ">Customer List</h2>
<div class="container">
    <div class="col-12">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birth</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @if(count($customers)==0)
                <tr>
                    <td colspan="4">No data</td>
                </tr>
            @else
                @foreach($customers as $key=>$customer)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{$customer['name']}}</td>
                        <td>{{$customer['birth']}}</td>
                        <td>{{$customer['email']}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
