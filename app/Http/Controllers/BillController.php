<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BillController extends Controller
{
    public function confirmIndex() {

       $bill = Bill::all();
        return view('house.checkout', compact('house'));
    }

    public function confirmPost(Request $request) {
        $bill = new Bill();
        $bill->totalPrice = $request->totalPrice;
        $bill->checkIn = $request->checkIn;
        $bill->checkOut = $request->checkOut;
        $bill->house_id = $request->house_id;
        $bill->user_id = $request->user_id;

        // dd($request->all());
        $bill->save();
        // $request->session()->forget('userRent');
        return redirect()->route('bill.success');
    }

    public function success() {
        return view('house.confirm-success');
    }
}
