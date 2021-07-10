<div class="social-menu">
	<ul class="primary-menu">
		<li class="facebook"><a class="social-item" href="http://www.facebook.com">f</a><span class="social-span">Become a fan on Facebook</span></li>
		<li class="twitter"><a class="social-item" href="http://www.twitter.com">t</a><span class="social-span">Follow us on Twitter</span></li>
		<li class="flickr"><a class="social-item" href="http://www.flickr.com">c</a><span class="social-span">Add us on Flickr</span></li>
		<li class="rss"><a class="social-item" href="http://www.rss.com">a</a><span class="social-span">Follow our updates through RSS</span></li>
		<li class="mail"><a class="social-item" href="http://www.gmail.com">k</a><span class="social-span">Subscribe to our newsletter</span></li>
	</ul>
</div>
<script type="text/javascript">
	function hide_float_left(){
		var content=document.getElementById('float_content_left');	
		var hide=document.getElementById('hide_float_left');
		if(content.style.display=="none"){
			content.style.display="block";
			hide.innerHTML='<a href="javascript:hide_float_left()">Tắt quảng cáo [X]</a>';
		}else{
			content.style.display="none";
			hide.innerHTML='<a href="javascript:hide_float_left()">Mở quảng cáo [X]</a>';
		}
	}
</script>
<div class="float-ck">
	<div id="hide_float_left">
		<a href="javascript:hide_float_left()">Tắt quảng cáo [X]</a>
	</div>
	<div id="float_content_left">
	<!-- Start quảng cáo -->	
		<img src="../images/ad/free-30-day-guarantee.png" alt="Quảng Cáo"/>
	<!-- End quảng cáo -->
	</div>
</div>

