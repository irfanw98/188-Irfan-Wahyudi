@extends('layout.main')

@section('title', 'Setting')

@section('content')
    {{-- Message Alert --}}
    <div id="ajax-alert" class="alert" style="display:none"></div>
    @if (session()->has('message'))
        <div class="mx-[350px]">
            <div id="alert"
                class="alert fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow  dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800 z-10"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ps-4 text-sm font-semibold">{{ session()->get('message') }}</div>
            </div>
        </div>
    @endif
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-base font-semibold leading-7 text-gray-900">Setting</h6>

                    </div>

                    <form action="{{ route('setting.update', $user->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="px-6 pb-8 border-b border-gray-900/10">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                        Nama
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="name"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('name') is-invalid @enderror value="{{ $user->name }}">
                                        @error('name')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Nomor
                                        Telepon</label>
                                    <div class="mt-2">
                                        <input type="text" name="phone" id="phone" autocomplete="phone"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('phone') is-invalid @enderror value="{{ $user->phone }}">
                                        @error('phone')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="position" class="block text-sm font-medium leading-6 text-gray-900">
                                        Posisi
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="position" id="position" autocomplete="position"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('position') is-invalid @enderror value="{{ $user->position }}">
                                        @error('position')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                                        Password (opsional)
                                    </label>
                                    <div class="mt-2">
                                        <input type="password" name="password" id="password"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('password') is-invalid @enderror value="">
                                        @error('password')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                        Email
                                    </label>
                                    <div class="mt-2">
                                        <input type="email" name="email" id="email" autocomplete="email"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('email') is-invalid @enderror value="{{ $user->email }}">
                                        @error('email')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <p class="text-sm font-bold text-black"><span class="text-red-600">*</span>Kosongkan
                                        password, jika tidak ingin ganti
                                        password!.</p>
                                </div>
                            </div>
                            <div class="mt-8 mb-1 flex items-center lg:justify-end justify-start gap-x-6">
                                <button type="submit"
                                    class="border border-indigo-600 rounded-lg hover:bg-indigo-600 font-medium text-indigo-600 hover:text-white dark:text-indigo-500 hover:no-underline py-1.5 px-2 inline-flex items-center lg:order-2 order-1">
                                    <ion-icon name="save-outline" class="text-lg px-1"></ion-icon>
                                    <span class="text-base">Simpan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        //Aler Check
        if ($("#alert").length) {
            setTimeout(() => {
                $('#alert').hide()
            }, 3000)
        }
    </script>
@endsection
