<?php 
session_start();
include_once ('../includes/db_connect.php');

$message = null; // For login error messages

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $position = $_POST['position'];

    switch ($position) {
        case 'Admin':
            $query = "SELECT manager_id, manager_username, manager_image FROM manager WHERE manager_username=? AND manager_password=?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "ss", $username, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                $_SESSION['manager_id'] = $row['manager_id'];
                $_SESSION['manager_username'] = $row['manager_username'];
                $_SESSION['manager_image'] = $row['manager_image'];

                header("location:manager/manager_dashboard.php");
                exit(); // Ensure script execution stops after the redirect
            } else {
                $message = "<div class='alert alert-danger'>Invalid login. Try Again</div>";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <title>Apna Cafe Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
        }

        .login-card {
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            background: white;
            opacity: 0.9; /* Slight transparency */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
        }

        .login-image {
            width: 100px; /* Adjust size as needed */
            margin-bottom: 20px;
            animation: bounce 1.5s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-15px);
            }
            60% {
                transform: translateY(-7px);
            }
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 20px;
            }

            .login-image {
                width: 80px; /* Smaller image on small screens */
            }
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card login-card">
                <div class="card-body text-center">
                    <h5 class="card-title">Apna System</h5>
                    <img src="../images/login.gif?<?php echo time(); ?>" alt="Login Image" class="login-image">
                    
                    <?php 
                    // Display any login error messages
                    echo $message; 
                    ?>
                    
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <select name="position" class="form-control">
                                <option style="display:none;">Login as......</option>
                                <option>Admin</option>                    
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
