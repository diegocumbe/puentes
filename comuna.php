<?php include("db.php") ?>
<?php include("includes/header.php")?>
 
           

<div class="row" id="tabla">
  <div class="col-sm-6" id="comuna">
    <div class="card" >
      <div class="card-body">
        <h1 class="card-title">Puentes por comuna</h1>
        <p class="card-text">aqui se activaran una serie de botones de cada comuna a elegir</p>
        <ul id="btn-comunas" >
                <li><a  href="comuna1.php">COMUNA 1</a></li>
                <li><a  href="comuna2.php">COMUNA 2</a></li>
                <li><a  href="comuna3.php">COMUNA 3</a></li>
                <li><a  href="comuna4.php">COMUNA 4</a></li>
                <li><a  href="comuna5.php">COMUNA 5 </a></li>
                <li><a  href="comuna6.php">COMUNA 6</a></li>
                <li><a  href="comuna7.php">COMUNA 7</a></li>
                <li><a  href="comuna8.php">COMUNA 8</a></li>
                <li><a  href="comuna9.php">COMUNA 9</a></li>
                <li><a  href="comuna10.php">COMUNA 10</a></li>
              
                
            </ul>
        <a href="listado.php" class="btn btn-primary btn-lg active btn-block">abir listado general</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" id="mapa">
    <div class="card">
      <div class="card-body">
      <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Neiva-Comunas-Barrios.svg">
      </div>
    </div>
  </div>
</div>



<?php include("includes/footer.php")?>