@extends('layouts.add')
@section('content')
<style>
        .form-container {
            margin: 0 auto; 
            max-width: 0px; 
        }

        .text-center {
            text-align: center;
            margin-bottom: 30px; 
        }

        h1 {
            font-size: 24px; 
            color: #007bff; 
            margin-top: 0; 
        }

        .form-label {
            font-weight: bold; 
            margin-bottom: 5px; 
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px; 
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .alert {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px; 
            font-size: 16px;
        }

        .btn {
            padding: 12px 24px; 
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s; 
        }

        .btn-primary {
            background-color: #007bff;
            border: 1px solid #007bff;
            color: #fff; 
        }

        .btn-primary:hover {
            background-color: #0056b3; 
            border-color: #0056b3; 
        }

        .btn-secondary {
            background-color: #6c757d;
            border: 1px solid #6c757d; 
            color: #fff; 
            margin-left: 10px;
        }

        .btn-secondary:hover {
            background-color: #5a6268; 
            border-color: #5a6268; 
        }
    </style>
        
      

    <div class="text-center">
        <h1>Edit Coache</h1>
    </div>
    <form action="{{ route('coaches.update',$coach->id) }}" method="post"  enctype="multipart/form-data">
    @csrf
    @method('put')
    <label class="form-label"><strong>Nom :</strong></label>
    <input type="text" class="form-control" name="nom" value="{{$coach->nom}}"/><br>
    @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Prenom :</strong></label>
    <input type="text" class="form-control" name="prenom" value="{{$coach->prenom}}"/><br>
    @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Adresse :</strong></label>
    <input type="text" class="form-control" name="addresse" value="{{$coach->addresse}}"/><br>
    @error('adresse')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Numero Telephone :</strong></label>
    <input type="text" class="form-control" name="numtel" value="{{$coach->numtel}}"/><br>
    @error('numtel')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Emploi:</strong></label>
    <input type="text" class="form-control" name="emploi" value="{{$coach->emploi}}"/><br>
    @error('emploi')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label" for="image"><strong>Image :</strong></label>
    <input type="file" class="form-control" name="image" /><br>
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Modifier</button>
    <a href="{{ route('coaches.index') }}" class="btn btn-secondary">Retourner</a>
</form>
@endsection
