<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4">Registration Form</h2>
        <form action="insert" method="post" class="space-y-4">
            @csrf
            <input type="text" placeholder="Enter Your Name" name="name" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            <input type="number" placeholder="Enter Your Age" name="age" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            <input type="number" placeholder="Enter Your Class" name="class" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            <input type="text" placeholder="Enter Your Section" name="section" class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Register</button>
        </form>
    </div>
</body>
</html>
