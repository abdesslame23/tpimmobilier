<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Détail de l'annonce</h2>

        <div class="card">
            <div class="card-body">
                @if($annonce->photo)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Photo" style="max-width: 400px; height: auto;" class="img-fluid">
                    </div>
                @endif
                <h5 class="card-title">{{ $annonce->titre }}</h5>
                <p><strong>Description :</strong> {{ $annonce->description }}</p>
                <p><strong>Type :</strong> {{ $annonce->type }}</p>
                <p><strong>Ville :</strong> {{ $annonce->ville }}</p>
                <p><strong>Superficie :</strong> {{ $annonce->superficie }} m²</p>
                <p><strong>Neuf :</strong>
                    @if($annonce->neuf)
                        <span class="badge bg-success">Oui</span>
                    @else
                        <span class="badge bg-secondary">Non</span>
                    @endif
                </p>
                <p><strong>Prix :</strong> {{ number_format($annonce->prix, 2, ',', ' ') }} €</p>

                <a href="{{ route('annonces.edit', $annonce->id) }}" class="btn btn-warning">
                    Modifier
                </a>
                <a href="{{ route('annonces.index') }}" class="btn btn-secondary">
                    Retour
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>