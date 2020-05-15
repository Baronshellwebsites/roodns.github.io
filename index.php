<?php 
$page_title="РОО \"Дети наше счастье\"" ;
include('includes/header.php');
?>

<main id='indexsite'>
	<section id='beginbanner'>
		<div class="container">
	        <h1>РОО "Дети-наше счастье"</h1>
	        <p>Общественная организация родителей, воспитывающих детей с инвалидностью и с ОВЗ</p>
	    </div>
	</section>


	<section id='slidessection'>
		  			
		       <div class="slideshow-container">
                    <div class="mySlides fade">
                       <img src="images/slide1.jpg" style="width:100%">    
                    </div>    
     
                    <div class="mySlides fade">
                       <img src="images/slide2.jpg" style="width:100%">    
                    </div>

                    <div class="mySlides fade">
                        <img src="images/slide3.jpg" style="width:100%">    
                    </div>

                    <div class="mySlides fade">
                        <img src="images/slide4.jpg" style="width:100%">    
                    </div>
               </div>            
              
	</section>

	<section id='photossect'>
		<div id="wholeglr">
			<div class="container">
				<div id="imgscont">
					<div class="imgitem"><img style='width:100%' src="images/glr11.jpg" alt="1"><div class="itemtext"><a href="ris/risindex.php">Для родителей и семьи</a></div></div>
					<div class="imgitem"><img style='width:100%' src="images/glr2.jpg" alt="2"><div class="itemtext"><a href="res/freq.php">Ответы на самые часто         задаваемые      вопросы</a></div></div>
					<div class="imgitem"><img style='width:100%' src="images/glr3.jpg" alt="3"><div class="itemtext"><a href="res/res.php">Ресурсы для преподавателей,
                    Работодателей и Медицинских Сообществ</a></div></div>
					<div class="imgitem"><img style='width:100%' src="images/glr4.jpeg" alt="4"><div class="itemtext"><a href="involve/involve.php">Поддержите сообщество РОО "Дети-наше счастье"
                    </a></div></div>
				</div>
			</div>
		</div>
	</section>

	
   





	<section id='about'>
		<div id="sectbanner">
			<div id="secttext">
				<h2>О РОО <br> "Дети-наше счастье"</h2>
			</div>
		</div>
		<div class="container">
		<p>В 2011 году невролог-эпилиптолог, неравнодушный доктор Гулиса Мусина призвала мам объединяться для решения задач, связанных со здравоохранением, образованием и разными другими проблемами. Проводились разные мероприятия. Потом Уфимская организация "Содействие" открыла филиал, который проработал несколько лет. <br><br> С 2010 по 2011 год просуществовал филиал РОО "Содействие" г. Уфа. Проводились мероприятия для родителей, мастер-классы, занятия для детей. Это сплотило многих детей и родителей, которые продолжали общаться и после закрытия организации. Мамы решали разные вопросы, но отсутствие официальной организации связывало по рукам. В мае 2017 года было проведено собрание заинтересованных родителей, на котором было решено открыть общественную организацию. И 10 июля 2018 года появилась РОО "Дети - наше счастье" Башкортостан.</p>
		</div>
	</section>
</main>




        
        
        
        
        
        
        
        
        
        
        
        
        









<script>
	var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

<?php include('includes/totop.html');?>	
<?php include('includes/prefooter.html');?>	
<?php include('includes/footer.html');?>