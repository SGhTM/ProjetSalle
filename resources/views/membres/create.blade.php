@extends('layouts.add')
@section('content')
    <div class="text-center">
        <h1>Inscription</h1>
    </div>
    <form action="{{ route('membres.store') }}" method="post"  enctype="multipart/form-data">
    @csrf
    <label class="form-label"><strong>Nom</strong></label>
    <input type="text" class="form-control" name="nom" value="{{old('nom')}}"/><br>
    @error('nom')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Prenom</strong></label>
    <input type="text" class="form-control" name="prenom" value="{{old('prenom')}}"/><br>
    @error('prenom')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Date de Naissance</strong></label>
    <input type="date" class="form-control" name="date_naiss" value="{{old('date_naiss')}}"/><br>
    @error('date_naiss')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label" for="photo"><strong>Photo</strong></label>
    <input type="file" class="form-control" name="photo" /><br>
    @error('photo')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Taille:</strong></label>
    <input type="text" class="form-control" name="taille" value="{{old('taille')}}"/><br>
    @error('taille')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Poids:</strong></label>
    <input type="text" class="form-control" name="poids" value="{{old('poids')}}"/><br>
    @error('poids')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
        
    <label class="form-label"><strong>Sexe:</strong> </label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="homme" value="homme" {{ old('sexe') == 'homme' ? 'checked' : '' }}>
            <label class="form-check-label" for="homme">Homme</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexe" id="femme" value="femme" {{ old('sexe') == 'femme' ? 'checked' : '' }}>
            <label class="form-check-label" for="femme">Femme</label>
        </div>
        @error('sexe')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

        <br><br>

    <label class="form-label"><strong>Numero de telephone:</strong></label>
    <input type="text" class="form-control" name="num_tel" value="{{old('num_tel')}}"/><br>
    @error('num_tel')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror


    <label class="form-label"><strong>Email:</strong></label>
    <input type="text" class="form-control" name="email" value="{{old('email')}}"/><br>
    @error('email')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Adresse:</strong></label>
    <input type="text" class="form-control" name="adresse" value="{{old('adresse')}}"/><br>
    @error('adresse')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Enregister</button><a href="{{route('membres.index')}}" class="btn btn-secondary">Annuler</a>
    </form>
@endsection