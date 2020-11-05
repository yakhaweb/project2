<?php

include("functions/functions.php");

session_start();

//$cat= clear_string($_GET["cat"]);
//$type= clear_string($_GET["type"]);

error_reporting(E_ALL & ~E_NOTICE);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
					<meta name="google-site-verification" content="PzObldN7-3bsNdFbV9GbuqeOK1mjUZe0nOf9s5YNzGA" />
	                <meta name="msvalidate.01" content="6488F9AA41AA09F37184AD99ED4148DD" />
	<meta name="viewport" content="device-width=640, initial-scale=0.5">
	<meta charset="utf-8">
	<meta name="Description" content="Создание XML прайс листа для Rozetka">

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
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165396137-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165396137-1');
</script>

	
		
	<title>Создание XML прайс листа для Rozetka</title>

</head>

<body>
<div id="block-body">

    <div id="block-header">
        <?php
            include("include/block-header.php");
        ?>
    </div>
	

	
	<div id="block-first">
	
		<div id="block-first-fon">
		
			<div id="block-first-content">
		
				<div id="block-first-content-one">
				
					<div id="block-first-content-two">
				
									<h1>

										ROZETKA
										</br>
										Комплексный подход к созданию прайс листа для Rozetka.
										</br>
										Быстро, качественно, доступно.
										</br>
										Выход на маркетплейс Rozetka уже сегодня!
										</br>
										</br>				
									</h1>
									
					</div>

				</div>

			</div>
					
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
				
									<div class="portfolio-flex-container">
										
										<div class="portfolio-flex-block">
										
											<p align="" class="button-speak"><a href="#openModal-kab1">обсудить проект</a></p>

										</div>
							  
									</div>
		
		
				
				</section>
						
	</div>
	
	
	
	<div>
	
	    <?php
            include("include/block-object.php");
        ?>
	
	</div>
	
	<div>
	
	    <?php
            include("include/block-yslugi.php");
        ?>
	
	</div>
	
	
	<div>
	
	    <?php
            include("include/block-indikator.php");
        ?>
	
	</div>
	
		<div>
	
	    <?php
            include("include/block-otziv.php");
        ?>
	
	</div>

	

	
	

	
	<div id="block-contact">
			
		<h4>Как с нами связатся</h4>
		
		<div class="feed-flex-container">
			
			<div class="feed-flex-block">
			
				<?php function check_mobile_device() { 
				$mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
				$agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
				foreach ($mobile_agent_array as $value) {    
				if (strpos($agent, $value) !== false) return true;   
				};     
				return false; 
				};?>
				<p>Позвоните нам</p>
				<p id="number-telephon">+38 098 092 73 22</p>
				<p>или напишите нам </p>
				
				<? if(check_mobile_device()) :?>
					<a href="viber://chat?number=380980927322"><img src="/images/Viber.png"/></a> 
							

						<? else : ?>
					<a title="Должен быть устоновлен Viber для ПК" href="viber://chat?number=+380980927322"><img src="/images/Viber.png"/></a>
				<? endif; ?>
				
									
				<a href="https://wa.me/380980927322?text=Здравствуйте.%20Вопрос%20по%20поводу%20оформления%20документов."><img src="/images/WhatsApp.png"/></a>

			
				<a href="tg://resolve?domain=380980927322"><img src="/images/Telegram.png"/></a>
				
			</div>
			
			
			

				
			<div class="feed-flex-block">
					


				
					<div id="block-content-feedback">
    
							<div id="error">
								<?php

								if (isset($_SESSION['message'])){
								echo $_SESSION['message'];
								unset($_SESSION['message']);
								}
								?>
							</div>

			<h3>или оставьте заявку и мы сами с вами свяжемся</h3>

			<form method="post">
				<div id="block-feedback">

				<ul id="feedback">
				</br>
				
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
				</br>
				</ul>
						
				<p align="right"><input type="submit" name="send_message" id="form_submit" /></p>
			
				</div>

					</form>
			
					</div>

			</div>
			
</div>

</div>
	

<div>	
	<?php

		include("include/block-footer.php");	

	?>
</div>
</div>

</body>
</html>