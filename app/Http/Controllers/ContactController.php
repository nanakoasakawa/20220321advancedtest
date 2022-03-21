<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender'   => 'required',
            'email'    => 'required',
            'postcode' => 'required',
            'address'  => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required',
        ]);

        $inputs = $request->all();

        return view('confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {

            // DBにデータを保存
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }

    public function complete()
    {
        return view('complete');
    }
    
}