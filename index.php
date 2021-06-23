<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
            <title>Connexion</title>
        </head>
        <body>
        
        <div class="cont">
            <form action="connexion.php" method="post">
                <h2 class="text-center">Connexion</h2>       
                    <i class="fas fa-user-circle"></i>
                    <input type="email" name="email"  placeholder="Email" required="required" autocomplete="off"><br><br>
                    <input type="password" name="password"  placeholder="Mot de passe" required="required" autocomplete="off"><br><br>
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                   
            </form>
            <a href="inscription.php">Inscription</a>
        </div>
        
        </body>
</html>