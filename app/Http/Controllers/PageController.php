<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Pasar Digital',
                'description' => 'Website yang menyediakan informasi tentang pasar yang ada di daerah Surabaya.',
                'image' => 'PasarDigital.png',
                'link' => '/projects/pasar-digital'
            ],
            [
                'title' => 'Koneksi Kita',
                'description' => 'Website khusus untuk mahasiswa Bisnis Digital Telkom University Surabaya.',
                'image' => 'KoneksiKita.png',
                'link' => '/projects/koneksi-kita'
            ],
            [
                'title' => 'ZaStoreGames',
                'description' => 'Website Top-up game termurah dan terpercaya.',
                'image' => 'ZaStore.png',
                'link' => 'https://www.zastoregames.id/id'
            ]
        ];


        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact');
    }
}
