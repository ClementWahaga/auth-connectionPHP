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
           
            <form action="inscription_token.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                
                    <input type="text" name="pseudo"  placeholder="Pseudo" required="required" autocomplete="off"><br><br>
                    <input type="email" name="email"  placeholder="Email" required="required" autocomplete="off"><br><br>
                    <input type="password" name="password"  placeholder="Mot de passe" required="required" autocomplete="off"><br><br>
                    <input type="password" name="password_retype"  placeholder="Re-tapez le mot de passe" required="required" autocomplete="off"><br><br>
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                   
            </form>
        </div>
        
        </body>
</html>