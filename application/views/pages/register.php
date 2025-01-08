                <!--Page Header-->
                <div class="page-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                                <div class="page-title"><h1><?= $title; ?></h1></div>
                                <!--Breadcrumbs-->
                                <?= generate_breadcrumb(); ?>
                                <!--End Breadcrumbs-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Page Header-->

                <!--Main Content-->
                <div class="container">   
                    <div class="login-register pt-2">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                                <div class="inner h-100">
                                    <form method="post" action="" class="customer-form">	
                                        <h2 class="text-center fs-4 mb-3">Customers Sign Up</h2>
                                        <p class="text-center mb-4">If you don't have an account with us, please sign up.</p>
                                        <?php if($success = $this->session->flashdata('success')): ?>
                                        <div class="alert alert-success" role="alert">
                                           <?= $success; ?>
                                        </div>
                                        <?php endif;?>
                                        <?php if($error = $this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger" role="alert">
                                           <?= $error; ?>
                                        </div>
                                        <?php endif;?>
                                        <div class="form-row">
                                        <div class="form-group col-12">
                                                <label for="CustomerName" class="d-none">Name <span class="required">*</span></label>
                                                <input type="text" name="name" placeholder="Name" id="CustomerName" value="" required="">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="CustomerEmail" class="d-none">Email <span class="required">*</span></label>
                                                <input type="email" name="email" placeholder="Email" id="CustomerEmail" value="" required="">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="CustomerPassword" class="d-none">Password <span class="required">*</span></label>
                                                <input type="password" name="password" placeholder="Password" id="CustomerPassword" value="" required="">                        	
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="CustomerConfirmPassword" class="d-none">Password <span class="required">*</span></label>
                                                <input type="password" name="confirm_password" placeholder="Confirm Password" id="CustomerConfirmPassword" value="" required="">                        	
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="CustomerPhone" class="d-none">Phone <span class="required">*</span></label>
                                                <input type="tel" name="phone" placeholder="Phone" id="CustomerPhone" value="" required="">                        	
                                            </div>
                                            <div class="form-group col-12 mb-0">
                                                <input type="submit" class="btn btn-primary btn-lg w-100" value="Sign Up">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>