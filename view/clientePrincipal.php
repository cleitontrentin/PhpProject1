            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Cadastro de cliente
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="ListaCliente" name="listaCliente">
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Cadastro de funcionario
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="formAtual" name="formAtual">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input tabindex="1" class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" id="txtId">
                                        </div>
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input tabindex="2" class="form-control" placeholder="Informe seu endereço" type="text" id="txtEncereco" name="txtEndereco">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input tabindex="3" class="form-control" placeholder="Informe um Telefone" type="text" id="txtTelefone" name="txttelefone">
                                        </div>
<!--                                        <div class="form-group">
                                            <label>Confirme sua Senha</label>
                                            <input tabindex="4" class="form-control" placeholder="Confirme sua senha" type="password" id="ConfirmaSenha" name="ConfirmaSenha">
                                        </div>-->
                                </div>
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="cliente" >
									<input type="hidden" name="txtAcao" id="txtAcao" value="incluir">
									<button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
                                </div>
								</form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

	<script type="text/javascript">
		$(document).ready(function(){
			$("#ListaCliente").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "cliente"
					, txtAcao: "listar"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
		
	
		$("#btnEnviar").click(function(){
			$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
					, txtAcao: document.forms["formAtual"].elements["txtAcao"].value
					//variaveis para o objeto
					, txtNome: document.forms["formAtual"].elements["txtNome"].value
					, txtEndereco: document.forms["formAtual"].elements["txtEndereco"].value
					, txtTelefone: document.forms["formAtual"].elements["txttelefone"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    </script>
    