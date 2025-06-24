<?php
require_once 'admin/dbcon.php';

if (isset($_POST['login'])) {
    $idno = $_POST['idno'];
    $password = md5($_POST['password']); // hash once

    $voter_query = $conn->query("SELECT * FROM voters WHERE id_number = '$idno'") or die(mysqli_error($conn));

    if ($voter_query->num_rows > 0) {
        $voter = $voter_query->fetch_array();

        if ($voter['password'] === $password) {
            if ($voter['account'] === 'Active') {
                if ($voter['status'] === 'Unvoted') {
                    // Login successful
                    session_start();
                    $_SESSION['voters_id'] = $voter['voters_id'];
                    $_SESSION['firstname'] = $voter['firstname']; // or ['lastname']

					echo "<script>alert('Login successful.');</script>";
                    header('location:vote1.php');
                    exit();
                } else {
                    // Already voted
                    echo "<script>alert('Sorry, you have already voted.');</script>";
                }
            } else {
                // Inactive account
                echo "<script>alert('Your account is not activated. Please contact admin.');</script>";
            }
        } else {
            // Incorrect password
            echo "<script>alert('Incorrect password.');</script>";
        }
    } else {
        // No such ID
        echo "<script>alert('Voter ID not found.');</script>";
    }
}
?>
