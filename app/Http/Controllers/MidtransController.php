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

        $orderId = str_replace('ORDER-', '', $notif->order_id);
        $transactionStatus = $notif->transaction_status;

        $order = riwayatPembelian::find($orderId);

        if (!$order) return;

        if (in_array($transactionStatus, ['settlement', 'capture'])) {
            $order->update(['status' => 'paid']);
        } elseif ($transactionStatus === 'pending') {
            $order->update(['status' => 'pending']);
        } else {
            $order->update(['status' => 'failed']);
        }
    }
}
