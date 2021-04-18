<!doctype html>
<html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <title>O Projeto </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> </link> <!--css/bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/style.css"> </link> <!--css próprio-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--coisas do fontawasome-->
<link href="fontawesome/css/all.css" rel="stylesheet"> </link>
<script defer src="/fontawesome/js/all.js"></script>
<script defer src="/fontawesome/js/brands.js"></script>
    </head>
    <body id="bgcolor">
      <!--Logo-->
        <div class="divlogo">
            <img src="img/Ativo 1.png" class="logo">
        </div>
        <div>
                <nav class="navbar navbar-dark bg-dark">
                    <a class="flex-sm-fill text-sm-center nav-link " href="index.html">Home</a>
                    <a class="flex-sm-fill text-sm-center nav-link " href="projeto.html">Projeto</a>
                    <a class="flex-sm-fill text-sm-center nav-link " href="personagem.html">Personagens</a>
                    <a class="flex-sm-fill text-sm-center nav-link " href="regra.html"> As Regras</a>
                    <a class="flex-sm-fill text-sm-center nav-link " href="historia.html">Sobre nós</a>
                    <a class="flex-sm-fill text-sm-center nav-link " href="cadastro.html">Cadastro</a>
    <!-- Botão para acionar modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ExemploModalCentralizado">
      Login
    </button>
    <!-- Modal -->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="TituloModalCentralizado">Entrar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <form>
            <div class="form-row">
          <div class="modal-body">
            <!--E-mail-->
              <div class="form-group col-md-12">
                  <label for="inputEmail">Email: </label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
              <!--Senha-->
              <div class="form-group col-md-12">
                  <label for="inputPassword">Senha: </label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="senha">
              </div>
            </div>
          </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-info">Acessar</button>
          </div>
        </div>
      </div>
    </div>
        </nav>
          </div>
    <header>
	<!--conteudo-->
    <div id="pagProjeto">
        <h1> O jogo </h1>
        <p class="lead text-left"> O projeto tem como objetivo final um Card Game (jogo de cartas) com uma fácil compreensão, 
          não tendo uma restrição de idade. A lógica do jogo, consiste em derrotar o card oponente.
          Para isso, são utilizados três elementos diferentes. Assim, temos uma mecânica de 
          pedra, papel e tesoura. Para cada elemento existem três criaturas diferentes, sendo o total de nove 
          até o momento.</p><br>
	<!--inicio div youtube-->
		<h2> Video </h2>
		<p class="lead text-left"> logo abaixo uma breve explicação em formato de video sobre nosso projeto.<br>
		Aproveite e deixe o seu joinha.</p>
  <div class="container" >

    <!--Grid row-->
    <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-6">

        <!-- Video -->
        <div class="embed-responsive embed-responsive-16by9 mb-4">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
            allowfullscreen></iframe>
        </div>
      </div>
      <!--Grid column-->
    </div>
	<a href="https://youtu.be/vlDzYIIOYmM" target="blank_">Link video </a>
    <!--Grid row-->
  </div>
  
  		<!--teste carosel-->
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
	
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <img class="d-block w-100" src="card1.png" alt="Primeiro Slide">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="card1.png" alt="Segundo Slide">
				</div>
				<div class="carousel-item">
				  <img class="d-block w-100" src="card1.png" alt="Terceiro Slide">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
	</div>

    </header>
	
	
    <!--Rodape-->
    <footer class="rodape">
        <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-md-4 mx-auto">
    
            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" id="feedback">
               Deixe um feedback!
            </h5>
            <div class="mb-3" id="textarea">
                <label for="validationTextarea"></label>
                <textarea class="form-control" id="validationTextarea" placeholder="Vamos lá, escreva algo..." required></textarea>
            </div>
			
		<button type="button" class="btn btn-info" data-target="#ExemploModalCentralizado">
		  Enviar
		</button>
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-2 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ajuda</h5>
    
            <ul class="list-unstyled font-weight-bold">
              <li>
                <a href="historia.html">Sobre nós </a>
              </li>
              <li>
                <a href="projeto.html"> Projeto </a>
              </li>
              <li>
                <a href="regra.html"> Regras </a>
              </li>
            </ul>
  
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-2 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Acompanhe</h5>
    
            <ul class="list-unstyled font-weight-bold">
              <li>
               <p> <a href="mailto:contatoteclandes">Tec landes@gmail.com</a> </p>
              </li>
            </ul>
			
			<ul class="list-unstyled font-weight-bold">
				  <li>
					<p> <a href="tel:SAC08001291482">SAC 0800 129 1482</a> </p>
				  </li>
			 </ul>
			
			<ul class="list-unstyled font-weight-bold">
              
              <li>
                <a href="https://www.consumidor.gov.br/pages/principal/?1573841392140" target="blank_">Consumidor.gov.br</a>
              </li>
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
          
    
        </div>
        <!-- Grid row -->
    
      </div>
      <!-- Footer Links -->
      <!-- Social buttons -->
      <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-github a-lg white-text mr-md-5 mr-3 fa-2x" ></i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
          <p> © 2019 Hortaliças Games, inc. Todos os direitos reservados. </p>
      </footer>
    </body>
</html>
