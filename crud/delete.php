<?php
include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");

header("Location: index.php");
?>

<div>
    <h2>List of Users</h2>
    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Name: ". $row["name"]. " - Email: ". $row["email"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
   ?>
</div>