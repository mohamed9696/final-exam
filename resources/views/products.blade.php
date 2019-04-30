<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <table>
        @foreach ($product as $myproduct) 
      <tr>
        <td> id: {{$myproduct->id}} </td>
        <td> name: {{$myproduct->name}} </td>
        <td> price: {{$myproduct->price}} </td>
        <td> category: {{$myproduct->catogrey_id}} </td>
        <td> description: {{$myproduct->description}} </td>
        </br>
    </tr> 
    @endforeach 
</table>
</body>
</html>