<?php if(isset($_SESSION['username'])){ ?>
<nav>
	<div class="navcont">
		<a href="/admin/TOUR" class="newlist high_font">TOURS</a>
		<a href="/admin/bg_img" class="newlist high_font">ბექგრაუნდები</a>
		<a href="/admin/pages" class="newlist high_font">გვერდები</a>
		<a href="/admin/comment" class="newlist high_font">კომენტარები</a>
		<a href="/admin/lang" class="newlist">LANG</a>
		<a href="/admin/logout" class="newlist high_font">გასვლა</a>
		
	</div>
</nav>
<?php } ?>