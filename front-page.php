<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php if ( is_home() || is_front_page() ) : ?>


<div class="main">
  <div class="session" id="sec1">
      <div class="text-box">
      <h1><?php bloginfo('name'); ?></h1>
      <p><?php bloginfo( 'description' ); ?></p>
      </div>
  </div>
  <div class="session" id="sec2">
  <div class="container">
    <div class="text-box">
      <h1>About Us</h1>
      <div class="v_line_fix"></div>
      <p>山形大学で、VR技術に興味がある学生集団</p>
    </div>
    <div class="button open-btn"><p class="open">VR部とは     <i class="fas fa-angle-down"></i></p></div>
  </div>
  </div>
  <div class="session" id="sec2_1">
    <div class="about_wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
      <p>山形大学工学部を拠点に毎週日曜日に活動をしているサークルです。<br>VRに興味がある学生がメインですが、中にはwebサイト制作・動画制作などを得意とする学生も在籍しており<br>山形県内の企業様や大学からお仕事をいただいております。</p>
    </div>
  </div>
  <div class="session" id="sec3">
    <h1>Works</h1>
    <div class="a_line_fix"></div>
    <div class="work-wrap">
      <div class="works">
      <!-- ループ -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="work-box DivLink">
          <div class="box-content">
          <a  href="<?php the_permalink(); ?>" class="Link">
              <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
                <?php the_post_thumbnail( 'thumbnail' ); ?>
              <?php else: ?><!-- アイキャッチが無い時-->
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
              <?php endif; ?>
          </a>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; else: ?>
		  <p>記事情報がありません。</p>
      <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="session" id="sec4">
    <div class="container">
    <div class="text-box">
      <h1>Contact</h1>
      <div class="v_line_fix"></div>
      <p>まずは、お気軽にお問い合わせください</p>
    </div>
    <div class="button"><a href="#">お問い合わせ     <i class="far fa-paper-plane"></i></a></div>
  </div>
  </div>
  <div class="session" id="sec5">
    <h1>News</h1>
    <div class="a_line_fix"></div>
    <div class="news-wrap">
    <?php
            $args = array(
                // ここにパラメータを定義
                'category' => 3, //カテゴリーIDが10の記事
                'posts_per_page' => 3 //表示記事件数(-1で全件表示)
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
          ?>
          <!-- ループ前の開始タグ -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="news-box DivLink">
              <a href="<?php the_permalink(); ?>" class="Link"></a>
              <p><?php the_date(); ?></p>
              <div class="v_line_fix"></div>
              <p><?php the_title(); ?></p>
            </div>
              <!-- 出力したい処理を記述 -->
          <?php endwhile; ?>
          <!-- ループ後の閉じタグ -->
          <?php endif; wp_reset_postdata(); ?>
      <div class="button"><a href="#" class="button">MORE     <i class="far fa-paper-plane"></i></a></div>
    </div>
  </div>
</div>
</div>
<?php endif; ?>
<?php get_footer(); ?>