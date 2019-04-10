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

?><br/><br/><br/><br/>

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Student Profile</h4>
                            </div>
                            <div class="content">
                                <form name="UPDATE FORM" action="" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control"  value="<?php echo $name;?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Admission number</label>
                                                <input type="text" name="adm" class="form-control" value="<?php echo $adm;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" name="gender" class="form-control"  value="<?php echo $gender;?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control" value="<?php echo $age;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <input type="text" name="class" class="form-control" value="<?php echo $class;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="submit" class="btn btn-info btn-fill pull-right" value="UPDATE PROFILE">                                                                        
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>

                </div>
            </div>
        </div>
        <?php
            if(isset($_POST['submit'])){
                $name=$_POST['name'];
                $adm=$_POST['adm'];
                $gender=$_POST['gender'];
                $age=$_POST['age'];
                $class=$_POST['class'];
                $update_query=mysqli_query($conn,"update jewel set name='$name',adm='$adm',gender='$gender',age='$age',class='$class' where id='$id'")or die(mysqli_error($conn));
                if($update_query){
                    ?>
                     <script>
                            window.alert('success');
                            window.location.href='table_data.php';
                     </script>
                    <?php
                    //echo "<script>window.alert('Update Success')</script>";
                    
                    //header("refresh:0;url=table_data.php");
                }else{
                    echo"<script>window.alert('failed)</script>";
                    header("refresh:0;url=table_data.php");
                }

            }
        ?>
        <br/><br/>
<?php include ('footer.php')?> 