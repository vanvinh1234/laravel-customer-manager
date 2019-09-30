<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            '0' => [
                'id' => 1,
                'name' => 'Long',
                'birth' => '1995-07-07',
                'email' => 'longthanh@gmail.com'
            ],
            '1' => [
                'id' => 2,
                'name' => 'Nam',
                'birth' => '1997-08-08',
                'email' => 'tiennam@email.com'
            ],
            '2' => [
                'id' => 3,
                'name' => 'Thanh',
                'birth' => '1997-09-09',
                'email' => 'thanhthanh@mail.com'
            ]
        ];
        return view('customers.list',compact('customers'));
    }
}
