<?php include ('head.php');?>
<?php include_once(__DIR__ . '/../config.php'); ?>
<body>
<?php include ('../view_banner.php');?>
    <div class="container">
        <div class="row">
		
                    <center> 
                        <i>Login As:</i>
                        <select onchange = "page(this.value)">
                            <option  value = "../admin/index.php">System Admin</option>
                            <option  selected disables>Candidate</option>
                            <option value = "../login.php">Voter</option> 
                    </select>
                        
                    </center>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">

                    
                    <div class="form-heading">
                        <center>User Log in</center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                                <div class="form-group">
                                    <label for = "username" >Login ID</label>
                                        <input class="form-control" placeholder="Enter Login ID" name="login_id" type="text" autofocus>
                                </div>
							
                                <div class="form-group">
									<label for = "username" >Username</label>
										<input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" >Password</label>
										<input class="form-control" placeholder="Enter Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login" style="background-color: #166961;">Login</a>
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>
			
			 </div>
        </div>
    </div>
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>

  <?php 
  include ('script.php');
  include ('../footer.php');
  ?>

</body>

</html>
