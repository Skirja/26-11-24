<!-- Super Admin Page -->
<?php

session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Super Admin') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Super Admin Dashboard</a>
            <div class="ms-auto">
                <form action="logout.php" class="m-0">
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                <p class="card-text">Your role is: <?php echo htmlspecialchars($role); ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>