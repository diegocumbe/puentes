<?php include("db.php") ?>
<?php include("includes/header.php")?>
<?php
            $query = "SELECT *FROM registro_de_puentes where visita='001' ";
            $result_task = mysqli_query($conn,$query);
            
            while($row = mysqli_fetch_array($result_task)){?>
            ?>
           

<div class="row" id="tabla">
  <div class="col-sm-4" id="comuna">
    <div class="card" >
      <div class="card-body">
     
        <h1 class="card-title">
        <h1><?php echo $row['nombre']?></h1></h1>
        <p class="card-text">En esta seccion se encuntra todo lo referente a la información detallada de cada puente</p>
        <img src="https://conocedores.com/wp-content/uploads/2018/08/puentemanos.jpg">
        <a href="listado.php" class="btn btn-primary btn-lg active btn-block">abir listado general</a>
      </div>
    </div>
  </div>
  <div class="col-sm-8" id="mapa">
    <div class="card">
      <div class="card-body">
      
      <table class="table table-bordered " >
                    
                    <thead>
                    
                        <tr class="thead-dark">
                        <br>
                            <th>Fecha</th>
                            <th>Designación</th>
                            <th>Dirección</th>
                            <th>Comuna</th>
                           
                         </tr>
                    </thead>
                    <tbody>
                  
                    <tr>
                    <h1><?php echo $row['nombre']?></h1>
                       <td><?php echo $row['fecha_de_actualización']?></td>
                        <td><?php echo $row['designación']?></td>
                        <td><?php echo $row['dirección']?></td>
                        <td><?php echo $row['comuna']?></td>

                    </tr>
                   
                    <?php
                 }?>  
      </div>
    </div>
  </div>
</div>



<?php include("includes/footer.php")?>