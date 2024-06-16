<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function aydSehat(Request $request)
    {
        // Data statis
        $images = [
            "https://picsum.photos/940/650?random=1",
            "https://picsum.photos/940/650?random=2",
            "https://picsum.photos/940/650?random=3",
            "https://picsum.photos/940/650?random=4",
            "https://picsum.photos/940/650?random=5",
            "https://picsum.photos/940/650?random=6",
            "https://picsum.photos/940/650?random=7",
            "https://picsum.photos/940/650?random=8",
            "https://picsum.photos/940/650?random=9",
            "https://picsum.photos/940/650?random=10",
            "https://picsum.photos/940/650?random=11",
            "https://picsum.photos/940/650?random=12",
            "https://picsum.photos/940/650?random=13",
            "https://picsum.photos/940/650?random=14",
            "https://picsum.photos/940/650?random=15",
            "https://picsum.photos/940/650?random=16"
        ];

        $page = $request->input('page', 1);
        $perPage = 8;
        $offset = ($page - 1) * $perPage;
        $pagedImages = array_slice($images, $offset, $perPage);

        $totalPages = ceil(count($images) / $perPage);

        return view('pages.program.ayd-sehat', compact('pagedImages', 'page', 'totalPages'));
    }

    // Function to handle 'ayd-cerdas' route
    public function aydCerdas()
    {
        // Your logic for 'ayd-cerdas' can be added here
        // For example, returning a view named 'ayd-cerdas'
        return view('pages.program.ayd-cerdas');
    }

    // Function to handle 'ayd-mandiri' route
    public function aydMandiri()
    {
        // Your logic for 'ayd-mandiri' can be added here
        // For example, returning a view named 'ayd-mandiri'
        return view('pages.program.ayd-mandiri');
    }
}
