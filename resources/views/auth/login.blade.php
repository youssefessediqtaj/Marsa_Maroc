<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Gestion Conteneur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEJx3W5p/qdpF7HzdCuCp4mB7fA2QpF5LfWcD5B7XvYzvM0+nK9rDmyGZPr3b" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #4e73df;
            color: white;
            text-align: center;
            border-radius: 15px 15px 0 0;
            padding: 1.5rem;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px;
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
            border-radius: 10px;
            padding: 10px 15px;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
        }

        .alert-danger {
            border-radius: 10px;
            background-color: #f8d7da;
            color: #842029;
        }

        .login-container {
            margin-top: 10vh;
        }
    </style>
</head>

<body>
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Se connecter</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="#" class="text-primary">Mot de passe oublié ?</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>Pas encore inscrit ? <a href="{{ route('register') }}" class="text-primary">Créer un compte</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-2S3YhA3J/YV8kHlO8J4F7CpOzp8ogS0fP1zle7KOw68aDhF9Ak+02OZrCv5B0XYj" crossorigin="anonymous">
    </script>
</body>

</html>