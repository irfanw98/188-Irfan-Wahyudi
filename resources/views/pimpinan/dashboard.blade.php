@extends('layout.main')

@section('title', 'Halaman Dashboard - Pimpinan')

@section('content')
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <p class="text-lg text-black font-bold">Dashboard</p>
                    </div>

                    <div class="p-4 overflow-x-auto">
                        <div class="grid grid-cols-12 gap-3">
                            <div class="lg:col-span-4 col-span-12">
                                <div
                                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap -mx-3">
                                            <div class="flex-none w-2/3 max-w-full px-3">
                                                <div>
                                                    <p class="mb-0 font-sans font-semibold leading-normal text-md">
                                                        Disposisi
                                                    </p>
                                                    <h5 class="mb-0 font-bold text-xl">
                                                        {{ $JumlahDisposisi }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                                <div
                                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                    <ion-icon name="send"
                                                        class="text-lg relative top-3.5 text-white"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-4 col-span-12">
                                <div
                                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap -mx-3">
                                            <div class="flex-none w-2/3 max-w-full px-3">
                                                <div>
                                                    <p class="mb-0 font-sans font-semibold leading-normal text-md">
                                                        Surat Masuk
                                                    </p>
                                                    <h5 class="mb-0 font-bold text-xl">
                                                        {{ $JumlahSuratMasuk }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                                <div
                                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                    <ion-icon name="mail-open"
                                                        class="text-lg relative top-3.5 text-white"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-4 col-span-12">
                                <div
                                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap -mx-3">
                                            <div class="flex-none w-2/3 max-w-full px-3">
                                                <div>
                                                    <p class="mb-0 font-sans font-semibold leading-normal text-sm">
                                                        Surat Keluar
                                                    </p>
                                                    <h5 class="mb-0 font-bold">
                                                        {{ $JumlahSuratKeluar }}
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="w-4/12 max-w-full px-3 ml-auto text-right flex-0">
                                                <div
                                                    class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-2xl">
                                                    <ion-icon name="mail"
                                                        class="text-lg relative top-3.5 text-white"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
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
