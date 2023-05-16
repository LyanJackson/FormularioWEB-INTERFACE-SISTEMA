<?php
$p = @$_GET['p'];

//NOTICIA

include '../../web/seguranca.php';


include '../../web/script.php';
include '../../web/header.php';


?>

<style rel="stylesheet" type="text/css">
    .as-prev-arrow {
        left: 0;
        top: 45%;
        font-size: 2.5em;
        z-index: 2;
        color: rgba(255,255,255,.5);
    }

    .as-next-arrow {
        right: 0;
        top: 45%;
        font-size: 2.5em;
        z-index: 2;
        color: rgba(255,255,255,.5);
    }
</style>

<!-- PROBLEMA COM O TITULO
<script>
    $(window).bind("load", function () {
        document.title = <?php echo '"'.$row['titulo'].'"'; ?>;
    });
</script>
-->

	
	
<?php if ($mobile):
// #################################################################################################################    
// ################################################ MOBILE #########################################################    
// #################################################################################################################    
 ?>
 
<div id="menu1">
    <div class="container2" style="font-size: 0.5em;">
        <span style="display:inline-block; vertical-align:middle; color: white;"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques - Inscrições Curso Astronomia</span>
      </div>
</div>
<br>

        <div style="width: 100%; padding-top: 1%; font-size: 0.9em; margin-left: 0;">
          <a href="<?php echo $root_html ?>destaques/noticia/" style="background: #ff6600; color:white; width: 90%;" class="botao noticias"><i class='fa fa-newspaper-o fa-1x '></i> Notícias</a> |
            <a href="<?php echo $root_html ?>destaques/evento/" style="background: #ff6600; color:white;" class="botao eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos/Atividades</a> |
            <a href="<?php echo $root_html ?>destaques/publicacao/" style="background: #ff6600; color:white;" class="botao publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</a> |
            <a href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: #ff6600; color:white;" class="botao guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Vestibulares</a>
            <a href="<?php echo $root_html ?>destaques/olimpiadas_cientificas/" style="background: #ff6600; color:white;" class="botao guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Olímpiadas</a>
          </div>
        <!-- MENU DESTAQUES -->

    
    <br><br> <img src="<?php echo $root_html ?>img/logo.png" width="50%"><br><br><span style="font-size: 2em; color: #ff6600;"> Página em manutenção.<br>Volte em breve. </span>
    <br><br><br><br>
       <?php else: 
// #################################################################################################################    
// ################################################ DESKTOP #########################################################    
// #################################################################################################################    
       ?>

<div id="corpo" class="container">
	
	<form id="inscricoes" action="/astronomia/send.php"  class="col-md-8 col-md-offset-2" method="POST">
	<img src="fotoastronomia.jpeg" alt="Curso Astronomia" width="80%" height="700px">
		
<br>
<br><br>

		<h2 class="text-center">
			<b>SOBRE O CURSO</b>
</h2>

          <p> O curso tem como objetivo ensinar os conceitos básicos necessários para a operação de um
telescópio. Com isso, os participantes poderão compreender a utilização dos telescópios, e, assim, ampliar
seus conhecimentos em astronomia. </p>
<br>

<p> 
<b>Carga horária: </b> O curso terá a duração de 8 encontros presenciais, sendo 4 encontros teóricos e 4 encontros
práticos. </p>

		          <div class="text-center col-md-12">
						<a href="https://www.futurocientista.net/astronomia/Edital_2023.pdf" type="application/pdf" class="btn btn-danger btn-lg" title="Clique aqui para abrir o edital" data-toggle="tooltip">			
                       <i class='fa fa-file-pdf-o'></i>  PDF EDITAL
                        </a>
					</div>

		
					<br>
		<hr>

		
		<div id="formastro" class="form-group">
		<h2 class="text-center">
		<b>	INSCREVA-SE</b>
		</h2>
		<p>Preencha todo o formulário com atenção!</p>
		<img src="topoedital.png" alt="edital" width="100%" height="150px">
		<h3 class="text-center">Nome Completo</h3>
			<!-- <label for="nome">Nome completo</label> -->
			<input type="text" name="nome" class="input-lg form-control" id="nomez" required placeholder="Seu Nome Aqui">
		</div>

		<div class="form-group">
			<!-- <label for="email">E-mail</label> -->
			<h3 class="text-center">E-Mail</h3>
			<input type="text" name="email" class="input-lg form-control" id="emailz" required placeholder="E-mail para contato">
		</div>

		<div class="form-group">
			<!-- <label for="email">E-mail</label> -->
			<h3 class="text-center">Endereço Completo</h3>
			<input type="text" name="endereco" class="input-lg form-control" id="enderecoz" required placeholder="Rua/Cidade/CEP">
		</div>

				
		<div class="row">
				<div class="form-group col-md-6">
			<h3 class="text-center">RG</h3>
				<input type="text" maxlength="9" id="rgz" class="form-control input-lg" name="rg" required placeholder="RG">
			</div>
		
		  <div class="form-group col-md-6">
			<h3 class="text-center">CPF</h3>
				<input type="text" maxlength="11" name="cpf" class="input-lg form-control" id="cpfz" required placeholder="CPF">
			</div>
