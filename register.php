<?php include('head.php'); ?>
<body>

<div id="wrapper">
    
    <?php include('./view_banner.php'); ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div id="voter-registration-form" class="container">
            <div class="form-box">
                <div class="form-title">Voter Registration</div>

                <form method="post" enctype="multipart/form-data">
                    
                    <label for="voter_id">Voter ID</label>
                    <input class="form-control" type="text" id="voter_id" name="id_number" placeholder="Enter Voter ID" required>

                    <label for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password" required>

                    <label for="repassword">Retype Password</label>
                    <input class="form-control" type="password" id="repassword" name="password1" placeholder="Retype Password" required>

                    <label for="firstname">First Name</label>
                    <input class="form-control" type="text" id="firstname" name="firstname" placeholder="Enter First Name" required>

                    <label for="lastname">Last Name</label>
                    <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Enter Last Name" required>

                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                    <label for="age">Age</label>
                    <input class="form-control" type="number" id="age" name="Age" placeholder="Enter Age" required>

                    <div class="text-center">
                        <button name="save" type="submit">Create My Account</button>
                    </div>

                    <div class="link mt-3 text-center">
                        <a href="../login.php">Login to vote</a>
                    </div>

                </form>

                <?php require 'signUpData.php'; ?>
            </div>
        </div>
    </div>

    <?php include('./footer.php'); ?>
</div>

</body>
</html>


