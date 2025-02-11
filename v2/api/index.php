
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql)) {
        echo "User added successfully! <a href='index.php'>Go Back</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <button type="submit">Add User</button>
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