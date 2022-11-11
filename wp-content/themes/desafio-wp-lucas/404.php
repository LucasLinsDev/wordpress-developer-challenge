<?php get_header();?>


 <div class="container">
      <main>
        <div class="page_not_found">
          <h1>404</h1>
          <h2 class="mt-2">Page not found</h2>
          <p class="mt-2">Something went wrong, so this page is broken.</p>
          <div class="row mt-2 gap-16">
            <a href="<?php echo home_url('/');?>">
                <button class="btn-red">Go back to Homepage</button>
            </a>
            <button class="btn-silver">Try Again</button>
          </div>
        </div>
      </main>
    </div>

<?php get_footer();?>