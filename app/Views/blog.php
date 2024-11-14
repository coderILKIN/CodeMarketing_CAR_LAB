<?php include "partials/header.php" ?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Our Blog</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <?php

      include_once __DIR__ . '/../Model/Blog.php';

      use App\Model\Blog;

      $blogs = Blog::getAllBlog();



      foreach($blogs as $blog): ?>
      <div class="col-md-12 text-center d-flex ftco-animate">
        <div class="blog-entry justify-content-end mb-md-5">
          <a href="blog-single.html" class="block-20 img" style="background-image: url('assets/front/images/<?php echo $blog['image']; ?>');">
          </a>
          <div class="text px-md-5 pt-4">
            <div class="meta mb-3">
              <div><a href="#"><?php echo $blog['published_date']; ?></a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading mt-2"><a href="#"><?php echo $blog['title']; ?></a></h3>
            <p><?php echo $blog['paragraph']; ?></p>
            <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
    <div class="row mt-5">
      <div class="col text-center">
        <div class="block-27">
          <ul>
            <li><a href="#">&lt;</a></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>




<?php include "partials/footer.php" ?>