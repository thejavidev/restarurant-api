<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Traits\FileUploader;
use Illuminate\Http\Response;

class QuestionController extends Controller
{
    use FileUploader;

    public function index()
    {
        return view('back.pages.question.index',[
            'question'=>Question::orderBy('id','desc')->get()
        ]);
    }


    public function create()
    {
        return view('back.pages.question.create');
    }


    public function store(StoreQuestionRequest $request)
    {
        Question::create([
            'q_text1_az'=>$request->q_text1_az,
            'q_text1_ru'=>$request->q_text1_ru,
            'q_text1_en'=>$request->q_text1_en,
            'q_text2_az'=>$request->q_text2_az,
            'q_text2_ru'=>$request->q_text2_ru,
            'q_text2_en'=>$request->q_text2_en,

        ]);

        toastr()->success('Question added successfully');

        return redirect()->route('question.index');
    }


    public function show(Question $question)
    {
        //
    }


    public function edit($id)
    {
        $question = Question::findOrfail($id);
        return view('back.pages.question.edit', compact('question'));
    }


    public function update(UpdateQuestionRequest $request, $id)
    {
        $question = Question::findOrfail($id);

        $question->update([
            'q_text1_az'=>$request->q_text1_az,
            'q_text1_ru'=>$request->q_text1_ru,
            'q_text1_en'=>$request->q_text1_en,
            'q_text2_az'=>$request->q_text2_az,
            'q_text2_ru'=>$request->q_text2_ru,
            'q_text2_en'=>$request->q_text2_en,
        ]);

        toastr()->success('Question updated successfully');

        return redirect()->route('question.index');
    }


    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        toastr()->success('Question deleted successfully');

        return redirect()->route('question.index');
    }
}
