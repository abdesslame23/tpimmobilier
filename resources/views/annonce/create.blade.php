<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle annonce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Nouvelle annonce</h2>
        <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="">-- Sélectionner --</option>
                    <option value="Appartement">Appartement</option>
                    <option value="Maison">Maison</option>
                    <option value="Villa">Villa</option>
                    <option value="Magasin">Magasin</option>
                    <option value="Terrain">Terrain</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" required>
            </div>

            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie (m²)</label>
                <input type="number" class="form-control" id="superficie" name="superficie" required>
            </div>

            <div class="mb-3">
                <label for="neuf" class="form-label">Neuf</label>
                <select class="form-control" id="neuf" name="neuf" required>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>
</html>
