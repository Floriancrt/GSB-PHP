


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page d'accueil - GSB </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../views/css/app.css">
    <link rel="stylesheet" type="text/css" href="../views/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../views/images/gsb-favicon.ico" type="image/x-icon">
    <link rel="icon" href="../views/images/gsb-favicon.ico" type="image/x-icon">
    <script src="../views/js/jquery.min.js"></script>
    <script src="../views/js/bootstrap.min.js"></script>
</head>
<body>
  <script type="text/javascript" >

    $(document).ready(function(){
      $("#btn-medicament").click(function(){
        $("#Modal-Medicaments").modal();
      });
    });

    $(document).ready(function(){
      $("#btn-activites").click(function(){
        $("#Modal-Activites").modal();
      });
    });

    $(document).ready(function(){
      $("#btn_ajout_ac").click(function(){
        $("#Modal-add-AC").modal();
      });
    });

    $(document).ready(function(){	
	    $('#logo').fadeIn(3500);
      });
      
    $(document).ready(function(){	
	    $('#btn-activites').fadeIn(4000);
    });

    $(document).ready(function(){	
	    $('#btn-medicament').fadeIn(4000);
    });

  

  </script>

  <div class="modal fade" id="Modal-Medicaments" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Medicament-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal_title_med">Médicaments</h4>
        </div>
        <div class="modal-body">
        
          <form method="POST" action="aiguillageMedicaments.php">          
          <table class="table table-hover">
            <thead>
              <th scope="col">Numéro</th>
              <th scope="col">Libellé</th>
              <th scope="col">Famille</th>
              <th scope="col" id="mod_tab_th"></th>
            </thead>
                <tbody>
                <?php foreach($medicaments as $key =>$value): ?>
                    <tr>
                      <input type="hidden" name="ID_Medicament" value="<?php echo $value->getNumero(); ?>">
                      <td><?= $value->getNumero(); ?></td>
                      <td><?= $value->getLibelle(); ?></td>
                      <td><?= $value->getFamille(); ?></td>
                      <td><input class="details_tab_button" type="submit" name="detailsAction" value="Details"></td>
                    </tr>
                    <?php endforeach; ?>   
                </tbody>    
              </form>
            
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Modal-Activites" role="dialog">
    <div class="modal-dialog">
      <!-- Modal Activites-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Activités</h4>
        </div>
        <div class="modal-body">  

        <table class="table table-hover">
            <thead>
              <th scope="col">Thème</th>
              <th scope="col">Date</th>
              <th scope="col">Salle</th>
            </thead>
            <?php foreach($activitescomp as $key => $value): ?> 
                <form action="aiguillageMedicaments.php" method="POST"> 
                    <tbody>
                        <tr>
                        <td><?php echo $value->getTheme(); ?></td>
                        <td><?php echo $value->getDate(); ?></td> 
                        <td><?php echo $value->getSalle(); ?></td>                         
                        </tr>
                    </tbody>
                </form>
                <?php endforeach; ?> 
              </table>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="Modal-add-AC" role="dialog">
    <div class="modal-dialog">
      <!-- Modal Activites Complémentaires-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal_title_med">Ajouter une activité</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="aiguillageMedicaments.php">
            <div class="form-group">
              <input class="form-control" type="text" name="nni" placeholder="Thème">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="nni" placeholder="Salle">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="nni" placeholder="Budget">
            </div> 
            <div class="form-group">
              <input class="form-control" type="text" name="nni" placeholder="ID Responsable">
            </div>
            <div class="form-group">
              <input class="form-control" type="text" name="nni" placeholder="ID Praticien">
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="disabledGroupExample" checked disabled>
              <label class="custom-control-label" for="defaultCheckedDisabled2">Emis</label>
            </div>
           
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="disabledGroupExample" disabled>
              <label class="custom-control-label" for="defaultCheckedDisabled2">En attente de décision</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="disabledGroupExample" disabled>
              <label class="custom-control-label" for="defaultCheckedDisabled2">Refusé</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultCheckedDisabled2" name="disabledGroupExample" disabled>
              <label class="custom-control-label" for="defaultCheckedDisabled2">Accordé</label>
            </div>  
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    
  <div class="menu"></div>
  <div class="container-accueil">
    <div class="col-lg-4" style="z-index:999;">
        <button class="bouton linear-wipe-medicament" id="btn-medicament">Médicaments</button>
        <button class="btn_return" id="btn_connexion"  onclick="window.location.href='../controller/deconnexion.php'"><span>Déconnexion</span></button>
    </div>
    <div class="col-lg-4">
      <img src="../views/images/logo-gsb.png" class="logo_gsb" id="logo" style="display:none;"/>
    </div>
    <div class="col-lg-4">
        <button class="bouton linear-wipe-activites" id="btn-activites">Activités</button>
        <button class="btn_AC btn_ajout_ac" id="btn_ajout_ac">Ajouter une activité</button>
    </div>
  </div>
</body>
</html>