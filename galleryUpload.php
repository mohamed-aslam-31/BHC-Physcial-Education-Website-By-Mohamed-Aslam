<?php
include 'globalDB.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/gallery"; // Directory to store the uploaded images
    $targetFile = $targetDir . basename($_FILES["image"]["name"]); // Path to the uploaded image

    $uploadOk = true;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the image is a valid file
    if (isset($_FILES["image"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = false;
        }
    }

    // ... (remaining checks for file size, format, etc.)

    // Upload the file if no errors occurred
    if ($uploadOk) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // Image uploaded successfully, now insert data into the database
            $img_des = $_POST["img_des"];
            $url = $targetFile; // Store the uploaded image URL
            $sportsName = $_POST["sports"];



            //$conn = mysqli_connect("localhost", "root", "", "physicaleducationdb");
            $conn = $connection;
            // if ($conn === false) {
            //     die("Connection failed:  conn->connect_error");
            // }

            // //$insertQuery = "INSERT INTO pe_team_games (category, year, card_img, card_medal, position, sports_name) VALUES (?, ?, ?, ?, ?, ?)";
            // $insertQuery = "INSERT INTO `pe_sports_galley` ( `url`, `img_des`, `sports`) VALUES (?, ?, ?)";

            // $stmt = $conn->prepare($insertQuery);
            // $stmt->bind_param("sss", $url, $img_des, $sportsName);
            // $stmt->execute();
            // $stmt->close();
            // $conn->close();
            if ($conn === false) {
                die("Connection failed: ");
            }
            
            //$insertQuery = "INSERT INTO pe_team_games (category, year, card_img, card_medal, position, sports_name) VALUES (?, ?, ?, ?, ?, ?)";
            $insertQuery = "INSERT INTO `pe_sports_galley` (`url`, `img_des`, `sports`) VALUES ('$url', '$img_des', '$sportsName')";
            
            $result = mysqli_query($conn, $insertQuery);
            
            if ($result) {
                echo "Insertion successful";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            
            
            

            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Insert Data</title>
</head>

<body>
    
    
    <form  action="" method="post" enctype="multipart/form-data">
        <label for="img_des">Image Description:</label>
        <input type="text" name="img_des" required><br><br>

        <select   name="sports" required>
            <option value="cricket">cricket</option>
            <option value="badminton">badminton</option>
            <option value="chess">chess</option> 
            <option value="table tennis">table tennis</option>
            <option value="basketball">basketball</option>
            <option value="football">football</option>
            <option value="hockey">hockey</option>
            <option value="volleyball">volleyball</option>
            <option value="tennis">tennis</option>
            <option value="archery">archery</option>
            <option value="other">other</option>
        </select>
        <label for="image">Select Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>

        <input type="submit" name="submit" value="Insert Data">
    </form>
</body>

</html>