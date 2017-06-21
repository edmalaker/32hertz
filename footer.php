<!-- beginning of footer --> 

<!-- Bpptstrap Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


      <footer>
<hr>
<row>
	  <div class="col-md-4">
	  </div>
	  
	  <div class="col-md-4 text-center foot">
        <p>© <span>Ed Malaker</span> <span>2015 - 2017</span> <br />
		<?php $pfx_date = get_the_date( $format, $page_id ); 
		//echo " Created <span itemprop=\"dateCreated\">$pfx_date</span><br />";
		?>
		
		</div>
		
		<div class="col-md-4">
		</div>
		</div>
		
<!-- google analytics		
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60269020-1', 'auto');
  ga('send', 'pageview');
	</script>	
     
-->


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//32hertz.com/analytics/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->

    
	<!-- footer hooks --> 
    	<?php wp_footer(); ?>
	
	
 	</footer>
  
	</body>

</html>