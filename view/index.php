<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Locadora de Veículos">
    <meta name="author" content="Curso Tecnico em informatica para internet">

    <title>Gerenciador de Ordem de Serviço</title>

    <!-- Bootstrap core CSS -->
    <link href="../include/css/bootstrap.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

	<div class="container">
    	<nav class="navbar navbar-inverse" role="navigation">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/PhpProject1/view/admin.php">Cliente</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
	    </nav>
    </div>
    <!-- /.container -->

    <div class="container">

        <div class="jumbotron hero-spacer">
            <h1></h1>
            <p></p>
        </div>

        <hr>

       
        <!-- /.row -->

        <div class="row text-center" id="listaCarro">

       

        <hr>

       

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="../include/js/jquery-1.10.2.js"></script>
    <script src="../include/js/bootstrap.js"></script>
    <script>
		$(document).ready(function(){
			$("#listaCliente").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "cliente"
					, txtAcao: ""
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    
    </script>
    
    
    
    
</body>
</html>


