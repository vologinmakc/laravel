<?php

namespace App\Http\Controllers;

use App\models\Note;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function actionMain()
    {
        $v = view("main");
        $v->notes = Note::all();
        return $v;
    }

    public function formHandler(Request $request)
    {
        $note = new Note();
        $note->name = $request->post("name");
        $note->text = $request->post("text");
        $note->save();
        return redirect(route("main"));
    }
}
