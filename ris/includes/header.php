
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width,initial-scale=1.0'>
	<link href="https://fonts.googleapis.com/css2?family=Podkova:wght@400;700&family=Vollkorn+SC:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="script.js"></script>
	<script>$(document).ready(function()
	{
		$('#logotip').click(function(){window.location.href='../index.php'});
		$('.btl1').click(function(){window.location.href='mi_rod.php#landscape'});
		$('.btl2').click(function(){window.location.href='mi_rod.php#landscape2'});
		$('.cntproc').click(function(){window.location.href='../about/contact-us.php'});
		$('#button button').click(function(){window.location.href='../involve/donate.php'})
		$('#don').click(function(){window.location.href='../involve/donate.php'});
		$('.fa-vk').click(function(){window.location.href='https://vk.com/deti_nasheschastie_str'})
	})
	</script>
	<title><?php echo $page_title ?></title>
</head>
<body>
	<header>
		<div id="stripe">
			<div class="container">
			    <div id="socials">
			    	<i class="fa fa-vk" ></i>
			    	<i class="fa fa-instagram"></i>
			    </div>
			    <div id="button"><button>Помочь нам</button></div>
			</div>
		</div>

		<div class="container">
		    <div id="logo">
		    	<img id='logotip' style='max-width: 100px' src="logo.jpeg" alt="логотип">
		    	<h1>Общественная организация родителей,воспитывающих детей с инвалидностью<br>РОО "Дети - наше счастье"</h1>
		    </div>
	     <!--navigation-->
		    <ul id='headlist'>
		    	<nav role='navigation'>		    		
		    	<li>
		    		<div class="subnav">
		    		   <a href="../about/about.php">О Нас</a>
		               <div class="subnav-content"><br><br>
		     	           <a href="../about/bod.php">Руководители</a>
		               	   <a href="../about/press.php">В прессе</a>
		               	   <a href="../about/contact-us.php">свяжитесь с нами</a>
		               </div>
		            </div>
		    	</li>

				
		        <li>
		        	<div class="subnav">
				       <a  href="risindex.php">Родители и Семья</a>		        	    
		               <div class="subnav-content"><br><br>
		                   <a href="mi_rod.php">Мы-родители</a>
		                   <a href="steps.php">Шаги</a>
		                   <a href="comm.php">Сообщество</a>
		               </div>
		            </div>
        		</li>


		    	<li>
					<div class="subnav">
				       <a href="../involve/involve.php">Участвуйте</a>
		               <div class="subnav-content"><br><br>
		                   <a href="../involve/donate.php">Пожертвовать</a>
		                   <a href="../involve/sponsor.php">Корпоративное спонсорство</a>
		                   <a href="../involve/member.php">Присоединиться</a>
		               </div>
		            </div>
		    	</li>
		    	
		    	<li>
		    		<div class="subnav">
				       <a href="../res/res.php">Источники</a>
		               <div class="subnav-content"><br><br>
		                   <a href="../res/freq.php">Частые вопросы</a>
		               </div>
		            </div>		    		
		    	</li>
		    	<li><a href="../insp/insp.php">Вдохновляйтесь</a></li>	    	
		        </nav>
		    </ul>		
	    </div>
	</header>	
