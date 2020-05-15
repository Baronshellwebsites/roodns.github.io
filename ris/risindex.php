<?php 
$page_title="РОО Дети наше счастье|Родители и семья" ;
$page_subtitle="Родители и семья";
include('includes/header.php');
?>

<main>
	<section>
		<div class='bannertop'>
		    <div class='container'>
		    	<h1>Для родителей и семей, воспитывающих детей с инвалидностью и с ОВЗ</h1>
		    	<p>РОО "Дети наше счастье" это безграничная поддержка семей, воспитывающих детей с инвалидностью и с ОВЗ </p>			
		    </div>
		</div>
	</section>

	<section id='welcomesect'>
		<div class="container">
		    <?php echo "<h1 class='active_page'>".$page_subtitle."</h1>"?>
		    <div id="welcome">
		    	<div id="welcometext">
		       	     <h2>Добро пожаловать в Сообщество!</h2>    
		    	     <p>РОО "Дети-наше счастье" занимается защитой и поддержкой людей с синдромом Дауна,ОВЗ, и др. предоставляя информацию, ресурсы и помощь родителям и      семьям     детей с синдромом Дауна,ОВЗ,инвалидностью специалистам и сторонникам самозащиты. Мы стремимся оказывать поддержку на всех этапах жизни - до      рождения, в раннем     детстве, в школьные годы, во взрослом возрасте и на пенсии - чтобы помочь реализовать наше видение, в котором «все           люди ценятся, полноправные     граждане».</p>
		    	</div>
		    	<img  src="images/welcome.jpeg" alt="Родители и семья">
		    </div>
		</div>
	</section>

	<section id='sectfh'>
		<div class="container">
		    <div id="fourhrefs">

		    	<div class="fhitem">

		    		<div class="imgtop">
		    			<img src="images/fhi1.jpeg" alt="">
		    			<a href="mi_rod.php">Мы-родители!</a>
		    		</div>
		    		<p>РОО "Дети-наше счастье" окажет поддержку и вдохновит пройдя через все взлеты и падения новорожденного с синдромом Дауна, ОВЗ, инвалидностью</p>
		    		<input class='buttonto' id='buttonto' type="button" value='Узнать больше'>

		    	</div>

		    	<div class="fhitem">

		    		<div class="imgtop">
		    			<img src="images/fhi2.jpeg" alt="">
		    			<a href="steps.php">Этапы жизни</a>
		    		</div>
		    		<p>Усилия по информированию РОО "Дети-наше счастье" предоставляют информацию и поддержку на всех этапах жизни, от дородового до выхода на пенсию.</p>
		    		<input id='buttontosteps' class='buttonto' type="button" value='Источники'>

		    	</div>	

		    	<div class="fhitem">

		    		<div class="imgtop">
		    			<img src="images/fhi3.jpeg" alt="">
		    			<a href="comm.php">Сообщество</a>
		    		</div>
		    		<p>Наша программа "Посещение новых родителей" предоставляет помощь новым родителям от членов сообщества и адвокатов.</p>
		    		<input id='buttontocomm' class='buttonto' type="button" value='Связаться'>

		    	</div>	

		    	<div class="fhitem">

		    		<div class="imgtop">
		    			<img src="images/fhi4.jpeg" alt="">
		    			<a href="../res/freq.php">Частые вопросы</a>
		    		</div>
		    		<p>РОО "Дети-наше счастье" стремится предоставить четкую и правильную информацию всем людям, чтобы устранить любые стигмы или заблуждения.</p>
		    		<input id='buttontofaq' class='buttonto' type="button" value='Ответы'>

		    	</div>	

		    </div>


		</div>
	</section>


	<section id='ristsect'>
		<div class="container">
		    <div class="ristb">
		       <h2>Поддержка РОО "Дети-наше счастье" семей, родителей малыша с синдромом дауна,ОВЗ,инвалидностью</h2>
		       <p>Наше внимание сосредоточено на создании возможностей для родителей и семей детей с врожденным недугом общаться и обмениваться информацией, отстаивать и защищать права в государстве, быть в кругу единомышленников. Все это достигается путем конференций,съездов,тематических мероприятий, организатором которых является РОО "Дети-наше счастье" при поддержке правительственных ветвей власти</p>
		       </div>

		    <div class="ristb">
		       <h2>Сообщество поддержки семьи и родителей</h2>
		       <p>Благодаря работе с нашим Советом директоров (состоящим из лидеров сообщества и родителей-защитников).Руководящий комитет РОО "Дети-наше счастье" и наши группы поддержки по всей стране, мы разработали ресурсы для помощи и поощрения семей и родителей детей с врожденной инвалидностью. Находитесь ли вы в крупном городе или в небольшом сообществе, мы хотим предоставить вам направление или поддержку, когда вам это нужно. <br>
		       Мы также предоставляем прямую поддержку семьям через наши информационные линии. Если вы хотите связаться с кем-то в вашем регионе, посетите нашу страницу Филиалы и локальные группы. <br><br>Вы новый родитель ребенка с врожденным недугом?</p>
		    </div>
		    <a href="mi_rod.php">Пожалуйста, посмотрите нашу новую секцию "Мы-родители!"</a>
		</div>
	</section>
</main>








<script>
	$(document).ready(function(){
		$('#buttonto').click(function(){window.location.href='mi_rod.php'});
		$('#buttontosteps').click(function(){window.location.href='steps.php'});
		$('#buttontocomm').click(function(){window.location.href='comm.php'});
		$('#buttontofaq').click(function(){window.location.href='../res/freq.php'});
	})
</script>
<?php include('includes/totop.html');?>	
<?php include('includes/prefooter.html');?>	
<?php include('includes/footer.html');?>