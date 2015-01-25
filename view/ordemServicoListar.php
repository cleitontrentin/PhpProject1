    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-ordemservio">
            <thead>
                <tr>
                    <th>#</th>
                    <th>dtAbertura</th>
                    <th>dtFechamento</th>
                    <th>valor</th>
                    <th width="160px">Acao</th>
                </tr>
            </thead>
            <tbody>
<?php
			while  ($_array = mysql_fetch_assoc($result))
			{
?>	
                <tr class="odd gradeX">
                    <td><?=$_array['idORDEMSERVICO']?></td>
                    <td><?=$_array['DTABERTURA']?></td>
                    <td><?=$_array['DTFECHAMENTO']?></td>
                    <td><?=$_array['VALOR']?></td>
                    <td>
                    	<a href="#" class="btnAlterar" id="<?=$_array['idORDEMSERVICO']?>">
                        	<i class="fa fa-edit fa-fw"></i>Detalhe
                        </a>
                        &nbsp;
                        <a href="#" class="btnExcluir" id="<?=$_array['idORDEMSERVICO']?>">
                        	<i class="fa fa-trash-o fa-fw"></i>Excluir
                        </a>
                    </td>
			    </tr>
<?php
			}
?>
		    </tbody>
    	</table>
    
    </div>
    <!-- /.panel-body -->

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <script>

		$(document).ready(function() {
			$('#dataTables-ordemservico').dataTable();
		});

		$(".btnAlterar").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: 'ordemservico'
					, txtAcao: 'detalhe'
					//variaveis para o objeto
					, txtIdordemservico: this.id
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});

		$(".btnExcluir").click(function(){
			if(confirm('Deseja realmente excluir o registro?')){
				$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
						//variaveis de controle
						txtFormulario: 'ordemservico'
						, txtAcao: 'excluir'
						//variaveis para o objeto
						, txtIdordemservico: this.id
					}, function(responseTxt,statusTxt,xhr){
					if(statusTxt=="error")
						alert("Error: "+xhr.status+": "+xhr.statusText);
				});
			}
		});

    </script>
