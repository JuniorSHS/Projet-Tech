<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Ordinateur;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function ordi()

    {
        return view('admin.ordinateur');
    }
    
    public function attribution()

    {
        return view('admin.attribution');
    }


    public function user()

    {
        $users = User::all();
        return view('admin.utilisateurs')->with('users', $users);
    }

    public function useredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.utilisateurs_edit')->with('users', $users);
    }

    public function usereupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->update();

        return redirect('/utilisateurs')->with('status', 'L\'utilisateur a bien été modifié');
    }

    public function useredelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/utilisateurs')->with('status', 'L\'utilisateur a bien été supprimé');
    }

    public function add(Request $request)
    {
        $users = new User;

        $users->name = $request->input('name');
        $users->email = $request->input('email');

        $users->save();
        return redirect('/utilisateurs')->with('status', 'L\'utilisateur à bien été ajouté.');
    }

}

