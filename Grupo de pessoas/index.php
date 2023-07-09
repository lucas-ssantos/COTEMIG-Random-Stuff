<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<title>As Personalidades</title>
		<link rel="icon" href="imagens/icone.png" type="image/png" sizes="16x16 32x32 64x64">
		<link rel="stylesheet" type="text/css" href="css/Estilo.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.circlemouse.js"></script>
		<style type="text/css">.Header{background-image: url('imagens/Backgroundmenu.jpg'); opacity:1; }.Body1 {background-image: url("imagens/bodybackground.jpg");}
    </style>
	    <noscript>
		<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
        <script type="text/javascript">
      var posicao = 0;
      var mensagem = "<h2><a 'name='header'>Jopumo</a> <h4>Vendo o mundo com novos olhos" 
      function rola() {
        document.getElementById("lugar").innerHTML = mensagem.substring(posicao,mensagem,length);
        posicao++;
        if (posicao == mensagem.length) {
	  posicao = 1000;
        }
        setTimeout("rola()", 70); 
      }

    </script>
	</head>
	<body id="Fadein" onload="rola()">
		<section class="Header">
			<div class="text-responsive text-center" id="lugar"></div>
			<div class="text-responsive text-center" id="lugar2"></div>	
		</section>
 <!--  Inicio Protipo -->
   <section id="personalidades-post">
    <div class="container">
      <div class="row">
<!-- imagem dos roqueiros-->
        <div class="col-lg-6 col-md-6 personalidades-post-area-img img-center">
        	<img src="imagens/rock.png">
        </div>
<!-- Conteudo escrito roqueiros-->
          <div class="col-lg-6 col-md-6 personalidades-post-area">
            <div class="personalidades-post-titulo">
              <h2>Grupo social: <small>Roqueiros</small></h2>
              <p>Roqueiro é uma designação genérica, amplamente para se referir a quaisquer músicos de rock, podendo estes serem integrantes de alguma das subculturas e contraculturas vinculadas a música rock, como greasers, headbangers, punks, góticos, entre outras, ou mesmo nenhuma. 
			  Entre as subculturas, os "roqueiros" costumam transparecer um ar de rebeldia em relação aos padrões sociais mais comuns.</p>
            </div>
            </div>
		 <div class="col-lg-12  text-right"> <button class="button button-circle leiamais">Leia Mais...</button> </div>
<!-- Fim da area roqueiros-->
          </div>
        </div>	
  </section>

  <section id="personalidades-post">
    <div class="container">
      <div class="row">
<!-- imagem dos Otakus-->
        <div class="col-lg-6 col-md-6 personalidades-post-area-img img-center">
        	<img src="imagens/otakus.png">
        </div>
<!-- Conteudo escrito Otakus-->
          <div class="col-lg-6 col-md-6 personalidades-post-area">
            <div class="personalidades-post-titulo">
              <h2>Grupo social: <small>Otakus</small></h2>
              <p>Otaku é uma expressão de origem japonesa utilizada para designar pessoas que são consideradas fãs extremistas de determinado assunto, esporte, programa de televisão, hobby e etc. Na cultura ocidental (como a cultura brasileira), a palavra otaku ganhou um significado bastante diferente do original e é utilizada como uma gíria que define as pessoas que são exclusivamente fãs de animês e mangás (desenhos animados e histórias em quadrinhos típicos do Japão).</p>
            </div>
            </div>
<!-- Fim da area dos otakus -->
          </div>
        </div>	
  </section>
  <section id="personalidades-post">
    <div class="container">
      <div class="row">
<!-- imagem dos Gamers-->
        <div class="col-lg-6 col-md-6 personalidades-post-area-img img-center">
        	<img src="imagens/Gamers.png">
        </div>
<!-- Conteudo escrito Gamers-->
          <div class="col-lg-6 col-md-6 personalidades-post-area">
            <div class="personalidades-post-titulo">
              <h2>Grupo social: <small>Gamers</small></h2>
              <p>Historicamente, o termo "gamer" ou "gameplayer" geralmente se referia a alguém que jogava role-playing games, (RPG). Ou jogos de miniatura classificados como gamer. Entretanto, mais recentemente o termo tem crescido e incluído os jogadores de videogame. Enquanto o termo nominal inclui aqueles que não se consideram necessariamente serem gamers (por exemplo os gamers casuais), é mais usado comumente para aqueles que passam seu tempo livre jogando ou aprendendo sobre jogos.</p>
            </div>
            </div>
<!-- Fim da area dos Gamers -->
          </div>
        </div>	
  </section>
			<div class="footer">
					<div class="row">
						<div class="col-lg-12 text-center">
							<p>Copyright As Personalidades 2019 | Template p/ Lucas Lopes</p>
				    	</div>
				    </div>
			    </div>
		   </div>
	</body>
</html>