<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coach Profile</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
<style>
/* Custom CSS for Small Card with Animation */

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    width: 250px;
    height: auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-5px);
}

.card img {
    width: 100%;
    height: auto;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    padding: 20px;
    text-align: center; /* Center align text */
}

.card-title {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

.card-text {
    font-size: 0.9rem;
    color: #666;
}

.btn {
    padding: 8px 16px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #5a6268;
    color: #fff; /* Change text color on hover */
}

.text-orange {
    color: #ff5733;
}

.text-yellow {
    color: #ffd700;
}

.text-lightred {
    color: #ff6243;
}

.text-green {
    color: #28a745;
}

.text-purple {
    color: #6f42c1;
}
a{
    text-decoration: none;
}
</style>
</head>
<body>

<div class="container">
    <div class="card">
        <img src="{{ asset($coach->image) }}" alt="Coach image">
        <div class="card-body">
            <h5 class="card-title">{{$coach->prenom}} {{$coach->nom}}</h5>
            <p class="card-text">
                <strong class="text-orange">ID:</strong> {{$coach->id}}<br>
                <strong class="text-yellow">Nom:</strong> {{$coach->nom}}<br>
                <strong class="text-lightred">Prenom:</strong> {{$coach->prenom}}<br>
                <strong class="text-green">Adresse:</strong> {{$coach->adresse}}<br>
                <strong style="color: #ffa200;">Numero Telephone:</strong> {{$coach->numtel}}<br>
                <strong class="text-purple">Emploi:</strong> {{$coach->emploi}}
            </p>
            <a href="{{ route('coaches.index') }}" class="btn btn-secondary">Retourner</a>
        </div>
    </div>
</div>

</body>
</html>
