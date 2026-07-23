<?php 
	session_start()
 ?>
<html>
<link rel="stylesheet" href="homepage.css">
<body>

<div class="info">

	<div class="imgcontainer">
   		<img src="Charles_Babbage.jpg" alt="Avatar" class="avatar">
	</div>

	<div class="namecontainer">
		<div>
			<h1><?php echo $_SESSION['fname'], " " ,$_SESSION['lname']; ?></h1>
		</div>
   		<div>
   			<h2>December 26, 1791 – October 18, 1871</h2>
   		</div>
	</div>
	
</div>
	
<div class="biography">
	<div>
		<div>
			<h3>Early Life and Education</h3>
		</div>
		<div>
			<p>Born in London to a wealthy banking family, Babbage showed an early passion for mathematics and science. He attended Trinity College, Cambridge in 1810, where he studied mathematics and co-founded the Analytical Society to promote modern mathematical practices in England.</p>
		</div>
		<div>
			<h3>The Difference Engine</h3>
		</div>
		<div>
			<p>In 1821, Babbage conceptualized the Difference Engine, a revolutionary mechanical device designed to compute polynomial functions and produce mathematical tables automatically. Although he received government funding and began constructing it, the limitations of 19th-century metalworking made it incredibly difficult to produce the precise parts required, and the project was eventually abandoned.</p>
		</div>
		<div>
			<h3>The Analytical Engine and Ada Lovelace</h3>
		</div>
		<div>
			<p>By 1837, Babbage envisioned a much more ambitious machine: the Analytical Engine. This was a general-purpose, program-controlled mechanical computer. It contained the fundamental components of a modern computer, including an arithmetic logic unit (called the "mill"), memory (called the "store"), and punched cards for input and programming. During his development of this machine, he collaborated with mathematician Ada Lovelace, who translated notes about the machine and is credited with writing the first computer program.</p>
		</div>
	</div>
</div>

</body>
</html>