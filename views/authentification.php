<!DOCTYPE HTML>
<html>
    <head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../views/css/app.css">
    <link rel="stylesheet" type="text/css" href="../views/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../views/images/gsb-favicon.ico" type="image/x-icon">
    <link rel="icon" href="../views/images/gsb-favicon.ico" type="image/x-icon">
    <script src="../views/js/jquery.min.js"></script>
    <script src="../views/js/bootstrap.min.js"></script>

    </head>
<body>
<script type="text/javascript">

$(document).ready(function(){
 
 $('.show-password').click(function() {
   if($(this).prev('input').prop('type') == 'password') {
     //Si c'est un input type password
     $(this).prev('input').prop('type','text');
     $(this).text('cacher');
   } else {
     //Sinon
     $(this).prev('input').prop('type','password');
     $(this).text('afficher');
   }
 });

});

</script>

  <title>Connexion</title>


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
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="mdp" />
            <span class="show-password">afficher</span>
          </div>
          <button type="submit" class="button_accueil" style="display: block; margin: 50px auto;">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</div>
