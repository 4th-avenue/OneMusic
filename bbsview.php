<?php
require('lib/top.php');
require('_blog1page.php');
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Blog</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">

                <?php
                if (isset($_SESSION['id'])) {
                ?>
                <button class="btn btn-secondary" onclick="location.href='blog1write.php'">새 글</button>
                <hr>
                <?php
                }

                foreach($result as $blog) {
                ?>
                    <!-- Single Post Start -->
                    <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Post Thumb -->
                        <div class="blog-post-thumb mt-30">
                            <?php if($blog['img_file']) { ?>
                                <a href="#"><img src="blog_img/<?=$blog['img_file']?>" alt="post image"></a>
                            <?php } else { ?>
                                <a href="#"><img src="blog_img/noimage.png" alt="no post image"></a>
                            <?php } ?>
                            <!-- Post Date -->
                            <div class="post-date">
                                <?php
                                if($blog['mod_date'] != null) {
                                    $day = date("d", strtotime($blog['mod_date']));
                                    $month = date("F", strtotime($blog['mod_date']));
                                    $year = date("y", strtotime($blog['mod_date']));
                                } else {
                                    $day = date("d", strtotime($blog['reg_date']));
                                    $month = date("F", strtotime($blog['reg_date']));
                                    $year = date("y", strtotime($blog['reg_date']));
                                }
                                ?>
                                <span><?=$day?></span>
                                <span><?=$month?> ‘<?=$year?></span>
                            </div>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <!-- Post Title -->
                            <a href="#" class="post-title"><?=$blog['title'];?></a>
                            <!-- Post Meta -->
                            <div class="post-meta d-flex mb-30">
                                <p class="post-author">By<a href="#"> <?=$blog['name'];?></a></p>
                                <p class="tags">in<a href="#"> <?=$blog['category'];?></a></p>
                            </div>
                            <!-- Post Excerpt -->
                            <p><?=$blog['content'];?></p>

                            <!-- 수정, 삭제 버튼 -->
                            <?php
                            if(isset($_SESSION['id'])) {
                                if($_SESSION['id'] == $blog['id']) {
                            ?>
                                <hr>
                                <button class="btn btn-secondary" onclick="location.href='blog1mod.php?no=<?=$blog['no']?>'">수정</button>
                                <button class="btn btn-secondary" onclick="location.href='_blog1delete.php?no=<?=$blog['no']?>'">삭제</button>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Single Post End -->
                <?php
                }
                ?>

                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="blog.php?current_page=1">≪</a></li>

                                <?php
                                if ($current_page > 1) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="blog.php?current_page=<?=$prev_page?>">＜</a></li>
                                <?php } else { ?>
                                    <li class="page-item"><a class="page-link" href="#">＜</a></li>
                                <?php } ?>

                                <?php
                                if ($current_page < $end_page) {
                                ?>
                                    <li class="page-item"><a class="page-link" href="blog.php?current_page=<?=$next_page?>">＞</a></li>
                                <?php } else { ?>
                                    <li class="page-item"><a class="page-link" href="#">＞</a></li>
                                <?php } ?>
                                <li class="page-item active"><a class="page-link" href="blog.php?current_page=<?=$end_page?>">≫</a></li>
                                <p>현재 페이지 <?=$current_page?> / 총 페이지 <?=$end_page?></p>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>See what’s new</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

<?php
require('lib/bottom.php');
?>