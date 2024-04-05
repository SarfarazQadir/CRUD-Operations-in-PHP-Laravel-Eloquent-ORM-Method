<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Fetch Students Data</title>
    <style>
        table{
            margin-top: 100px
        }
        table th {
            background-color: rgb(0, 158, 251);
            color: #fff;
        }
        .table-hover tr:hover {
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    <center>
        <table class="table table-hover" border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                    <th>Section</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($result as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->age}}</td>
                    <td>{{$row->class}}</td>
                    <td>{{$row->section}}</td>
                    <td>
                        <a href="delete/{{ $row->id}}">
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </a>
                    </td>
                    <td>
                        <a href="update/{{ $row->id}}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</body>
</html>
