<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        Inquiry::create($request->only([
            'product_id',
            'name',
            'company',
            'email',
            'phone',
            'message'
        ]));

        return back()->with('success', 'Inquiry sent. We will contact you soon.');
    }
}
