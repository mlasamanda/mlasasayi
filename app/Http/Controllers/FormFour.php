<?php

namespace App\Http\Controllers;

use App\Models\Four;
use Illuminate\Http\Request;

class FormFour extends Controller
{
    public function four(){
        return view('user.four');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fournumber' => ['required', 'string', 'max:255'],
            'fourschool' => ['required', 'string', 'max:255'],

        ]);
    }

    public function store(Request $request)
    {
        $student = new Four;
        $student->fournumber = $request->input('fournumber');
        $student->fourschool = $request->input('fourschool');
        $student->save();
        return redirect()->back()->with('status', 'student was added');
    }
}
