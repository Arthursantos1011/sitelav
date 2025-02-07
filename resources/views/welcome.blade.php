<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>ETEC ZONA LESTE</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link href="img/icone1.ico" rel="sortcut icon"/>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"/>
		<style>

			
		</style>
	</head>
	<body>
		<nav>
			<img src="img/logo"/>
			<ul>
				<li><a href="">HOME</a></li>
				<li><a href="/cursos">CURSOS</a></li>
				<li><a href="/departamentos">DEPARTAMENTOS</a></li>
				<li><a href="/oportunidades">OPORTUNIDADES</a></li>
				<li><a href="/vestibulinho">VESTIBULINHO</a></li>
                <li><a href="/instituicao">INSTITUIÇÃO</a></li>
                <li><a href="/contato">CONTATO</a></li>
				<li><a href="/"><img src="img/brasil.png"/></a></li>
			</ul>
		</nav>
		<section class="slideshow-container">
			<div class="mySlides fade">
				<img src="img/slide5.png" style="width:100%">
			</div>
			<div class="mySlides fade">
				<img src="img/slide2.png" style="width:100%">
			</div>
			<div class="mySlides fade">
				<img src="img/slide3.png" style="width:100%">
			</div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</section>
		<section style="text-align:center" class="">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</section>
		<script language="JavaScript">
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) 
			{
				showSlides(slideIndex += n);
			}

			function currentSlide(n) 
			{
				showSlides(slideIndex = n);
			}

			function showSlides(n) 
			{
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
					if (n > slides.length) 
					{
						slideIndex = 1
					}    
					if (n < 1) 
					{
						slideIndex = slides.length
					}
					for (i = 0; i < slides.length; i++) 
					{
						slides[i].style.display = "none";  
					}
					for (i = 0; i < dots.length; i++) 
					{
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
			}
		</script>
		<section id="segmentos">
				<div>
					<img src="img/segmento.png"/>
					<h3>Segmento de atuação</h3>
					<P>A Innovation Pro Systems é uma empresa multidisciplinar que atua em desenvolvimento de software. Possui em seu portfólio: escritórios corporativos, laboratórios, clinicas médicas, restaurantes, bares, fast food, cinemas, academias e lojas de alto padrão para diversos segmentos.</P>
				</div>
				<div>
					<img src="img/desenvolvimento1.png"/>
					<h3>Desenvolvimento</h3>
					<P>Todas as fases do trabalho são tratadas com transparência e organização, e todos os profissionais recebem direcionamento adequado para entender e atender as necessidades de cada projeto, seguindo nosso padrão de desenvolvimento com atenção.</P>
				</div>
				<div>
					<img src="img/exelencia1.png"/>
					<h3>Exelência</h3>
					<P>Graças a essa visão detalhista dos profissionais da Innovation Pro Systems, somos identificados no mercado pela excelência, bom gosto e qualidade dos serviços, tornando sua experiência única.Excelência é a nossa marca!</P>
				</div>				
		</section>
		<section id="fotos">
            <h2>Fotos</h2>
            <img src="img/site.jpg"/>
            <img src="img/cerebro1.jpg"/>
            <img src="img/codigo2.jpg"/>
            <img src="img/computer1.jpg"/>
            <img src="img/sala1.jpg"/>
            <img src="img/programacao1.jpg"/>
        </section>
		<footer>
			<P>Copyright© 2020 Innovation Pro Systems&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/innovationprosystems/?hl=pt-br" target="_blank"><img src="img/instagram1.png"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/Innovation-Pro-Systems-108111967753711/" target="_blank"><img src="img/facebook1.png"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.linkedin.com/in/innovation-pro-systems-829a161b9/" target="_blank"><img src="img/linkedin1.png"/><a/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.google.com/maps/place/R.+Guaip%C3%A1,+678+-+Vila+Leopoldina,+S%C3%A3o+Paulo+-+SP,+02675-031/@-23.520918,-46.728762,16z/data=!4m5!3m4!1s0x94cef8c1d3806777:0x8d03885c01c45d8a!8m2!3d-23.5209181!4d-46.728762?hl=pt-BR" target="_blank"><img src="img/pin.png"/><a/></P>
		</footer>
	</body>
</html>















