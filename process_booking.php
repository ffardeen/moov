<?php 
error_reporting(0); 
include('include/header.php');
if(!isset($_SESSION['client']['status']))
{
	header('location:login.php');
}
?>

<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css" />
<?php include('include/footer.php');?>
<?php
    
    extract($_POST);
    include('include/config.php');
    $_SESSION['screen']=$screen;
    $_SESSION['seatno']=$seat;
	if(empty($seat))
	{
		header("book.php");
	}
	print_r($seat);
    $_SESSION['seats']=$seats;
    $_SESSION['amount']=$amount;
    $_SESSION['date']=$date;
    $_SESSION['time']=$time;
    header('location:bank.php');
?>
<script>
    setTimeout(function(){ window.location="bank.php"; }, 1000);
</script>