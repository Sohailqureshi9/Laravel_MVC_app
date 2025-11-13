<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:190'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        DB::table('messages')->insert($data);

        return back()->with('success', 'Thanks! Your message was sent successfully.');
    }
}
