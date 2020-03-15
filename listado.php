<?php include("firebase.php")?>
<?php include("includes/header.php")?>
<div class="container col-8">
    
    <div class="row col-30"> 
    
    <div class="container  card card-body" >
  
           
            <table class="table table-bordered " >
            <?php include("tabla.php") ?>
                <?php
                   
                   
                   /* 
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
                 }*/
                 $data = json_decode($response, true);
                    foreach ( $data as $key => $value) {?>
                    <tr>
                    <td><?php echo $data[$key]["fecha_de_actualización"]?></td>
                    <td><?php echo $data[$key]["designación"]?></td>
                    <td><?php echo $data[$key]["dirección"]?></td>
                    <td><?php echo $data[$key]["comuna"]?></td>
                    <td>
                        
                            <a href="edit.php?id=<?php echo $data[$key]['id']?>" class="btn btn-secondary">
                                <i class="fas fa-eye"> ver</i> 
                            </a>
                            </td>
                    </tr>
                   
                    <?php
                }
                 ?>
                 
                    </tbody>
                </table>
                <a href="inicio.php" class="btn btn-primary btn-lg active" > VOLVER AL INICIO</a>
        </div>
    </div>
    
</div>

<?php include("includes/footer.php")?>