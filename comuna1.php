<?php include("firebase.php") ?>
<?php include("includes/header.php")?>
<div class="container col-8">
    
    <div class="row col-30"> 
    
    <div class="container  card card-body" >

                
                <table class="table table-bordered " >
                    <thead>
                    <?php include("tabla.php") ?>
                    <?php
                   /* $query = "SELECT *FROM registro_de_puentes where comuna='1' ";
                    $result_task = mysqli_query($conn,$query);
                    
                    while($row = mysqli_fetch_array($result_task)){?>
                    <tr>
                        <td><?php echo $row['fecha_de_actualización']?></td>
                        <td><?php echo $row['designación']?></td>
                        <td><?php echo $row['dirección']?></td>
                        <td><?php echo $row['comuna']?></td>
                        
                        
                        <td>
                        
                            <a href="ver.php?<?php echo $row['visita']?>" class="btn btn-secondary">
                                <i class="fas fa-eye"> ver</i> 
                            </a>
                            
                          
                        
                        </td>
                    </tr>
                   
                    <?php
                 }?>
                 */
                
                $data = json_decode($response, true);
                
                    foreach ( $data as $key => $value ) {?>
                    <?php 
                  
                    
                    ?>
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
                <a href="index.php" class="btn btn-primary btn-lg active" > VOLVER AL INICIO</a>
        </div>
    </div>
    
</div>

<?php include("includes/footer.php")?>