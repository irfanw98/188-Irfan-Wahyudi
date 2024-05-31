@extends('layout.main')

@section('title', 'Tambah Pegawai - Admin')

@section('content')
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-base font-semibold leading-7 text-gray-900">Tambah Pegawai</h6>

                    </div>

                    <form action="{{ route('pegawai.store') }}" method="POST">
                        @csrf
                        <div class="px-6 pb-8 border-b border-gray-900/10">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                                        Nama
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" autocomplete="name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('name') is-invalid @enderror value="{{ old('name') }}">
                                        @error('name')
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
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('email') is-invalid @enderror value="{{ old('email') }}">
                                        @error('email')
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
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('position') is-invalid @enderror value="{{ old('position') }}">
                                        @error('position')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Nomor
                                        Telepon</label>
                                    <div class="mt-2">
                                        <input type="text" name="phone" id="phone" autocomplete="phone"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('phone') is-invalid @enderror value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 mb-1 flex items-center lg:justify-between justify-start gap-x-6">
                                <a href="{{ route('pegawai.index') }}"
                                    class="border border-green-600 rounded-lg hover:bg-green-600 font-medium text-green-600 hover:text-white dark:text-green-500 hover:no-underline py-1.5 px-2 inline-flex items-center lg:order-1 order-2">
                                    <ion-icon name="arrow-back-circle-outline" class="text-lg px-1"></ion-icon>
                                    <span class="text-base">Kembali</span>
                                </a>
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
@endsection
