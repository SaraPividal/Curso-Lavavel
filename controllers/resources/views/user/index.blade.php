<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User list: </h1>
    <ul>
        @forelse ($users as $user)
            <li>Name: {{$user->name}}, Email: {{$user->email}}, Address: {{$user->adress}}, Zip Code: {{$user->zip_code}}</li>
        @empty
            <li>List empty</li>
        @endforelse
    </ul>
</body>
</html>