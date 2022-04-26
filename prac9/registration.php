<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 9 | 190630107063</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prac9";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
    <br>
    <?php
    $sql = $conn->prepare("INSERT INTO student (firstname, lastname, dob) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $fname, $lname, $dob);
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $sql->execute();
    echo "New record created successfully";
    ?>
    <?php
    $sql = "SELECT id, firstname, lastname, dob FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table>';
        echo    '<thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                    </thead>';
        echo '<tbody>';
        while ($row = $result->fetch_assoc()) {
            echo    "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['firstname']}</td>
                            <td>{$row['lastname']}</td>
                            <td>{$row['dob']}</td>
                        </tr>";
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>