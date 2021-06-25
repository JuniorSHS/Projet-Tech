<?php

namespace App\Http\Controllers\Admin;

use App\Models\Models\Ordi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdiController extends Controller
{

       // Partie modification et ajout ordinateur


       public function ordinateur()

       {
            $ordinateur = Ordi::all();
            return view('admin.ordinateur')->with('ordinateur', $ordinateur);
       }
   
   
        public function ordiedit(Request $request, $id)
        {
            $ordinateur = Ordi::findOrFail($id);
            return view('admin.ordinateur_edit')->with('ordinateur', $ordinateur);
        }
   
        public function ordiupdate(Request $request, $id)
        {
            $ordinateur = Ordi::find($id);
            $ordinateur->nom_poste = $request->input('nom_poste');
            $ordinateur->update();
   
            return redirect('/ordinateur')->with('status', 'L\'ordinateur a bien été modifié.');
        }
   
        public function ordidelete($id)
        {
            $ordinateur = Ordi::findOrFail($id);
            $ordinateur->delete();
   
            return redirect('/ordinateur')->with('status', 'L\'ordinateur a bien été supprimé.');
        }
   
        public function addordi(Request $request)
        {
            $ordinateur = new Ordi;
            $ordinateur->nom_poste = $request->input('nom_poste');
            $ordinateur->save();
            return redirect('/ordinateur')->with('status', 'L\'ordinateur à bien été ajouté.');
        }


}
