<!DOCTYPE html>
<?php  include("../../comum/comum.php");  ?>
<?php  include_once("../../comum/negocio-comum.php");  ?>
<?php  include("../negocio-importacao.php");  ?>
<?php


if(isset($_REQUEST["id_menu"])){
    $IdMenu = $_REQUEST["id_menu"];
}

$loImportacao = new importacaoBO();



?>  
<html>

    <head>
        
        <title>Agenda Lets | </title>
        
         <!-- CABECALHO BEGIN -->
         <?php include("../../comum/apresentacao/cabecalho.php"); ?>
         <!-- CABECALHO HEAD -->
        <link href="../../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
 
    </head>

    <body class="page-container-bg-solid page-boxed">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN  TOP -->
            <?php include("../../comum/apresentacao/topo.php"); ?>
            <!-- END  TOP -->

            <!-- BEGIN  MENU -->            
            <?php include("../../menu/apresentacao/menu-horizontal.php"); ?>
            <!-- END  MENU -->




        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        
                    </div>
                </div>
                <!-- END PAGE HEAD-->




                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="" style="padding-left:30px;">
                     
                     <!-- Inicio -->


                        <div class="row">

                    <div class="col-md-7 ">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">   
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject font-dark sbold uppercase">Importa&ccedil;&atilde;o Let&rsquo;s</span>
                                    </div>
                   
                                </div>
                                <div class="portlet-body form">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-body">
                                        
                            <div class="note note-info">
                                <h4 class="block">Adicionar as Placas</h4>
                                <p> As placas devem ser adicionadas utilizando o separador de virgula, <strong>Ex:</strong> AAAXXXX,BBBXXXX. </p>
                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Veiculos *</label>
                                                <div class="col-md-9">
                                                    <textarea rows="8" cols="60" id="textarea-placas" ></textarea>
                                                  </div>
                                            </div>

     
                       
                                        </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="button" class="btn dark" id="btn-importar-dados" >
                                                     <i class="fa fa fa-automobile"></i> Adicionar
                                                     </button>
                                                    <button type="button" id="btn-limpar-dados" class="btn default">Limpar</button>
                                                    <input type="hidden" id="acao" value="<?php echo $loAcao; ?>" /> 
                                                    <input type="hidden" id="id" value="<?php echo $loId; ?>" />
                                                    <input type="hidden" id="id-menu" value="<?php echo $IdMenu; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->

                            </div><!--<div class="col-md-6 ">-->
                    
                    </div>


                     <!-- Fim -->


                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->






            </div>
            <!-- END CONTENT -->
           




        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
      
        <!-- BEGIN INNER FOOTER -->
        <?php include("../../comum/apresentacao/rodape.php"); ?>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->



        <!-- scripts BEGIN -->
        <?php include("../../comum/apresentacao/scripts.php"); ?>

       <script src="../../../assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script src="../../../assets/global/plugins/jquery.input-ip-address-control-1.0.min.js" type="text/javascript"></script>

        <script src="js/importacao.js" type="text/javascript"></script>
        <script src="../../comum/js/comum.js" type="text/javascript"></script>
        <script src="../../comum/js/form-input-mask.js" type="text/javascript"></script>

        <!-- SCRIPTS PARA EXIBIR MODAL -->   
        <script src="../../../assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>

        <script src="../../../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../../../assets/pages/scripts/table-datatables-managed.js" type="text/javascript"></script>

        <!-- scripts END -->



    </body>

</html>