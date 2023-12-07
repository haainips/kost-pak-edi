<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\Room;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index() {
        $userId = Auth()->user()->id;
        $data = Order::where('user_id', $userId)->get();
        return view('pages.riwayat')->with('data', $data);
    }

    public function create($id) {
        $data = Room::find($id);
        return view('order.form')->with('data', $data);

        
    }

    public function store(Request $request) 
    {
        $data = $request->all();
        $qty = $request->input('masa_sewa');
        $kodeOrder = date('Ymd') + $qty + 1;


        $order = new Order();
        $order->kode_order       = $kodeOrder;
        $order->user_id          = Auth()->user()->id;
        $order->room_id          = $data['room_id'];
        $order->name             = $data['name'];
        $order->nohp             = $data['nohp'];
        $order->mulai_sewa       = $data['mulai_sewa'];
        $order->akhir_sewa       = $data['mulai_sewa'];
        $order->masa_sewa        = $data['masa_sewa'];
        $order->total_harga      = $data['totalharga'];
        
        $order->save();
        Alert::success('Hore!', 'Pesanan Berhasil Dibuat!');
        return redirect()->route('home');
        // return redirect('dashboard')->with(['success' => 'Data berhasil disimpan']);
    }

    public function bayar($id) 
    {
        $find_data = Order::find($id);


        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $find_data->id,
                'gross_amount' => $find_data->total_harga,
            ),
            'customer_details' => array(
                'name' => $find_data->name,
//                'email' => Auth()->user()->email,
                'phone' => $find_data->nohp,
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('pages.payment', [
            'token' => $snapToken,
            'data' => $find_data
        ]);
    }
    

    // public function history()
    // {
    //     $userId = Auth()->user()->id;
    //     $data = Order::where('user_id', $userId)->get();
    //     return view('pages.riwayat', compact('data'));
    // }
}
