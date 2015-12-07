<?php define( "TITLE", "Home | CineMad"); include( 'includes/headerslider.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->

<main>
    <section class="well">
        <div class="container">
            <h2><em>Welcome</em>to Our Place</h2>
            <div class="row">

                
                <?php foreach($news as $newspost=> $item ) { ?>
                <div class="news">
                <div class="grid_6">
                    <div class="img img__border">
                        <div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/<?php echo $item[img];?>.jpg" alt="<?php echo $item[title]; ?>"></div>
                    </div>
                    
                    <h2><?php echo $item[title]; ?></h3>
                    <p class="center indents-1"><?php echo $item[desc]; ?></p>
                </div>
                </div>

                <?php } ?>
            </div>
            
            </div>
            <div class="decoration"></div>
            
            
            
            
            
            
            
            
            
            <h2><em>Our</em>Cuisine</h2>
        </div>
        <div class="gallery">
            <div class="gallery_col-1">
                <a data-fancybox-group="gallery" href="images/page-1_img03_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.96551724137931%;">
                    <img data-src="images/page-1_img03.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
                <a data-fancybox-group="gallery" href="images/page-1_img04_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
                    <img data-src="images/page-1_img04.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
                <a data-fancybox-group="gallery" href="images/page-1_img05_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
                    <img data-src="images/page-1_img05.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery_col-2">
                <a data-fancybox-group="gallery" href="images/page-1_img06_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
                    <img data-src="images/page-1_img06.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
                <a data-fancybox-group="gallery" href="images/page-1_img07_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
                    <img data-src="images/page-1_img07.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
                <a data-fancybox-group="gallery" href="images/page-1_img08_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
                    <img data-src="images/page-1_img08.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="gallery_col-3">
                <a data-fancybox-group="gallery" href="images/page-1_img09_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                    <img data-src="images/page-1_img09.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
                <a data-fancybox-group="gallery" href="images/page-1_img10_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
                    <img data-src="images/page-1_img10.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
                <a data-fancybox-group="gallery" href="images/page-1_img11_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                    <img data-src="images/page-1_img11.jpg" alt="">
                    <div class="gallery_overlay">
                        <div class="gallery_caption">
                            <p><em>Lorem Blandit</em></p>
                            <p>Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="parallax parallax1" data-parallax-speed="-0.4">
        <div class="container">
            <h2><em>Our </em>Experience</h2>
            <p class="indents-2">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel
                mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis. Vestibulum volutpat turpis ut massa commodo, quis
                aliquam massa facilisis.Integer convallis orci </p>
            <a href="#" class="btn">View full menu</a>
        </div>
    </section>
    <section class="well well__offset-1 bg-1">
        <div class="container">
            <h2><em>Our </em>Cooks</h2>
            <div class="row row__offset-1">
                
                
                

                <?php foreach ($teamMembers as $member) { ?>
                <div class="grid_4">
                    <figure>
                        <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img src="images/<?php echo $member[img];?>.jpg" alt="<?php echo $member[name]; ?>"></div>
                        <figcaption>
                            <?php echo $member[name]; ?>
                        </figcaption>
                        <p>
                            <?php echo $member[bio]; ?>
                        </p>
                    </figure>
                </div>

                <?php } ?>
            </div>






            <div class="decoration"><a href="#" class="btn">Read more</a></div>
        </div>
    </section>
    <section class="well well__offset-2">
        <div class="container center">
            <h2><em>Make </em>a Reservation</h2>
            <p class="indents-2">Fnteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel
                mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol.</p>
            <address class="address-1">
                    <dl><dt>Address:</dt> <dd>4578 Marmora Road, Glasgow DA04 89GR</dd></dl>
                    <p><em>800 2345-6789</em></p>
                </address>
        </div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>


<style>
    .decoration:before {
  content: '';
  position: absolute;
  height: 1px;
  top: 10px;
  left: 0;
  right: 50%;
  margin-right: 0;
  margin-left: 3px;
  background: #6c6860;
}
.decoration:after {
  content: '';
  position: absolute;
  height: 1px;
  top: 10px;
  right: 0;
  left: 50%;
  margin-left: 0;
  margin-right: 3px;
  background: #6c6860;
}
</style>