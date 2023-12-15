<x-app-layout>

    <div class="">
        <style>
            .gradient {
                background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
            }
        </style>
        <div class="mx-auto  ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <header class="bg-white dark:bg-white">
                        <div class="lg:flex p-5">
                            <div
                                class="flex items-center justify-center mt-10 w-full px-6 py-8 xl:h-[34rem] lg:h-[32rem] lg:w-1/2">
                                <div class="transition ease-in-out delay-100 hover:scale-110 max-w-2xl shadow-2xl border-4 border-black border-opacity-50 rounded-xl border-solid p-[5rem]">
                                    <h2 class="text-3xl font-semibold text-gray-800 dark:text-black lg:text-4xl">Hunian
                                        Orang <span class="text-blue-600 dark:text-blue-400"> Pintar</span></h2>

                                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-400 lg:text-lg text-justify font-bold">Selamat datang
                                        di Kost Pak Edi Miliran,
                                        destinasi hunian nyaman dan terjangkau di tengah kota Yogyakarta. Pengelolaan
                                        langsung oleh Pak Edi,
                                        kami bangga menyediakan layanan penyewaan kost berkualitas dengan suasana
                                        keluarga yang hangat.</p>

                                    <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
                                        <a href="#room"
                                            class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-white transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Pesan
                                            Kamar
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                                <div class="w-[25rem] h-[25rem] lg:w-3/4 lg:h-full bg-cover mb-[10]"
                                    style="background-image: url({{ asset('storage/images/logo3.jpeg') }})">
                                    <div class="w-full h-full"></div>
                                </div>
                            </div>
                        </div>
                        <section class="bg-white py-8 h-[50rem]" id="room">
                            <div class="container max-w-5xl mx-auto m-8">
                                <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                                    Rooms
                                </h2>
                                <div class="w-full mb-4">
                                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                                </div>
                                <div class="flex mt-[3rem] justify-center gap-8 items-center card">

                                    {{-- Room Section --}}
                                    @foreach ($data as $item)
                                        <div
                                            class="max-w-xs transition ease-in-out  overflow-hidden bg-white rounded-lg shadow-lg border-solid border-2 hover:scale-110">

                                            <div class="px-4 py-2">
                                                <h1 class="pt-2 text-xl font-bold text-gray-800 text-center">{{$item->tipe}}</h1>
                                                <p class="mt-1 text-sm text-gray-600 pt-4 underline">Fasilitas</p>
                                                <ul class="mt-1 text-sm text-gray-800"><a>{{ $item->fasilitas }}</a>
                                                </ul>
                                            </div>

                                            <img class="object-cover w-full h-55 mt-2"
                                                src="{{ Storage::url('public/') . $item->gambar }}">

                                            <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                                                <h1 class="text-lg font-bold text-white">IDR {{ $item->harga }}</h1>
                                                <h2 class="text-white pr-4"> / Bulan</h2>
                                                    @if ($item->qty == 0)
                                                        <a>
                                                            <button disabled class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">
                                                                Kamar Kosong</button>
                                                        </a>
                                                    @else
                                                        <a href=" {{ url('order/' . $item->id) }} ">
                                                            <button class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Pesan
                                                            Kamar</button>
                                                        </a>
                                                    @endif
                                            </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    {{-- <x-cardroom/>
                                    <x-cardroom/>
                                    <x-cardroom/> --}}
                                </div>

                            </div>
                        </section>

                        
                    </header>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
