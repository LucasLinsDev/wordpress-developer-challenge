
    <!--======= FOOTER =========-->
    <footer>
      <div class="footer_header">
     	  <a href="<?php echo home_url('/');?>">
        <?php if( has_custom_logo() ): ?>
									<?php the_custom_logo(); ?>
						<?php else: ?>  
        <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Movie Play" />
        
      	<?php endif; ?>
        </a>
        <p>© 2020 — Play — Todos os direitos reservados.</p>
      </div>
    </footer>
 
     <script src="<?php echo get_template_directory_uri();?>/js/aos.js"></script>
    <?php wp_footer(); ?>
  <!---- APP JS ----->
            <script>
              AOS.init({
  easing: "ease-out-quart",
  duration: 400,
});
            </script>
  </body>
</html>
