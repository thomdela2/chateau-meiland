<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getIndex() {
        return view('clients.index');
    }

    public function getCreate() {
        return view('clients.edit');
    }

    public function getEdit($id) {
        // dump($id);
        return view('clients.edit');
    }

    public function postSave(Request $request) {
        // dd('We zijn hier aangekomen');

        return redirect()->route('clients');
    }
}
