<?php
include "globalDB.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/"; // Directory to store the uploaded images
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
            $category = $_POST["category"];
            $year = $_POST["year"];
            $cardImg = $targetFile; // Store the uploaded image URL
            $cardMedal = $_POST["card_medal"];
            $position = $_POST["position"];
            $sportsName = $_POST["sports_name"];
            $playerName = $_POST["player_name"];

            $tbName = $_POST["table_name"];


            $conn = $connection;

            if ($conn === false) {
                die("Connection failed:  conn->connect_error");
            }


            // $insertQuery = "INSERT INTO  `$tbName` ( `player_name`,  `category`, `year`, `image_address`, `medal_address`, `position`, `sports_name`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            // echo $insertQuery;
            // $stmt = $conn->prepare($insertQuery);
            // $stmt->bind_param("sssssss", $playerName, $category, $year, $cardImg, $cardMedal, $position, $sportsName);
            // if ($stmt->execute()) {
            //     echo "Data inserted successfully!";
            // } else {
            //     echo "Error: ";
            // }

            // $stmt->close();
            // $conn->close(); 
            $insertQuery = "INSERT INTO `$tbName` (`player_name`, `category`, `year`, `image_address`, `medal_address`, `position`, `sports_name`) VALUES ('$playerName', '$category', '$year', '$cardImg', '$cardMedal', '$position', '$sportsName')";
            echo $insertQuery;

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
    <h2>Insert Data into pe_team_games Table</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="category">Category:</label>
        <input type="text" name="category" required><br><br>

        <label for="year">Year:</label>
        <input type="text" name="year" required><br><br>

        <label for="card_medal">Card Medal URL:</label>
        <input type="text" name="card_medal" required><br><br>

        <label for="position">Position:</label>
        <input type="text" name="position" required><br><br>

        <label for="sports_name">Sports Name:</label>
        <input type="text" name="sports_name" required><br><br>
        <label for="player_name">Player Name:</label>
        <input type="text" name="player_name" required><br><br>

        <!-- <label for="sports_name">Sports Name:</label>
        <input type="text" name="sports_name" required><br><br> -->
        <select id="table" name="table_name">
            <option value="pe_bharathidasan_display_1">Bharathidasan Display 1</option>
            <option value="pe_bharathidasan_display_2">Bharathidasan Display 2</option>
            <option value="pe_bharathidasan_level">Bharathidasan Level</option>

            <option value="pe_international_display_1">International Display 1</option>
            <option value="pe_international_display_2">International Display 1</option>
            <option value="pe_international_level">International Level</option>

            <option value="pe_national_display_1">National Display 1</option>
            <option value="pe_national_display_2">National Display 2</option>
            <option value="pe_national_level">National Level</option>

            <option value="pe_bhc_college_display_1">Golden Jubilee Display</option>
            <option value="pe_bhc_college_level">Golden JubileeDisplay 2</option>

            <option value="pe_state_and_other_display_1">State and Other Display 1</option>
            <option value="pe_state_and_other_display_2">State and Other Display 2</option>
            <option value="pe_state_and_other_level">State and Other Level</option>


        </select>

        <label for="image">Select Image:</label>
        <input type="file" name="image" accept="image/*" required><br><br>

        <input type="submit" name="submit" value="Insert Data">
    </form>
    <script>
        document.getElementById("table").onchange = e => {
            console.log(e.target.value);
        }
    </script>
</body>

</html>