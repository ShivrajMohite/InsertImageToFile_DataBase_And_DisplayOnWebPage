
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Name and Image </title>

    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- DELETE DATA -->
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "data_image";
    
    $conn = new mysqli($servername, $username, $password, $database );
    $query = 'Select * from img';
    $result = mysqli_query($conn,$query);


    if(isset($_POST['delete_button'])){
        $id = $_POST['deleteid'];
        
        //echo "<script>alert($id);</script>";
        
         echo $sql_delete = "DELETE FROM `img` WHERE id = $id";
         $result = mysqli_query($conn,$sql_delete);
         if($result){
                     echo "<script>alert('image is Deleted');</script>";
                     header("Refresh:0");
        //}
    }
}            
?>
  </head>
  <body>
       

    
    <div class="container">
        <p><br></p>
        <table class="table table-straped table-bordered table-hover" id="mydata"">
                        <thead>
                                <tr>
                                    <th> id </th>
                                    <th> Name </th>
                                    <th> Images </th>
                                    <th> Delete</th>
                                    
                                </tr>
                        </thead>
                        <tbody>        
                                <?php 
                                $servername = "localhost";
                                $username   = "root";
                                $password   = "";
                                $database   = "data_image";
    
                                //Create connection and select DB
                                 $conn = new mysqli($servername, $username, $password, $database );
                                $i=1;
                                    $sql=mysqli_query($conn,"select * from img");
                                     while($row=mysqli_fetch_array($sql))
                                     {
                                ?>
                                <tr>
                                    <td><?php echo $row['id'];?></td> <!-- <?php echo $row['id']; ?> -->
                                    <td><?php echo $row['Name'];?></td>
                                    <td><img width='100px' src="<?php echo $row['Images'];?>"/></td>
                                    <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?php echo $row['id']; ?>">
                                <span class="glyphicon glyphicon-trash"></span>
                                </button> </td>
                                   <!-- <td><img src="images/thumb/<?php echo $row['file_name'];?>" width="150px;" height="100px;"/></td>-->

                                   <!-- DELETE MODAL -->

                                   <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Modal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                        </button>
                                          </div>
                                          <form method="POST">
                                          <div class="modal-body">
                                          <input type="hidden" value="<?= $row['id'] ?>" name="deleteid">
                                            <div class="alert alert-danger" role="alert">
                                              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                              <span class="sr-only">Delete</span>Do You really want to delete the row  
                                              </div>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                            <button type="submit" name="delete_button" class="btn btn-primary">YES</button>
                                          </div>
                                        </form>

                                        </div>
                                      </div>
                                    </div>
                                     <!-- END DELETE MODAL -->
                                </tr>
                            

                                    <?php $i++; 
                                    }

                                     ?>


                        </tbody>                
        </table>
        
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>