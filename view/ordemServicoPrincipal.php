            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ordem de Serviço</h1>
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
                            <i class="fa fa-table fa-fw"></i> Lista de Veículos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="Listaordemservico" name="Listaordemservico">
                        
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
                            <i class="fa fa-edit fa-fw"></i> Cadastro de Ordem de serviço
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Data Abertura</label>
                                            <input class="form-control" placeholder="Data de Abertura" type="text" id="txtDtAbertura" name="txtDtAbertura">
                                        </div>
								</div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Valor</label>
                                            <input class="form-control" placeholder="Informe o valor" type="text" id="txtValor" name="txtValor">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Data Fechamento</label>
                                            <input class="form-control" placeholder="Data Fechamento" type="text" id="txtDtFechamento" name="txtDtFechamento">
                                        </div>
                                </div>
                              
                              
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Selecione</label>
                                            <select class="form-control" placeholder="informe a pessoa"  id="txtselecione" name="txtSelecione">
                                                <option value="Cliente">CLIENTE</option>
                                                <option value="Funcionario">FUNCIONARIO</option>
                                             
                                            </select>

                                        </div>
                                </div>
                            </div>
                         

                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="ordemservico" >
									<input type="hidden" name="txtAcao" id="txtAcao" value="incluir">
									<button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
                                </div>
                            </div>
							</form>
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
			$("#Listaordemservico").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "ordemservico"
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
					, txtDtAbertura: document.forms["formAtual"].elements["txtDtAbertura"].value
					, txtValor: document.forms["formAtual"].elements["txtValor"].value
					, txtDtFechamento: document.forms["formAtual"].elements["txtDtFechamento"].value
					, txtSelecione: document.forms["formAtual"].elements["txtSelecione"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

			
    </script>
    