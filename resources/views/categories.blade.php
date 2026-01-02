<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name={{$name}} ></x-navbar>
    @if(session('category'))
    <div class="bg-green-800 text-white pl-5">{{session('category')}}</div>
    @endif
    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">

         <div class=" bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login<h2>
            <form action="/add-category" method="post" class="space-y-4">
                @csrf
                <div>
                    <label for="" class="text-gray-600 mb-1">Add Category<label>
                     <input type="text" placeholder="Enter category Name" name="category"
                     class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">    
            </div>
                <button type="submit" class="w-full bg-blue-500 px-4 py-2 rounded-xl text-white">Add</button>
            </form>
        </div>
        <div class="w-200">
            <h1 class="text-2xl text-blue-500">Category List</h1>
            <ul class="border border-gray-200">
                <li>
                    <ul class="flex justify-between">
                       <li class="w-30"> S. No</li>
                       <li class="w-70"> Name</li>
                       <li class="w-70"> Creator</li>
                       <li class="w-30"> Action</li>
                    </ul>
                </li>
               @foreach($categories as $category)
               <li class="even:bg-gray-200">
                    <ul class="flex justify-between">
                       <li?> {{$category->id}}</li>
                       <li?> {{$category->name}}</li>
                       <li?> {{$category->creator}}</li>
                       <li?> delete</li>
                    </ul>
                </li>
               @endforeach
            </ul>
       </div>     
    </div>
</body>
</html>