<?php

require("includes/common.php");

  $serNo = $_POST['serNo'];
  $serNo = mysqli_real_escape_string($con, $serNo);

  $dob = $_POST['dob'];
  $dob = mysqli_real_escape_string($con, $dob);
  
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $rank = $_POST['rank'];
  $rank = mysqli_real_escape_string($con, $rank);

  $trade = $_POST['trade'];
  $trade = mysqli_real_escape_string($con,$trade);

  $unit = $_POST['unit'];
  $unit = mysqli_real_escape_string($con, $unit);
  
  $bpay = $_POST['bpay'];
  $bpay = mysqli_real_escape_string($con, $bpay);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);


  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM personal_detail WHERE serNo='$serNo'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Service number Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } 
  /*else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } 
  */
   else {
    
    $query = "INSERT INTO personal_detail(serNo, dob,rank,name,trade,unit,bpay,address)VALUES('" . $serNo . "','" . $dob . "','" . $rank . "','" . $name . "','" . $trade . "','" . $unit . "','" . $bpay . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['serNo'] = $serNo;
   // $_SESSION['user_id'] = $user_id;
    header('location: second_page.php');
  }
?>