<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class PlayersController extends Controller
{
    //
    public function login()
    {
        return view('players.login');
    }
    public function storePlayer(Request $request)
    {

        if (Cookie::get('player') != null) {
            Cookie::queue(Cookie::forget('player'));
        }

        //post request to players 
        $return = DB::insert('INSERT INTO players (name) VALUES (?)', [$request->name]);
        //give token to player
        $minutes = 6000;
        // $cookie = cookie('name of cookie', 'value of cookie', $minutes);
        Cookie::queue('player', $request->name, $minutes);
        // return response('Hello World')->cookie($cookie);
        return redirect()->route('quizes');

    }
    public function getQuizes()
    {

        $result = DB::select('SELECT * FROM quizes');
        return view('players.quizes.index', ['quizes' => $result]);
    }
    public function getQuiz($id)
    {
        $result = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        return view('players.quizes.show', ['quiz' => $result[0]]);
    }
    public function logout()
    {
        Cookie::queue(Cookie::forget('player'));
        return redirect()->route('quizes');
    }

    public function returnCookie()
    {
        $value = Cookie::get('player');
        return $value;
    }

}