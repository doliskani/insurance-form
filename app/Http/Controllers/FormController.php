<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use App\Models\Consumer;

class FormController extends Controller
{
 
    function show()
    {
        return view('form');    
    }

    function store(FormRequest $request)
    {

        $consumer = Consumer::whereEmail($request->email)
                ->orWhere("phone" , $request->phone)
                ->first();

        if($consumer)
            $consumer->update($request->only($request->consumerData()));
        else
            $consumer = Consumer::create($request->only($request->consumerData()));

        $consumer->submissions()->create($request->only($request->submissionData()));

        return response()->json(['status' => true]);

    }
}
