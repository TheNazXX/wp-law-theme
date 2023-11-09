<?php if (!defined('FW')) die('Forbidden'); ?>

<?php if($data['slides']): ?>

<aside id="fh5co-hero" class="js-fullheight">
  <div class="flexslider js-fullheight">
    <ul class="slides">
      <?php 

      foreach($data['slides'] as $slide){ ?>

      <li style="background-image: url(<?php echo $slide['src']?>);">
        <div class="overlay-gradient"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
              <div class="slider-text-inner">
                <h1><?php esc_html_e($slide['title']); ?></h1>
                <h2><?php esc_html_e($slide['desc']); ?>
                </h2>
                <?php if(!empty($slide['extra']['Link_Title']) && !empty($slide['extra']['Url'])){ ?>
                <p><a class="btn btn-primary btn-lg btn-learn"
                    href="<?php esc_html_e($slide['extra']['Url']);?>"><?php esc_html_e($slide['extra']['Link_Title']); ?></a>
                </p>
                <?php }; ?>
              </div>
            </div>
          </div>
        </div>
      </li>

      <?php }?>
    </ul>
  </div>
</aside>

<?php endif;; ?>