<?php
//include('process.php');
$conn=mysqli_connect("localhost","root","","jeweler")or die(mysqli_error($conn));
$db_records=mysqli_query($conn,"select * from jewel")or die(mysqli_error($conn));
?>


<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>STUDENT <span class="table-project-n">RECORDS</span></h1>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Adm</th>
                                    	<th>Age</th>
                                    	<th>Class</th>
                                        <th>Gender</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach($db_records as $record){?>
                                            <tr>
                                                <td><?php echo $record['id'];?></td>
                                                <td><?php echo $record['name'];?></td>
                                                <td><?php echo $record['adm'];?></td>
                                                <td><?php echo $record['age'];?></td>
                                                <td><?php echo $record['class'];?></td>
                                                <td><?php echo $record['gender'];?></td>
                                                <td>
                                                    <a href="view_student.php?id=<?php echo $record['id'];?>"class="btn btn-primary">view</a>
                                                    <a href="update_student.php?id=<?php echo $record['id'];?>"class="btn btn-info">update</a>
                                                    <a href="delete_student.php?id=<?php echo $record['id'];?>"class="btn btn-danger">delete</a>
                                                </tr>
                
                                    <?php }?>
                                        
                                    </tbody>
                                </table>

                            </div>


                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->