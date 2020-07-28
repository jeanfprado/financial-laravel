<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayReceiveController extends Controller
{
    public function PayReceive()
    {
        $settled = true;
        $settled_at = @now();
    }
}
