<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    User Dashborad
    <form action="{{route('logout')}}" method="post">
    @csrf
    <input type="submit" class="btn btn-secondary" value="logout">
    </form>
</body>
</html>
