<?php

namespace App\Http\Controllers;

use File;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

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
        $count = DB::select('SELECT COUNT(*) as count FROM players WHERE quiz_id = ?', [$id]);
        
        $result[0]->count = $count[0]->count; 
        $questions = DB::select('SELECT * FROM questions WHERE quiz_id = ?', [$id]);
        return view('quizes.show', ['quiz' => $result[0], 'questions' => $questions]);
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

    //updatge quiz
    public function updateQuiz(Request $request, $id)
    {
        $result = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $file = $result[0]->qr_path;
        $file = str_replace('../../storage/qr/', '', $file);
        File::delete(public_path('storage/qr/' . $file));
        // unlink(storage_path('app/qr' . $file));
        // dd($file, is_file($file), Storage::delete($file));

        if (is_file($file)) {
            // 1. possibility
            Storage::delete($file);
            // 2. possibility

        } else {
            echo "File does not exist";
        }

        if ($request->hasFile('qr_path')) {
            $qr_path = $request->file('qr_path')->store('qr', 'public');
            $qr_path = '../../storage/' . $qr_path;
        } else {
            $qr_path = null;
        }
        $title = $request->input('title');
        $description = $request->input('description');
        $date = $request->input('date');
        $result = DB::update('UPDATE quizes SET title = ?, qr_path = ?, description = ?, date = ? WHERE id = ?', [$title, $qr_path, $description, $date, $id]);
        return redirect()->route('quizes');
    }

    public function deleteQuiz($id)
    {
        $result = DB::delete('DELETE FROM quizes WHERE id = ?', [$id]);
        return redirect()->route('quizes');
    }

    public function joinQuiz($id)
    {
        //     $result = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        // dd($result);
        $name = Cookie::get('player');
        DB::update('UPDATE players SET quiz_id = ? WHERE name = ?', [$id, $name]);
        return redirect()->route('quizes.start', $id);
        // return view('quizes.join', ['quiz' => $result[0]]);
    }
    public function quizScreen($id)
    {
        // $result = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        // $count = DB::select('SELECT COUNT(*) as count FROM players WHERE quiz_id = ?', [$id]);
        // $result[0]->count = $count[0]->count;
        return view('quizes.quiz');
    }
    public function getPlayers($id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);

        $result = DB::select('SELECT players.id as player_id, players.name as player_name, teams.name as team_name  FROM players LEFT JOIN teams ON players.team_id = teams.id WHERE players.quiz_id = ?', [$id]);
        $teams = DB::select('SELECT * FROM teams WHERE quiz_id = ?', [$id]);
        return view('quizes.showPlayers', ['players' => $result, 'quiz' => $quiz[0], 'teams' => $teams]);
    }

    public function startQuiz($id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $teams = DB::select('SELECT * FROM teams WHERE quiz_id = ?', [$id]);
        $players = DB::select('SELECT players.name as player_name, teams.name as team_name, teams.id as team_id, players.id as player_id FROM players LEFT JOIN teams on teams.id = players.team_id WHERE players.quiz_id = ?', [$id]);
        $questions = DB::select('SELECT * FROM questions WHERE quiz_id = ?', [$id]);
        
        return view('quizes.quizStart', ['quiz' => $quiz[0], 'teams' => $teams, 'players' => $players, 'questions' => $questions]);
    }

    public function activateQuiz($id)
    {
        $result = DB::update('UPDATE quizes SET is_active = 1 WHERE id = ?', [$id]);
        return redirect()->route('quizes.quizScreen', $id);
    }
}