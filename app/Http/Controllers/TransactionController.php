<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Car;
use App\Models\Customer;
use Illuminate\Http\Request;
use PDF;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order()
    {
        $transactions = Transaction::where('status', 'Pending')->orderByDesc('created_at')->get();
        return view('transactions.order', compact('transactions'));
    }

    public function history()
    {
        $transactions = Transaction::where('status', 'Selesai')->orderByDesc('created_at')->get();
        return view('transactions.history', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $car = Car::with('brand')->where('id', $id)->first();
        return view('transactions.create', compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_ktp' => 'required|max:20',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_pengiriman' => 'required',
            'jenis_pembayaran' => 'required',
        ]);

        $customer = new Customer;
        $customer->no_ktp = $request->no_ktp;
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->no_hp = $request->no_hp;
        $customer->email = $request->email;
        $customer->jenis_kelamin = $request->jenis_kelamin;
        $customer->tanggal_lahir = $request->tanggal_lahir;
        $customer->save();

        $transaction = new Transaction;
        $transaction->no_nota = 'GR'.date('ymdhis');
        $transaction->customer_id = $customer->id;
        $transaction->car_id = $request->car_id;
        $transaction->tanggal_pemesanan = date('Y-m-d');
        $transaction->tanggal_pengiriman = $request->tanggal_pengiriman;
        $transaction->jenis_pembayaran = $request->jenis_pembayaran;
        $transaction->status = 'Pending';
        $transaction->save();

        return view('transactions.success', ['id' => $transaction->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::find($id);
        return view('transactions.detail', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->update([
            'status' => 'Selesai',
        ]);

        $pdf = PDF::loadview('transactions.invoice', compact('transaction'));
        return $pdf->stream();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function bukti($id)
    {
        $transaction = Transaction::find($id);
        $pdf = PDF::loadview('transactions.bukti', compact('transaction'));
        return $pdf->download();
    }
    
    public function cetakNota($id)
    {
        $transaction = Transaction::find($id);
        $pdf = PDF::loadview('transactions.invoice', compact('transaction'));
        return $pdf->stream();
    }
}
