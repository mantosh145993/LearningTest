<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Useres</title>
</head>
<body>
    <h1 class="aling_center">User List</h1>
    <table border="3" align="center" >
     <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Mobile</td>
            <td>Email</td>
            <td>Pin</td>
        </tr>
     </thead>
     <tbody>
        @foreach($results as $result)
        <tr>
            <td>{{$result->id}}</td>
            <td>{{$result->name}}</td>
            <td>{{$result->mobile}}</td>
            <td>{{$result->email}}</td>
            <td>{{$result->pin}}</td>
        </tr>
     </tbody>
       @endforeach
    </table>

</body>
</html>
<style>
    .aling_center{
        text-align: center;
    }
</style>