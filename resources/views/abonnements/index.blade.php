@extends('layouts.app')
@section('content')
<body>
    <div class="container-lg centered-content">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Les Abonnements</h2>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{ route('abonnements.create') }}" class="btn btn-info add-new">
                                <i class="fa fa-plus"></i> Ajouter un Abonnement
                            </a>
                        </div>
                    </div>
                    <div class="cc">
                        <form action="{{ route('abonnements.index') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="abonnement" placeholder="Recherche par abonnement" aria-describedby="button-addon2" value="{{ request('abonnement') }}">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Rechercher</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <table class="table table-bordered ll" width="800px">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Discipline</th>
                            <th>Nom du Membre</th>
                            <th>Prix Total</th>
                            <th>Valide</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abonnements as $abonnement)
                            <tr>
                                <td scope="row">{{ $abonnement->id }}</td>
                                <td>{{ $abonnement->date_debut }}</td>
                                <td>{{ $abonnement->date_fin }}</td>
                                <td>{{ $abonnement->discipline->discipline }}</td>
                                <td>{{ $abonnement->membre->nom }}</td>
                                <td>{{ $abonnement->prix_total }}</td>
                                <td>{{ $abonnement->valide }}</td>
                                <td>
                                    <form action="{{ route('abonnements.destroy', $abonnement->id) }}" method="POST" id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <a class="edit" title="Edit" data-toggle="tooltip" href="{{ route('abonnements.edit', $abonnement->id) }}"><i class="material-icons">&#xE254;</i></a>
                                        <a class="delete" title="Delete" data-toggle="tooltip" href="#" onclick="document.getElementById('deleteForm').submit();">
                                            <i class="material-icons">&#xE872;</i>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<style>


.cc{width: 300px;}
.ll{position: relative;right:90px}

table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
.table.table .form-control {
    max-width: 50px; /* Vous pouvez ajuster la largeur maximale selon vos besoins */
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
    .table-wrapper {
        width: 700px;
        margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }

    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }

    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }

    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }

    .table-title .add-new i {
        margin-right: 4px;
    }

    /* Ajoutez d'autres styles si nécessaire */
</style>


@endsection