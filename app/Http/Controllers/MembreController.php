<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        //
        $membres=Membre::all();
        return view('membres.index',compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     
     */
    public function create()
    {
        return view('membres.create');
    }

    /**
     * Store a newly created resource in storage.
     
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_naiss' => 'required',
            'taille' => 'required',
            'poids' => 'required',
            'sexe' => 'required',
            'num_tel' => 'required',
            'email' => 'required|email',
            'adresse' => 'required',
        ]);

        // Handle file upload if photo is included in the request
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('membre.index', $filename);
            $data['photo'] = 'membre.index/' . $filename;
        }

        // Create a new Membre instance with the validated data
        Membre::create($data);
        // Redirect to the specified route with success message
        return redirect()->route('membres.index')->with('success', 'Membre has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $membre = Membre::findOrFail($id);
        return view('membres.detail', ['membre' => $membre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $membre=Membre::findOrFail($id);
        return view('membres.edit',['membre' => $membre]);
    }

    //  * Update the specified resource in storage.
   
    public function update(Request $request, int $id)
    {
        // Find the member with the given ID
        $membre = Membre::findOrFail($id);
    
        // Validate the incoming request data
        $data = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'date_naiss' => 'required',
            'taille' => 'required',
            'poids' => 'required',
            'sexe' => 'required',
            'num_tel' => 'required',
            'email' => 'required|email',
            'adresse' => 'required',
        ]);
    
        // Handle file upload if photo is included in the request
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('membre.index', $filename);
            $data['photo'] = 'membre.index/' . $filename;
        } else {
            // If no new photo uploaded, retain the existing photo path
            $data['photo'] = $membre->photo;
        }
    
        // Update the member record with the new data
        $membre->update($data);
    
        // Redirect to the index page with a success message
        return redirect()->route('membres.index')->with('success', 'Membre has been updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $membre = Membre::findOrFail($id);
        $membre->delete();
        return redirect()->route('membres.index')->with('success', 'Membre has been deleted successfully');
    }
}
