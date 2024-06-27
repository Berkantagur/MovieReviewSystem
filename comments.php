<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Comment</title>
    <link rel="stylesheet" href="comment.css">
</head>
<body>
    <form action="add_comment.php" method="post" class="comment-container">

        <div class="logo">
            <img src="Images/MovieRiders-Logo.png" alt="MovieRiders Logo" width="150px" height="100px">
            <h2>Movie Riders</h2>
        </div>

        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
        <input type="hidden" name="movie_id" value="<?php echo $_GET['movie_id']; ?>">

        <div class="txtbox">
            <textarea name="content" placeholder="Your Comment" required></textarea>
        </div>

        <button type="submit" class="btn">Add Comment</button>
    </form>
</body>
</html>