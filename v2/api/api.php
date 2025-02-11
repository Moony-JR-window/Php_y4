<?php
include 'db.php';

// Get the request method
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        if ($id) {
            $result = $conn->query("SELECT * FROM users WHERE id=$id");
            if (!$result) {
                die(json_encode(["error" => $conn->error]));
            }
            echo json_encode($result->fetch_assoc());
        } else {
            $result = $conn->query("SELECT * FROM users");
            if (!$result) {
                die(json_encode(["error" => $conn->error]));
            }
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            echo json_encode($users);
        }
        break;    

    case "POST":
        $data = json_decode(file_get_contents("php://input"), true);
        $name = $data['name'];
        $email = $data['email'];
        
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql)) {
            echo json_encode(["message" => "User created successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case "PUT":
        $data = json_decode(file_get_contents("php://input"), true);
        $id = intval($_GET['id']);
        $name = $data['name'];
        $email = $data['email'];

        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";
        if ($conn->query($sql)) {
            echo json_encode(["message" => "User updated successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    case "DELETE":
        $id = intval($_GET['id']);
        $sql = "DELETE FROM users WHERE id=$id";
        
        if ($conn->query($sql)) {
            echo json_encode(["message" => "User deleted successfully"]);
        } else {
            echo json_encode(["error" => $conn->error]);
        }
        break;

    default:
        echo json_encode(["error" => "Invalid request"]);
}
?>
