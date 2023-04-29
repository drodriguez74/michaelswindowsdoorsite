<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Michaels Windows &amp; Doors - Mail Notification</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="title">Michaels Windows &amp; Doors</a>
				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="generic.html" class="active">Generic</a></li>
						<li><a href="elements.html">Elements</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Mail Notification</h1>
							<?php

                            if(isset($_POST['email'])){
                                $to = "drod4eva@gmail.com"; // Replace this with the email address you want to receive the message
                                $name = $_POST['name'];
                                $subject = "New message from " . $name;
                                $email = $_POST['email'];
                                $message = $_POST['message'];

                                $headers = "From: " . $name . " <" . $email . ">\r\n";
                                $headers .= "Reply-To: " . $email . "\r\n";
                                $headers .= "Content-Type: text/html\r\n";

                                $body = "<html><body>";
                                $body .= "<h2>New message from " . $name . "</h2>";
                                $body .= "<p>Email: " . $email . "</p>";
                                $body .= "<p>Message: " . $message . "</p>";
                                $body .= "</body></html>";

                                if(mail($to, $subject, $body, $headers)){
                                    echo "<p>Message sent successfully.</p>";
                                } else {
                                    echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
                                }
                            } else {
                                echo "<p>Nothing submitted</p>";
                            }

                            ?>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
                <div class="inner">
                    <ul class="menu">
                        <li>&copy; Michaels Windows &amp; Doors. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>					</ul>
                </div>
            </footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>




