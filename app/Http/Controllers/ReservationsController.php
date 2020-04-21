<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function getIndex() {
        return view('reservations.index', []);
    }

    public function getCreate() {
        return view('reservations.edit');
    }

    public function getEdit($id) {
        return view('reservations.edit', []);
    }

    public function postSave(Request $request) {
        // @todo post request naar db wegschrijven
        // adhv een model
    }
}
