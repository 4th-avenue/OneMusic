<?php
require('lib/top.php');
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2><?=$_SESSION['name']?> 님의 회원정보</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Join Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Join Us!</h3>
                        <!-- Join Form -->
                        <div class="login-form">
                            <form action="_userChange.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-danger">Email address</label>
                                    <input name="id" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="* Enter Your E-mail" value="<?=$_SESSION['id']?>" disabled>
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-danger">Password</label>
                                    <input name="pw" type="password" class="form-control" id="exampleInputPassword1" placeholder="* Enter Your Password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-danger">Password Check</label>
                                    <input name="pwc" type="password" class="form-control" id="exampleInputPassword1" placeholder="* Enter Your Password Once More">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-danger">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="* Enter Your Name" value="<?=$_SESSION['name']?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input name="address" type="text" class="form-control" placeholder="Enter Your Address" value="<?=$_SESSION['address']?>">
                                </div>

                                <button type="submit" class="btn oneMusic-btn mt-30">수정</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

<?php
require('lib/bottom.php');
?>