<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql= "select * from `crud` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_SSOC($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile =$_POST['mobile'];
    $password =$_POST['password'];
    
    $sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo 'Updated Successfully';
        // header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }

}
?>

 

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?> >
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="number" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>