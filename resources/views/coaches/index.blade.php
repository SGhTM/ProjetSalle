@extends('layouts.app')

@section('content')
<style>

    .text-center {
        text-align: center;
        margin-bottom: 30px;
        color: green; 
    }

    h1 {
        font-size: 2.5rem; 
        margin-top: 0;
        border-radius: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: all 0.3s ease; 
    }

    .btn-primary:hover {
        background-color: #0056b3; 
        border-color: #0056b3; 
        transform: scale(1.05);
    }

    .card {
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        max-height: 200px;
        object-fit: cover;
    }

    .card-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 0.9rem;
        color: #666;
    }

    .btn-group {
        margin-top: 15px;
    }

    .btn {
        padding: 8px 16px;
        font-size: 0.9rem;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #bd2130;
        border-color: #bd2130;
    }

</style>
<div class="text-center">
    <h1>Les Coaches</h1>
</div>
<a href="{{ route('coaches.create') }}" class="btn btn-primary">Add coach</a>
<div class="row">
    @foreach ($coaches as $coach)
    <div class="col-md-4">
        <div class="card h-100">
            <a href="{{ route('coaches.show', $coach->id) }}"><img src="{{ asset($coach->image) }}" class="card-img-top" alt="Coach image"></a>
            <div class="card-body">
                <h5 class="card-title">{{ $coach->nom }} {{ $coach->prenom }}</h5>
                <p class="card-text">
                    <strong>Adresse:</strong> {{ $coach->addresse }} <br>
                    <strong>Telephone:</strong> {{ $coach->numtel }}<br>
                    <strong>Emploi:</strong> {{ $coach->emploi }}
                </p>
                <div class="btn-group" role="group">
                    <a href="{{ route('coaches.edit', $coach->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('coaches.destroy', $coach->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
