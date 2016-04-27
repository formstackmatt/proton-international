<?php if(!is_front_page() && !is_404()){ ?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
    <div class="row">	  
      <div class="col-md-7 footer__left">
        <p>501 Pennsylvania Parkway, Suite 160, Indianapolis, IN 46280 &middot; 317.705.8800</p>
      </div>
      <div class="col-md-5 footer__right">
        <p>&copy; Copyright <script>document.write(new Date().getFullYear())</script> T.M. Crowley &amp; Associates</p>
      </div>
    </div>
  </div>		
</footer>

<?php } ?>

<script src="<?php bloginfo('template_url'); ?>/js/plugins.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/app.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
