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
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 mb-4 mb-lg-0">
                            <!-- Dashboard sidebar -->
                            <div class="dashboard-sidebar bg-block">
                                <div class="profile-top text-center mb-4 px-3">
                                    <div class="profile-image mb-3">
                                        <img class="rounded-circle blur-up lazyload" data-src="assets/images/users/user-img3.jpg" src="assets/images/users/user-img3.jpg" alt="user" width="130" />
                                    </div>
                                    <div class="profile-detail">
                                        <h3 class="mb-1"><?=$user['name'];?></h3>
                                        <p class="text-muted"><?=$user['email'];?></p>
                                    </div>
                                </div>
                                <div class="dashboard-tab">
                                    <ul class="nav nav-tabs flex-lg-column border-bottom-0" id="top-tab" role="tablist">
                                        <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#profile" class="nav-link">Profile</a></li>
                                        <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#orders" class="nav-link">My Orders</a></li>
                                        <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#address" class="nav-link">Address</a></li>
                                        <li class="nav-item"><a href="#" data-bs-toggle="tab" data-bs-target="#bank" class="nav-link">Bank</a></li>
                                        
                                        <li class="nav-item"><a href="/logout" class="nav-link">Log Out</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Dashboard sidebar -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="dashboard-content tab-content h-100" id="top-tabContent">
                                <!-- Profile -->
                                <div class="tab-pane fade h-100 show active" id="profile">
                                    <div class="profile-card mt-0 h-100">                                   
                                        <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">Login details</h2>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editLoginModal"><i class="icon anm anm-plus-r me-1"></i> Edit</button>                                         
                                        </div>
                                        <div class="profile-login-section">
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Email address</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['email'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Phone number</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['phone'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Password</h6>
                                                </div>
                                                <div class="right">
                                                    <p>xxxxxxx</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit Login details Modal -->
                                        <div class="modal fade" id="editLoginModal" tabindex="-1" aria-labelledby="editLoginModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="editLoginModalLabel">Edit Login details</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="edit-Loginprofile-from" method="post" action="/my-account/update-profile"> 
                                                            <div class="form-row row-cols-lg-1 row-cols-md-1 row-cols-sm-1 row-cols-1">
                                                                <div class="form-group">
                                                                    <label for="editLogin-Emailaddress" class="d-none">Email address <span class="required">*</span></label>
                                                                    <input name="editLogin-Emailaddress" placeholder="Email address" value="<?=$user['email'];?>" id="editLogin-Emailaddress" type="email" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editLogin-Phonenumber" class="d-none">Phone number <span class="required">*</span></label>
                                                                    <input name="editLogin-Phonenumber" placeholder="Phone number" value="<?=$user['phone'];?>" id="editLogin-Phonenumber" type="text" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editLogin-Password" class="d-none">Current Password <span class="required">*</span></label>
                                                                    <input name="editLogin-Password" placeholder="Current Password" value="" id="editLogin-Password" type="password" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editLogin-NewPassword" class="d-none">New Password <span class="required">*</span></label>
                                                                    <input name="editLogin-NewPassword" placeholder="New Password" value="" id="editLogin-NewPassword" type="password" />
                                                                    <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters.</small>
                                                                </div>
                                                                <div class="form-group mb-0">
                                                                    <label for="editLogin-Verify" class="d-none">Verify <span class="required">*</span></label>
                                                                    <input name="editLogin-Verify" placeholder="Verify" value="" id="editLogin-Verify" type="text" />
                                                                    <small class="form-text text-muted">To confirm, type the new password again.</small>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="submit" class="btn btn-primary m-0"><span>Save changes</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Login details Modal -->
                                    </div>
                                </div>
                                <!-- End Profile -->

                                <!-- Address -->
                                <div class="tab-pane fade h-100" id="address">
                                    <div class="address-card mt-0 h-100">
                                    <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">Address</h2>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editAddressModal"><i class="icon anm anm-plus-r me-1"></i> Edit</button>                                         
                                        </div>
                                        <div class="address-book-section mb-4">
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Name</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['name'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Phone number</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['phone'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Street address</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['address'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">City</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['city'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">State</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['state'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Country</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['country'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Zip code</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['zip'];?></p>
                                                </div>
                                            </div>
                                        </div>  

                                        <!-- Edit Address Modal -->
                                        <div class="modal fade" id="editAddressModal" tabindex="-1" aria-labelledby="editAddressModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="editAddressModalLabel">Edit Address details</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="edit-profile-from" method="post" action="/my-account/update-address"> 
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                                                    <div class="profileImg img-thumbnail shadow bg-white rounded-circle d-flex-justify-center position-relative mx-auto">
                                                                        <img src="assets/images/users/user-img3.jpg" class="rounded-circle" alt="profile" width="200" height="200" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <label for="editAddress-Name" class="d-none">Name</label>
                                                                    <input name="editAddress-Name" placeholder="Name" value="<?=$user['name'];?>" id="editAddress-Emailaddress" type="email" />
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <label for="editAddress-Phonenumber" class="d-none">Phone number</label>
                                                                    <input name="editAddress-Phonenumber" placeholder="Phone number" value="<?=$user['phone'];?>" id="editAddress-Phonenumber" type="text" />
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <label for="editAddress-City" class="d-none">City <span class="required">*</span></label>
                                                                    <input name="editAddress-Streetaddress" placeholder="City" value="<?=$user['city'];?>" id="editAddress-City" type="text" />
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <label for="editAddress-State" class="d-none">State <span class="required">*</span></label>
                                                                    <input name="editAddress-Streetaddress" placeholder="State" value="<?=$user['state'];?>" id="editAddress-State" type="text" />
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <label for="editAddress-country" class="d-none">Country <span class="required">*</span></label>
                                                                    <select name="editAddress_country_id" id="editAddress-country">
                                                                        <option value="">Select Country</option>
                                                                        <option value="AI" label="Anguilla">Anguilla</option>
                                                                        <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                                                                        <option value="AR" label="Argentina">Argentina</option>
                                                                        <option value="AW" label="Aruba">Aruba</option>
                                                                        <option value="BS" label="Bahamas">Bahamas</option>
                                                                        <option value="BB" label="Barbados">Barbados</option>
                                                                        <option value="BZ" label="Belize">Belize</option>
                                                                        <option value="BM" label="Bermuda">Bermuda</option>
                                                                        <option value="BO" label="Bolivia">Bolivia</option>
                                                                        <option value="BR" label="Brazil">Brazil</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <label for="editAddress-Zipcode" class="d-none">Zip code</label>
                                                                    <input name="editAddress-Zipcode" placeholder="Zip code" value="<?=$user['zip'];?>" id="editAddress-Zipcode" type="text" />
                                                                </div>
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <label for="editAddress-Streetaddress" class="d-none">Street address</label>
                                                                    <textarea name="editAddress-Streetaddress" placeholder="Street address" id="editAddress-Streetaddress" type="text"><?=$user['address'];?></textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="submit" class="btn btn-primary m-0"><span>Save Address</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Address Modal -->
                                    </div>
                                </div>
                                <!-- End Address -->

                                <!-- Bank -->
                                <div class="tab-pane fade h-100" id="bank">
                                    <div class="bank-card mt-0 h-100">
                                    <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">Bank</h2>
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editBankModal"><i class="icon anm anm-plus-r me-1"></i> Edit</button>                                         
                                        </div>
                                        <div class="bank-book-section mb-4">
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Bank Name</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['bank_name'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Account Name</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['bank_account_name'];?></p>
                                                </div>
                                            </div>
                                            <div class="details d-flex align-items-center mb-2">
                                                <div class="left">
                                                    <h6 class="mb-0 body-font fw-500">Account Number</h6>
                                                </div>
                                                <div class="right">
                                                    <p><?=$user['bank_account_number'];?></p>
                                                </div>
                                            </div>
                                        </div>  

                                        <!-- Edit Bank Modal -->
                                        <div class="modal fade" id="editBankModal" tabindex="-1" aria-labelledby="editBankModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h2 class="modal-title" id="editBankModalLabel">Edit Bank details</h2>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="edit-bank-from" method="post" action="/my-account/update-bank"> 
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <label for="editBank-Name" class="d-none">Bank Name</label>
                                                                    <input name="bank_name" placeholder="Name" value="<?=$user['bank_name'];?>" id="editBank-Name" type="text" />
                                                                </div>
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <label for="editBank-AccountName" class="d-none">Bank Account Name</label>
                                                                    <input name="bank_account_name" placeholder="Bank Account Name" value="<?=$user['bank_account_name'];?>" id="editBank-AccountName" type="text" />
                                                                </div>
                                                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <label for="editBank-City" class="d-none">Bank Account Number <span class="required">*</span></label>
                                                                    <input name="bank_account_number" placeholder="Bank Account Number" value="<?=$user['bank_account_number'];?>" id="editBank-AccountNumber" type="text" />
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="submit" class="btn btn-primary m-0"><span>Save Bank</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Edit Bank Modal -->
                                    </div>
                                </div>
                                <!-- End Bank -->

                                <!-- My Orders -->
                                <div class="tab-pane fade h-100" id="orders">
                                    <div class="orders-card mt-0 h-100">    
                                        <div class="top-sec d-flex-justify-center justify-content-between mb-4">
                                            <h2 class="mb-0">My Orders</h2>
                                        </div>

                                        <div class="table-bottom-brd table-responsive">
                                            <table class="table align-middle text-center order-table">
                                                <thead>
                                                    <tr class="table-head text-nowrap">
                                                        <th scope="col">image</th>
                                                        <th scope="col">Order Id</th>
                                                        <th scope="col">Product Details</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="assets/images/products/product1-120x170.jpg" src="assets/images/products/product1-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12301</span></td>
                                                        <td><span class="name">Oxford Cuban Shirt</span></td>
                                                        <td><span class="price fw-500">$99.00</span></td>
                                                        <td><span class="badge rounded-pill bg-success custom-badge">Shipped</span></td>
                                                        <td><a href="product-layout1.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="assets/images/products/product2-120x170.jpg" src="assets/images/products/product2-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12302</span></td>
                                                        <td><span class="name">Cuff Beanie Cap</span></td>
                                                        <td><span class="price fw-500">$128.00</span></td>
                                                        <td><span class="badge rounded-pill bg-danger custom-badge">Pending</span></td>
                                                        <td><a href="product-layout2.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="assets/images/products/product3-120x170.jpg" src="assets/images/products/product3-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12303</span></td>
                                                        <td><span class="name">Flannel Collar Shirt</span></td>
                                                        <td><span class="price fw-500">$114.00</span></td>
                                                        <td><span class="badge rounded-pill bg-dark custom-badge">Processing</span></td>
                                                        <td><a href="product-layout3.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="blur-up lazyload" data-src="assets/images/products/product4-120x170.jpg" src="assets/images/products/product4-120x170.jpg" width="50" alt="product" title="product" /></td>
                                                        <td><span class="id">#12304</span></td>
                                                        <td><span class="name">Cotton Hooded Hoodie</span></td>
                                                        <td><span class="price fw-500">$198.00</span></td>
                                                        <td><span class="badge rounded-pill bg-secondary custom-badge">Canceled</span></td>
                                                        <td><a href="product-layout4.html" class="view"><i class="icon anm anm-eye btn-link fs-6"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>                                               
                                    </div>
                                </div>
                                <!-- End My Orders -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->