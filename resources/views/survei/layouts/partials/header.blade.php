<header>
		<nav class="border-gray-200 bg-white px-4 py-4 dark:bg-gray-800 lg:px-6">
				<div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between">
						<a href="/ class="flex items-center">
								<img src="{{ asset('images') }}/logo/uml.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
								{{-- <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white"></span> --}}
						</a>
						<div class="flex items-center lg:order-2">
								<a href="#"
										class="mr-2 rounded-lg px-5 py-2.5 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800">Daftar</a>
								<a href="#"
										class="mr-2 rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Masuk</a>
								<button data-collapse-toggle="mobile-menu-2" type="button"
										class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 lg:hidden"
										aria-controls="mobile-menu-2" aria-expanded="false">
										<span class="sr-only">Open main menu</span>
										<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
														d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
														clip-rule="evenodd"></path>
										</svg>
										<svg class="hidden h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd"
														d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
														clip-rule="evenodd"></path>
										</svg>
								</button>
						</div>
						<div class="hidden w-full items-center justify-between lg:order-1 lg:flex lg:w-auto" id="mobile-menu-2">
								<ul class="mt-4 flex flex-col font-medium lg:mt-0 lg:flex-row lg:space-x-8">
										<li>
												<a href="{{ route('home') }}" class="{{ Route::is('home') ? 'nav-item-active' : 'nav-item' }}"
														aria-current="page">Home</a>
										</li>
										<li>
												<a href="{{ route('survei') }}" class="{{ Route::is('survei') ? 'nav-item-active' : 'nav-item' }}">Isi
														Survei</a>
										</li>


										<li>
												<a href="#"
														class="block border-b border-gray-100 py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-700 lg:dark:hover:bg-transparent lg:dark:hover:text-white">Tentang
														Kami</a>
										</li>
										<li>
												<a href="#"
														class="block border-b border-gray-100 py-2 pl-3 pr-4 text-gray-700 hover:bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white lg:border-0 lg:p-0 lg:hover:bg-transparent lg:hover:text-primary-700 lg:dark:hover:bg-transparent lg:dark:hover:text-white">Kontak</a>
										</li>

								</ul>
						</div>
				</div>
		</nav>
</header>