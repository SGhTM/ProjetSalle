@extends('layouts.add')
@section('content')
<body>
    <div class="container ff">
        <div class="form-container">
            <form action="{{ route('abonnements.update', $abonnement->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <h2>Modifier l'Abonnement</h2>
                </div>
                <div class="form-group">
                    <div><strong>Date de Début:</strong></div>
                    <input type="date" name="date_debut" value="{{ $abonnement->date_debut }}" class="form-control" required>
                    @error('date_debut')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Date de Fin:</strong></div>
                    <input type="date" name="date_fin" value="{{ $abonnement->date_fin }}" class="form-control" required>
                    @error('date_fin')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Discipline:</strong></div>
                    <select name="discipline_id" class="form-control" required>
                        @foreach($disciplines as $discipline)
                            <option value="{{ $discipline->id }}" {{ $discipline->id == $abonnement->discipline_id ? 'selected' : '' }}>{{ $discipline->nom }}</option>
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
                            <option value="{{ $membre->id }}" {{ $membre->id == $abonnement->membre_id ? 'selected' : '' }}>{{ $membre->nom }}</option>
                        @endforeach
                    </select>
                    @error('membre_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Prix Total:</strong></div>
                    <input type="number" name="prix_total" value="{{ $abonnement->prix_total }}" class="form-control" placeholder="Prix Total" required>
                    @error('prix_total')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <div><strong>Valide:</strong></div>
                    <select name="valide" class="form-control" required>
                        <option value="oui" {{ $abonnement->valide == 'oui' ? 'selected' : '' }}>Oui</option>
                        <option value="non" {{ $abonnement->valide == 'non' ? 'selected' : '' }}>Non</option>
                    </select>
                    @error('valide')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary ml-3">Enregistrer</button>
                <a class="btn btn-secondary ml-3" href="{{ route('abonnements.index') }}">Annuler</a>
            </form>
        </div>
    </div>
</body>

@endsection