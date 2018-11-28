<?php
/*
*
* le fichier index est primaire. il cumule le header, content et footer. sidebar si utlisé.
*
*/
?>
<?php get_header(); ?>

  <main id="main">

    <?php include_once('/inc/myheader.php'); ?>


  <!-- boucle simple -->
  <?php if(have_posts()); ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('content'); ?>>
        <header>
          <h1>
            <a href="<?php the_permalink(); ?>" >
              <?php the_title(); ?>
            </a>
          </h1>
          <div class="pure-g">
              <div class="pure-u-md-1-3">
                <div class="l-box">
                  <span>Date de publication: </span>
                  <span> <?php the_date(); ?> </span>
                </div>
              </div>
              <div class="pure-u-md-1-3">
                <div class="l-box">
                  <span>Catégories:</span>
                  <span><?php the_category( ', ' ); ?></span>
                </div>
              </div>
              <div class="pure-u-md-1-3">
                <div class="l-box">
                  <span><?php the_tags(); ?></span>
                </div>
              </div>
          </div>
        </header>
        <div>
          <?php the_content(); ?>
        </div>
      </article>

    <?php endwhile; ?>

    <div class="pure-g">
      <div class="pure-u-md-1-6">
        <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
      </div>
      <div class="pure-u-md-1-6">
        <div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
      </div>
    </div>

  </main>

<?php get_footer(); ?>
