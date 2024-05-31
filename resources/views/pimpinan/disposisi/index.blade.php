@extends('layout.main')

@section('title', 'Halaman Disposisi - Pimpinan')

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
    <div class="flex flex-wrap mt-2 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full overflow-x-auto p-5 min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex flex-col pb-4 mb-0 bg-white rounded-t-2xl">
                        <p class="text-lg text-black font-bold">Disposisi</p>
                        <a href="{{ route('pimpinan.disposisi.create') }}" type="button"
                            class="lg:w-[4%] w-[10%]  inline-block py-1 my-2 font-bold text-center uppercase align-middle transition-all bg-transparent border rounded-lg cursor-pointer border-indigo-800 hover:bg-indigo-800 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs text-indigo-800 hover:text-white">
                            <ion-icon name="add" class="w-6 h-6"></ion-icon>
                        </a>
                    </div>
                    <div class="flex-auto pb-2">
                        <div class="overflow-x-auto">
                            <table class="min-w-full mb-0 align-top border-collapse border border-gray-300 text-slate-500">
                                <thead class="align-bottom">
                                    <tr class="bg-gray-200">
                                        <th class="text-center px-1 py-3 border border-slate-300">
                                            No
                                        </th>
                                        <th class="text-start px-3 py-3 border border-slate-300">
                                            Nomor Surat
                                        </th>
                                        <th class="text-center px-3 py-3 border border-slate-300">
                                            Perihal
                                        </th>
                                        <th class="text-center px-3 py-3 border border-slate-300">
                                            Tujuan
                                        </th>
                                        <th class="text-center px-3 py-3 border border-slate-300">
                                            Batas Waktu
                                        </th>
                                        <th class="text-center px-3 py-3 border border-slate-300">
                                            Status
                                        </th>
                                        <th class="px-3 py-3 border border-slate-300">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($disposisis as $disposisi)
                                        <tr class="hover:bg-gray-100">
                                            <td class="text-center px-2 py-3 border border-slate-300">
                                                <p>
                                                    {{ ($disposisis->currentPage() - 1) * $disposisis->links()->paginator->perPage() + $loop->iteration }}
                                                </p>
                                            </td>
                                            <td class="px-3 py-3 border border-slate-300">
                                                <p class="mb-0 font-semibold leading-tight text-base">
                                                    {{ $disposisi->no_surat }}
                                                </p>
                                            </td>
                                            <td class="px-2 py-3 border border-slate-300">
                                                <p class="mb-0 font-semibold leading-tight text-base">
                                                    {{ $disposisi->perihal }}
                                                </p>
                                            </td>
                                            <td class="px-2 py-3 border border-slate-300">
                                                <p class="mb-0 font-semibold leading-tight text-base">
                                                    {{ $disposisi->pegawai }} - {{ $disposisi->position }}
                                                </p>
                                            </td>
                                            <td class="text-center px-2 py-3 border border-slate-300">
                                                <p class="mb-0 font-semibold leading-tight text-base">
                                                    {{ Carbon\Carbon::parse($disposisi->deadline)->isoFormat('D MMMM Y') }}
                                                </p>
                                            </td>
                                            <td class="text-center px-2 py-3 border border-slate-300">
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
                                            <td class="text-center px-1 py-3 border border-slate-300">
                                                <a href="{{ route('pimpinan.disposisi.show', $disposisi->id) }}"
                                                    type="button"
                                                    class="inline-block px-3 py-1 mr-3 mt-2 font-bold text-center uppercase align-middle transition-all bg-transparent border rounded-lg cursor-pointer border-green-600 hover:bg-green-600 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs text-green-600 hover:text-white"><ion-icon
                                                        name="eye" class="w-6 h-6"></ion-icon>
                                                </a>
                                                <a href="{{ route('pimpinan.disposisi.edit', $disposisi->id) }}"
                                                    type="button"
                                                    class="inline-block px-3 py-1 mr-3 mt-2 font-bold text-center uppercase align-middle transition-all bg-transparent border rounded-lg cursor-pointer border-yellow-300 hover:bg-yellow-300 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs text-yellow-300 hover:text-white"><ion-icon
                                                        name="create" class="w-6 h-6"></ion-icon>
                                                </a>
                                                <a href="#" type="button" id="{{ $disposisi->id }}"
                                                    noSurat="{{ $disposisi->no_surat }}"
                                                    class="HapusDisposisi inline-block px-3 py-1 mr-3 mt-2 font-bold text-center uppercase align-middle transition-all bg-transparent border rounded-lg cursor-pointer border-red-600 hover:bg-red-600 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs text-red-600 hover:text-white">
                                                    <ion-icon name="trash" class="w-6 h-6"></ion-icon>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="mt-3">
                                {{ $disposisis->links() }}
                            </div>
                        </div>
                    </div>
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

        //Delete
        $(document).on('click', '.HapusDisposisi', function(e) {
            e.preventDefault()

            const id = $(this).attr('id')
            const noSurat = $(this).attr('noSurat')

            Swal.fire({
                    title: "Yakin ?",
                    text: `Disosisi akan dihapus ?`,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus.",
                    cancelButtonText: "Batal."
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: `{{ url('pimpinan/disposisi/${id}') }}`,
                            type: "POST",
                            data: {
                                '_method': 'DELETE',
                                'id': id,
                            },
                            success: function(response) {
                                if (response.status == 200) {
                                    $('#ajax-alert').addClass(
                                        'alert fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow  dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800 z-10 mx-[350px]'
                                    ).show(function() {
                                        $(this).html(
                                            ` <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                    </svg>
                                        <span class="sr-only">Check icon</span>
                                    </div>
                                    <div class="ps-4 text-sm font-semibold">${response.message}</div>`
                                        )
                                    })
                                    setTimeout(() => {
                                        $('#ajax-alert').hide()
                                    }, 2000)
                                }
                                setTimeout(() => {
                                    location.reload()
                                }, 2000)
                            }
                        })
                    }
                })
        })
    </script>
@endsection
