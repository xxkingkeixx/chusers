<?php echo '
<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="http://chatangu.tk/">Chatangu</a></h1>
					<nav id="nav" style="margin-right:40px;">
						<ul>
							<li id="list"><a href="/" class="fa fa-home fa-fw"></a></li>
							<li id="list"> <form method="post" action="search_results.php"><input id="search" type="text" style ="border-radius:33px;height:25px;" method="post" name="user_name" maxlength="50" " class="form-control" placeholder="Search for Usernames" /></form></li>
						<!-- Developers -->
							<li id="list">
								<a href="/">Developers</a>
							</li>
						<!--Tutorials -->
							<li id="list">
								<a href="tutorials/tutorials">Tutorials</a>
							</li>
						<!-- Bot -->	
							<li id="list">
								<a href="#">Bot</a>
							<ul>
								<li><a href="#">Info</a>
								<ul>
							<li><a href="#"> Developer</a></li>
							<li><a href="#">Documentation</a></li>
							<li><a href="#">Progress</a></li>
							<li><a href="#">Suggestions</a></li>
							</ul>
							</li>
							<li><a href="#">Report Bugs</a></li></ul>
							</ul>
							</li>
					</nav>
				</header>
' ; ?>				