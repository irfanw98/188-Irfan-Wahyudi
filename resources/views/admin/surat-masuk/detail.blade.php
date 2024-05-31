@extends('layout.main')

@section('title', 'Detail Surat Masuk - Admin')

@section('content')
    <div class="flex flex-wrap mt-2 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full overflow-x-auto p-5 min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex flex-col pb-4 mb-0 bg-white rounded-t-2xl">
                        <p class="text-lg text-black font-bold">Surat Masuk</p>
                    </div>
                    <div class="flex-auto pb-2">
                        <div class="grid grid-cols-12 gap-3">
                            <div class="lg:col-span-5 col-span-12 lg:order-1 order-2">
                                <div class="overflow-x-auto">
                                    <table
                                        class="min-w-full p-2 text-start border-collapse border border-gray-300 text-slate-500">
                                        <thead>
                                            <tr>
                                                <th class="text-start px-3 py-3 border border-slate-300">Nomor Surat</th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ $suratmasuk->no_letter }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-start px-3 py-3 border border-slate-300">Pengirim</th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ $suratmasuk->pengirim }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-start px-3 py-3 border border-slate-300">Perihal Surat</th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ $suratmasuk->regarding }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-start px-3 py-3 border border-slate-300">Tanggal Surat</th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ Carbon\Carbon::parse($suratmasuk->date_letter)->isoFormat('D MMMM Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-start px-3 py-3 border border-slate-300">Tanggal Diterima
                                                </th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ Carbon\Carbon::parse($suratmasuk->date_received)->isoFormat('D MMMM Y') }}
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="text-start mt-5">
                                        <a href="{{ route('surat-masuk.index') }}"
                                            class="border border-green-600 rounded-lg hover:bg-green-600 font-medium text-green-600 hover:text-white dark:text-green-500 hover:no-underline py-1.5 px-2 inline-flex items-center lg:order-1 order-2">
                                            <ion-icon name="arrow-back-circle-outline" class="text-lg px-1"></ion-icon>
                                            <span class="text-base">Kembali</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-7 col-span-12 lg:order-2 order-1">
                                <iframe src="{{ asset('suratmasuk/' . $suratmasuk->file) }}" frameborder="0" width="100%"
                                    height="600vh"></iframe>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
