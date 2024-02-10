<?php
include "dbconnect.php";
$rcode = "";
$jrank = "";
$rate = "";
$messAlert = "";
function getInfo()
{
  $info = array();
  $info[0] = $_POST['rcode'];
  $info[1] = $_POST['jrank'];
  $info[2] = $_POST['rate'];
  return $info;
}
if (isset($_POST["saverec"])) {
  $data = getInfo();
  $sql = "INSERT INTO employee (rcode, jrank, rate) VALUES ('$data[0]', '$data[1]', '$data[2]')";

  if ($conn->query($sql) === TRUE) {

    $messAlert = "<script>alert('Record Successfully Created...')</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


if (isset($_POST["searchData"])) {
  $data = getInfo();
  $sql = "SELECT * FROM employee WHERE rcode=$data[0]";
  $search_result = mysqli_query($conn, $sql);
  if ($search_result) {
    if (mysqli_num_rows($search_result)) {
      while ($row = mysqli_fetch_array($search_result)) {
        $rcode = $row['rcode'];
        $jrank = $row['jrank'];
        $rate = $row['rate'];
      }
    } else {
      echo "No data found!";
    }
  } else {
    echo "Something went wrong!";
  }
}

if (isset($_POST["cls"])) {
  $rcode = "";
  $jrank = "";
  $rate = "";
}



$conn->close();
