<!DOCTYPE HTML>
<html>
    <head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../views/css/app.css">
    <link rel="stylesheet" type="text/css" href="../views/css/bootstrap.min.css">
    <script src="../views/js/jquery.min.js"></script>
    <script src="../views/js/bootstrap.min.js"></script>
    </head>
<body>


<div class="menu_connexion"></div>


  <div id="back">
    <div class="backRight"></div>
    <div class="backLeft"></div>
  </div>

<div id="slideBox">
  <div class="topLayer">
    <div class="right">
      <div class="content">
        <button class="bouton btn-med-accueil" id="btn-med-accueil" onclick="window.location.href='../controller/controllerLecture.php'">Accéder aux Médicaments</button>
        <br/><br/><br/>
        <h4 style="text-align:center;">OU</h4>
        <br/>
        <h2>Connexion</h2>
        <form form method="POST" action="session.php">
          <div class="form-group">
            <label for="username" class="form-label">Login</label>
            <input type="text" name="login" />
          </div>
          <div class="form-group">
            <label for="username" class="form-label">Mot de passe</label>
            <input type="password" name="mdp" />
          </div>
          <button type="submit" class="button_accueil" style="display: block; margin: 50px auto;">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</div>

  




</body>
</html>