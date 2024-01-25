@extends('survei.layouts.main')

@section('content')
		<section class="bg-gray-50 dark:bg-gray-800">
				<div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-16 lg:px-6">
						<div class="mx-auto mb-8 max-w-screen-md lg:mb-16">
								<h2 class="mb-4 text-center text-2xl font-bold text-gray-900 dark:text-white lg:text-4xl lg:font-extrabold">Mari
										Bersama
										Mewujudkan Kampus
										Idaman Lewat
										Kritik dan Saran Anda
								</h2>
								{{-- <p class="text-gray-500 dark:text-gray-400 sm:text-xl">Here at Flowbite we focus on markets where technology,
										innovation, and capital can unlock long-term value and drive economic growth.</p> --}}
						</div>

						{{-- section survei form --}}
						<div class="space-y-8 md:space-y-0">
								@for ($i = 0; $i < 7; $i++)
										{{-- looping data dari database place --}}
										{{-- card wrapper looping start --}}
										<div
												class="block w-full rounded-lg border border-gray-200 bg-white p-6 shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
												<h5 class="mb-2 text-center text-base font-bold tracking-tight text-gray-900 dark:text-white lg:text-xl">
														Seberapa puas anda
														dengan layanan kampus selama ini ? </h5>

												{{-- radio button --}}
												<div class="flex items-baseline justify-center gap-4 py-8 lg:gap-10">
														@php
																$options = [
																    'sangat_buruk' => 'fa-face-dizzy',
																    'buruk' => 'fa-face-frown',
																    'biasa' => 'fa-face-smile',
																    'senang' => 'fa-face-smile-beam',
																    'senang_sekali' => 'fa-face-grin-stars',
																];
														@endphp

														{{-- loop wajib emoticon --}}
														@foreach ($options as $option => $icon)
																{{-- Option --}}
																<div class="mb-4 flex items-center">
																		<input id="{{ $option . '_' . $i }}" type="radio" value="{{ $option }}"
																				name="response_{{ $i }}" class="input_emot {{ 'peer' . $loop->iteration }}">
																		<label for="{{ $option . '_' . $i }}" class="label_emot">
																				<i class="fa-solid {{ $icon }} text-2xl text-slate-700 lg:text-4xl"></i>
																				<span>{{ ucfirst(str_replace('_', ' ', $option)) }}</span>
																		</label>
																</div>
														@endforeach



												</div>
										</div>
										{{-- card wrapper looping end --}}
								@endfor
						</div>
						{{-- section survei form end --}}

				</div>
		</section>

@endsection
