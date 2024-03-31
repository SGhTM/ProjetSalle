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
        <h1>Edit Discipline</h1>
    </div>
    <form action="{{ route('disciplines.update',$discipline->id) }}" method="post"  enctype="multipart/form-data">
    @csrf
    @method('put')
    <label class="form-label"><strong>Discipline :</strong></label>
    <input type="text" class="form-control" name="discipline" value="{{$discipline->discipline}}"/><br>
    @error('discipline')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Description :</strong></label>
    <input type="text" class="form-control" name="description" value="{{$discipline->description}}"/><br>
    @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label" for="image"><strong>Image :</strong></label>
    <input type="file" class="form-control" name="image" value="{{$discipline->image}}" /><br>
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label class="form-label"><strong>Coach :</strong></label>
    <select name="coach_id" class="form-control" required>
                        @foreach($coaches as $coach)
                            <option value="{{ $coach->id }}" {{ $coach->id == $discipline->coach_id ? 'selected' : '' }}>{{ $coach->nom }}</option>
                        @endforeach
                    </select>

    <label class="form-label"><strong>Tarif :</strong></label>
    <input type="text" class="form-control" name="tarif" value="{{$discipline->tarif}}"/><br>
    @error('tarif')
                <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Edit</button>
    <a href="{{ route('disciplines.index') }}" class="btn btn-secondary">Return</a>
</form>
@endsection
