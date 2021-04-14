<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Daily news</title>
</head>
<body>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Rating</th>
                <th scope="col">Datetime</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <th scope="row">{{$item->title}}</th>
                        <td>{{$item->content}}</td>
                        <td>{{$item->rating}}</td>
                        <td>{{$item->datetime}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>