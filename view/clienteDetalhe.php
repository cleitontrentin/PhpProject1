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
                <i class="fa fa-edit fa-fw"></i> Alteração de Cliente
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" id="formAtual" name="formAtual">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" name="txtNome" value="<?= $_array["nomeCliente"] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input class="form-control" placeholder="Informe seu endereço" type="text" id="txtRua" name="txtEndereco" value="<?= $_array["endereco"] ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" placeholder="Informe o numero" type="text" id="txtNumero" name="txtTelefone" value="<?= $_array["telefone"] ?>">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-12" align="right">
                            <input type="hidden" name="txtidCliente" id="txtIdCliente" value="<?= $_array["idCliente"] ?>" >
                            <input type="hidden" name="txtFormulario" id="txtFormulario" value="cliente" >
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

<div class="row">
    <div class="col-lg-12">
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<script type="text/javascript">
    $("#btnEnviar").click(function() {
        $("#alertForm").load("../controller/ctrlReceiveForm.php", {
            //variaveis de controle
            txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
            , txtAcao: document.forms["formAtual"].elements["txtAcao"].value
                    //variaveis para o objeto
            , txtIdCliente: document.forms["formAtual"].elements["txtidCliente"].value
            , txtNome: document.forms["formAtual"].elements["txtnome"].value
            , txtEndereco: document.forms["formAtual"].elements["txtendereco"].value
            , txttelefone: document.forms["formAtual"].elements["txttelefone"].value

        }, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });


    $("#btnCancela").click(function() {
        $("#conteudoForm").load("../controller/ctrlReceiveForm.php", {
            //variaveis de controle
            txtFormulario: "cliente"
            , txtAcao: "principal"
        }, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });

</script>


