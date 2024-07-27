<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DNS1D;


class BarcodeController extends Controller
{
    public function generateBarcode()
    {
        // Generate a unique 10-digit number
        $number = str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT);

        // Generate the barcode using DNS1D
        $barcode = DNS1D::getBarcodePNG($number, 'C39');

        return view('barcode', ['number' => $number, 'barcode' => $barcode]);
    }
}
