<?php
include "globalDB.php";
// servername => localhost
// username => root
// password => empty
// database name => physicaleducationdb
$con = $connection;

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Taking all values from the form data (input)
$fullname = $_REQUEST['fullname'];
$contact = $_REQUEST['contact'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$gender = $_REQUEST['gender'];
$category = $_REQUEST['category'];

$parorgaurd = $_REQUEST['par-or-gaurd'];
$pname = $_REQUEST['PNAme'];
$pmob = $_REQUEST['PMobile'];
$sportsInt = $_REQUEST['table-tennis'];

$spin = implode(",", $sportsInt);



echo $spin;


// Performing insert query execution
// here our table name is sportsformclg

if ($category == "college") {
    $collegerollnumber = $_REQUEST['college-roll-number'];
    $Department = $_REQUEST['Department'];
    $BatchYear = $_REQUEST['BatchYear'];
    $sql = "INSERT INTO `pe_sportsformclg` (`roll_no`, `mobile_no`, `dob`, `address`, `department`, `batch_year`, `fullname`, `email`, `age`, `gender`, `parent_name`, `parent_mobile_no`, `sports_intrested`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Create a prepared statement
    $stmt = mysqli_prepare($con, $sql);
    if (!$stmt) {
        echo "Prepare statement failed: " . mysqli_error($con);
        exit();
    }
    // Bind parameters with values and data types
    mysqli_stmt_bind_param(
        $stmt,
        "ssssssssissss",
        $collegerollnumber,
        $contact,
        $dob,
        $address,
        $Department,
        $BatchYear,
        $fullname,
        $email,
        $age,
        $gender,
        $pname,
        $pmob,
        $spin
    );
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>data stored in the database successfully."

            . "<script>"
            . "alert('Data Added Successfully');"
            .
            "window.location.replace('/applications.php');"
            . "</script>";
        ;
        echo nl2br("\n$fullname\n $gender\n "
            . "$address\n $email");
    } else {
        echo "ERROR: Hush! Sorry " . mysqli_error($con);
    }
} else {
    $schoolclass = $_REQUEST['school-class'];
    $schoolname = $_REQUEST['school-name'];
    $schooladdress = $_REQUEST['school-address'];
    $sql = "INSERT INTO `pe_sportsformschool` (`school_name`, `mobile_no`, `dob`, `address`, `class`, `school_address`, `name`, `email`, `age`, `gender`, `parent_name`, `parent_mobile_no`, `sports_intrested`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    // Bind parameters with values and data types
    if (!$stmt) {
        echo "Prepare statement failed: " . mysqli_error($con);
        exit();
    }

    mysqli_stmt_bind_param(
        $stmt,
        "ssssssssissss",
        $schoolname,
        $contact,
        $dob,
        $address,
        $schoolclass,
        $schooladdress,
        $fullname,
        $email,
        $age,
        $gender,
        $pname,
        $pmob,
        $spin
    );
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "<h3>data stored in the database successfully."

            . "<script>"
            . "alert('Data Added Successfully');"
            .
            "window.location.replace('http://localhost:3000/applications.php');"
            . "</script>";
    } else {
        echo "ERROR: Hush! Sorry " . mysqli_error($con);
    }
}






// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);