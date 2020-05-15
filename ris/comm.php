<?php
$page_title="Родители и семья.Сообщество" ;
$page_subtitle="Родители и семья";
$sub_sub="Сообщество";
include('includes/header.php');
?>
<main id='riscommphp'>
	<section id='riscomm'>
		<div class='bannertop'>
		    <div class='container'>
		    	<h1>Соединяйтесь</h1>
		    	<p>Это сообщество объединяет тех,кто нуждается в помощи с теми,кто всегда рядом чтобы оказать ее.</p>			
		    </div>
		</div>
	</section>

	<section id='welcomesect'>
		<div class="container">
		     <div id='processwelc'> <?php echo "<h1 id='linktoris'> ".$page_subtitle."</h1><h1 style='display:inline' class='active_page'> <span id='spanactive'> &nbsp; / </span> ".$sub_sub."</h1>"?></div>
		</div>
	</section>

	<section id='ristsect' class='shortensect'>
		<div class="container">
		       <div class="ristb">
		       	   <h2>Новая программа для родителей</h2>
		       	   <p>Программа посещения новых родителей предназначена для оказания помощи местным группам, специалистам и лидерам сообщества, заинтересованным в реализации программы развития, чтобы помочь новым родителям ребенка с врожденной инвалидностью. Целью программы является помощь в разработке программы в разных частях Республики Башкортостан, в рамках которой родители детей с недугом будут приезжать и оказывать поддержку новым родителям.</p>
		       </div>

		       <div class="ristb">
		       	  <h2>Программа Лидерство</h2>
		       	  <p>Новые родители встретятся с другими родителями или командой, которая прошла обучение по программе посещения новых родителей, предлагаемой РОО"ДНС". В этом учебном пособии и руководстве для руководителей основное внимание уделяется взаимоотношениям и практическим преимуществам между новыми родителями и родителями, которые пережили рождение ребенка с инвалидностью.</p><br>
		       </div>
		      <a href="../about/contact-us.php">Узнайте больше о новой программе посещения "Новых родителей"</a> <br> <br> <br>
		      <a href="../about/contact-us.php">Расписание занятий в вашем районе</a><br>
		</div>
	</section>
</main>




<script>
	$(document).ready(function(){

		$('#linktoris').click(function(){window.location.href='risindex.php'});
			
	})


	
</script>



<?php include('includes/totop.html');?>	
<?php include('includes/prefooter.html');?>	
<?php include('includes/footer.html');?>