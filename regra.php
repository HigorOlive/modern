<!doctype html>
<html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <title> Regras do Jogo</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> </link>
        <link rel="stylesheet" type="text/css" href="css/style.css"> </link>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--coisas do fontawasome-->
<link href="fontawesome/css/all.css" rel="stylesheet"> </link>
<script defer src="/fontawesome/js/all.js"></script>
<script defer src="/fontawesome/js/brands.js"></script>
    </head>
    <body id="bgcolor">
        <div class="divlogo">
          <!--Logo-->
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
    <div class="pagRegras">
    <!--Jumbotron com informacoes das regras-->
    <div class="jumbotron ">
        <div class="container">
            <h1 class="display-4"> Regras do Jogo </h1>
            <p class="lead"> Aqui iremos apresentar pada você as regras do jogo, venha comigo!  </p>
            <hr class="-4">
            <p class="lead"> O jogo funciona da seguinte forma: </p>
        </div>
    </div>
    <!--Explicacao das regras-->
        <p class="lead text-left"> O jogador possui 3 elementos fixos para derrotar uma determinada carta, apos derrota-la<br>
        outra carta surge aleatoriamente ate que o jogador consiga 5 pontos.</p>
        <p class="lead text-left"> O jogador possui 5 tentativas para tal, caso nao consiga, o jogo reinicia.
        </p>
    <h3 class="display-5"> Os Elementos </h3>
        <p class="lead text-left">Os elementos que o jogador possui são: Água, Fogo e Planta </p>
    <h3 class="display-5"> Logica de Batalha </h3>
        <p class="lead text-left"> A lógica do game funciona da seguinte forma: se têm uma trindade de elementos, na qual um derrota seu subsequente 
          e perde para antecessor.<br> Ex: Água derrota fogo e perde para Planta, enquanto Fogo derrota Planta, mas perde para Água.</p>
		<div id="imgElemento">
        <img src="img/elementos.png" class="img-fluid" alt="Responsive image">
		</div>
		<!--imagem-->
		<div id="imgRegras">
			<img src="imgCard/card 9.png" class="img-fluid" alt="Responsive image" width="300px">
		</div>
    </div>
	</header>
	<!--rodape-->
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
