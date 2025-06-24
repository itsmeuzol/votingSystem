<?php include ('head.php'); ?>

<body>
<?php include ('view_banner.php'); ?>

<div class="container">
    <div class="row">

        <center> 
            <i>Login As:</i>
            <select onchange="page(this.value)">
                <option value="admin/index.php">System Admin</option>
                <option value="admin2/index.php">Candidate</option>
                <option selected disabled>Voter</option> 
            </select>
        </center>

        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">

                <div class="form-heading">
                    <center>Voter Login</center>
                </div>

                <div class="panel-body">
                    <form role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Voter ID</label>
                            <input class="form-control" placeholder="Enter Voter ID" name="idno" type="text" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" placeholder="Enter Password" name="password" type="password" required>
                        </div>

                        <button class="btn btn-lg btn-success btn-block" name="login" style="background-color: #166961;">Login</button>

                        <a href="register.php">
                            <button type="button" class="btn btn-lg btn-block" style="margin-top:10px;background-color: #DC143C; color:white;">
                                Register
                            </button>
                        </a>

                        <?php include('login_query.php'); ?>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    function page(src) {
        window.location = src;
    }
</script>

<?php 
    include('script.php');
    include('footer.php');
?>

</body>
</html>
