<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<form action="" method="POST">
    @csrf
<input type="text" name="name" id="name">
<input type="email" name="email">
<input type="password" name="password" id="password">
<select name="" id="">
@foreach ($roles as $role)
<option value='{$role->name}'></option>
@endforeach
</select>
<button type="submit"> save</button>

</form>
</body>
</html>