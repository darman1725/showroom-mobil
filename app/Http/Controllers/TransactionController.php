<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Car;
use App\Models\Customer;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        Transaction::create([
            'no_nota' => 'GR'.date('ymdhis'),
            'customer_id' => $customer->id,
            'car_id' => $request->car_id,
            'tanggal_pemesanan' => date('Y-m-d'),
            'tanggal_pengiriman' => $request->tanggal_pengiriman,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'status' => 'Pending',
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
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
    public function update(Request $request, Transaction $transaction)
    {
        //
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
}