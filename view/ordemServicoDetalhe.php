




<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Ordem de Serviço</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-edit fa-fw"></i> Alteração de Ordem de Serviço
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" id="formAtual" name="formAtual">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>valor</label>
                                <input class="form-control" placeholder="Informe o valor" type="text" id="txtValor" name="txtValor" value="<?= $_array["VALOR"] ?>">
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Data Abertura</label>
                                <input class="form-control" placeholder="informe a Data de Abertura" type="text" id="calendario" name="txtDtAbertura" value="<?= $_array["DTABERTURA"] ?>">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Data Fechamento</label>
                                <input class="form-control" placeholder="informe a Data de Fechamento" type="text" id="calendario" name="txtDtFechamento" value="<?= $_array["DTFECHAMENTO"] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12" align="right">
                            <input type="hidden" name="txtIdOrdemServico" id="txtIdOrdemServico" value="<?= $_array["idORDEMSERVICO"] ?>" >
                            <input type="hidden" name="txtFormulario" id="txtFormulario" value="ordemservico" >
                            <input type="hidden" name="txtAcao" id="txtAcao" value="alterar">
                            <button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
                            <button tabindex="5" type="button" class="btn btn-default" id="btnCancela">Cancelar</button>
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


<!-- /.row -->


<!-- /.row -->










<script type="text/javascript">

    $("#btnEnviar").click(function() {
        $("#alertForm").load("/locadora/controller/ctrlReceiveForm.php", {
            //variaveis de controle
            txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
            , txtAcao: document.forms["formAtual"].elements["txtAcao"].value
                    //variaveis para o objeto
            , txtIdOrdemServico: document.forms["formAtual"].elements["txtIdOrdemServico"].value
            , txtValor: document.forms["formAtual"].elements["txtValor"].value
            , txtDtAbertura: document.forms["formAtual"].elements["txtDtAbertura"].value
            , txtDtFechamento: document.forms["formAtual"].elements["txtDtFechamento"].value
        }, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });


    $("#btnCancela").click(function() {
        $("#conteudoForm").load("../controller/ctrlReceiveForm.php", {
            //variaveis de controle
            txtFormulario: "ordemservico"
            , txtAcao: "principal"
        }, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });


</script>