<br>
					<hr>
<br>
				<div class="form-group col-md-6">
			<h3 class="text-center">CELULAR</h3>
				<input type="text" maxlength="11" id="celularz" class="form-control input-lg" name="celular" required placeholder="ddxxxxxxxxx">
			</div>
		
		  <div class="form-group col-md-6">
			<h3 class="text-center">IDADE</h3>
				<input type="text" maxlength="2" name="idade" class="input-lg form-control" id="idadez" required placeholder="Idade">
			</div>
			
		
				<div class="form-group col-md-6">
			<h3 class="text-center">GRADUAÇÃO</h3>
				<input type="text" id="cursoz" class="form-control input-lg" name="curso" required placeholder="Curso Graduação">
			</div>
		
		   <div class="form-group col-md-6">
			<h3 class="text-center">INSTITUIÇÃO</h3>
				<!-- <label for="email">E-mail</label> -->
				<input type="text" name="instituicao" class="input-lg form-control" id="instituicaoz" required placeholder="Instituição de Ensino">
			</div>	
		<hr>
			<hr>
		
		<div class="form-group col-md-6">
			<h3 class="text-center">SEMESTRE</h3>
			<input type="text" name="periodo" maxlength="2" class="input-lg form-control" id="periodoz" required placeholder="Em qual semestre está em sua instituição?">
		</div>
		<br>
		<div class="form-group col-md-6">	
        <h3 class="text-center">CURSOS ANTERIORES</h3>
		  <P class="text-center">Já realizou algum curso na área de astronomia?</p>
           <INPUT TYPE="RADIO" NAME="jafez" VALUE="SIM"> SIM
           <INPUT TYPE="RADIO" NAME="jafez" VALUE="NÃO"> NÃO
		</div>
		
	<div class="form-group">		
	<h3 class="text-center">CURSO ANTERIOR</h3>
	<p class="text-center">Se selecionado sim na questão anterior, qual?</p>
				<input type="text" name="cursorealizado" class="input-lg form-control" id="cursorealizadoz" placeholder="Curso realizado previamente">
				<br>
			<input style="text-align:left" type="checkbox" id="scales" name="scales" required > Declaro estar ciente e de acordo com todas as informações referentes ao Curso de Astronomia Observacional com Telescópios e me comprometo a respeitar as normas e o regulamento do curso.
			</div>

		<div class="alert" id="alerta_inscricoes" hidden>
			<span></span>
		</div>

<button style="align:center" class="btn btn-dark btn-lg btn-block" type=submit>Enviar Inscrição</button>

<div class="clearfix" style="height: 30px;"></div>

		<div class="alert" id="alerta_inscricoes" hidden>
			<span></span>
		</div>
	</form>			

</div>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
	#corpo {
		padding-bottom: 50px; 
		padding-top: 30px; 
		padding-left: 500px; 
		/*background-color: rgba(51,51,51,.1);*/
		background: white;
		text-align: center;
		min-width: 1940px;
		justify-content:center;
	}

	#inscricoes {
		/*background: #fff;*/
		background-color: white;
		overflow-y: hidden;
		padding: 30px;
		border: 1px solid rgba(51,51,51,.3);
		border-radius: 5px;

	}

	form > .form-group,
	form > .row {
		padding-bottom: 15px;
	}

	.foprmastro{
		width: 200%;
		align: center;
	}
	.form-control {
		border: 2px solid rgba(51,51,51,.4);
	}
	
	.form-control::placeholder { 
		color: rgba(51,51,51,.3);
	}

	.btn {
		text-transform: uppercase;
	}

	.form-control:focus,
	.form-control:active {
		border: 2px solid #ff6600;
	}

	select {
		padding: 30px;
	}

</style>


 <script>
	
</script>

<?php endif; ?>
