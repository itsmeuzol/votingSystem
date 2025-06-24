<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #003893;">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: white; padding-left: 25px; font-weight: bold; font-size: 18px;">
            <i class="fa fa-home"></i> HOME | OVS - Online Voting System
        </a>
    </div>

    <ul class="nav navbar-top-links navbar-right" style="margin-right: 20px;">
        <?php 
        require 'admin/dbcon.php';

        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Ensure session_id is set
        $session_id = $_SESSION['voters_id'] ?? null;

        if ($session_id) {
            $query = $conn->query("SELECT * FROM voters WHERE voters_id = '$session_id'") or die(mysqli_error($conn));
            if ($query->num_rows > 0) {
                $user_row = $query->fetch_array();
        ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" style="color: white; font-weight: 500;">
                    <i class="fa fa-user"></i> Welcome: <?= htmlspecialchars($user_row['firstname'] . ' ' . $user_row['lastname']) ?>
                </a>
            </li>
            <li>
                <a href="logout.php" style="color: white; font-weight: 500;">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </li>
        <?php 
            }
        }
        ?>
    </ul>
</nav>

<div style="background-color: #f5f5f5; padding: 15px 25px; border-bottom: 2px solid #003893;">
    <a href="vote1.php" class="btn btn-primary" style="background-color: #DC143C; border: none; font-weight: bold;">
        ← Back
    </a>
</div>


<style>
    .navbar-brand:hover,
.navbar-top-links a:hover {
    color: #DC143C !important;
    background-color: transparent;
}
.btn-primary:hover {
    background-color: #a60f2d !important;
}

</style>