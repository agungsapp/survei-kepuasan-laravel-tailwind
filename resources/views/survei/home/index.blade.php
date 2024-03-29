@extends('survei.layouts.main')

@section('content')
		{{-- hero  --}}
		@include('survei.common.hero')



		<section class="bg-white dark:bg-gray-900">
				<div class="mx-auto max-w-screen-xl items-center gap-16 px-4 py-8 lg:grid lg:grid-cols-2 lg:px-6 lg:py-16">
						<div class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">
								<h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Mari Bersama Mewujudkan Kampus Idaman Lewat
										Kritik dan Saran Anda</h2>
								<p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to
										be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be
										simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
								<p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and
										quick.</p>
						</div>
						<div class="mt-8 grid grid-cols-2 gap-4">
								<img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
										alt="office content 1">
								<img class="mt-4 w-full rounded-lg lg:mt-10"
										src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
						</div>
				</div>
		</section>

		<section class="bg-gray-50 dark:bg-gray-900">
				<div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
						<div class="max-w-screen-lg text-gray-500 dark:text-gray-400 sm:text-lg">
								<h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Powering innovation at <span
												class="font-extrabold">200,000+</span> companies worldwide</h2>
								<p class="mb-4 font-light">Track work across the enterprise through an open, collaborative platform. Link
										issues across Jira and ingest data from other software development tools, so your IT support and operations
										teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
								<p class="mb-4 font-medium">Deliver great service experiences fast - without the complexity of traditional ITSM
										solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease.</p>
								<a href="#"
										class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
										Learn more
										<svg class="ml-1 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
														d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
														clip-rule="evenodd"></path>
										</svg>
								</a>
						</div>
				</div>
		</section>

		<section class="bg-white dark:bg-gray-900">
				<div class="mx-auto max-w-screen-xl px-6 py-8 sm:py-16">
						<div class="mx-auto max-w-screen-sm text-center">
								<h2 class="mb-4 text-xl font-extrabold leading-tight text-gray-900 dark:text-white lg:text-3xl">Berikan
										penilaian terbaikmu
										terkait pelayanan kampus</h2>
								<p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">silahkan isi survei dengan menekan tombol
										dibawah ini.</p>
								<a href="{{ route('survei') }}"
										class="mb-2 mr-2 rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Free
										Mulai isi survei</a>
						</div>
				</div>
		</section>
@endsection
