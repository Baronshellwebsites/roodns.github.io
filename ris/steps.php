<?php
$page_title="Родители и семья.Этапы жизни" ;
$page_subtitle="Родители и семья";
$sub_sub="Этапы жизни";
include('includes/header.php');


/*steps section.edit just inside parenthesis()*/
function steps($num,$sectheader,$sectpar){
	echo
	 "<section class='steps'>
		<div class='container'>
			<h2>$sectheader</h2>
	 	    <div class='stepcom step$num'></div>	 	    	
	 	    	<p>$sectpar</p>
	 	</div>
	 </section>";
}


?>

<main id='rissteps'>
	<section>
		<div class='btwhite bannertop2'>
		    <div class='container'>
		    	<h1>Этапы жизни</h1>
		    	<p>Разные этапы жизни нуждаются в различных ресурсах ребенка с инвалидностью и его родных</p>			
		    </div>
		</div>
	</section>

	<section id='welcomesect'>
		<div class="container">
		    <div id='processwelc'> <?php echo "<h1 id='linktoris'> ".$page_subtitle."</h1><h1 style='display:inline' class='active_page'> <span id='spanactive'> &nbsp; / </span> ".$sub_sub."</h1>"?></div>
		    <div class='welcomesteps'  id="welcome">
		    	<div class='welcomesteps' id="welcometext">
		       	     <h2>Расширение прав и возможностей и осведомленность</h2>    
		    	     <p>Миссия РОО"Дети-наше счастье"- расширить возможности жителей Башкирии с врожденной инвалидностью и их семей. Мы повышаем осведомленность и предоставляем информацию о синдроме Дауна,ОВЗ,РАС и других недугов на пренатальном, раннем детском, школьном, зрелом и пенсионном уровнях.</p>
		    	</div>
		    </div>
		</div>
	</section>

	<?php steps(1,"История Светланы и ее сына Егора,9 лет","Меня зовут Светлана. Я мама особенного ребёнка, его зовут Егор, ему 9 лет.Родился он в мае, был весёлым и жизнерадостным малышом. Любил играть в прятки, в раннем возрасте подражал взрослым будто говорит по телефону) В общем был такой как все! После отлучения от груди в полтора года, к двухлетнему возрасту откатился назад в развитии. Он как будто провалился в эту аутичную яму. Перестал откликаться на имя, стал капризным и раздражительным, постоянно плакал. Появилось странное поведение. Он перестал нас слышать, находился в каком-то коконе(В три года поставили диагноз «Атипичный аутизм». Началась череда разъездов по реабилитационным центрам. Но результатов толком не было. Остановились тогда, когда я поняла, что мы в тупике и топчемся на месте! Тогда я отказалась от всех классических врачей и решила взять все в свои руки. Начала изучать Биомед, превентивную медицину, нутрицевтику и натуропатию. И многое что узнала, что аутизм это не психиатрическое заболевание, а болезнь всего организма! Что нужно копать глубже, нужно правильно питаться, заниматься спортом и развивать сильные стороны ребёнка, а не циклиться на одном мозге! Пошла положительная динамика, пусть речи пока нет, но ведь это не главное! Главное то, что ребёнок меня слышит и понимает, что у него крепкий и здоровый сон, что прошли истерики и капризы, он приобрёл много социально-бытовых навыков! И я знаю, что это не предел! Главное поверить в себя, а ещё поверить в своего ребёнка и результат не заставит себя ждать! Всем добра!") ;echo"<div class='container'><div class='sgc'><div class='sgall'><img src='images/step11.jpg' alt=''></div><div class='sgall'><img src='images/step111.jpg' alt=''></div></div></div>"; ?>
	<?php steps(2,"Наталья и ее сын Дмитрий","Дмитрий первый и долгожданный ребёнок. При рождении малыша никаких особенностей выявлено не было. Однако, ребенок много капризничал плохо засыпал и мало спал, по мере роста малыша у мамы появилось беспокойство по поводу отсутствия реакций у него на просьбы и запреты мамы, однако врачи успокаивали,объясняя такое поведение избалованностью ребенка и излишней эмоциональностью мамы. Воспитатель детсада, куда Дима пошёл в 2 года заявила, что он необучаемый и не управляемый, это будущий малолетний преступник и в её группе таким не место...сменили садик. В два года появился первый диагноз: задержка речи, позже ЗПР, переход в коррекционной детский сад, где тоже разводили руками и говорили о необучаемости и невозможности справиться с ребёнком... Поиски дефектолога в маленьком городке, где мы жили на тот момент оказались делом непростым, даже на платной основе желающих заниматься не находилось. Но нам повезло, и спустя время, нашёлся человек, не побоявшийся трудностей. В пять лет был поставлен диагноз: ранний детский аутизм, который актуален до сих пор. По окончании детского сада встал вопрос о школе, в городке было два варианта: либо домашнее обучение, либо интернат в 25 км от города, было решено переехать в Стерлитамак, город, где есть коррекционная школа, единственный приемлемый на то время вариант... Сейчас Диме 10 лет, он учится во 2 классе коррекционной школы, посещает дефектолога, занятия на скалодроме и в бассейне, много рисует. Мечтает о море ")  ;echo"<div class='container'><div class='sgc'><div class='sgall'><img src='images/step22.jpg' alt=''></div><div class='sgall'><img src='images/step222.jpg' alt=''></div></div></div>";?>
	<?php steps(3,"Алла Гайдаренко и дочь Злата","В ноябре 2004 года в нашей семье появилось 'чудо' - Златочка.Она единственная и самая маленькая среди 4-х братьев.Всё было хорошо,но в один момент... всё рухнуло..У нас появились приступы.Ей было тогда 5 лет.Мы отлежали в больнице,прошли обследование и получили шок!Дочке поставили диагноз ЭПИ !Узнали,что это такое,сдавали анализы по гинетике,бегали по врачам и пытались признать эту болезнь.Через какое-то время начались осложнения.От малейшего шума,скрипа был страх у Златы.Она стала бояться всего, замкнулась,могла сутками не говорить.Ухудшилось зрение.В д/сад перестали ходить.Да и в шк.нам разрешили только в 8 лет пойти.В школу мы пошли в обычный класс и через 2 месяца попали в больницу. Шум, крики на переменах и нагрузка дали о себе.Первый класс ей пришлось повторить.Но уже обучение было на дому.Дочь росла и появлялись новые проблемы со здоровьем.ЭПИ, Синдром Арнольда Киари 1, Синдром Клиппеля-Фейля.Кисты в голове и на позвоночнике.Сейчас Злате уже 15 лет.Пройден тяжёлый путь.Лекарства,больницы,обследования в РДКБ (Уфа),в Москве,в Питере. Прошли разные лечения,операции.Сейчас здоровье намного лучше.Всегда рядом была семья, врачи и мамы,которые имеют таких 'особят' .Ещё много,что предстоит пройтимоей дочке. Но мы уверены,когда двигаешься и не сдаешься и всё постепенно налаживается.То,что было и сейчас - огромная разница!")  ;echo"<div class='container'><div class='sgc'><div class='sgall'><img src='images/step33.jpg'  alt=''></div><div class='sgall'><img src='images/step333.jpg' alt=''></div></div></div>"; ?>
	<?php echo "<div class='container'><a class='linka' href='../about/contact-us.php'>Поделитесь своей историей!</a></div>"?>
	
	
	

</main>





<script>
	$(document).ready(function(){

		$('#linktoris').click(function(){window.location.href='risindex.php'});

	})	
</script>

<?php include('includes/totop.html');?>	
<?php include('includes/prefooter.html');?>	
<?php include('includes/footer.html');?>