<?php
include("admin/dbcon.php");
session_start();

// Validate session variables
if (!isset($_SESSION['mla_id']) || !isset($_SESSION['voters_id'])) {
    die("Session data missing. Please login again.");
}

$mla_id = $_SESSION['mla_id'];
$voters_id = $_SESSION['voters_id'];

// Insert vote (let vote_id auto-increment)
$conn->query("INSERT INTO `votes` (`candidate_id`, `voters_id`) VALUES ('$mla_id', '$voters_id')") or die($conn->error);

// Update voter status
$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$voters_id'") or die($conn->error);

// End session
session_destroy();

// Redirect to homepage
header("Location: index.php");
exit();
?>
