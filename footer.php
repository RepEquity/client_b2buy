<div class="push"></div>
</div>
<footer class="container">
	<div class="inner">
		<div class="footer-left">
			<?php get_template_part('parts/footer-nav'); ?>
		</div>
		<div class="footer-right">

		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<?php if(home_url() == 'http://b2buy.com') : ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	 
	  ga('create', 'UA-52049815-1', 'auto');
	  ga('send', 'pageview');
	 
	</script>
	
	<!-- Start of Async HubSpot Analytics Code -->
	  <script type="text/javascript">
	    (function(d,s,i,r) {
	      if (d.getElementById(i)){return;}
	      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
	      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/347350.js';
	      e.parentNode.insertBefore(n, e);
	    })(document,"script","hs-analytics",300000);
	  </script>
	<!-- End of Async HubSpot Analytics Code -->
<?php endif; ?>
</body>
</html>
