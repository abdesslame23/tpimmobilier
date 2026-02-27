<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des annonces</h2>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('annonces.create') }}" class="btn btn-primary">
                Ajouter une nouvelle annonce
            </a>
            <a href="{{ route('annonces.dashboard') }}" class="btn btn-info">
                Dashboard
            </a>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>Photo</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Ville</th>
                    <th>Superficie (m²)</th>
                    <th>Neuf</th>
                    <th>Prix (€)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($annonces as $a)
                <tr>
                    <td>
                        @if($a->photo)
                            <img src="{{ asset('storage/' . $a->photo) }}" alt="Photo" style="max-width: 80px; height: auto;">
                        @else
                            <span class="text-muted">Pas de photo</span>
                        @endif
                    </td>
                    <td>{{ $a->titre }}</td>
                    <td>{{ $a->type }}</td>
                    <td>{{ $a->ville }}</td>
                    <td>{{ $a->superficie }}</td>
                    <td>
                        @if($a->neuf)
                            <span class="badge bg-success">Oui</span>
                        @else
                            <span class="badge bg-secondary">Non</span>
                        @endif
                    </td>
                    <td>{{ number_format($a->prix, 2, ',', ' ') }}</td>
                    <td>
                        <a href="{{ route('annonces.show', $a->id) }}" class="btn btn-info btn-sm">
                            Afficher
                        </a>
                        <a href="{{ route('annonces.edit', $a->id) }}" class="btn btn-warning btn-sm">
                            Modifier
                        </a>
                        <form action="{{ route('annonces.destroy', $a->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Confirmer la suppression ?')">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>