<?php require_once("Php functions/switch_lang.php"); ?>
<!DOCTYPE html>
<html>
	<head>
        <title>Alex's Portfolio</title>
  		<link rel="shortcut icon" href="/images/icon-512.png" type="image/x-icon">
		<link rel="icon" href="/images/icon-192.png" sizes="192x192" type="image/png">
		<link rel="icon" href="/images/icon-512.png" sizes="512x512" type="image/png">
		<link rel="apple-touch-icon" href="/images/icon-512.png">
		<link rel="manifest" href="manifest.json">
        <link rel='stylesheet' href=/css/style.css>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<link href='css/phppot-style.css' rel='stylesheet' type='text/css' />
		<link href='css/multi-lingual-page.css' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="/js/script.js" defer></script>
		<meta name="theme-color" content="#2882ba">
		<meta property="og:title" content="Alex's Portfolio</title" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.alexandernyagolov.com/" />
		<meta property="og:image" content="http://www.alexandernyagolov.com/images/icon.png" />
		<meta property="og:description" content="Hi, I'm Alex! This website is my personal CV. 
		It encapsulates my personality and growth so far. I have included a short description, 
		schlolar journey, my skills and projects. Hope that you will enjoy visiting and potentially
		spark a conversation with a future partner!" />
	</head>
  	<body>
	<!-- <?php
      if (! empty($result_lang)) {
      //foreach ($result_lang as $k => $v) {
    ?> -->

		<div id="preloader"></div>		

		<div id="wrapper">
			<h2 id="hi">Hi!</h2>
			<span class="wave">👋</span>
			<h2 id="im">I'm</h2>
			<div id="title"><div id="name">Alexander Nyagolov.</div></div>
			<h2 id="but"1>but also...</h2>
		</div>
		
		<div id="menu">
			<a id="menu-signature" href="#top"><img id="signature" src="/images/signature-w.png"></a>
			<ul>
				<li><i class="fa fa-user"></i><a id="menu-about" href="#about"><?php echo $result_lang[0][$lang.'_title']; ?></a></li>
				<li><i class="fa fa-graduation-cap"></i><a id="menu-resume" href="#resume"><?php echo $result_lang[1][$lang.'_title']; ?></a></li>
				<li><i class="fa fa-book"></i><a id="menu-skills" href="#skills"><?php echo $result_lang[2][$lang.'_title']; ?></a></li>
				<li><i class="fa fa-folder"></i><a id="menu-projects" class="disabled" href="#projects"><?php echo $result_lang[3][$lang.'_title']; ?></a></li>
				<li><i class="fa fa-envelope"></i><a id="menu-contact" href="#contact"><?php echo $result_lang[4][$lang.'_title']; ?></a></li>
			</ul>
			<button class="hamburger" id="hamburger-menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
		</div>

		<nav id="nav">
			<div class="lang-menu">
                <div id="selected-lang" class="selected-lang <?php echo $lang?>">
                    <?php echo $selection;?>
                </div>
                <ul>
                    <li>
                         <a class="bg language-link-item" href="<?=$page?>?lang=bg"
                        <?php if($lang == 'bg'){?> style="color: #F2542D;"
                        <?php } ?>>Български</a>
                    </li>
                    <li>
                        <a class="de language-link-item" href="<?=$page?>?lang=de"
                        <?php if($lang == 'de'){?> style="color: #F2542D;"
                        <?php } ?>>Deutsch</a>
                    </li>
                    <li>
                        <a class="ru language-link-item" href="<?=$page?>?lang=ru"
                        <?php if($lang == 'ru'){?> style="color: #F2542D;"
                        <?php } ?>>Руский</a>
                    </li>
                    <li>
                        <a class="en language-link-item" href="<?=$page?>?lang=en"
                        <?php if($lang == 'en'){?> style="color: #F2542D;"
                        <?php } ?>>English</a>
                    </li>
                </ul>
            </div>
		</nav>
		<!-- <?php
                        //}
                    } else {
                        ?>
                    <div class="no-result"><?php echo $language["NOTIFY_NO_RESULT"]; ?></div>
                    <?php
                    }
                    ?> -->
		<div id="progress-container" class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>
      	<div id="banner"></div>
      	<div id="container" class="container">
		  	<a href="#top" id="button"></a>
			<div id="down-arrow" class="down-arrow"></div>
			<div class="bumper" id="about"></div>
			<section id="section-1">
				<h1><?php echo $result_lang[0][$lang.'_title']; ?></h1>
				<div id="ruler">
					<h2>
						<span class="icons">📍</span>
						<span id="age-counter"></span>
						<?php echo $result_lang[5][$lang.'_description']; ?>
					</h2>
					<h2>
						<span class="icons">👨‍💻</span>
						<?php echo $result_lang[6][$lang.'_description']; ?>
					</h2>
					<h2>
						<span class="icons">🎓</span>
						<?php echo $result_lang[7][$lang.'_description']; ?>
					</h2>
					<h2>
						<span class="icons">🛠</span>
						<?php echo $result_lang[8][$lang.'_description']; ?>
					</h2>
					<h2>
						<span class="icons">🔧</span>
						<?php echo $result_lang[9][$lang.'_description']; ?> 📈
					</h2>
					<h2>
						<span class="icons">💡</span>
						<?php echo $result_lang[10][$lang.'_description']; ?>
					</h2> 
				</div>
			</section>

			<div class="image">
				<div class="windowSeat">
					<div class="window">
						<input id='flap' type='checkbox' checked disabled>
						<label class='flap' for='flap'></label>
						<img id="image" src="/images/think.png">
					</div>
				</div>
			</div>
			
			<section id="section-2">
			<h1><div class="bumper" id="resume"></div><?php echo $result_lang[16][$lang.'_title']; ?></h1>
			<div id="timeline" class="timeline">
				<div class="timeline-section">
					<div class="timeline-bubble" id="firstbubble">
					</div>
					<div id="timeline-item-left" class="timeline-item left">
						<h2><?php echo $result_lang[14][$lang.'_title']; ?></h2>
						<p><?php echo $result_lang[13][$lang.'_title']; ?></p>
						<p><?php echo $result_lang[12][$lang.'_description']; ?></p>
						<p><strong><?php echo $result_lang[13][$lang.'_description']; ?></strong></p>
					</div>
					<div class="timeline-bubble">
						<img src="images/university_logo.png" alt="University Logo">
					</div>
				</div>
                <div class="timeline-section">
					<div class="timeline-bubble">
					</div>
					<div class="timeline-item right">
						<h2><?php echo $result_lang[30][$lang.'_title']; ?></h2>
						<p><?php echo $result_lang[30][$lang.'_description']; ?></p>
                        <p><?php echo $result_lang[31][$lang.'_title']; ?></p>
						<p><strong><?php echo $result_lang[31][$lang.'_description']; ?></strong></p>
                        <p><strong>2025 - 2026</strong></p>
					</div>
					<div class="timeline-bubble">
						<img src="images/fontys_logo.png" alt="Fontys Logo">
					</div>
				</div>
				<div class="timeline-section">
					<div class="timeline-bubble">
						<img src="images/highschool_logo.png" alt="High School Logo">
					</div>
					<div class="timeline-item left">
						<h2><?php echo $result_lang[14][$lang.'_description']; ?></h2>
						<p><?php echo $result_lang[14][$lang.'_description']; ?></p>
						<p><?php echo $result_lang[15][$lang.'_title']; ?></p>
						<p><?php echo $result_lang[15][$lang.'_description']; ?></p>
						<p><strong>2019 - 2024</strong></p>
					</div>
				</div>
			</div>
			</section>

			<section id="section-3">
				<div class="skills-section">
					<div class="bumper" id="skills"></div>
					<h2><?php echo $result_lang[18][$lang.'_title']; ?></h2>
					<div class="programming-tags programming-left">&lt;<?php echo $result_lang[17][$lang.'_description']; ?>&gt;</div>
						<div class="hex-grid">
							<div class="hex"><img src="images/html_logo.png" alt="Html"></div>
							<div class="hex"><img src="images/css_logo.png" alt="CSS"></div>
							<div class="hex"><img src="images/js_logo.png" alt="JavaScript"></div>
							<div class="hex"><img src="images/php_logo.png" alt="PHP"></div>
							<div class="hex"><img src="images/mysql_logo.png" alt="MySQL"></div>
							<div class="hex"><img src="images/cpp_logo.png" alt="C++"></div>
							<div class="hex"><img src="images/cs_logo.png" alt="C#"></div>
							<div class="hex"><img src="images/python_logo.png" alt="Python"></div>
						</div>
					<div class="programming-tags programming-right">&lt;/<?php echo $result_lang[17][$lang.'_description']; ?>&gt;</div>
				</div>
			</section>

			<section id="section-3">
				<div class="skills-section">
					<div class="bumper"></div>
					<h2></h2>
					<div class="programming-tags programming-left">&lt;<?php echo $result_lang[18][$lang.'_description']; ?>&gt;</div>
						<div class="hex-grid">
							<div class="hex"><img src="images/sd_logo.png" alt="Solidworks"></div>
							<div class="hex"><img src="images/fc_logo.png" alt="Freecad"></div>
							<div class="hex"><img src="images/matlab_logo.png" alt="Matlab"></div>
							<div class="hex"><img src="images/arduino_logo.png" alt="Arduino"></div>
							<div class="hex"><img src="images/altium_logo.png" alt="Altium Designer"></div>
						</div>
					<div class="programming-tags programming-right">&lt;/<?php echo $result_lang[18][$lang.'_description']; ?>&gt;</div>
				</div>
			</section>

			<section id="section-3">
				<div class="skills-section">
					<div class="bumper"></div>
					<h2></h2>
					<div class="programming-tags programming-left">&lt;<?php echo $result_lang[19][$lang.'_description']; ?>&gt;</div>
						<div class="hex-grid">
							<div class="hex"><img src="images/excel_logo.png" alt="Excel"></div>
							<div class="hex"><img src="images/pp_logo.png" alt="Powerpoint"></div>
							<div class="hex"><img src="images/word_logo.png" alt="Word"></div>
							<div class="hex"><img src="images/access_logo.png" alt="Access"></div>
							<div class="hex"><img src="images/terminal_logo.png" alt="Terminal"></div>
							<div class="hex"><img src="images/powershell_logo.png" alt="Powershell"></div>
							<div class="hex"><img src="images/ubuntu_logo.png" alt="Ubuntu"></div>
						</div>
					<div class="programming-tags programming-right">&lt;/<?php echo $result_lang[19][$lang.'_description']; ?>&gt;</div>
				</div>
			</section>

			<section id="section-3">
				<div class="skills-section">
					<div class="bumper"></div>
					<h2></h2>
					<div class="programming-tags programming-left">&lt;<?php echo $result_lang[20][$lang.'_description']; ?>&gt;</div>
						<div class="hex-grid">
							<div class="hex"><img src="images/blender_logo.png" alt="Blender"></div>
							<div class="hex"><img src="images/ps_logo.png" alt="Photoshop"></div>
							<div class="hex"><img src="images/pr_logo.png" alt="Premiere pro"></div>
							<div class="hex"><img src="images/openshot_logo.png" alt="Openshot"></div>
							<div class="hex"><img src="images/gimp_logo.png" alt="Gimp"></div>
							<div class="hex"><img src="images/inks_logo.png" alt="Inkscape"></div>
						</div>
					<div class="programming-tags programming-right">&lt;/<?php echo $result_lang[20][$lang.'_description']; ?>&gt;</div>
				</div>
			</section>

			<div class="bumper" id="projects"></div>
			<section id="section-4">

			</section>
		</div>
      	<div id="footer">
			<div id="contact">		
				<div class="form-wrapper">
				<form class="contact-form" action="mailto:nyagolovaleksander@gmail.com" method="POST" enctype="text/plain">
					<h2><?php echo $result_lang[25][$lang.'_description']; ?></h2>
					<div class="input-group">
					<input type="text" name="name" required>
					<label><?php echo $result_lang[26][$lang.'_description']; ?></label>
					</div>
					<div class="input-group">
					<input type="email" name="email" required>
					<label><?php echo $result_lang[27][$lang.'_description']; ?></label>
					</div>
					<div class="input-group">
					<textarea name="message" rows="4" required></textarea>
					<label><?php echo $result_lang[28][$lang.'_description']; ?></label>
					</div>
					<button type="submit" id="send-btn"><?php echo $result_lang[29][$lang.'_description']; ?></button>
				</form>
				</div>
				<div id="socials">
						<a href="https://instagram.com/a.nyagolov" target="_blank" class="icon-button instagram"><i class="fa-brands fa-instagram"></i><span></span></a>
						<a href="https://www.facebook.com/p/Alexander-Nyagolov-100012346712856/" target="_blank" class="icon-button facebook"><i class="fa-brands fa-facebook"></i><span></span></a>
						<a href="https://www.linkedin.com/in/alexander-nyagolov/" target="_blank" class="icon-button linkedin"><i class="fa-brands fa-linkedin"></i><span></span></a>
				</div>
			</div>
			<div id="planeBox">
				 	<svg viewBox="0 0 3387 1270">
					<path id="planePath" class="planePath" 
					d="M-226 626c439,4 636,-213 934,-225 755,-31 602,769 1334,658 562,-86 668,-698 266,-908 -401,-210 -893,189 -632,630 260,441 747,121 1051,91 360,-36 889,179 889,179"/>
					
					<g id="planeShape">
					<polygon class="fil1" points="-141,-10 199,0 -198,-72 -188,-61 -171,-57 -184,-57 "/>
					<polygon class="fil2" points="199,0 -141,-10 -163,63 -123,9 "/>
					<polygon class="fil3" points="-95,39 -113,32 -123,9 -163,63 -105,53 -108,45 -87,48 -90,45 -103,41 -94,41 "/>
					<path class="fil4" d="M-87 48l-21 -3 3 8 19 -4 -1 -1zm-26 -16l18 7 -2 -1 32 -7 -29 1 11 -4 -24 -1 -16 -18 10 23zm10 9l13 4 -4 -4 -9 0z"/>
					<polygon class="fil1" points="-83,28 -94,32 -65,31 -97,38 -86,49 -67,70 199,0 -123,9 -107,27 "/>
					</g>
				</svg>
			</div>
			<h1>© <span id="year-counter"></span> <?php echo $result_lang[23][$lang.'_description']; ?></h1>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 
    </body>
  </html>