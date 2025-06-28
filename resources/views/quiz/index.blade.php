@section('title', 'Quiz')

<x-app-layout>

    <div class="pt-[5rem] overflow-x-hidden">



        <div
            class="container hidden lg:flex gap-[20px] justify-between items-center mt-[-9.5rem] mx-auto h-full text-[#228B22] md:justify-end bg-transparent py-3">

            <img class="w-[5rem] hidden lg:block h-[5rem] rounded-full object-cover border border-[#228B22]"
                src="{{ asset('storage/img/admin.jpg') }}" alt="">
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                @click="toggleSideMenu" aria-label="Menu">
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class=md:hidden>

                <svg width="168" height="38" viewBox="0 0 168 38" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M42.176 31L46.368 19.08H48.704L52.896 31H50.88L49.968 28.328H45.12L44.192 31H42.176ZM45.664 26.648H49.392L47.28 20.408H47.808L45.664 26.648ZM54.9501 31V19.08H58.8541C60.0915 19.08 61.1635 19.3307 62.0701 19.832C62.9875 20.3227 63.6968 21.016 64.1981 21.912C64.6995 22.808 64.9501 23.848 64.9501 25.032C64.9501 26.2053 64.6995 27.2453 64.1981 28.152C63.6968 29.048 62.9875 29.7467 62.0701 30.248C61.1635 30.7493 60.0915 31 58.8541 31H54.9501ZM56.8381 29.32H58.8861C59.7288 29.32 60.4595 29.144 61.0781 28.792C61.7075 28.44 62.1928 27.944 62.5341 27.304C62.8755 26.664 63.0461 25.9067 63.0461 25.032C63.0461 24.1573 62.8701 23.4053 62.5181 22.776C62.1768 22.136 61.6968 21.64 61.0781 21.288C60.4595 20.936 59.7288 20.76 58.8861 20.76H56.8381V29.32ZM67.4495 31V19.08H69.2095L73.6895 25.288H72.8095L77.2095 19.08H78.9695V31H77.0975V21.304L77.8015 21.496L73.3055 27.64H73.1135L68.7135 21.496L69.3375 21.304V31H67.4495ZM82.0739 31V19.08H83.9619V31H82.0739ZM87.0733 31V19.08H88.5933L95.2813 28.312L94.5613 28.424V19.08H96.4333V31H94.9133L88.2733 21.704L88.9613 21.576V31H87.0733ZM102.978 31V19.08H107.314C108.114 19.08 108.818 19.2293 109.426 19.528C110.045 19.816 110.525 20.2427 110.866 20.808C111.208 21.3627 111.378 22.0293 111.378 22.808C111.378 23.576 111.202 24.2373 110.85 24.792C110.509 25.3467 110.034 25.7733 109.426 26.072C108.818 26.3707 108.114 26.52 107.314 26.52H104.866V31H102.978ZM104.866 24.84H107.362C107.789 24.84 108.162 24.7547 108.482 24.584C108.802 24.4133 109.053 24.1787 109.234 23.88C109.416 23.5707 109.506 23.208 109.506 22.792C109.506 22.376 109.416 22.0187 109.234 21.72C109.053 21.4107 108.802 21.176 108.482 21.016C108.162 20.8453 107.789 20.76 107.362 20.76H104.866V24.84ZM111.953 31L116.145 19.08H118.481L122.673 31H120.657L119.745 28.328H114.897L113.969 31H111.953ZM115.441 26.648H119.169L117.057 20.408H117.585L115.441 26.648ZM124.727 31V19.08H126.247L132.935 28.312L132.215 28.424V19.08H134.087V31H132.567L125.927 21.704L126.615 21.576V31H124.727ZM137.195 31V19.08H138.715L145.403 28.312L144.683 28.424V19.08H146.555V31H145.035L138.395 21.704L139.083 21.576V31H137.195ZM149.663 31V19.08H157.519V20.76H151.551V24.184H157.199V25.864H151.551V29.32H157.519V31H149.663ZM159.913 31V19.08H161.801V29.32H166.953V31H159.913Z"
                        fill="#22421A" />
                    <rect width="38" height="38" fill="url(#pattern0_16_3123)" />
                    <defs>
                        <pattern id="pattern0_16_3123" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_16_3123" transform="scale(0.01)" />
                        </pattern>
                        <image id="image0_16_3123" width="100" height="100"
                            xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>

            </div>
            {{-- @dd($quizs) --}}

            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class=" hidden lg:block align-middle rounded-full focus:shadow-outline-purple focus:outline-none f-plus text-[#228B22] text-[29px] font-[500]"
                        @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                        aria-haspopup="true">
                        {{ Auth::user()->name }}
                    </button>
                    <p class="hidden lg:block m-0 f-plus text-[#228B22] text-[23px] font-[400]">Admin</p>
                    <img class="w-[5rem] lg:hidden h-[5rem] rounded-full object-cover border border-[#228B22]"
                        src="{{ asset('storage/storage/images/avatar.png') }}" alt="" @click="toggleProfileMenu"
                        @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="{{ route('profile.edit') }}">
                        <x-slot name="icon">
                            <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </x-slot>
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <x-slot name="icon">
                                <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                    </path>
                                </svg>
                            </x-slot>
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>

        </div>

        <script>
            var msg = '{{ Session::get('status') }}';
            var exist = '{{ Session::has('status') }}';
            if (exist) {
                alert(msg);
            }
            var msg1 = '{{ Session::get('error') }}';
            var exist1 = '{{ Session::has('error') }}';
            if (exist1) {
                alert(msg1);
            }
        </script>
    </div>
    <div class="pt-20 pb-6">
        <a href="{{ route('quiz.create') }}"
            class="f-plus text-[16px] font-[500] text-[#228B22] flex items-center gap-[10px]">
            Add New Quiz <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="25" height="25" rx="3" fill="#228B22" />
                <path d="M12.75 7V18.5" stroke="white" stroke-width="2" stroke-linecap="round" />
                <path d="M18.5 12.75L7 12.75" stroke="white" stroke-width="2" stroke-linecap="round" />
            </svg>

        </a>
    </div>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-3">
        <div class="max-w-xl">
            <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Quiz Display Settings') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Set the number of quizzes that will appear sequentially on the tablet.") }}
                    </p>
                </header>


                <form method="post" action="{{ route('total.quiz') }}" class="mt-6 space-y-6">
                    @csrf

                    {{-- <div>
                        <x-input-label for="total_quiz" :value="__('Quiz')" />
                        <x-text-input id="total_quiz" name="total_quiz" type="text" class="mt-1 block w-full"
                            :value="old('total_quiz', $independentAd->total_quiz)" required autofocus
                            autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('total_quiz')" />
                    </div> --}}
                    <div>
                        <x-input-label for="quiz_time" :value="__('Quiz Time')" />
                        <x-text-input id="quiz_time" name="quiz_time" type="text" class="mt-1 block w-full"
                            :value="old('quiz_time', $independentAd->quiz_time)" required autofocus
                            autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('quiz_time')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'quiz-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition
                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">{{ __('Saved.')
                            }}</p>
                        @endif
                    </div>
                </form>
            </section>

        </div>
    </div>
    @foreach ($quizs as $quizNo => $questions) 
        <div class="bg-[#FFFFFF] rounded-[12px] pt-3 pb-10 mb-10 px-4">
        <h3 class="text-[#0D2927] f-plus font-[500] text-[24px]">Quiz {{ $quizNo }}</h3>


        <div class="overflow-x-auto">
            <table
                class="min-w-full bg-white table-auto w-full shadow-md mt-5 rounded border-separate border-spacing-y-3">
                <thead class="">
                    <tr class="f-inter text-[#0D2927] text-[20px] font-[500]">
                        <th class="w-1/6 px-2 py-2 text-center ">
                            <div class="flex items-center gap-[10px]">
                                <span
                                    class="f-inter text-[15px] lg:text-[20px] font-[500] text-[#0D2927] whitespace-nowrap">
                                    Question
                                </span>
                            </div>
                        </th>

                        <th class="w-1/6 px-2 py-2 text-right">
                            <div class="flex items-center gap-[10px] justify-end">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 2.5L8.39167 16.6417L10.4833 10.4833L16.6417 8.39167L2.5 2.5Z"
                                        stroke="#0D2927" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M10.834 10.8335L15.834 15.8335" stroke="#0D2927" stroke-width="1.66667"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span
                                    class="f-inter text-[15px] lg:text-[20px] font-[500] text-[#0D2927] whitespace-nowrap">
                                    Action
                                </span>
                            </div>
                        </th>
                    </tr>
                </thead>


                <tbody>
                    @forelse ($questions as $quiz)
                    <tr class="bg-[#EEF6F1] rounded-[4px] mb-3 py-4">

                        <td class="px-4 py-2 text-center text-[14px] f-inter font-[400] text-[#3C4151]">
                            {{ $quiz->question }}</td>


                        <td class="px-4 py-2">
                            <div class="flex justify-end pr-5">

                                <a href="{{ route('quiz.delete',$quiz->id) }}"
                                    onclick="return confirm('Are you sure you want to delete this quiz?')">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4H3.33333H14" stroke="#AC2221" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M12.6673 4.00016V13.3335C12.6673 13.6871 12.5268 14.0263 12.2768 14.2763C12.0267 14.5264 11.6876 14.6668 11.334 14.6668H4.66732C4.3137 14.6668 3.97456 14.5264 3.72451 14.2763C3.47446 14.0263 3.33398 13.6871 3.33398 13.3335V4.00016M5.33398 4.00016V2.66683C5.33398 2.31321 5.47446 1.97407 5.72451 1.72402C5.97456 1.47397 6.3137 1.3335 6.66732 1.3335H9.33398C9.68761 1.3335 10.0267 1.47397 10.2768 1.72402C10.5268 1.97407 10.6673 2.31321 10.6673 2.66683V4.00016"
                                            stroke="#AC2221" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6.66602 7.3335V11.3335" stroke="#AC2221" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.33398 7.3335V11.3335" stroke="#AC2221" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>

                                <a href="{{ route('quiz.edit',$quiz->id) }}">
                                    <svg class="h-5 w-6 ml-3 text-green-700" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr class="">
                        <td class=" w-full text-center">No quiz found.</td>
                    </tr>
                    @endforelse
                </tbody>




                {{-- <tbody class="">
                    @foreach ($advertisement as $ads)
                    @php
                    $fileExtension = pathinfo($ads->fileName, PATHINFO_EXTENSION);
                    $isImage = in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'webp']);
                    $isVideo = in_array(strtolower($fileExtension), ['mp4']);
                    @endphp

                    <tr class="bg-[#EEF6F1] rounded-[4px] mb-3 py-4">
                        <td class="px-4 py-2 f-inter font-[500] text-[16px]">
                            <ul class="list-disc list-inside">
                                <li class="text-[#3C4151]">
                                    @if ($isImage)
                                    <img id="img" src="{{asset('media/'.$ads->fileName)}}" alt="">
                                    @elseif($isVideo)
                                    <video width="320" height="240" controls>
                                        <source src="{{asset('media/'.$ads->fileName)}}" type="video/mp4">
                                    </video>
                                    @endif
                                </li>
                            </ul>
                        </td>
                        <td class="px-4 py-2 text-center text-[14px] f-inter font-[400] text-[#3C4151]">
                            {{$ads->tabName}}</td>
                        <td class="px-4 py-2">
                            <div class="flex justify-end pr-5">
                                <a href="{{route('deleteAds',$ads->id)}}" onclick="return confirm('Are you sure ?')">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4H3.33333H14" stroke="#AC2221" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M12.6673 4.00016V13.3335C12.6673 13.6871 12.5268 14.0263 12.2768 14.2763C12.0267 14.5264 11.6876 14.6668 11.334 14.6668H4.66732C4.3137 14.6668 3.97456 14.5264 3.72451 14.2763C3.47446 14.0263 3.33398 13.6871 3.33398 13.3335V4.00016M5.33398 4.00016V2.66683C5.33398 2.31321 5.47446 1.97407 5.72451 1.72402C5.97456 1.47397 6.3137 1.3335 6.66732 1.3335H9.33398C9.68761 1.3335 10.0267 1.47397 10.2768 1.72402C10.5268 1.97407 10.6673 2.31321 10.6673 2.66683V4.00016"
                                            stroke="#AC2221" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6.66602 7.3335V11.3335" stroke="#AC2221" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.33398 7.3335V11.3335" stroke="#AC2221" stroke-width="1.33333"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg> </a>

                                <a href="{{route('editAds',$ads->id)}}">
                                    <svg class="h-5 w-6 ml-3 text-green-700" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                    </svg></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
    @endforeach



    </div>
</x-app-layout>
