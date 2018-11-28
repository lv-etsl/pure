<?php
/*
*
* le fichier footer regroupe le bas de page.
*
*/
?>
  <footer class="pure-g">
    <p>&copy; - <?php the_date('Y'); ?> - <?php bloginfo('name'); ?> - <?php bloginfo('descritpion'); ?></p>
  </footer>
</div><!-- // id : layout -->
  <!-- un script -->
  <script src="<?php bloginfo('template_url') ?>/js/ui.js"></script>
<?php wp_footer(); ?>
</body>
</html>
