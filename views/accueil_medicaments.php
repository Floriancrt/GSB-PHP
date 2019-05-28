<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GSB - Médicaments</title>
    <link rel="stylesheet" type="text/css" href="../views/css/app.css">
    <link rel="stylesheet" type="text/css" href="../views/css/bootstrap.min.css">
    <script src="../views/js/jquery.min.js"></script>
    <script src="../views/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="menu"></div>
    <p class="h1" id="title_med_accueil" style="">Médicaments</p>
    <table class="table table-hover" id="tab_med_accueil">
            <thead>
              <th scope="col">Libellé</th>
              <th scope="col">Famille</th>
              <th scope="col" id="mod_tab_th"></th>
            </thead>
            <?php foreach($medicaments as $key =>$value): ?>
              <form method="POST" action="aiguillageMedicaments.php">
                <tbody>
                    <tr>
                      <input type="hidden" name="ID_Medicament" value="<?php echo $value->getNumero(); ?>">
                      <td><?= $value->getLibelle(); ?></td>
                      <td><?= $value->getFamille(); ?></td>
                      <td><input class="details_tab_button" type="submit" name="detailsAction" value="Details"></td>
                    </tr>
                </tbody>    
              </form>
            <?php endforeach; ?>     
          </table>
          <button class="btn_return" id="btn_accueil"  onclick="window.location.href='../controller/connexion.php'"><span>Retour</span></button>

</body>

</html>