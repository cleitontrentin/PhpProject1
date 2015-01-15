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
                <i class="fa fa-table fa-fw"></i> Lista de cliente
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" id="ListaCliente" name="ListaCliente">

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
                <i class="fa fa-edit fa-fw"></i> Adicionar de Cliente
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" id="formAtual" name="formAtual">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" name="txtNome">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input class="form-control" placeholder="Informe seu endereço completo" type="text" id="txtRua" name="txtEndereco">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" placeholder="Informe o numero de Telefone" type="text" id="txtNumero" name="txtTelefone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Desativado</label>
                                <input class="form-control" placeholder="Innforme se o clientente é ativo" type="text" id="txtComplemento" name="txtDesativado">
                            </div>
                        </div>
                      
                    </div>

            </div>
        </div>



    </div>
</div>

<div class="row">
    <div class="col-lg-12" align="right">
        <input type="hidden" name="txtFormulario" id="txtFormulario" value="cliente" >
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
    $(document).ready(function() {
        $("#ListaCliente").load("../controller/ctrlReceiveForm.php", {
            //variaveis de controle
            txtFormulario: "cliente"
            , txtAcao: "listar"
        }, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });

    $("#btnEnviar").click(function() {
        $("#alertForm").load("../controller/ctrlReceiveForm.php", {
            //variaveis de controle
            txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
            , txtAcao: document.forms["formAtual"].elements["txtAcao"].value
                    //variaveis para o objeto
            , txtNome: document.forms["formAtual"].elements["txtNome"].value
            , txtEndereco: document.forms["formAtual"].elements["txtEndereco"].value
            , txtTelefone: document.forms["formAtual"].elements["txtTelefone"].value
            , txtDesativado: document.forms["formAtual"].elements["txtDesativado"].value
        }, function(responseTxt, statusTxt, xhr) {
            if (statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
        });
    });
</script>


