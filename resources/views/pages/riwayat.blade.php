<x-riwayat-layout>
    <section class="container px-4 mx-auto p-10 mt-9">
        <h1 class="font-bold text-3xl mb-8">Riwayat Pemesanan</h1>
        <div class="flex flex-col">
            <div class="mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-300 md:rounded-lg shadow-md">
                        <table class="w-full divide-y divide-gray-200 dark:divide-gray-300 rounded-10">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        <div class="flex items-center gap-x-3">
                                            
                                            <span>Kode Pesanan</span>
                                            <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path
                                                    d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path
                                                    d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                            </svg>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        Mulai Sewa
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        Masa Sewa
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        No Hp
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        Id Kamar
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">
                                        Pesanan Dibuat
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-900">

                                    </th>
                                </tr>
                            </thead>

                            @foreach ($data as $room)
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-300 dark:bg-gray-100">
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3 ">
                                                <span class="text-gray-900">{{ $room->id }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span class="text-gray-900">{{ $room->kode_order }}</span>
                                            </div>
                                        </td>

                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span class="text-gray-900">{{ $room->name }}</span>
                                            </div>
                                        </td>
                                        {{-- akhir sewa --}}
                                        {{-- <td
                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-900 whitespace-nowrap">
                                            {{ $room->mulai_sewa }}</td>
                                        @if ($room->mulai_sewa == $room->akhir_sewa)
                                            <td
                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-900 whitespace-nowrap">
                                                -</td>
                                        @else
                                            <td
                                                class="px-4 py-4 text-sm text-gray-500 dark:text-gray-900 whitespace-nowrap">
                                                {{ $room->akhir_sewa }}</td>
                                        @endif --}}
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span class="text-gray-900">{{ $room->mulai_sewa }}</span>
                                            </div>
                                        </td>
                                        <td
                                            class="px-4 py-4 text-sm text-gray-500 dark:text-gray-900 whitespace-nowrap">
                                            {{ $room->masa_sewa }} Bulan</td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            @if ($room->status == 'Unpaid')
                                                <div
                                                    class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9 3L3 9M3 3L9 9" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                    <h2 class="text-sm font-normal">{{ $room->status }}</h2>
                                                </div>
                                            @else
                                                <div
                                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $room->status }}</h2>
                                                </div>
                                            @endif

                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            0{{ $room->nohp }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            {{ $room->room_id }}</td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $room->created_at }}
                                            </div>
                                        </td>
                                        <td>
                                            @if ($room->status == 'Unpaid')
                                                <a href="{{url('payment/'. $room->id)}}">
                                                    <button
                                                        class="px-6 p-1 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                                                        Bayar Sekarang
                                                    </button>
                                                </a>
                                            @else
                                            
                                            @endif
                                        </td>
                                    </tr>

                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-riwayat-layout>
