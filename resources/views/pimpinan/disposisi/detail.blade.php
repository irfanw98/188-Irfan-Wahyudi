@extends('layout.main')

@section('title', 'Detail Disposisi - Pimpinan')

@section('head')
    <style>
        #content>ol {
            list-style-type: decimal !important;
        }

        #content>li {
            display: list-item !important;
        }
    </style>
@endsection

@section('content')
    <div class="flex flex-wrap mt-2 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full overflow-x-auto p-5 min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex flex-col pb-4 mb-0 bg-white rounded-t-2xl">
                        <p class="text-lg text-black font-bold">Disposisi</p>
                    </div>
                    <div class="flex-auto pb-2">
                        <div class="grid grid-cols-12 gap-3">
                            <div class="lg:col-span-12 col-span-12">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full px-2 border-collapse border border-gray-300 text-slate-500">
                                        <tbody>
                                            <tr>
                                                <th class="text-start w-[200px] px-3 py-3 border border-slate-300">Nomor
                                                    Surat
                                                </th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ $disposisi->no_surat }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-start w-[200px] px-3 py-3 border border-slate-300">Perihal
                                                </th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ $disposisi->purpose }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-start w-[200px] px-3 py-3 border border-slate-300">Tujuan
                                                    Kepada</th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ $disposisi->pegawai }} - {{ $disposisi->position }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-start w-[200px] px-3 py-3 border border-slate-300">Batas
                                                    Waktu</th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    {{ Carbon\Carbon::parse($disposisi->deadline)->isoFormat('D MMMM Y') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-start w-[200px] px-3 py-3 border border-slate-300">Status
                                                </th>
                                                <td class="text-start px-3 py-3 border border-slate-300">
                                                    @if ($disposisi->status == 1)
                                                        <span
                                                            class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
                                                            Belum Diterima
                                                        </span>
                                                    @else
                                                        <span
                                                            class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                                                            Diterima
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-start w-[200px] px-3 py-3 border border-slate-300">Isi</th>
                                                <td id="content" class="text-start pl-7 py-3 border border-slate-300">
                                                    {!! $disposisi->content !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-start mt-5">
                                        <a href="{{ route('pimpinan.disposisi.index') }}"
                                            class="border border-green-600 rounded-lg hover:bg-green-600 font-medium text-green-600 hover:text-white dark:text-green-500 hover:no-underline py-1.5 px-2 inline-flex items-center lg:order-1 order-2">
                                            <ion-icon name="arrow-back-circle-outline" class="text-lg px-1"></ion-icon>
                                            <span class="text-base">Kembali</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
