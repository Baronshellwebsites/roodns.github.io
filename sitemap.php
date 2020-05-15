<?php 
$page_title="Карта сайта" ;
include('includes/header.php');
?>
<div class="container">
	<div class="rectitem ri1">		
		<p id='smhindex'>РОО Дети-наше счастье</p>
	</div>
	
	<div class="connectline">
		<p>|</p>
	</div>

	<div class="smhic">
		<div class="rectitem ri2"><p>О нас</p></div><div class="connecthor"></div>
		<div class="rectitem ri3"><p>Родители и семья</p></div><div class="connecthor"></div>
		<div class="rectitem ri4"><p>Участвуйте</p></div><div class="connecthor"></div>
		<div class="rectitem ri5"><p>Источники</p></div><div class="connecthor"></div>
		<div class="rectitem ri6"><p>Вдохновляйтесь</p></div>
	</div>
	
	<div class="smhic">
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline visnone">
			<p>|</p>
		</div>		
	</div>

	<div class="smhic">
		<div class="rectitem podri2"><p>Руководители</p></div><div class="connecthor visnone"></div>
		<div class="rectitem podri3"><p>Мы-родители</p></div><div class="connecthor visnone"></div>
		<div class="rectitem podri4"><p>Пожертвовать</p></div><div class="connecthor visnone"></div>
		<div class="rectitem podri5"><p>Частые Вопросы</p></div><div class="connecthor visnone"></div>
		<div class="rectitem visnone"><p></p></div>
	</div>

	<div class="smhic">
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline visnone">
			<p>|</p>
		</div>
		<div class="connectline visnone">
			<p>|</p>
		</div>		
	</div>

	<div class="smhic">
		<div class="rectitem podri22"><p>В прессе</p></div><div class="connecthor visnone"></div>
		<div class="rectitem podri33"><p>Шаги</p></div><div class="connecthor visnone"></div>
		<div class="rectitem podri44"><p>Корпоративное спонсорство</p></div><div class="connecthor visnone"></div>
		<div class="rectitem visnone"><p></p></div><div class="connecthor visnone"></div>
		<div class="rectitem visnone"><p></p></div>
	</div>

	<div class="smhic">
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline">
			<p>|</p>
		</div>
		<div class="connectline visnone">
			<p>|</p>
		</div>
		<div class="connectline visnone">
			<p>|</p>
		</div>		
	</div>

	<div class="smhic">
		<div class="rectitem podri222"><p>Свяжитесь с нами</p></div><div class="visnone connecthor"></div>
		<div class="rectitem podri333"><p>Сообщество</p></div><div class="connecthor visnone"></div>
		<div class="rectitem podri444"><p>Присоединиться</p></div><div class="connecthor visnone"></div>
		<div class="rectitem visnone"><p></p></div><div class="connecthor visnone"></div>
		<div class="rectitem visnone"><p></p></div>
	</div>
</div>

<script>
		$(document).ready(function()
	{$('.ri1').click(function(){window.location.href='index.php'});
	$('.ri2').click(function(){window.location.href='about/about.php'});
	$('.ri3').click(function(){window.location.href='ris/risindex.php'});
	$('.ri4').click(function(){window.location.href='involve/involve.php'});
	$('.ri5').click(function(){window.location.href='res/res.php'});
	$('.ri6').click(function(){window.location.href='insp/insp.php'});

	$('.podri2').click(function(){window.location.href='about/bod.php'});
	$('.podri3').click(function(){window.location.href='ris/mi_rod.php'});
	$('.podri4').click(function(){window.location.href='involve/donate.php'});
	$('.podri5').click(function(){window.location.href='res/freq.php'});	

	$('.podri22').click(function(){window.location.href='about/press.php'});
	$('.podri33').click(function(){window.location.href='ris/steps.php'});
	$('.podri44').click(function(){window.location.href='involve/sponsor.php'});

	$('.podri222').click(function(){window.location.href='about/contact-us.php'});
	$('.podri333').click(function(){window.location.href='ris/comm.php'});
	$('.podri444').click(function(){window.location.href='involve/member.php'});
	})
</script>
<?php include('includes/totop.html');?>	
<?php include('includes/prefooter.html');?>	
<?php include('includes/footer.html');?>