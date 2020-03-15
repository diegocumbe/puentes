<?php include("db.php") ?>
<?php include("includes/header.php")?>
<div class="container col-8">
    
    <div class="row col-30"> 
    
    <div class="container  card card-body" >
    <?php if(isset($_SESSION['message'])){?>
                <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>

            <?php session_unset(); }?>
                
                <table class="table table-bordered " >
                <?php include("tabla.php") ?>
                    <?php
                    $query = "SELECT *FROM registro_de_puentes where comuna='9' ";
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