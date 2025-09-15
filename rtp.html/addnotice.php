<?php
if(isset($_POST['send_notice'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"noticeboard");
  $query = "insert into notices values(null,'$_POST[nname]','$_POST[ntype]','$_POST[ndate]','$_POST[nmsg]')";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script>alert('Notice Created...!!');
    window.location.href = 'managemem.php';
    </script>";
  }
  else{
    echo "<script>alert('Please try again');
    window.location.href = 'addnotice.php';
    </script>";
  }
}
?>