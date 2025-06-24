<?php include ('head.php');?>

<body>
    <?php include ('side_bar.php');?>
    <div class="selection-wrapper">
        <h2><i class="fa fa-user"></i> Welcome: <?= htmlspecialchars($user_row['firstname'] . ' ' . $user_row['lastname']) ?> </h2>
        <p class="voter-message">
            Please select the candidate group you would like to vote for. <br>
            Take your time and make the right decision for the better future.
        </p>

        <select onchange="page(this.value)" class="candidate-select">
            <option disabled selected>Select Candidate Group</option>
            <option value="pm_vote.php">President</option>
            <option value="cm_vote.php">Vice President</option>
            <option value="mla_vote.php">Secretary</option>
        </select>
    </div>

    <?php    
        include ('footer.php');
        ?>

    <script>
        function page(src) {
            window.location = src;
        }

    </script>

</body>

</html>

<style>
    .selection-wrapper {
    background-color: #f9f9f9;
    border: 2px solid #003893;
    padding: 40px 30px;
    margin: 60px auto;
    max-width: 600px;
    border-radius: 10px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.selection-wrapper h2 {
    color: #003893;
    font-size: 30px;
    margin-bottom: 15px;
}

.voter-message {
    color: #444;
    font-size: 18px;
    margin-bottom: 30px;
    line-height: 1.6;
}

.candidate-select {
    width: 80%;
    padding: 12px 20px;
    font-size: 18px;
    border: 2px solid #DC143C;
    border-radius: 8px;
    color: #003893;
    background-color: white;
    font-weight: bold;
    transition: all 0.3s ease;
}

.candidate-select:hover {
    border-color: #003893;
    background-color: #f1f1f1;
}

.candidate-select:focus {
    outline: none;
    box-shadow: 0 0 6px #003893;
}

</style>