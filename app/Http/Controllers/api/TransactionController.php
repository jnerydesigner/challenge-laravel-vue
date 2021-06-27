<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionCollection;
use App\Http\Resources\TransactionResource;
use App\Transaction;
use App\TransactionsType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::select("*")
                                    ->orderBy('created_at', 'desc')
                                    ->get();

        return $transactions->toArray();
    }


    public function store(Request $request)
    {


        // $transaction = Transaction::create($request->all());

        // return $transaction;


        $income = Transaction::where('type', 1)->sum('amount');
        $outcome = Transaction::where('type', 2)->sum('amount');
        $saldo = $income - $outcome;

        $valor = $saldo - $request->input('amount');

        if($request->input('type') === '1'){
            $transaction = Transaction::create($request->all());

            return $transaction;
        }elseif($valor < 0 && $request->input('type') === '2'){
            $transaction = Transaction::where('type', 2)->first();

            return $transaction;
        }else{
            $transaction = Transaction::create($request->all());

            return $transaction;
        }

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function countTransactions($type_id){
        $transactionCount = Transaction::where('type', $type_id)->sum('amount');


        $transactionCount = number_format($transactionCount, 2, ',', '.');

        return $transactionCount;
    }

    public function totalTransactions($id){
        $transactionCount1 = Transaction::where('type', 1)->sum('amount');
        $transactionCount2 = Transaction::where('type', 2)->sum('amount');
        $total = $transactionCount1 - $transactionCount2;

        $total = number_format($total, 2, ',', '.');

        return $total;
    }

    public function getTransaction($type_id){
        $transaction = Transaction::where('type', $type_id)->first();

        return $transaction;
    }
}
