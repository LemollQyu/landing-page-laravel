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
    <body>


	<!-- Halaman Login -->

	


       <div class="w-3/4 flex justify-between items-center border px-5 rounded-full mt-5 mx-auto">
		<div class="">
			<a href="/" aria-current="page" class="w-28 h-18 inline-block" aria-label="home">
				<img src="./sitt.gif" loading="lazy" alt="A gif that reads &quot;SIT!&quot; Acting as the wordmark for the page" class="image-17">
			</a>
		</div>
			
			<ol class="flex items-center gap-8">
				<li>
					<a href="">About</a>
				</li>
				<li>
					<a href="">Project</a>
				</li>
			</ol>
	   </div>
	   
	   <div class="w-3/4 mx-auto  flex justify-between mt-20 px-5">
	   
	   <div class="w-1/2">
			<h1 class="font-bold text-4xl">Stay In Feels</h1>
			<h1 class="font-light text-3xl">I'am Sorry</h1>
		</div>
		
		<div class="w-1/2">
			<h2 class="font-medium text-2xl">01</h2>
			<p class="text-justify font-light">
				Stay In Touch Studio (or SIT for short) is a generalist design, web, and motion studio based in San Francisco, CA. We create beautiful things for good people. SIT was founded in 2020 by Patrick Perkins.
			</p>
		</div>
		
	   </div>
	   
	   <div class="w-3/4 mx-auto mt-10">
		<img class="w-full h-full object-cover" src="./view.jpg" />
	   
	   </div>
	   
	   <div class="mt-10
	   w-3/4 px-20 mx-auto">
		<h1 class="font-medium text-2xl mb-5">02</h2>
		<p class="font-extralight text-4xl text-justify">
			Stay In Touch is a visual design consultancy that specializes in multidisciplinary branding for early-stage startups in the music industry and beyond. As generalist designers, we aren't held captive to any single domain, instead comfortably spanning photography, motion design, copywriting, and illustration. We only work with good people.
		</p>
	   
	   
	   </div>
	 
    </body>
</html>
