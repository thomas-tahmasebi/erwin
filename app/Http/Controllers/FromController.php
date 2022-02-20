<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FromController extends Controller
{
    public function create(Request $request){

        //validation

        Form::create($request->all());

        return response('Aanvraag verstuurd naar ISM');
    }
}
