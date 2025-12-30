<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'MLS Construction' }}</title>
    <style>
        body { font-family: Arial; padding: 40px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; }
        h1 { color: #2c3e50; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 MLS Construction - EN LIGNE !</h1>
        <p class="success">✅ Déploiement Laravel réussi sur Render</p>
        
        <p><strong>Title:</strong> {{ $title }}</p>
        <p><strong>Description:</strong> {{ $description }}</p>
        
        <h2>Pages disponibles :</h2>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/a-propos">À propos</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/realisations">Réalisations</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/test">Page de test</a></li>
        </ul>
        
        <hr>
        <p><small>Déployé avec Laravel + Render • {{ date('d/m/Y H:i') }}</small></p>
    </div>
</body>
</html>
