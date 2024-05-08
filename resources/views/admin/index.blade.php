@extends('layout.main')

@section('content')
    <div class="flex flex-wrap my-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-full lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div
                    class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                        <h6>Authors table</h6>
                    </div>

                    <div class="p-4 overflow-x-auto">
                        <table
                            class="border-collapse border border-slate-400 items-center w-full align-top text-slate-500 rtl:text-right  dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="text-center">
                                        No</th>
                                    <th class="px-3 py-3">
                                        Function</th>
                                    <th class="px-3 py-3">
                                        Status</th>
                                    <th class="px-3 py-3">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        <p>1</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 font-semibold leading-tight text-xs">Manager</p>
                                    </td>
                                    <td>
                                        <span
                                            class="bg-gradient-to-tl from-green-600 to-lime-400 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="font-semibold leading-tight text-xs text-slate-400">
                                            Edit </a>
                                    </td>
                                </tr>
                                <tr class="bg-blue-600">
                                    <td>
                                        <div>
                                            <p>2</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0 font-semibold leading-tight text-xs">Manager</p>
                                    </td>
                                    <td>
                                        <span
                                            class="bg-gradient-to-tl from-green-600 to-lime-400 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="font-semibold leading-tight text-xs text-slate-400">
                                            Edit </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
