<?php include '../../web/seguranca.php';
$title = "AdminPFC - Inscrições equipe";

// protegePaginaUnica(999);
protectPage('999');

$p = $_GET['p'];

include '../head.php';
    
?>

<style>
	#body-container {
		background: #fff;
		padding: 30px;
	}

</style>

<body id="corpo" class="hold-transition skin-black sidebar-mini fixed">

    <div class="wrapper">

    <?php include '../menu.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <?php if(!isset($p)): ?>
                    <a href="<?php echo $root_html ?>sistema/" class="btn btn-default"><i class="fa fa-arrow-left"></i>&ensp;Voltar</a>                

                <?php endif; ?>
              <ol class="breadcrumb">
                <li><a href="<?php echo $root_html ?>sistema/"><i class="fa fa-dashboard"></i> Home</a></li>
                <?php if(!isset($p)): ?>
                <li class="active">Inscrições Curso de Astronomia</li>     
                <?php endif; ?>           
              </ol> 
            </section>
<br><br>
            <div id="body-container" class="container-fluid">

                <h1>Inscrições Curso de Astronomia</h1>

                <?php 
                    $sql = "SELECT * FROM inscricoes_astronomia ORDER BY id";

                    $busca = mysqli_query($_SG['link'], $sql);

                    while ($value = mysqli_fetch_array($busca)): 
                        switch ($value['area']) {
                            case 'negocios':
                                $area_txt = "Prospecção e Negócios";
                                break;
                            
                            case 'educacao':
                                $area_txt = "Educação";
                                break;

                            case 'eventos':
                                $area_txt = "Eventos";
                                break;

                            case 'marketing':
                                $area_txt = "Marketing";
                                break;

                            case 'ti':
                                $area_txt = "T.I.";
                                break;

                            default:
                                $area_txt = "";
                                break;
                        }

                        ?>

                        <div class="row">
                            
                            <div class="col-md-12">
                            <a href="#" onclick="
                                event.preventDefault();
                                // $('.icones').addClass('fa-plus-circle'); 
                                // $('.icones').removeClass('fa-minus-circle'); 
                                $('#resposta<?php echo $value["id"]  ?>').slideToggle(); 
                                $('#icone<?php echo $value['id'] ?>').toggleClass('fa-plus-circle fa-minus-circle');" title="Clique aqui para ver as respostas">
                                <h3>
                                	<?php echo $value['nome']; ?>
                                	&ensp;|&ensp;
                                	<?php echo $value['curso'] ?>
                                	&ensp;|&ensp;
                                	<?php echo $value['email']?>	

                                	<span class="pull-left">
                                		<i id="icone<?php echo $value['id'] ?>" class="icones fa fa-plus-circle"></i>&ensp;
                                	</span>
                            	</h3>
                            </a>
                               	<div id="resposta<?php echo $value['id'] ?>" class="respostas" hidden>
                                    <p>
                                        <b>Nome completo:</b> <br>
                                        <?php echo $value['nome']; ?>
                                    </p>
                                    <p>
                                        <b>E-mail:</b> <br>
                                        <?php echo $value['email']; ?>
                                    </p>
                                    
                                    <p>
                                        <b>Idade:</b> <br>
                                        <?php echo $value['idade']; ?>
                                    </p>

                                    <p>
                                        <b>RG:</b> <br>
                                        <?php echo $value['rg']; ?>
                                    </p>

                                    <p>
                                        <b>CPF:</b> <br>
                                        <?php echo $value['cpf']; ?>
                                    </p>


                                    <p>
                                        <b>Contato:</b> <br>
                                        <?php echo $value['celular']; ?>
                                    </p>

    
                                    <p>
                                        <b>Endereço:</b> <br>
                                        <?php echo $value['endereco']; ?>
                                    </p>

                                   
                                    <p>
                                        <b>Curso:</b> <br>
                                        <?php echo $value['curso']; ?>
                                    </p>

                                    <p>
                                        <b>Instituição de Ensino:</b> <br>
                                        <?php echo $value['instituicao']; ?>
                                    </p>

                                    <p>
                                        <b>Período:</b> <br>
                                        <?php echo $value['periodo']; ?>
                                    </p>


                                    <p>
                                        <b>Curso realizado previamente (SE REALIZADO):</b> <br>
                                        <?php echo $value['cursorealizado']; ?>
                                    </p>


                               	</div>


                            </div>

                        </div>



                    <?php endwhile; ?>


            </div>
        </div>





    <?php include '../footer.php'; ?>


<script>
    $('.deletar_documento').click(function(){

        $id = $(this).attr('data-id');

        data = {
            'id': $id,
            'documento': $(this).attr('data-documento')
        }

        $.ajax({
            url: '<?php echo $root_html ?>sistema/documentos/deletarDoc.php',
            type: 'POST',
            data: data,
        })
        .done(function(data) {
            $('.alerta').show().addClass('alert-success');
            $('#alerta_conteudo').html(data);
            $('#modalConfirm'+$id).modal('toggle');
            setTimeout(function(){ $('.alerta').fadeOut(500).removeClass('alert-success', 500);}, 4000);

            setTimeout(function(){
                window.location.reload();
            }, 600);
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        

    });

    $('.docs-container').hover(function() {
        $('.hover', this).removeClass("hidden");
    }, function() {
        $('.hover', this).addClass("hidden");
    });

    function download(url, nome) {
        var el = document.createElement("a");
            el.download = nome; //Define o nome
            el.href = url; //Define a url
            el.target = "_blank"; //Força abrir em uma nova janela
            el.className = "hide-link"; //Adiciona uma classe css pra ocultar

        document.body.appendChild(el);

        if (el.fireEvent) {
            el.fireEvent("onclick");//Simula o click pra navegadores com suporte ao fireEvent
        } else {
            //Simula o click
            var evObj = document.createEvent("MouseEvents");
            evObj.initEvent("click", true, false);
            el.dispatchEvent(evObj);
        }

        //Remove o link da página
        setTimeout(function() {
            document.body.removeChild(el);
        }, 100);
    }

    $('#enviar_doc').change(function(event) {
        $('#form_enviar_doc').submit();
    });

    $('#form_enviar_doc').submit(function(event) {

        event.preventDefault();

        var form = new FormData(this);

        $.ajax({
        url: '<?php echo $root_html?>sistema/documentos/enviarDoc.php',
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data: form,
        xhr: function() {  // Custom XMLHttpRequest
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) { // Avalia se tem suporte a propriedade upload
                myXhr.upload.addEventListener('progress', function () {
                   /* faz alguma coisa durante o progresso do upload */
                    $('.alerta').show().addClass('alert-success');
                    $('#alerta_conteudo').html("Carregando...");

                }, false);
            }
        return myXhr;
        }
        })
        .done(function(form) {
            $('#alerta_conteudo').html(form);

            setTimeout(function(){ $('.alerta').fadeOut(500).removeClass('alert-success', 500);}, 4000);

            setTimeout(function(){
                window.location.reload();
            }, 1000)
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
    });


</script>