<x-payment-layout>
<div class="w-full ml-10 max-w-md px-8 py-4 mt-16 bg-white rounded-xl shadow-lg border-solid ">
    <h2 class="mt-2 text-2xl font-semibold text-gray-800 md:mt-0 ">{{$data->kode_order}}</h2>
    <div class="main">
        <p class="mt-2 text-xl text-gray-600">{{$data->name}}</p>
        <p class="mt-2 text-lg text-gray-600">0{{$data->nohp}}</p>
        <p class="mt-2 text-lg text-gray-600">Rp {{number_format($data->total_harga, 0, ',', '.')}}</p>
    </div>

    <div class="flex justify-end mt-4">
        <a href="#" class="text-lg font-medium text-blue-600 dark:text-blue-300">
            <button id="pay-button" class="px-6 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                Bayar Sekarang
            </button>
        </a>
    </div>
</div>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>
        <script type="text/javascript">
        document.getElementById('pay-button').onclick = function(){
            // SnapToken acquired from previous step
            snap.pay('{{$token}}', {
            // Optional
            onSuccess: function(result){
                /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onPending: function(result){
                /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            },
            // Optional
            onError: function(result){
                /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
            }
            });
        };
    </script>
{{-- <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$token}}', {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                alert("payment success!");
                console.log(result);
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
        })
    });
</script> --}}
</x-payment-layout>