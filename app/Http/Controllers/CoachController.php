<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function index()
    {
        $coaches=Coach::all();
        return view('coaches.index',['coaches'=>$coaches]);
    }

    public function create()
    {
        return view('coaches.create');
    }

    public function store(Request $request)
    
        {
            // Validate the incoming request data
            $data = $request->validate([
                'nom' => 'required',
                'prenom' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'emploi' => 'required',
                'numtel' => 'required',
                'addresse' => 'required',
            ]);
    
            // Handle file upload if photo is included in the request
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('coaches.index', $filename);
                $data['image'] = 'coaches.index/' . $filename;
            }
    
            Coach::create($data);
            return redirect()->route('coaches.index')->with('success', 'Coach has been created successfully.');
        }
    
    

    public function show($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coaches.detail', compact('coach')); 
    }

    public function edit($id)
    {
        $coach = Coach::findOrFail($id);
        return view('coaches.edit', compact('coach')); 
    }

    public function update(Request $request, int $id)
    {
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('coaches.index', $filename);
            $data['image'] = 'coaches.index/' . $filename;
        }

        $coach = Coach::findOrFail($id);
        $coach->update($request->all());
        return redirect()->route('coaches.index')->with('success', 'Coach has been updated successfully');
    }
    public function destroy($id)
    {
        $coach = Coach::findOrFail($id);
        $coach->delete();
        return redirect()->route('coaches.index')->with('success', 'Coach has been deleted successfully');
    }
}
