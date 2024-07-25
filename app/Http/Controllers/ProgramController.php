<?php
namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProgramController extends Controller
{
    public function show($id)
    {
        $program = Program::findOrFail($id);
        $photos = collect($program->photos);
        $currentPage = request()->query('page', 1); 
        $perPage = 5; 
        $currentItems = $photos->slice(($currentPage - 1) * $perPage, $perPage)->values();
        $photos = new LengthAwarePaginator($currentItems, $photos->count(), $perPage, $currentPage, [
            'path' => route('program.show', ['id' => $id]),
        ]);
        
        return view('pages.program.detail', compact('program', 'photos'));
    }
    public function getPhotos($id)
    {
        $program = Program::findOrFail($id);
        $photos = $program->photos()->paginate(6);
        
        return response()->json($photos);
    }
}
