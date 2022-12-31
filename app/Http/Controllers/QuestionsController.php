<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cookie;
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
        $type = $request->input('type');
        $result = DB::insert('INSERT INTO questions (title, question, quiz_id, type, img_path) VALUES (?, ?, ?,?,?)', [$title, $question, $id, $type, $img_path]);

        $answerString = $request->input('answer');
        $answerArray = explode('_', $answerString);
        DB::insert('INSERT INTO answers (correctAnswer, option1, option2, option3, question_id) VALUES (?, ?, ?, ?, ?)', [$answerArray[0], $answerArray[1], $answerArray[2], $answerArray[3], DB::getPdo()->lastInsertId()]);

        return redirect()->route('quizes.questions', $id);
    }
    public function edit($id, $question_id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $question = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        $answers = DB::select('SELECT * FROM answers WHERE question_id = ?', [$question_id]);
        $answerString = $answers[0]->correctAnswer . '_' . $answers[0]->option1 . '_' . $answers[0]->option2 . '_' . $answers[0]->option3;
        return view('questions.edit', ['question' => $question[0], 'quiz' => $quiz[0], 'answerString' => $answerString]);
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
            $img_path = '../../storage/' . $file;
        }

        $title = $request->input('title');
        $question = $request->input('question');

        $result = DB::update('UPDATE questions SET title = ?, question = ?, img_path = ? WHERE id = ?', [$title, $question, $img_path, $question_id]);
        $answersString = $request->input('answer');
        $answersArray = explode('_', $answersString);
        $result = DB::update('UPDATE answers SET correctAnswer = ?, option1 = ?, option2 = ?, option3 = ? WHERE question_id = ?', [$answersArray[0], $answersArray[1], $answersArray[2], $answersArray[3], $question_id]);

        return redirect()->route('quizes.questions', $id);

    }
    public function getAnswers($id, $question_id)
    {
        $answers = DB::select('SELECT * FROM answers WHERE question_id = ?', [$question_id]);
        return view('questions.answers', ['answers' => $answers[0], 'question_id' => $question_id, 'id' => $id]);
    }

    public function getResults($id, $question_id, $answer, $volgorde)
    {
        $volgorde = explode('_', $volgorde);

        $name = Cookie::get('player');
        $answers = DB::select('SELECT * FROM answers WHERE question_id = ?', [$question_id]);
        $player = DB::select('SELECT * FROM players WHERE name = ?', [$name]);
        $question = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        if ($answers[0]->correctAnswer == $answer) {
            $results = 'Correct';
            if ($player[0]->right == null) {
                DB::update('UPDATE players set `right` =  1 WHERE id = ?', [$player[0]->id]);
            } else {

                DB::update('UPDATE players set `right` = `right` + 1 WHERE id = ?', [$player[0]->id]);
            }
        } else {
            $results = 'Wrong';
            if ($player[0]->right == null) {
                DB::update('UPDATE players set wrong =  1 WHERE id = ?', [$player[0]->id]);
            } else {

                DB::update('UPDATE players set wrong = wrong + 1 WHERE id = ?', [$player[0]->id]);
            }
        }
        $correct = $answers[0]->correctAnswer;
        // dd($id, $question_id, $answer, $results);
        // dd($answers[0], $question[0], $answer, $quiz[0]);
        return view('quizes.active.results', ['answer' => $volgorde, 'question' => $question[0], 'givenAnswer' => $answer, 'quiz' => $quiz[0], 'correct' => $correct]);
    }
    public function masterQuestion($id, $question_id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $question = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        $answers = DB::select('SELECT * FROM answers WHERE question_id = ?', [$question_id]);
        $answers = $answers[0];
        $options = [$answers->option1, $answers->option2, $answers->option3, $answers->correctAnswer];
        shuffle($options);


        return view('quizes.master.question', ['quiz' => $quiz[0], 'question' => $question[0], 'answer' => $options]);
    }
    public function activeQuestion($id, $question_id)
    {
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $question = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        $answers = DB::select('SELECT * FROM answers WHERE question_id = ?', [$question_id]);
        $answers = $answers[0];
        $options = [$answers->option1, $answers->option2, $answers->option3, $answers->correctAnswer];
        shuffle($options);
       

        return view('quizes.active.question', ['quiz' => $quiz[0], 'question' => $question[0], 'answer' => $options]);
    }
    public function nextQuestion($id, $question_id, $answer, $volgorde)
    {
        $masterCurrentQuestion = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $masterCurrentQuestion = $masterCurrentQuestion[0]->current_question_id;
        if($question_id == $masterCurrentQuestion){
            return redirect()->route('questions.results', [$id, $question_id, $answer, $volgorde]);
        }
        $question_ids = DB::select('SELECT * FROM questions WHERE quiz_id = ?', [$id]);
        $question_ids = array_column($question_ids, 'id');
        $questions_length = count($question_ids);

        $index = array_search($question_id, $question_ids);
        if($index == $questions_length - 1){
            return redirect()->route('quizes.active.end', $id);
        }
        $index = $index + 1;
        $nextQuestion = $question_ids[$index];
        return redirect()->route('quizes.active.question', [$id, $nextQuestion]);
        

    }
    public function nextQuestionMaster($id, $question_id)
    {
        $question_ids = DB::select('SELECT * FROM questions WHERE quiz_id = ?', [$id]);
        $question_ids = array_column($question_ids, 'id');
        $questions_length = count($question_ids);

        $index = array_search($question_id, $question_ids);
        if($index == $questions_length - 1){
            DB::update('UPDATE quizes set current_question_id = ? WHERE id = ?', [-1, $id]);
            return redirect()->route('quizes.master.end', $id);
        }
        $index = $index + 1;
        $nextQuestion = $question_ids[$index];
        DB::update('UPDATE quizes set current_question_id = ? WHERE id = ?', [$nextQuestion, $id]);
        // dd($question_ids, $index, $nextQuestion);
        return redirect()->route('quizes.master.question', [$id, $nextQuestion]);


    }
    public function resultsMaster($id, $question_id, $volgorde)
    {
        $volgorde = explode('_', $volgorde);
        $quiz = DB::select('SELECT * FROM quizes WHERE id = ?', [$id]);
        $question = DB::select('SELECT * FROM questions WHERE id = ?', [$question_id]);
        $answers = DB::select('SELECT * FROM answers WHERE question_id = ?', [$question_id]);
        $correct = $answers[0]->correctAnswer;
        return view('quizes.master.results', ['answer' => $volgorde, 'correct' => $correct, 'question' => $question[0], 'quiz' => $quiz[0], 'answers' => $answers[0]]);

    }
    public function endQuizMaster (){
        return view('quizes.master.end');
    }
    public function endQuiz (){
        return view('quizes.active.end');
    }
    



}