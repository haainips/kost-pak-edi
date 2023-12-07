<x-order-layout>

    <div class=" p-12">
        {{-- card --}}
        <div style="display: flex; justify-content: center;">
            <img class="object-cover object-center-top w-[20rem] h-[30rem]" src="{{Storage::url('public/').$data->gambar}}" alt="Article">
        </div>
        
            <div class="p-6 flex items-center justify-center ">
                <div class=" w-[40rem]">

                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        
                        
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3">
                                <div class="mb-5">
                                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Nama Lengkap
                                    </label>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="room_id" value="{{ $data->id }}">
                                    <input type="text" name="name" placeholder="Nama Lengkap"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3">
                                <div class="mb-5">
                                    <label for="nohp" class="mb-3 block text-base font-medium text-[#07074D]">
                                        No Telp
                                    </label>
                                    <div class="flex">
                                        <span class="inline-flex items-center px-3 text-sm text-black bg-gray-200 border border-e-0 border-gray-300 rounded-s-md">
                                            <p>62+</p>
                                        </span>
                                        <input type="text" name="nohp" required maxlength="11" minlength="11"
                                        class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                                        Mulai Sewa
                                    </label>
                                    <input type="date" name="mulai_sewa" id="date"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <input type="hidden" name="akhir_sewa" id="date">
                                        {{-- class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" /> --}}
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label for="time"  class="mb-3 block text-base font-medium text-[#07074D]">
                                        Rentang Sewa (Bulan)
                                    </label>
                                    <select name="masa_sewa" id="masa_sewa"
                                        placeholder="Bulan"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                        </div>
            
                        <div class="mb-5">
                            <label class="mb-3 block text-base font-medium text-[#07074D]">
                                Total Harga :
                            </label>
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input type="text" class="rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" readonly name="totalharga" id="totalharga" value="{{$data->harga}}">
                                </div>
                            </div>
                        </div>
            
                        <div>
                            <button
                                type="submit" class="hover:shadow-form rounded-md mt-5 bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Pesan
                            </button>
                        </div>
                    </form>
                </div>
        
                
            </div>
        
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the elements
            var masaSewaSelect = document.getElementById('masa_sewa');
            var totalHargaInput = document.getElementById('totalharga');
            var harga = parseFloat(<?php echo json_encode($data->harga); ?>); // Assuming $data->harga is a numeric value
    
            // Add an event listener to the masaSewaSelect element
            masaSewaSelect.addEventListener('change', function () {
                // Calculate total harga based on selected masa_sewa and update the totalharga input field
                var selectedMasaSewa = parseInt(masaSewaSelect.value);
                var totalHarga = selectedMasaSewa * harga;
    
                // Update the value of totalharga input
                totalHargaInput.value = totalHarga.toFixed(2); // You can adjust the number of decimal places if needed
            });
        });
    </script>
    
    

</x-order-layout>