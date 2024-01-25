<!DOCTYPE html>
<html lang="en" class="">

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>UML | Survei</title>
		<meta name="description"
				content="Get started with a free landing page built with Tailwind CSS and the Flowbite Blocks system.">
		<link href="./output.css" rel="stylesheet">

		{{-- fontawesome cdn --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
				integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
				crossorigin="anonymous" referrerpolicy="no-referrer" />

		@vite('resources/css/app.css')
</head>

<body>

		{{-- header --}}
		@include('survei.layouts.partials.header')

		@yield('content')


		@include('survei.layouts.partials.footer')

		<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>

</html>
