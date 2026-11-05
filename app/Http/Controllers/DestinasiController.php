<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Support\Facades\Schema;

class DestinasiController extends Controller
{
    public function show(string $slug)
    {
        if (! Schema::hasTable('wisatas')) {
            abort(404);
        }

        $destination = Wisata::where('slug', $slug)->firstOrFail();

        $features = [
            'Pemandangan alam yang menawan dan tenang.',
            'Cocok untuk liburan keluarga, teman, atau traveler solo.',
            'Spot foto yang instagramable serta suasana santai.',
        ];

        return view('destination', compact('destination', 'features'));
    }
}
