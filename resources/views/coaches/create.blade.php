<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Coach Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for Form */
        body {
            background-color: #f8f9fa; /* Set a light background color */
            padding-top: 50px; /* Add some top padding */
        }
        form {
            max-width: 500px; /* Set max width for the form */
            padding: 20px; /* Add padding */
            background-color: #fff; /* Set a white background color */
            border-radius: 10px; /* Add border radius */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }
        label {
            font-weight: bold; /* Make labels bold */
        }
        .btn {
            margin-top: 20px; /* Add margin to the buttons */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-center">
        <form method="post" action="{{ route('coaches.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image">
            @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom">
                @error('nom')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom" id="prenom">
                @error('prenom')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="addresse">Adresse</label>
                <input type="text" class="form-control" name="addresse" id="addresse">
                @error('addresse')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="numtel">Numéro de Téléphone</label>
                <input type="text" class="form-control" name="numtel" id="numtel">
                @error('numtel')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
                <label for="emploi">Emploi</label>
                <input type="text" class="form-control" name="emploi" id="emploi">
                @error('emploi')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('coaches.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</div>

</body>
</html>
