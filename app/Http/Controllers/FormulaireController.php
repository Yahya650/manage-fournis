<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Formulair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormulaireController extends Controller
{
    public function formulePost(Request $request)
    {
        if ($request->isMethod('post')) {
            if (auth()->check()) {
                $request->validate([
                    'company' => 'required',
                    'budget' => 'required',
                    'collaborator' => 'required',
                    'destination' => 'required',
                    'description' => 'required',
                ]);

                // dd($request->all());

                $formulaire = new Formulair();
                $formulaire->company = $request->company;
                $formulaire->budget = $request->budget;
                $formulaire->collaborator = $request->collaborator;
                $formulaire->destination = $request->destination;
                $formulaire->date = date("Y", strtotime($request->date));
                $formulaire->description = $request->description;
                $formulaire->profil_id = auth()->user()->id;
                $formulaire->save();

                return back()->with('message', 'Success');
            } else {
                return redirect()->route('register');
            }
        }
    }




    public function formule(Request $request)
    {
        $companies = Company::all();
        return view('client.formulaire', compact('companies'));
    }
}
