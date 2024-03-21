@extends('layouts.app')
@section('content')

<div class="text-center">
    <h1>Les Membres</h1>
</div>
    <a href="{{route('membres.create')}}" class="btn btn-primary">Add Membre</a>
<div class="row">
@foreach ($membres as $membre)
    <div class="col-md-4">
        <div class="card h-100">
            <a href="{{ route('membres.show', $membre->id)}}"><img src="{{ asset($membre->photo) }}" class="card-img-top" alt="Membre Photo"></a>
            <div class="card-body">
                <h5 class="card-title">{{ $membre->nom }} {{ $membre->prenom }}</h5>
                <p class="card-text">
                    <strong>Date Naiss:</strong> {{ $membre->date_naiss }}<br>
                    <strong>Taille:</strong> {{ $membre->taille }}
                    <strong>Poids:</strong> {{ $membre->poids }}<br>
                    <strong>Sexe:</strong> {{ $membre->sexe }}<br>
                    <strong>Telephone:</strong> {{ $membre->num_tel }}<br>
                    <strong>Adresse:</strong> {{ $membre->adresse }} <br>
                    <strong>Email:</strong> {{ $membre->email }}
                </p>       
                    <div class="btn-group" role="group">
                        <a href="{{ route('membres.edit', $membre->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('membres.destroy', $membre->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endforeach
@endsection