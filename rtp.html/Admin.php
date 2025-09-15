<!-- Php code to admin login -->
<?php
if(isset($_POST['logina'])){
    $user = $_POST['username'];
    $adcode = $_POST['admincode'];
    if($user=="Admin" && $adcode=="100"){
        echo "<script>alert('Welcome,You are logged in...!');
        window.location.href ='managemem.php';
        </script>";
    }
    else{
        echo "<script>alert('Sorry,Please enter valid details.!!');
        </script>";
    }
}
?>