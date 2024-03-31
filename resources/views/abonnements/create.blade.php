@extends('layouts.add')
@section('content')
<div class="container ff">
    <div class="form-container">
        <form action="{{ route('abonnements.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h2>Créer un Abonnement</h2>
            </div>
            <div class="">
                <div class="form-group">
                    <div><strong>Date de Début:</strong></div>
                    <input type="date" name="date_debut" class="form-control" required>
                    @error('date_debut')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Date de Fin:</strong></div>
                    <input type="date" name="date_fin" class="form-control" required>
                    @error('date_fin')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Discipline:</strong></div>
                    <select name="discipline_id" class="form-control" required>
                        @foreach($disciplines as $discipline)
                            <option value="{{ $discipline->id }}">{{ $discipline->discipline }}</option>
                        @endforeach
                    </select>
                    @error('discipline_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Membre:</strong></div>
                    <select name="membre_id" class="form-control" required>
                        @foreach($membres as $membre)
                            <option value="{{ $membre->id }}">{{ $membre->nom }}</option>
                        @endforeach
                    </select>
                    @error('membre_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Prix Total:</strong></div>
                    <input type="number" name="prix_total" class="form-control" placeholder="Prix Total" required>
                    @error('prix_total')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Valide:</strong></div>
                    <select name="valide" class="form-control" required>
                        <option value="oui">Oui</option>
                        <option value="non">Non</option>
                    </select>
                    @error('valide')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('css')
<style>
    .ff {
        width: 500px;
        position: relative;
        bottom: 20px;
        background-color: #585858;
        height: 550px;
        padding: 5px;
        border-radius: 15px;
    }
</style>

@endsection