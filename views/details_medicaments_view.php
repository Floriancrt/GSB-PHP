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
  <script type="text/javascript">

      $(document).ready(function(){
            $("#btn-effets").click(function(){
              $("#Modal-Effets").modal();
            });
          });

          $(document).ready(function(){
            $("#btn-contre_indications").click(function(){
              $("#Modal-Contre-indication").modal();
            });
          });

          $(document).ready(function(){
            $("#btn-composant").click(function(){
              $("#Modal-Composant").modal();
            });
          });

          $(document).ready(function(){	
	          $('#title_listeEffets').fadeIn(2500);
          });

  </script>


<p class="h1" id="title_listeEffets" style="display:none;">Détails du médicament</p>
<div class="menu"></div>
<div class="col-lg-4">
  <button class="bouton btn-effets" id="btn-effets">Effets</button>
  <button class="btn_return" onclick="window.location.href='../controller/controllerMedicaments.php'"><span>Retour</span></button>
</div>
<div class="col-lg-4">
<button class="bouton btn-contre_indications" id="btn-contre_indications">Contre-Indications</button>
</div>
<div class="col-lg-4">
<button class="bouton btn-composant" id="btn-composant">Composants</button>


<div class="modal fade" id="Modal-Effets" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Effets-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal_title_med">Effets</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="aiguillageMedicaments.php">
            <table class="table table-hover">
              <thead>
                <th scope="col" class="tab_effet">Libellé</th>
              </thead>
              <tbody>
                <?php foreach($effets as $key =>$value): ?>
                  <tr>
                    <th scope="row" class="tab_effet"><?php echo $value->getLibelleEffet(); ?></th>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="Modal-Contre-indication" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Contre-Indications-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal_title_med">Contre-indications</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="aiguillageMedicaments.php">
            <table class="table table-hover">
              <thead>
                <th scope="col" class="tab_effet">Libellé</th>
              </thead>
              <tbody>
              <?php foreach($contreIndication as $key =>$value): ?>
                <tr>
                  <th scope="row" class="tab_effet"><?php echo $value->getLibelleContreIndication(); ?></th>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="Modal-Composant" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal Composant-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="modal_title_med">Composants</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="aiguillageMedicaments.php">
            <table class="table table-hover">
              <thead>
                <th scope="col" class="tab_effet">Composant</th>
                <th scope="col" class="tab_effet">Quantité (en milligrammes)</th>

              </thead>
              <tbody>
              <?php foreach($composant as $key =>$value): ?>
                <tr>
                  <th scope="row" class="tab_effet"><?php echo $value->getLibelleComposant(); ?></th>
                  <th scope="row" class="tab_effet"><?php echo $value->getQuantite(); ?></th>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  




</form>
</body>
</html>

