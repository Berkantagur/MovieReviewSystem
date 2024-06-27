<?php 
session_start(); 
include "db_demo_connection.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['content']) && isset($_POST['movie_id'])) {
        $username = $_POST['username'];
        $content = $_POST['content'];
        $movie_id = $_POST['movie_id'];

        if(!empty($username) && !empty($content) && !empty($movie_id)){
            // SQL sorgusu
            $sql = "INSERT INTO comments (username, content, movie_id) VALUES ('$username', '$content', '$movie_id')";

            // Sorgu çalıştırılması
            if ($connection->query($sql) === TRUE) {
                $redirect_url = '';
                switch($movie_id) {
                    case 1:
                        $redirect_url = 'the_dune.php';
                        break;
                    case 2:
                        $redirect_url = 'the_witcher.php';
                        break;
                    case 3:
                        $redirect_url = 'the_walking_dead.php';
                        break;
                    case 4:
                        $redirect_url = 'the_doctor_strange.php';
                        break;
                    case 5:
                        $redirect_url = 'the_matrix.php';
                        break;
                    case 6:
                        $redirect_url = 'the_batman.php';
                        break;
                    case 7:
                        $redirect_url = 'the_breaking_bad.php';
                        break;
                    case 8:
                        $redirect_url = 'the_dark.php';
                        break;
                    case 9:
                        $redirect_url = 'the_inside_out.php';
                        break;
                    case 10:
                        $redirect_url = 'the_gotfather.php';
                        break;
                    case 11:
                        $redirect_url = 'the_minions.php';
                        break;
                    case 12:
                        $redirect_url = 'the_platform.php';
                        break;
                    case 13:
                        $redirect_url = 'the_harry_potter.php';
                        break;
                    case 14:
                        $redirect_url = 'the_rings.php';
                        break;

                    default:
                        $redirect_url = 'index.php';
                        break;
                }
                header("Location: $redirect_url");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        }else{
            echo "Error: All fields are required.";
        }
    }
}else{
    header("Location: doctor_strange.php");
}

$connection->close();
?>