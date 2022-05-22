<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Support\Facades\DB;

class DashboardPelayananController extends Controller
{
    public function index()
    {
        return view('dashboard.pelayanan.pelayanan-dashboard', [
            'title' => 'Pelayanan',
            'pendaftaran' => Pendaftaran::with('pelayanan')->get()
        ]);
    }
    public function show(Pendaftaran $pendaftaran)
    {
        return view('dashboard.pelayanan.pelayanan-show', [
            'title' => 'Pelayanan: ' . $pendaftaran->judul,
            'pelayanan' => $pendaftaran->with('pelayanan')->get()
        ]);
    }
}
