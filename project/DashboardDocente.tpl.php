<?php
//require('includes/configuration/prepend.inc.php');
$strPageTitle = QApplication::Translate('Docente Dashboard');
require(__CONFIGURATION__ . '/header.inc.php');
?>


<style>
    td{
        cursor:pointer;
        background: -moz-linear-gradient(top, #ffffff, #D1E3E9);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ffffff), to(#D1E3E9));
        text-align:center;
    }

    td:hover{
        background: -moz-linear-gradient(top, #249ee4, #057cc0);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#249ee4), to(#057cc0));
    }

    td:active
    {
        background: -moz-linear-gradient(top, #057cc0, #249ee4);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#057cc0), to(#249ee4));
    }

    #result{
        font-weight:bold;
        font-size:16pt;
    }
</style>


<?php $this->RenderBegin() ?>

<!-- Start content -->
<div class="content">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row" style="margin-top: 90px;">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Welcome !</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="row" style="background-color: white">
            <!--<button class="btn btn-info">  </button>-->
            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">CREAR PRUEBA</button>

        </div>


        <div class="row" id="div_preview" style="background-color: white; width: 800px">

            <div class="col-lg-12">


                <table id="table_cabecera" class="table-bordered" style="width: 100%" >
                    <tr>
                        <th colspan="7"><br><br>PRACTICA CALIFICADA DE LENGUAJE<br></th>
                    </tr>
                    <tr>
                        <td colspan="2">Nombres y Apellidos:</td>
                        <td colspan="4">                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td rowspan="2">notaaaaaaaaaaa</td>
                    </tr>
                    <tr>
                        <td>Grado:</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>Sección:</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        <td>Fecha:</td>
                        <td>            </td>
                    </tr>
                    <tr>
                        <td colspan="7">________________________________________________________________________________________________</td>
                    </tr>
                </table>


            </div>


            <div class="col-lg-12">
                <table id="table_contenido" class="table-bordered" style="width: 100%">
                    <tr>
                        <td>1.-</td>
                        <td colspan="10">Debido a qué sustancia las hojas de las plantas tienen color verde.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a)</td>
                        <td>Clorofila</td>
                        <td>b)</td>
                        <td>Estambres</td>
                        <td>c)</td>
                        <td>Nectar</td>
                        <td>d)</td>
                        <td>Sabia</td>
                        <td>e)</td>
                        <td>No sé</td>
                    </tr>
                    <tr>
                        <td>2.-</td>
                        <td colspan="10">Debido a qué sustancia las hojas de las plantas tienen color verde.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a)</td>
                        <td>Clorofila</td>
                        <td>b)</td>
                        <td>Estambres</td>
                        <td>c)</td>
                        <td>Nectar</td>
                        <td>d)</td>
                        <td>Sabia</td>
                        <td>e)</td>
                        <td>No sé</td>
                    </tr>
                    <tr>
                        <td>3.-</td>
                        <td colspan="10">Debido a qué sustancia las hojas de las plantas tienen color verde.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a)</td>
                        <td>Clorofila</td>
                        <td>b)</td>
                        <td>Estambres</td>
                        <td>c)</td>
                        <td>Nectar</td>
                        <td>d)</td>
                        <td>Sabia</td>
                        <td>e)</td>
                        <td>No sé</td>
                    </tr>
                    <tr>
                        <td>4.-</td>
                        <td colspan="10">Debido a qué sustancia las hojas de las plantas tienen color verde.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a)</td>
                        <td>Clorofila</td>
                        <td>b)</td>
                        <td>Estambres</td>
                        <td>c)</td>
                        <td>Nectar</td>
                        <td>d)</td>
                        <td>Sabia</td>
                        <td>e)</td>
                        <td>No sé</td>
                    </tr>
                </table>

            </div>


        </div>



    </div>
    <!-- end container -->
</div>





<!--modals-->
<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title">Creando estructura de la práctica</h3>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-12">
                        <h5 class="header-title">Contenido de Encabezado:</h5>
                        <div class="mt-2">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ckb_nombres">
                                <label class="custom-control-label" for="ckb_nombres">Nombres y Apellidos</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ckb_fecha">
                                <label class="custom-control-label" for="ckb_fecha">Fecha</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ckb_grado">
                                <label class="custom-control-label" for="ckb_grado">Grado</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ckb_seccion">
                                <label class="custom-control-label" for="ckb_seccion">Sección</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="ckb_logo_ie">
                                <label class="custom-control-label" for="ckb_logo_ie">Logo de la I.E.</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 10px">
                    <div class="col-md-12">
                        <h5 class="header-title">Tipo de enumeración de las preguntas:</h5>
                        <div class="mt-2">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="rb_tipo_enumeracion1" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="rb_tipo_enumeracion1">Números decimales</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="rb_tipo_enumeracion2" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="rb_tipo_enumeracion2">Números romanos</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="rb_tipo_enumeracion3" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="rb_tipo_enumeracion3">Letras minúsculas</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="rb_tipo_enumeracion4" name="customRadio" class="custom-control-input">
                                <label class="custom-control-label" for="rb_tipo_enumeracion4">Letras mayúsculas</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-9 col-form-label">Número aproximado de preguntas:</label>
                    <div class="col-md-3">
                        <input class="form-control" type="number" name="txt_numero_preguntas" value="10">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-9 col-form-label">Número  aproximado de alternativas:</label>
                    <div class="col-md-3">
                        <input class="form-control" type="number" name="txt_numero_alternativas" value="5">
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>


<?php $this->RenderEnd() ?>


<script>
    $(document).ready(function () {
        $("#table_cabecera td, #table_contenido td").click(function () {

            var td = $(this);

            if (!td.hasClass("editando")) {
                var column_num = parseInt(td.index()) + 1;
                var row_num = parseInt(td.parent().index()) + 1;

                var html = td.html();
                var newHtml = '<input id="input_editando"  type="text" value="' + html + '" style="width:' + (td.width() - 2) + 'px">';
                td.width(td.width());
                td.html(newHtml);
                td.addClass("editando");
                cargaEventos();
            }
        });
    });

    function cargaEventos() {

        $("#input_editando").focus();
        $("#input_editando").blur(function () {

            var input = $(this);
            var td = input.parent();

            td.html(input.val());
            td.removeClass("editando")
        });
    }

</script>


<script>

    var numeroPregunta = 10;
    var numeroAlternativas = 5;
    var tipoEnumeracion = "decimal";
    var tieneNombre = true;
    var tieneFecha = true;
    var tieneSeccion = true;
    var tieneGrado = true;
    var tieneLogo = true;

    $(document).ready(function () {
//        alert("probando");



    });


</script>




<!-- end content -->
<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>
