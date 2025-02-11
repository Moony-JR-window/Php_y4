<?php
include 'db.php';

$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
    
    if ($conn->query($sql)) {
        echo "User updated! <a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="POST">
    <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
    <input type="email" name="email" value="<?= $user['email'] ?>" required><br>
    <button type="submit">Update User</button>
</form>

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