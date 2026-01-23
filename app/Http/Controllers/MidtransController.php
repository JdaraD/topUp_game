<?php

namespace App\Http\Controllers;

use App\Models\riwayatPembelian;
use Illuminate\Http\Request;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function callback()
    {
        $notif = new Notification();

        $order = riwayatPembelian::where('order_id', $notif->order_id)->first();

        if (!$order) {
            return response()->json(['message' => 'Order not found']);
        }

        if ($notif->transaction_status == 'settlement') {
            $order->update(['status' => 'Berhasil']);
        } elseif ($notif->transaction_status == 'pending') {
            $order->update(['status' => 'Pending']);
        } else {
            $order->update(['status' => 'Gagal']);
        }

        return response()->json(['message' => 'OK']);
    }
}
