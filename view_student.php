<?php include ('navbar.php')?>
<?php include ('sidebar.php')?>


<?php
$conn=mysqli_connect("localhost","root","","jeweler")or die(mysqli_error($conn));
$id=$_GET['id'];
$select_query=mysqli_query($conn,"select * from jewel where id=$id")or die(mysqli_error($conn));
foreach ($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $adm=$record['adm'];
    $age=$record['age'];
    $class=$record['class'];
    $gender=$record['gender'];
}

?><br/><br/><br/>

<html>
     <head>
         <title>VIEW</title>
              <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
              <script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>
     </head>
     
        <body>
            <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="header">
                        <h4 class="title">Student Detail</h4>
                    </div>
                    <form  method="POST",action="">
                        <div class="form-group">
                                <label for="name">ID:</label>
                                <input type="text" name="ID" value="<?php echo $id;?>" class="form-control" id="id" readOnly=true>
                            </div>

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="<?php echo $name;?>" class="form-control" id="name">
                            </div>

                            <div class="form-group">
                                <label for="name">Adm.no:</label>
                                <input type="text" name="adm" value="<?php echo $adm;?>" class="form-control" id="adm">
                            </div>

                            <div class="form-group">
                                <label for="name">Gender:</label>
                                <input type="text" name="gender" value="<?php echo $gender;?>" class="form-control" id="gender">
                            </div>

                                    <!---->
                            <div class="form-group">
                                <label for="name">Age:</label>
                                <input type="text" name="age" value="<?php echo $age;?>" class="form-control" id="age">
                            </div>
                                    <!---->
                                    
                                <!------->
                            <div class="form-group">
                                <label for="name">Class:</label>
                                <input type="text" name="class" value="<?php echo $class;?>" class="form-control" id="class">
                            </div>
                                <!------->

                            <div class="form-group">
                                <a  class="btn btn-primary" href="table_data.php">BACK</a>
                            </div>
                        </form>
                </div>
                <div class="col-md-4"></div>
            </div>
                
            </div>
        </body>
</html>
<?php include ('footer.php')?> 
