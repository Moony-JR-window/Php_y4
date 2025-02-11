<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Post</title>
</head>
<body>
    <h2>Create a Post</h2>
    <form action="log_error.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    <h1>Hello</h1>
</body>
</html>
