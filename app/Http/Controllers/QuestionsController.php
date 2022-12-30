<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class QuestionsController extends Controller
{
    //
    public function index($id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $questions = DB::select('SELECT  id, title, question FROM questions WHERE quiz_id = ?', [$id]);

        return view('questions.index', ['quiz' => $quiz[0], 'questions' => $questions]);
    }
    public function create($id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        return view('questions.create', ['quiz' => $quiz[0]]);
    }
    public function store(Request $request, $id)
    {

        if ($request->hasFile('img_path')) {
            $img_path = $request->file('img_path')->store('questionIMG', 'public');
            $img_path = '../../storage/' . $img_path;
        } else {
            $img_path = null;
        }


        $title = $request->input('title');
        $question = $request->input('question');

        $result = DB::insert('INSERT INTO questions (title, question, quiz_id, img_path) VALUES (?, ?, ?,?)', [$title, $question, $id, $img_path]);
        return redirect()->route('quizes.questions', $id);
    }
    public function edit($id, $question_id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $question = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        return view('questions.edit', ['question' => $question[0], 'quiz' => $quiz[0]]);
    }

    public function update(Request $request, $id, $question_id)
    {
        $result = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        $file = $result[0]->img_path;
        $file = str_replace('../../storage/questionIMG/', '', $file);
        File::delete(public_path('storage/questionIMG/' . $file));
        // unlink(storage_path('app/qr' . $file));
        // dd($file, is_file($file), Storage::delete($file));

        if (is_file($file)) {
            // 1. possibility
            Storage::delete($file);
            // 2. possibility

        } else {
            echo "File does not exist";
        }

        if ($request->hasFile('img_path')) {
            $img_path = $request->file('img_path')->store('questionIMG', 'public');
            $img_path = '../../storage/' . $img_path;
        } else {
            $img_path = $file;
        }

        $title = $request->input('title');
        $question = $request->input('question');
      
        $result = DB::update('UPDATE questions SET title = ?, question = ?, img_path = ? WHERE id = ?', [$title, $question, $img_path, $question_id]);
        return redirect()->route('quizes');

    }
}