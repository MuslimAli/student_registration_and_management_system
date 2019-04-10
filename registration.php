<?php include('navbar.php')?>
<?php include('sidebar.php')?><br/><br/><br/><br/>


<div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Add new student</h4>
                            </div>
                            <div class="content">
                                <form name="update-form" action="" method="POST" >
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Admn No</label>
                                                <input type="text" name="adm" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Age</label>
                                                <input type="text" name="age" class="form-control"  >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" name="gender" class="form-control"  >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <input type="text" name="class" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <input type="submit"  name="submit" class="btn btn-info btn-fill pull-right" value="Add student">
                                    
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                       
                    </div>

                </div>
            </div>
        </div>

        <?php
                if(isset($_POST['submit'])){
                    $conn=mysqli_connect("localhost","root","","jeweler") or die(mysqli_error($conn));
                    $name=$_POST['name'];
                    $adm=$_POST['adm'];
                    $gender=$_POST['gender'];
                    $age=$_POST['age'];
                    $class=$_POST['class'];
                    echo $name;
                    echo $adm;
                    echo $gender;
                    echo $age;
                    echo $class;

                    $insert=mysqli_query($conn,"INSERT INTO jewel(name,adm,gender,age,class)
                    VALUES('".$name."','".$adm."','".$gender."','".$age."','".$class."')")
                    or die(mysqli_error($conn));
                    if ($insert){
                        ?>
                        <script>
                            window.alert('success');
                            window.location.href='table_data.php';
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                             window.alert('fail');
                            window.location.href='registration.php';
                        </script>
                        <?php

                    }
                
                }

            ?>
<?php include('footer.php')?>