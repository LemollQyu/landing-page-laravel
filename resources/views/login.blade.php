<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    <body class="bg-zinc-300">

	<!-- Halaman Login -->

    <form class="mb-6 mx-auto w-1/2 bg-zinc-500 rounded-md px-5 py-5 mt-10">
        <h1 class="font-bold text-2xl mb-5">Login</h1>
            <div class="mb-4">
                <label htmlFor="brand" class="block mb-2 text-xl font-bold">Nama</label>
                <input 
                    type="text"
                    id="brand"
                    name="brand"
                    class="shadow appearance-none border border-gray-600  rounded w-full py-2 px-3"
                    required
                />
            </div>
            <div class="mb-4">
                <label htmlFor="model" class="block mb-2 text-xl font-bold">Nim</label>
                <input 
                    type="text"
                    id="model"
                    name="model"
                    class="shadow appearance-none border border-gray-600  rounded w-full py-2 px-3"
                    required
                />
            </div>
            <div class="mb-4">
                <label htmlFor="referenceNumber" class="block mb-2 text-xl font-bold">Prodi</label>
                <input 
                    type="text"
                    id="referenceNumber"
                    name="referenceNumber"
                    class="shadow appearance-none border border-gray-600  rounded w-full py-2 px-3"
                />
            </div>
            <a href="/home" class="bg-gray-600 hover:bg-gray-300 hover:text-black font-bold py-2 px-4 rounded">
                Log In
            </a>


    </body>
</html>
