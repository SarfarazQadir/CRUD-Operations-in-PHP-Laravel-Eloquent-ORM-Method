<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit / Update Student Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Edit / Update Student Form</h2>
        <form action="../edit/{{$result->id}}" method="post" class="bg-white rounded-lg shadow-md p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" value="{{$result->name}}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700 font-medium mb-2">Age</label>
                <input type="number" id="age" name="age" value="{{$result->age}}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="class" class="block text-gray-700 font-medium mb-2">Class</label>
                <input type="number" id="class" name="class" value="{{$result->class}}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="section" class="block text-gray-700 font-medium mb-2">Section</label>
                <input type="text" id="section" name="section" value="{{$result->section}}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring focus:border-blue-300">Update</button>
        </form>
    </div>
</body>
</html>
