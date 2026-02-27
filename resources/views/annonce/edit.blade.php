<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier l'annonce</h2>

        <form action="{{ route('annonces.update', $annonce->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $annonce->titre }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $annonce->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="Appartement" {{ $annonce->type == 'Appartement' ? 'selected' : '' }}>Appartement</option>
                    <option value="Maison" {{ $annonce->type == 'Maison' ? 'selected' : '' }}>Maison</option>
                    <option value="Villa" {{ $annonce->type == 'Villa' ? 'selected' : '' }}>Villa</option>
                    <option value="Magasin" {{ $annonce->type == 'Magasin' ? 'selected' : '' }}>Magasin</option>
                    <option value="Terrain" {{ $annonce->type == 'Terrain' ? 'selected' : '' }}>Terrain</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" value="{{ $annonce->ville }}" required>
            </div>

            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie (m²)</label>
                <input type="number" class="form-control" id="superficie" name="superficie" value="{{ $annonce->superficie }}" required>
            </div>

            <div class="mb-3">
                <label for="neuf" class="form-label">Neuf</label>
                <select class="form-control" id="neuf" name="neuf" required>
                    <option value="0" {{ $annonce->neuf == 0 ? 'selected' : '' }}>Non</option>
                    <option value="1" {{ $annonce->neuf == 1 ? 'selected' : '' }}>Oui</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" value="{{ $annonce->prix }}" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                @if($annonce->photo)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Photo actuelle" style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('annonces.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>