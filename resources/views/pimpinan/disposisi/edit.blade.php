@extends('layout.main')

@section('title', 'Edit Disposisi - Admin')

@section('content')
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6 class="text-base font-semibold leading-7 text-gray-900">Edit Disposisi</h6>

                    </div>

                    <form action="{{ route('pimpinan.disposisi.update', $disposisi->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="px-6 pb-8 border-b border-gray-900/10">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="tujuan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Didisposisikan
                                        Kepada</label>
                                    <div class="mt-2">
                                        <select id="tujuan" name="tujuan" autocomplete="tujuan"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                            @error('tujuan') is-invalid @enderror">
                                            <option disabled selected>-- Pilih Pegawai --</option>
                                            @foreach ($pegawais as $pegawai)
                                                <option value="{{ $pegawai->id }}"
                                                    @if ($pegawai->id == $disposisi->user_id) selected @endif>
                                                    {{ $pegawai->name }} - {{ $pegawai->position }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tujuan')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="suratmasuk" class="block text-sm font-medium leading-6 text-gray-900">Surat
                                        Masuk</label>
                                    <div class="mt-2">
                                        <select id="suratmasuk" name="suratmasuk" autocomplete="suratmasuk"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6"
                                            @error('suratmasuk') is-invalid @enderror">
                                            <option disabled selected>-- Pilih Surat Masuk --</option>
                                            @foreach ($suratmasuks as $suratmasuk)
                                                <option value="{{ $suratmasuk->id }}"
                                                    @if ($suratmasuk->id == $disposisi->incoming_letter_id) selected @endif>
                                                    {{ $suratmasuk->no_letter }} - {{ $suratmasuk->regarding }}</option>
                                            @endforeach
                                        </select>
                                        @error('suratmasuk')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="purpose" class="block text-sm font-medium leading-6 text-gray-900">
                                        Perihal
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="purpose" id="purpose" autocomplete="purpose"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('purpose') is-invalid @enderror value="{{ $disposisi->purpose }}">
                                        @error('purpose')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="deadline" class="block text-sm font-medium leading-6 text-gray-900">Batas
                                        Waktu</label>
                                    <div class="mt-2">
                                        <input type="date" name="deadline" id="deadline" autocomplete="deadline"
                                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            @error('deadline') is-invalid @enderror value="{{ $disposisi->deadline }}">
                                        @error('deadline')
                                            <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mt-3">
                                <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Isi</label>
                                <div class="mt-2">
                                    <textarea id="content" name="content" rows="3"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        @error('content') is-invalid @enderror>{!! $disposisi->content !!}</textarea>
                                </div>
                                @error('content')
                                    <div class="mt-1 text-sm font-semibold text-red-600">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mt-8 mb-1 flex items-center lg:justify-between justify-start gap-x-6">
                                <a href="{{ route('pimpinan.disposisi.index') }}"
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
    <script type="text/javascript">
        CKEDITOR.replace('content');
    </script>
@endsection
