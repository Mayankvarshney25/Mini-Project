<?php 

session_start();
include('config.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="select * from user where Email='$email'";
    $result=mysqli_query($conn,$sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        echo "<script>alert('User already exists');</script>";
        echo "<script>window.redirect('newi.html');</script>";

    }else{
        $sql="insert into user(Name,Email,Password) values('$name','$email','$pass')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            echo "<script>alert('Registration SUccesfull');</script>";
            header('Location:newi.html');

 
    }
}
}

if(isset($_POST['login']))
{
    
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="select * from user where Email='$email' and Password='$pass'";
    $result=mysqli_query($conn,$sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
       
       header('Location:expenses.html');

    }else{
       
            echo "<script>alert('Wrong ID Pass');</script>";
          

 
    
}
}




?>
