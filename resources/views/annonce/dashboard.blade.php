<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Immobilière - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .stat-card {
            border-radius: 10px;
            padding: 30px;
            margin: 20px 0;
            color: white;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .stat-icon {
            font-size: 40px;
            margin-bottom: 15px;
        }
        .stat-value {
            font-size: 32px;
            font-weight: bold;
        }
        .stat-label {
            font-size: 16px;
            margin-top: 10px;
            opacity: 0.9;
        }
        .bg-total { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .bg-prix { background: linear-gradient(135deg, #13547a 0%, #80d0c7 100%); }
        .bg-moyen { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .bg-superficie { background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-12">
                <h1>Gestion Immobilière</h1>
                <p class="text-muted">Tableau de bord statistique</p>
            </div>
        </div>

        <div class="row">
            <!-- Total des annonces -->
            <div class="col-md-3">
                <div class="stat-card bg-total">
                    <div class="stat-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="stat-value">{{ $stats['total'] }}</div>
                    <div class="stat-label">Annonces Total</div>
                </div>
            </div>

            <!-- Prix total -->
            <div class="col-md-3">
                <div class="stat-card bg-prix">
                    <div class="stat-icon">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <div class="stat-value">{{ number_format($stats['prix_total'], 0, ',', ' ') }}</div>
                    <div class="stat-label">Prix Total (€)</div>
                </div>
            </div>

            <!-- Prix moyen -->
            <div class="col-md-3">
                <div class="stat-card bg-moyen">
                    <div class="stat-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="stat-value">{{ number_format($stats['prix_moyen'], 0, ',', ' ') }}</div>
                    <div class="stat-label">Prix Moyen (€)</div>
                </div>
            </div>

            <!-- Superficie totale -->
            <div class="col-md-3">
                <div class="stat-card bg-superficie">
                    <div class="stat-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <div class="stat-value">{{ number_format($stats['superficie_total'], 0, ',', ' ') }}</div>
                    <div class="stat-label">Superficie Total (m²)</div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <a href="{{ route('annonces.index') }}" class="btn btn-primary">
                    <i class="fas fa-list"></i> Liste des annonces
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
