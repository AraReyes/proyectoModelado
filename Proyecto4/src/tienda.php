
<html>
	<header>
		<title>Tienda en linea</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> 

		<style type="text/css">
			
			body {
			margin-left: 150px; 
			margin-right: 150px;
			background-image: url("imagenes/green.jpg");
			}
			
			.topnav {
				overflow: hidden;
				background-color: #333;
				}

			.topnav a {
			  float: left;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 17px;
				}

			.topnav a:hover {
			  background-color: #ddd;
			  color: black;
				}

			.topnav input[type=text]{
			  padding: 6px;
			  margin-top: 8px;
			  font-size: 17px;
			  border: none;
			}
			
			ul {
				list-style-type: none;
				margin: 0;
				padding: 10;
				width: 16%;
				background-color: #f1f1f1;
				position: fixed;
				height: 400px;
				overflow: auto;
			}

			li a {
				display: block;
				color: #000;
				padding: 8px 16px;
				text-decoration: none;
			}

			li a:hover:not(.active) {
				background-color: #555;
				color: white;
			}

	
		</style>
	</header>
	<body>
		<center>
		<div class="topnav">
		  <a class="active" href="index.php">Inicio</a>
		  <a href="tienda.php">Tienda</a>
		  <a href="#contact">Contacto</a>
		  <a href="quienesSomos.php">Sobre nosotros</a>
		</div>


		<ul>
		  <li><a href="#home">Geckos</a></li>
		  <li><a href="#news">Pogonas</a></li>
		  <li><a href="#contact">Tarantulas</a></li>
		  <li><a href="#about">Anfibios</a></li>
		  <li><a href="#about">Otros reptiles</a></li>
		</ul>

		<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		  <h2>Fixed Full-height Side Nav</h2>
		  <h3>Try to scroll this area, and see how the sidenav sticks to the page</h3>
		  <p>Notice that this div element has a left margin of 25%. This is because the side navigation is set to 25% width. If you remove the margin, the sidenav will overlay/sit on top of this div.</p>
		  <p>Also notice that we have set overflow:auto to sidenav. This will add a scrollbar when the sidenav is too long (for example if it has over 50 links inside of it).</p>
		  <p>Some text..</p>
		  <p>Some text..</p>
		  <p>Some text..</p>
		  <p>Some text..</p>
		  <p>Some text..</p>
		  <p>Some text..</p>
		  <p>Some text..</p>
		</div>
	
	</body>
</html>
