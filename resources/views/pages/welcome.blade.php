<x-default-layout>
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
    <header class="bg-white dark:bg-white">
        <section class="h-[screen] mt-[7rem]">
            <div class="lg:flex p-10">
                <div class="flex items-center justify-center w-full px-4 py-8 xl:h-[34rem] lg:h-[32rem] lg:w-1/2">
                    <div class="max-w-2xl border-4 border-black border-opacity-50 rounded-xl border-solid p-[5rem]">
                        <h2 class="text-3xl font-semibold text-gray-800 dark:text-black lg:text-4xl">Hunian Orang<span
                                class="text-blue-600 dark:text-blue-400"> Pintar</span></h2>

                        <p class="mt-4 text-sm text-gray-500 dark:text-gray-600 lg:text-base text-justify">Selamat datang di Kost Pak Edi
                            Miliran, destinasi hunian nyaman dan terjangkau di tengah kota Yogyakarta. Pengelolaan langsung
                            oleh Pak Edi, kami bangga menyediakan layanan penyewaan kost berkualitas dengan suasana keluarga
                            yang hangat.</p>

                        @if (Route::has('login'))
                            @auth
                                <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
                                    <a href="{{ url('/dashboard') }}"
                                        class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-white transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Get
                                        Started</a>
                                </div>
                            @endauth
                        @endif
                    </div>
                </div>
                <div class="w-full h-64 lg:w-1/2 lg:h-auto">
                    <div class="w-[30rem] h-[30rem] ml-[10rem] mt-8 bg-cover"
                        style="background-image: url({{ asset('storage/images/logo.png') }})">
                        <div class="w-[10rem] h-[10rem]"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white py-11 h-[60rem]" id="about">
            <div class="container max-w-5xl mx-auto m-8">
                <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    About Us
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="card">
                    <p class="mt-12 text-lg text-justify text-gray-700 ">Kost Pak Edi hadir sebagai solusi nyaman dan
                        terjangkau bagi para pencari hunian sementara.
                        Dengan komitmen untuk memberikan pelayanan terbaik, kami menyediakan fasilitas kost yang bersih,
                        aman, dan menyenangkan. Di Kost Pak Edi, kami memahami betapa
                        pentingnya memiliki tempat tinggal yang nyaman, dan itulah mengapa kami berdedikasi untuk
                        menciptakan lingkungan yang ramah, bersahabat, dan memberikan rasa
                        seperti rumah. Sebagai pilihan kost yang dapat diandalkan, Kost Pak Edi siap menyambut Anda
                        dengan layanan yang hangat dan fasilitas yang memenuhi kebutuhan sehari-hari.
                        Temukan kenyamanan tinggal Anda di Kost Pak Edi, tempat di mana rumah dan keramahan bertemu</p>
                </div>
                <div class="flex justify-between mt-10">
                    <img src="{{ asset('storage/images/kost2.jpeg') }}" width="400" height="300">
                    <img src="{{ asset('storage/images/kost1.jpeg') }}" width="400" height="300">
                </div>

            </div>
        </section>


        {{-- Place & Maps Section --}}
        <section class="bg-white h-screen">
            <div
                class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-[32rem] lg:py-16 lg:flex-row lg:items-center">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold tracking-wide text-gray-800 lg:text-4xl">Find
                            your premium new glasses exported from US</h1>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.05784399977694!2d110.388556632447!3d-7.797712065332317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1701998141257!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        {{-- </section>
        <section class="flex justify-center h-screen">
            <div class="mt-[10rem]">
                Visit Us At
            </div>
            <div class="py-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.05784399977694!2d110.388556632447!3d-7.797712065332317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1701998141257!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section> --}}
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    </header>
</x-default-layout>
