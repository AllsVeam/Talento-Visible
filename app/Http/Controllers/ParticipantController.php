<?php

namespace App\Http\Controllers;


class ParticipantController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
            '' => 'required',
        ]);
    }

    public function update()
    {

    }

    public function deletle()
    {

    }

}