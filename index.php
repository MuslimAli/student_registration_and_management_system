<?php

$conn=mysqli_connect("localhost","root","","jeweler") or die(mysqli_error($conn));
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
       
       $select_query=mysqli_query($conn,"select * from admin where username='$username' and password='$password'") 
        or die(mysqli_error($conn));
        $num=mysqli_num_rows($select_query);
            if($num==1){
                foreach($select_query as $record){
                    $_SESSION ['username']=$record['username'];
                    $_SESSION ['password']=$record['password'];
                    $_SESSION['password']=TRUE;
                    
           }
           echo"<script>window.alert('login successful')</script>";
           header("refresh:0;url=table_data.php");
           }else{
               echo"<script>window.alert('login failed')</script>";
               header("refresh:0;url=index.php");
           }


}
?>




<html>
    <header>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    </header>
    <body>
        <div class="container">
            <div class="row" style="height:200px;"></div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <form name="login form" action="" method="POST">
                        <h3>LOGIN</h3>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="username"><br/><br/>
                                <input type="password" name="password" class="form-control" placeholder="password"><br/><br/>
                                <input type="submit" name="submit" class="btn btn-primary" style="width:300px" value="LOGIN">
                            </div>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </body>

</html>