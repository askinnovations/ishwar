<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockTransferController extends Controller
{
    public function index(){
        return view('admin.stock_transfer.index');
    }
}
