            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Alteração de cliente
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="formAtual" name="formAtual">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input tabindex="1" class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" value="<?=$_array["NOME"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Endereço</label>
                                            <input tabindex="3" class="form-control" placeholder="Informe o seu endereço" type="text" id="txtEndereco" name="txtendereco" value="<?=$_array["ENDERECO"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Telefone</label>
                                            <input tabindex="2" class="form-control" placeholder="Informe um telefone" type="text" id="txtTelefone" name="txtTelefone" value="<?=$_array["TELEFONE"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtCodigo" id="txtIdCliente" value="<?=$_array["idCLIENTE"]?>" >
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="cliente" >
									<input type="hidden" name="txtAcao" id="txtAcao" value="alterar">
									<button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
									<button tabindex="6" type="button" class="btn btn-default" id="btnCancela">Cancela</button>
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
	
            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

	<script type="text/javascript">
		$("#btnEnviar").click(function(){
			$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
					, txtAcao: document.forms["formAtual"].elements["txtAcao"].value
					//variaveis para o objeto
					, txtIdCliente: document.forms["formAtual"].elements["txtIdCliente"].value
					, txtNome: document.forms["formAtual"].elements["txtNome"].value
					, txtEndereco: document.forms["formAtual"].elements["txtEndereco"].value
					, txtTelefone: document.forms["formAtual"].elements["txtTelefone"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

		$("#btnCancela").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "cliente"
					, txtAcao: "principal"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    </script>
    
