<?php
	require 'components/header.php';
?>


    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('<?=$news_item['image']?>');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              <span class="post-category text-white <?=$news_item['class_name']?> mb-3"><?=$news_item['translation']?></span>
              <h1 class="mb-4"><?=$news_item['title']?></h1>
              <div class="post-meta align-items-center text-center">
                <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="<?=$news_item['avatar']?>" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1"><?=$news_item['first_name']?> <?=$news_item['last_name']?></span>
                <span>&nbsp;-&nbsp; <?=$news_item['add_date']?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="site-section py-lg">
      <div class="container">

        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">

            <div class="post-content-body">
                <p><?=$news_item['text']?></p>
            </div>


            <div class="pt-5">
              <p>Категория:  <a href="#"><?=$news_item['translation']?></a>  Tags: <a href="#">#manila</a>, <a
                          href="#">#asia</a></p>
            </div>


            <div class="pt-5">
              <h3 class="mb-5">Количество комментариев: <?=$commentsCount?></h3>
              <ul class="comment-list">
                <?php foreach($comments as $comment):?>
                    <li class="comment">
                      <div class="vcard">
                        <img src="<?=$comment['image']?>" alt="<?=$comment['first_name']?> <?=$comment['last_name']?>">
                      </div>
                      <div class="comment-body">
                        <h3><?=$comment['first_name']?> <?=$comment['last_name']?></h3>
                        <div class="meta"><?=$comment['add_date']?></div>
                        <p><?=$comment['comment']?></p>
<!--                        <p><a href="#" class="reply rounded">Reply</a></p>-->
                      </div>
                    </li>
	            <?php endforeach;?>
              </ul>
              <!-- END comment-list -->

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Оставить комментарий</h3>

                <form action="forms/add_comment.php" class="p-5 bg-light" method="POST">

                  <div class="form-group">
                    <label for="message">Комментарий</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>

                  <div class="form-group">
                    <input type="hidden" name="news_id" value="<?=$id?>">
                    <input type="hidden" name="user_id" value="">
                    <input type="submit" value="Отправить комментарий" class="btn btn-primary">
                  </div>

                </form>

              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>

            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="<?=$news_item['avatar']?>" alt="<?=$news_item['first_name']?> <?=$news_item['last_name']?>"
                     class="img-fluid mb-5">
                <div class="bio-body">
                  <h2><?=$news_item['first_name']?> <?=$news_item['last_name']?></h2>
                  <p class="mb-4"><?=$news_item['short_info']?></p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Читать биографию</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Последние новости категории <?=$news_item['translation']?></h3>
              <div class="post-entry-sidebar">
                <ul>
                  <?php foreach($limitNewsListByCategoryId as $news_item):?>
                    <li>
                        <a href="news_detail.php?id=<?=$news_item['id']?>">
                          <img src="<?=$news_item['image']?>" alt="<?=$news_item['title']?>" class="mr-4">
                          <div class="text">
                            <h4><?=$news_item['title']?></h4>
                            <div class="post-meta">
                              <span class="mr-2"><?=$news_item['add_date']?></span>
                            </div>
                          </div>
                        </a>
                    </li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Категории</h3>
              <ul class="categories">
                <?php foreach($newsCountByCategories as $category_info):?>
                  <li><a href="#"><?=$category_info['translation']?> <span>(<?=$category_info['count']?>)</span></a></li>
                <?php endforeach;?>
              </ul>
            </div>
            <!-- END sidebar-box -->

            <div class="sidebar-box">
              <h3 class="heading">Tags</h3>
              <ul class="tags">
                <li><a href="#">Travel</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Freelancing</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Freelancing</a></li>
              </ul>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <div class="site-section bg-light">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12">
            <h2>More Related Posts</h2>
          </div>
        </div>

        <div class="row align-items-stretch retro-layout">

          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
              <span class="post-category text-white bg-danger">Travel</span>
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
          </div>

          <div class="col-md-7">

            <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
              <span class="post-category text-white bg-success">Nature</span>
              <div class="text text-sm">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>

            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
                <span class="post-category text-white bg-primary">Sports</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
                <span class="post-category text-white bg-warning">Lifestyle</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>


    <div class="site-section bg-lightx">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            <div class="subscribe-1 ">
              <h2>Subscribe to our newsletter</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
              <form action="#" class="d-flex">
                <input type="text" class="form-control" placeholder="Enter your email address">
                <input type="submit" class="btn btn-primary" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



<?php
require 'components/footer.php';
?>