<?php

namespace App\Http\Controllers;


use App\Models\Abonnement;
use App\Models\Discipline;
use App\Models\Membre;
use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('abonnement');

        $abonnements = Abonnement::when($keyword, function ($query, $keyword) {
            return $query->where('date_debut', 'LIKE', "%$keyword%")
                ->orWhere('date_fin', 'LIKE', "%$keyword%")
                ->orWhere('prix_total', 'LIKE', "%$keyword%")
                ->orWhere('valide', 'LIKE', "%$keyword%")
                ->orWhereHas('discipline', function ($query) use ($keyword) {
                    $query->where('nom', 'LIKE', "%$keyword%");
                })
                ->orWhereHas('membre', function ($query) use ($keyword) {
                    $query->where('nom', 'LIKE', "%$keyword%");
                });
        })->paginate(4);

        return view('abonnements.index', compact('abonnements'));
    }

    public function create()
    {
        $disciplines = Discipline::all();
        $membres = Membre::all();
        return view('abonnements.create', compact('disciplines', 'membres'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'discipline_id' => 'required|exists:disciplines,id',
            'membre_id' => 'required|exists:membres,id',
            'prix_total' => 'required|numeric',
            'valide' => 'required|in:oui,non',
        ]);

        Abonnement::create($request->all());

        return redirect()->route('abonnements.index')->with('success', 'Abonnement créé avec succès.');
    }

    public function edit($id)
    {
        $abonnement = Abonnement::findOrFail($id);
        $disciplines = Discipline::all();
        $membres = Membre::all();
        return view('abonnements.edit', compact('abonnement', 'disciplines', 'membres'));
    }

    public function update(Request $request, $id)
    {
        $abonnement = Abonnement::findOrFail($id);

        $this->validate($request, [
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'discipline_id' => 'required|exists:disciplines,id',
            'membre_id' => 'required|exists:membres,id',
            'prix_total' => 'required|numeric',
            'valide' => 'required|in:oui,non',
        ]);

        $abonnement->update($request->all());

        return redirect()->route('abonnements.index')->with('success', 'Abonnement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        Abonnement::findOrFail($id)->delete();
        return redirect()->route('abonnements.index')->with('success', 'Abonnement supprimé avec succès.');
    }
}
