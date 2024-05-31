@extends('layout.main')

@section('title', 'Edit Surat Masuk - Admin')

@section('content')
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-base font-semibold leading-7 text-gray-900">Edit Surat Masuk</h6>

                    </div>

                    <form action="{{ route('surat-masuk.update', $suratmasuk->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="px-6 pb-8 border-b border-gray-900/10">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="no_letter" class="block text-sm font-medium leading-6 text-gray-900">
                                        Nomor Surat
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="no_letter" id="no_letter" autocomplete="no_letter"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('no_letter') is-invalid @enderror value="{{ $suratmasuk->no_letter }}">
                                        @error('no_letter')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="sender_id"
                                        class="block text-sm font-medium leading-6 text-gray-900">Pengirim</label>
                                    <div class="mt-2">
                                        <select id="sender_id" name="sender_id" autocomplete="sender_id"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option disabled>-- Pilih Pengirim --</option>
                                            @foreach ($pengirims as $pengirim)
                                                <option value="{{ $pengirim->id }}"
                                                    @if ($pengirim->id == $suratmasuk->sender_id) selected @endif>{{ $pengirim->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="regarding"
                                        class="block text-sm font-medium leading-6 text-gray-900">Perihal</label>
                                    <div class="mt-2">
                                        <input type="text" name="regarding" id="regarding" autocomplete="regarding"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('regarding') is-invalid @enderror value="{{ $suratmasuk->regarding }}">
                                        @error('regarding')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="date_letter"
                                        class="block text-sm font-medium leading-6 text-gray-900">Tanggal Surat</label>
                                    <div class="mt-2">
                                        <input type="date" name="date_letter" id="date_letter" autocomplete="date_letter"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('date_letter') is-invalid @enderror
                                            value="{{ $suratmasuk->date_letter }}">
                                        @error('date_letter')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="date_received"
                                        class="block text-sm font-medium leading-6 text-gray-900">Tanggal Diterima</label>
                                    <div class="mt-2">
                                        <input type="date" name="date_received" id="date_received"
                                            autocomplete="date_received"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('date_received') is-invalid @enderror
                                            value="{{ $suratmasuk->date_received }}">
                                        @error('date_received')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="file" class="block text-sm font-medium leading-6 text-gray-900">Upload
                                        File</label>
                                    <div class="mt-2">
                                        <input type="file" name="file" id="file" autocomplete="file"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('file') is-invalid @enderror value="{{ old('file') }}">
                                        @error('file')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8 mb-1 flex items-center lg:justify-between justify-start gap-x-6">
                                <a href="{{ route('surat-masuk.index') }}"
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
