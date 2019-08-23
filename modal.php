    <?php 
    //include 'db_connection.php ';
    //include 'functions.php';
    
    ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="">PORTAL Login Page</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="login.php">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Enter your Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Enter your password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" value="Login" class="form-control btn btn-info">
                                </div>


                            </form>
                            <a href="#myModal2" data-toggle="modal">clik to Sign Up if you are yet to </a>
                            <b></b>
                        </div>
                        <div class="modal-footer">
                            &COPY;BandS 2019
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="font-family: monotype corsiva;">PORTAL Login Page</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="register.php" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="mail" name="email" class="form-control" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control" required>
                                        <option value="">Select Gender</option>
                                        <option value="male" >Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="Nationality" class="form-control" required>
                                        <option value="Nigeria">Select Country</option>
                                        <option value="Nigeria" >Nigeria</option>
                                        <option value="Ghana">Ghana</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="state" class="form-control" required>
                                        <option value="">Select State</option>
                                        <option value="Kaduna" >Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Lagos">Lagos</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="department" class="form-control" required>
                                        <option value="">Department</option>
                                        <option value="Computer Science" >Computer Science</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Chemestry">Chemestry</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Geography">Geography</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Contact Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pnumber" class="form-control" placeholder="Phone Number 0*********" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="register" class="btn btn-info form-control" value="Register">
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            &COPY; BandS 2019
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            
            

