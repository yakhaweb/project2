<?php

include("functions/functions.php");

session_start();

error_reporting(E_ALL & ~E_NOTICE);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
					<meta name="google-site-verification" content="PzObldN7-3bsNdFbV9GbuqeOK1mjUZe0nOf9s5YNzGA" />
	                <meta name="msvalidate.01" content="6488F9AA41AA09F37184AD99ED4148DD" />
	<meta name="viewport" content="device-width=640, initial-scale=0.5">
	<meta charset="utf-8">
	<meta name="Description" content="Обработка фотографий">

    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" media="all" href="css/animate.css">
	
	<link href="slick/slick.css" rel="stylesheet" type="text/css" />
	 <link href="slick/slick-theme.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/js/jquery-3.1.1.min"></script>
    <script type="text/javascript" src="/js/ji.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="/js/textchange.js"></script>
	<script type="text/javascript" src="/js/wow.min.js"></script>
	<script>new WOW().init();</script>
	
	<script type="text/javascript" src="/slick/slick.js"></script>
	
		
	<title>Обработка фотографий</title>

</head>

<body>
<div id="block-body">

    <div id="block-header">
        <?php
            include("include/block-header-two.php");
        ?>
    </div>
		
	<div id="block-first-foto">
			
			<div id="first-foto-content-one">
				
				<div id="first-foto-content-two">
		
					<h1>Обработка фотографий</h1>
				
						<p>Качественные и эффектные фотографии  залог успешных продаж ваших товаров.
						При правильной подаче, товары выглядят более презентабельно и эффектно, а
						внимание клиента не отвлекается от объекта продажи на другие лишние предметы.</p>
				
				</div>
					<section>				
						<div id="openModal-kab1" class="modalDialog">
													
									<div class="dvigok-prav">
										
										<a href="#close" title="Закрыть" class="close">X</a>
														
											<div class="poster_prav">
										
														
					
						<?php


							if ($_POST["send_message"]){
								$error = array();
									if (!$_POST["feed_name"])
									$error[] = "Укажите имя!";
									if (!$_POST["feed_phone"])
									$error[] = "Укажите номер телефона!";
									if (!$_POST["feed_text"])
									$error[] = "Укажите текст заявки!";

									if (count($error))
										{
										$_SESSION['message'] = "<p id='form-error'>".implode('<br/>',$error)."</p>";
										} else
											{
										send_mail($_POST["feed_mail"],'pricerozetka111@gmail.com',$_POST["feed_subject"],'От:'.$_POST["feed_name"].'<br/>телефон-:'.$_POST["feed_phone"].'<br/>'.$_POST["feed_text"]);
										$_SESSION['message'] = "<p id='form-success'>Ваша заявка успешно отправлена! Мы скоро с вами свяжемся!</p>";
										}
											}
										?>


				
					<div id="block-content-feedback-first">
    
							<div id="error">
								<?php

								if (isset($_SESSION['message'])){
								echo $_SESSION['message'];
								unset($_SESSION['message']);
								}
								?>
							</div>

									<h3>Напишите ваши предложения и мы сами с вами свяжемся</h3>

									<form method="post">
										<div id="block-feedback">

										<ul id="feedback">
									
										<li>
										<div class="field">
										<label id="feed-name">имя</label>
										<input type="text" name="feed_name"/>
										</div>
										</li>
									
										<li>
										<div class="field">
										<label id="feed-phone">телефон</label>
										<input type="text" name="feed_phone"/>
										</div>
										</li>
										</br>
										<li>
										<div class="field">
										<label>сообщение</label>
										<textarea name="feed_text"></textarea>
										</div>
										</li>
										
										</ul>
									
										<p align="right"><input type="submit" name="send_message" id="form_submit" /></p>
									
										</div>

											</form>
			
					</div>

		
											</div>
									

																		
									</div>
							
						</div>
				
									<div class="portfolio-flex-container-three">
										
										<div class="portfolio-flex-block">
										
											<p align="center" class="button-speak"><a href="#openModal-kab1">заказать</a></p>

										</div>
							  
									</div>
		
		
				
				</section>
				
			</div>
			

		
							
	</div>
	
	<div id="block-object-foto">

		<h4>Предлагаем вам услуги:</h4>
		
		<section>
		
			<article class=" zoomIn wow">

				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
						
						<p>Обтравка фото (удаление или замена фона)</p>
					</div>
			  
				</div>
		
			</article>
		
		</section>
		
		<section>
		
			<article class=" zoomIn wow">
		
				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
					
						<p>Удаление водяных знаков</p>
					</div>
			
				</div>
		
			</article>
		
		</section>
		
		<section>
		
			<article class=" zoomIn wow">
		
				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
						
						<p>Наложение водяных знаков</p>
					</div>
			
				</div>
		
			</article>
			
		</section>
		
		<section>
		
			<article class=" zoomIn wow">
		
				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
						
						<p>Ретушь фотографий</p>
					</div>
			
				</div>
		
			</article>
			
		</section>
		<section>
		
			<article class=" zoomIn wow">
		
				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
						
						<p>Фотокоррекция</p>
					</div>
			
				</div>
		
			</article>
			
		</section>
		<section>
		
			<article class=" zoomIn wow">
		
				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
						
						<p>Чистка от бликов и пыли</p>
					</div>
			
				</div>
		
			</article>
			
		</section>
		<section>
		
			<article class=" zoomIn wow">
		
				<div class="etap-flex-container-foto">
			
					<div class="etap-flex-block-foto">
						
						<p>Другие виды обработки по запросу</p>
					</div>
			
				</div>
		
			</article>
			
		</section>
		

			
</div>

	<div id="block-foto-slader">
		<?php
            include("include/block-foto-slader.php");
        ?>	
	</div>
	
	
</div>

</body>
</html>