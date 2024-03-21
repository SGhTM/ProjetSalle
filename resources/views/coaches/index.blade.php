<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
</head>
<body>
    <h1>Index Page</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Numéro Téléphone</th>
                <th>Emploi</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nom }}</td>
                    <td>{{ $item->prenom }}</td>
                    <td>{{ $item->adresse }}</td>
                    <td>{{ $item->numero_telephone }}</td>
                    <td>{{ $item->emploi }}</td>
                    <td><img src="{{ $item->photo }}" alt="Photo"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

</body>
</html>