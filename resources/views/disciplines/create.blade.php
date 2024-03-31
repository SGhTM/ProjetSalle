<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Discipline Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        form {
            max-width: 500px; 
            padding: 20px; 
            background-color: #fff;
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
        }
        label {
            font-weight: bold; 
        }
        .btn {
            margin-top: 20px; 
        }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-center">
        <form method="post" action="{{ route('isciplines.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="discipline">Discipline :</label>
                <input type="text" class="form-control" name="discipline" id="discipline" required>
                @error('discipline')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" class="form-control" name="description" id="description" required>
                @error('description')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror            
            </div>

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" class="form-control" name="image" id="image" required>
                @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="coach_id">Coach :</label>
                <select class="form-control" id="coach_id" name="coach_id" required>
                    @foreach($coachs as $coach)
                    <option value="{{ $coach->id }}">{{ $coach->nom }} {{ $coach->prenom }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tarif">Tarif :</label>
                <input type="text" class="form-control" name="tarif" id="tarif" required>
            @error('tarif')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('disciplines.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

</body>
</html>
