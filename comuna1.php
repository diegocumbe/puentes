<?php include("db.php") ?>
<?php include("includes/header.php")?>
<div class="container col-8">
    
    <div class="row col-30"> 
    
    <div class="container  card card-body" >

                
                <table class="table table-bordered " >
                    <thead>
                    <h1 >Puentes Por Comuna</h1>
                        <tr class="thead-dark">
                        <br>
                            <th>Fecha</th>
                            <th>Designación</th>
                            <th>Dirección</th>
                            <th>Comuna</th>
                            <th></th>
                         </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT *FROM registro_de_puentes where comuna='1' ";
                    $result_task = mysqli_query($conn,$query);
                    
                    while($row = mysqli_fetch_array($result_task)){?>
                    <tr>
                        <td><?php echo $row['fecha_de_actualización']?></td>
                        <td><?php echo $row['designación']?></td>
                        <td><?php echo $row['dirección']?></td>
                        <td><?php echo $row['comuna']?></td>
                        
                        
                        <td>
                        
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-eye"> ver</i> 
                            </a>
                            
                          
                        
                        </td>
                    </tr>
                   
                    <?php
                 }?>
                 
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-primary btn-lg active" > VOLVER AL INICIO</a>
        </div>
    </div>
    
</div>

<?php include("includes/footer.php")?>