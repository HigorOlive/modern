<!doctype html>
<html lang="pt-br">
      <head>
        <meta charset="utf-8">
        <title> Personagens </title>
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
	<!--conteudo com imagens dos personagens-->
	<!--um-->
    <header>
      <div id="pagPersonagem">
        <h1>Os personagens</h1>
		<section>
		<div class="card mb-3" style="max-width: 540px;">
		  <div class="row no-gutters">
			<div class="col-md-4">
			  <img src="imgCard/1.png" class="card-img" title="Guerreiro Hortaliça" alt="">
			</div>
			<div class="col-md-8">
			  <div class="card-body">
				<h5 class="card-title">Guerreiro Hortaliça</h5>
				<p class="lead text-left">Guerreiro Hortaliça - Utiliza sua espada feita da Floresta da Vida, e com ela pode cortar qualquer coisa.
					Foi o primeiro das criaturas a ganhar vida própria, e vaga em rumo de batalhas desde então.</p>
			  </div>
			</div>
		  </div>
		</div>
		</section>
	<!--dois-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/2.png" class="card-img" title="planador" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Planador</h5>
			<p class="lead text-left" >Guerreiro Hortaliça - Utiliza sua espada feita da Floresta da Vida, e com ela pode cortar qualquer coisa.
				Foi o primeiro das criaturas a ganhar vida própria, e vaga em rumo de batalhas desde então.</p>
		  </div>
		</div>
	  </div>
	</div>
	</section>
	<!--três-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/3.png" class="card-img" title="Carvalho vivo" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Carvalho vivo</h5>
			<p class="lead text-left" >Carvalho Vivo - Um pedaço de trongo das as Arvores da vida que foi possuído por um espirito... 
				preso em restos de metais.</p>
		  </div>
		</div>
	  </div>
	</div>
	</section>
	<!--Quatro Infernalha-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/4.png" class="card-img" title="Infernalha" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Infernalha</h5>
			<p class="lead text-left" >Infernalha - Lento mas com ataques muito fortes, consegue soltar uma rajada de fogo pela boca.</p>
		  </div>
		</div>
	  </div>
	</div>
	</section>
	<!--Cinco-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/5.png" class="card-img" title="Aquecedor" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Aquecedor</h5>
			<p class="lead text-left" >Aquecedor - Terrível e esquentado, pode usar o gás da atmosfera para aumentar seu poder contra qualquer
				outro inimigo que apareça.</p>
		  </div>
		</div>
	  </div>
	</div>
	</section>
	<!--Seis-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/6.png" class="card-img" title="Lançador" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Lançador</h5>
			<p class="lead text-left">Lançador - Pode colocar coisas na sua cabeça e usar um impulso de fogo para arremessa-las para longe.</p>
		  </div>
		</div>
	  </div>
	</div>
	</section>
	<!--Sete-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/7.png" class="card-img" title="Triceráculo" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Triceráculo</h5>
			<p class="lead text-left" >Triceráculo - Criatura pacífica, normalmente se esconde no fundo dos lagos. Utiliza um jato de tinta para fugir
				porém tem forças e defesas altas para batalhar.</p>
		  </div>
		</div>
	  </div>
	</div>
	<section>
	<!--Oito-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/8.png" class="card-img" title="Torpedo" alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Torpedo</h5>
			<p class="lead text-left">Torpedo - Quase um tanque aquático. Consegue despedaçar qualquer coisa e pode usar a turbina, além de 
				girar suas nadadeiras trazeiras como hélices pra alcançar altas velocidades.</p>
		  </div>
		</div>
	  </div>
	</div>
	</section>
	<!--Nove-->
	<section>
	<div class="card mb-3" style="max-width: 540px;">
	  <div class="row no-gutters">
		<div class="col-md-4">
		  <img src="imgCard/9.png" class="card-img" title="Mordedor"alt="...">
		</div>
		<div class="col-md-8">
		  <div class="card-body">
			<h5 class="card-title">Mordedor</h5>
			<p class="lead text-left">Mordedor - Permanece parado em beiras de rios esperando presas passarem em sua frente, para fechar sua boca
				em cima delas. Pode comer até mesmo pedras.</p>
		  </div>
		</div>
	  </div>
	</div>	
	</section>
	
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
