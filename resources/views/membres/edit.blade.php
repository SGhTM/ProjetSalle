@extends('layouts.add')
@section('content')
    <div class="text-center">
        <h1>Edit Member</h1>
    </div>
    <form action="{{ route('membres.update',$membre->id) }}" method="post"  enctype="multipart/form-data">
    @csrf
    @method('put')
    <label class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom" value="{{$membre->nom}}"/><br>
    @error('nom')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom" value="{{$membre->prenom}}"/><br>
    @error('prenom')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label">Date de Naissance</label>
    <input type="date" class="form-control" name="date_naiss" value="{{$membre->date_naiss}}"/><br>
    @error('date_naiss')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label" for="photo">Photo</label>
    <input type="file" class="form-control" name="photo" id="photo"/><br>
    @error('photo')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label">Taille:</label>
    <input type="text" class="form-control" name="taille" value="{{$membre->taille}}"/><br>
    @error('taille')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label">Poids:</label>
    <input type="text" class="form-control" name="poids" value="{{$membre->poids}}"/><br>
    @error('poids')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

        <label class="form-label">Sexe: </label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" {{ $membre->sexe == 'homme' ? 'checked' : '' }}>
            <label class="form-check-label" for="homme">Homme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="femme" value="femme" {{ $membre->sexe == 'femme' ? 'checked' : '' }}>
            <label class="form-check-label" for="femme">Femme</label>
        </div>
        <br>
        @error('sexe')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

    <label class="form-label">Numero de telephone:</label>
    <input type="text" class="form-control" name="num_tel" value="{{$membre->num_tel}}"/><br>
    @error('num_tel')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror


    <label class="form-label">Email:</label>
    <input type="text" class="form-control" name="email" value="{{$membre->email}}"/><br>
    @error('email')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label">Adresse:</label>
    <input type="text" class="form-control" name="adresse" value="{{$membre->adresse}}"/><br>
    @error('adresse')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Update</button><a href="{{route('membres.index')}}" class="btn btn-secondary">Annuler</a>
</form>
@endsection