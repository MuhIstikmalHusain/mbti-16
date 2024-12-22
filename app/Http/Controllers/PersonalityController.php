<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personality;


class PersonalityController extends Controller
{
    public function personalitys()
    {
        //Tipe Kepribadian
        // Ambil semua data dari tabel personalities
        $personalityType = Personality::all();
        return view('dashboards.personality', compact('personalityType'));
    }


    public function details($type)
    {
        
        $personality = Personality::where('type', $type)->first();

        // Jika tidak ditemukan, arahkan ke halaman 404
        if (!$personality) {
            abort(404, 'Personality not found');
        }

        return view(
        'dashboards.details', compact('personality'));
        // return view('dashboards.detailsss', compact('personality'));
    }

}
