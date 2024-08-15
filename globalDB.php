<?php

// $connection = mysqli_connect("localhost", "root", "", "physicaleducationdb");
// if ($result = mysqli_query($connection, "SELECT  imageURL from pe_sportsimages")) {
//   echo "Returned rows are: " . mysqli_num_rows($result);
//   $RRR=mysqli_fetch_array($result);

//   foreach ($RRR as $value) {
//     echo count($RRR);
//     echo $value;
//   }
//   // Free result set
//   mysqli_free_result($result);
// }else{
//     echo "No data";
// }

// mysqli_close($connection);

$connection = mysqli_connect("localhost", "root", "", "physicaleducationdb");

if ($connection === false) {
    die("Connection failed: " . mysqli_connect_error());
}

// $query = "SELECT imageURL FROM pe_sportsimages";
//$result = mysqli_query($connection, $query);

// if ($result) {
//     echo "Returned rows are: " . mysqli_num_rows($result);

//     while ($row = mysqli_fetch_assoc($result)) {
//         $imageURL = $row['imageURL'];
//         echo $imageURL . "<br>";
//     }

//     // Free result set
//     mysqli_free_result($result);
// } else {
//     echo "Query failed: " . mysqli_error($connection);
// }


