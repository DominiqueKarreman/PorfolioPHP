<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class TeamsController extends Controller
{
    //
    
    public function index($id)
    {
        
        $teams =  DB::select('SELECT *, quizes.id as quiz_id, teams.id as team_id, quizes.title as quiz_name, teams.created_at as created_at, teams.updated_at as updated_at FROM teams INNER JOIN quizes ON quizes.id = teams.quiz_id where quiz_id = ?', [$id]);
        foreach ($teams as $team) {
            //get player count per team 

            $players = DB::select('SELECT COUNT(*) FROM players WHERE team_id = ?', [$team->team_id]);
           
            $count = $players[0]->{'COUNT(*)'};
            $team->count = $count;
        }
        // dd($teams);
 
        return view('teams.index', ['teams' => $teams, 'quiz_id' => $id ]);
 
    }
    public function join($id, $team_id)
    {
        $player = DB::select('SELECT * FROM players WHERE name = ?', [Cookie::get('player')]);
        $player_id = $player[0]->id;
      
        $return = DB::update('UPDATE players SET team_id = ? WHERE id = ?', [$team_id, $player_id]);
        return redirect()->route('quizes.quizScreen', $id);
    }
    public function storeTeam(Request $request, $id)
    {
        date_default_timezone_set('Europe/Amsterdam');
        //post request to teams
        $check = DB::select('SELECT * FROM teams WHERE name = ? AND quiz_id = ?', [$request->name, $id]);
        if ($check) {
            dd($check);
        }

        $return = DB::insert('INSERT INTO teams (quiz_id, name, created_at, updated_at) VALUES (?, ?,?,?)', [$id, $request->name, now(), now()]);
        
        DB::update('UPDATE players SET team_id = ? WHERE name = ?', [DB::getPdo()->lastInsertId(), $request->player]);
        return redirect()->route('quizes.quizScreen', $id);
    }
}
