<?php

namespace App\Http\Controllers;

use App\Mail\FormMail;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FromController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'multiline' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'file1' => 'file|max:20000000|mimes:jpeg,jpg,bmp,png,doc,docx,pdf,rar,zip',
            'file2' => 'file|max:20000000|mimes:jpeg,jpg,bmp,png,doc,docx,pdf,rar,zip',
        ]);

        $data = $request->all();

        if ($request->hasFile('file1')) {
            $file1 = $request->file1->store('file1', 'public');
            $data['file1'] = $file1;
        }
        if ($request->hasFile('file2')) {
            $file2 = $request->file2->store('file2');
            $data['file2'] = $file2;
        }
        //validation
        Form::create($data);

        $this->sendEmail($data);

        return view('sent');
    }

    public function sendEmail($data){
        Mail::to('e.traas@etsoft.nl')->send(new FormMail($data));
    }
}
