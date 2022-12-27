<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class QuizesController extends Controller
{
    //
    public function index()
    { 
        $result = DB::select('SELECT * FROM quizes');
        
        return view('quizes.index', ['quizes' => $result]);
    }
    public function getQuiz($id)
    {
        $result = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        return view('quizes.show', ['quiz' => $result[0]]);
    }
    public function editQuiz($id)
    {
        $result = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        return view('quizes.edit', ['quiz' => $result[0]]);
    }
    public function createQuiz()
    {
        return view('quizes.create');
    }
    public function storeQuiz(Request $request)
    {

        if ($request->hasFile('qr_path')) {
            $qr_path = $request->file('qr_path')->store('qr', 'public');
            $qr_path = '../../storage/' . $qr_path;
        } else {
            $qr_path = null;
        }
      
        
        $title = $request->input('title');
        $description = $request->input('description');
        $date = $request->input('date');
        $result = DB::insert('INSERT INTO quizes (title, description, date, is_active, qr_path) VALUES (?, ?, ?,?,?)', [$title, $description, $date, 0, $qr_path]);
        return redirect()->route('quizes');
    }
}
