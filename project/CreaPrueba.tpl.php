<?php
//require('includes/configuration/prepend.inc.php');
$strPageTitle = QApplication::Translate('Crea Prueba');
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

    .formato_a4 {
        width: 595px;
        height: 842px;

        /*595 x 842*/
    }
</style>


<?php $this->RenderBegin() ?>

<!-- Start content -->
<div class="content" style="margin-bottom: 70px">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row" style="margin-top: 90px; ">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Bienvenido(a) !</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="#">Minton</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Creación de la prueba</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        <!--Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.-->
                    </p>

                    <!--<form id="basic-form" action="#">-->
                    <div role="application" class="wizard clearfix" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li id="li_paso_0"  role="tab" class="first current" aria-disabled="false" aria-selected="true"><a  onclick="return false;" id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Estructura Previa</a></li><li role="tab" id="li_paso_1" class="disabled" aria-disabled="true"><a  onclick="return false;" id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Diseño de la Prueba</a></li><li role="tab" id="li_paso_2" class="disabled" aria-disabled="true"><a onclick="return false;" id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Hints</a></li><li role="tab" id="li_paso_3" class="disabled last" aria-disabled="true"><a  onclick="return false;" id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                            <h3 id="steps-uid-0-h-0" tabindex="-1" class="title current">Account</h3>
                            <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">

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
                                    <label class="col-md-10 header-title">Número aproximado de preguntas:</label>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" name="txt_numero_preguntas" value="10">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-10 header-title">Número  aproximado de alternativas:</label>
                                    <div class="col-md-2">
                                        <input class="form-control" type="number" name="txt_numero_alternativas" value="5">
                                    </div>
                                </div>



                            </section>
                            <h3 id="steps-uid-0-h-1" tabindex="-1" class="title">Profilesfsdfsd</h3>
                            <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">

                                <div class="row formato_a4" id="div_preview" >

                                    <div class="col-lg-12">


                                        <table id="table_cabecera" class="table-bordered" style="width: 100%" >
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4">PRACTICA CALIFICADA DE LENGUAJE</td>
                                                <td colspan="2"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">Nombres y Apellidos:</td>
                                                <td colspan="4">                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <td rowspan="2" colspan="2">notaaaaaaaaaaa</td>
                                            </tr>
                                            <tr>
                                                <td>Grado:</td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <td>Sección:</td>
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                <td>Fecha:</td>
                                                <td>            </td>
                                                <td>Fecha:</td>
                                                <td>            </td>
                                            </tr>
                                            <tr>
                                                <td colspan="7">________________________________________________________________________________________________</td>
                                            </tr>
                                        </table>






                                        <table border=0 cellpadding=0 cellspacing=0 class="table-bordered" style="width: 100%">

                                            <tr height=20 >
                                                <td width=34 style='width:26pt'></td>                                                
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                                <td width=34 style='width:26pt'></td>
                                            </tr>
                                            <tr height=60 >
                                                <td colspan=2  rowspan=3 width=68 >&nbsp;</td>
                                                <td colspan=12 rowspan=3 width=408 >EXAMEN DE COMUNICACION</td>
                                                <td colspan=2  rowspan=3 width=68 >&nbsp;</td>
                                            </tr>

                                            <tr height=20 >
                                                <td colspan=4 height=20 >Nombre y Apelllidos</td>
                                                <td colspan=12 class=xl66 style='border-left:none'>&nbsp;</td>
                                            </tr>
                                            <tr height=20 style='height:15.0pt'>
                                                <td colspan=2 height=20 class=xl66 style='height:15.0pt'>Grado:</td>
                                                <td colspan=4 class=xl66 style='border-left:none'>&nbsp;</td>
                                                <td colspan=2 class=xl66 style='border-left:none'>seccion</td>
                                                <td colspan=3 class=xl66 style='border-left:none'>&nbsp;</td>
                                                <td colspan=2 class=xl66 style='border-left:none'>fecha</td>
                                                <td colspan=3 class=xl66 style='border-left:none'>&nbsp;</td>
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




                            </section>
                            <h3 id="steps-uid-0-h-2" tabindex="-1" class="title">Hints</h3>
                            <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <ul class="list-unstyled w-list">
                                            <li><b>First Name :</b> Jonathan </li>
                                            <li><b>Last Name :</b> Smith </li>
                                            <li><b>Emial:</b> jonathan@smith.com</li>
                                            <li><b>Address:</b> 123 Your City, Cityname. </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <h3 id="steps-uid-0-h-3" tabindex="-1" class="title">Finish</h3>
                            <section id="steps-uid-0-p-3" role="tabpanel" aria-labelledby="steps-uid-0-h-3" class="body" aria-hidden="true" style="display: none;">
                                <div class="form-group clearfix">
                                    <div class="col-lg-12">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox-h" type="checkbox">
                                            <label for="checkbox-h">
                                                I agree with the Terms and Conditions.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" id="li_anterior_wizard" aria-disabled="true"><a  href="#previous" role="menuitem">Anterior</a></li><li id="li_siguiente_wizard" aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li id="li_final_wizard" aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                    <!--</form>-->

                </div>
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
//                var column_num = parseInt(td.index()) + 1;
//                var row_num = parseInt(td.parent().index()) + 1;
                var html = td.html();
                var newHtml = '<input id="input_editando"  type="text" value="' + html + '" style="width:' + (td.width() - 2) + 'px">';
                td.width(td.width());
                td.html(newHtml);
                td.addClass("editando");
                cargaEventos();
            }
        });

        //REESCRIBIENDO EL PAGINADOR DEL WIZART (NO FUNCIONA EL DEL TEMPLATE)
        var faseActual = 0;
        $("#li_anterior_wizard , #li_siguiente_wizard").click(function () {

            event.preventDefault();

            var tabs = $("li[id^='li_paso_']");
            var faseNueva = 0;
            var href = $(this).children("a").attr('href');

            if (href == "#next") {
                faseNueva = faseActual + 1;
            } else if (href == "#previous") {
                faseNueva = faseActual - 1;
            }

            if (faseNueva >= 0 && faseNueva < tabs.length) {

                var tab = $("#li_paso_" + (faseActual));
                var titulo = $("#steps-uid-0-h-" + (faseActual));
                var contenido = $("#steps-uid-0-p-" + (faseActual));

                var tabNuevo = $("#li_paso_" + (faseNueva));
                var tituloNuevo = $("#steps-uid-0-h-" + (faseNueva));
                var contenidoNuevo = $("#steps-uid-0-p-" + (faseNueva));

                tab.removeClass("current").addClass("done");
                titulo.removeClass("current");
                contenido.removeClass("current").hide();

                tabNuevo.removeClass("disabled done").addClass("current");
                tituloNuevo.addClass("current");
                contenidoNuevo.addClass("current").show();

                faseActual = faseNueva;

                if (faseNueva == 1) {
                    creaEstructuraPrueba();
                }
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

    function creaEstructuraPrueba() {
//        CABECERA
        var htmlTablaCebecera = '';



        var htmlTablaCebecera = '<table id="table_cabecera" class="table-bordered" style="width: 100%" >' +
                '                                            <tr>' +
                '                                                <td colspan="7"><br><br>PRACTICA CALIFICADA DE LENGUAJE<br></td>' +
                '                                            </tr>' +
                '                                            <tr>' +
                '                                                <td colspan="2">Nombres y Apellidos:</td>' +
                '                                                <td colspan="4">                                                                         </td>' +
                '                                                <td rowspan="2">notaaaaaaaaaaa</td>' +
                '                                            </tr>' +
                '                                            <tr>' +
                '                                                <td>Grado:</td>' +
                '                                                <td>                  </td>' +
                '                                                <td>Sección:</td>' +
                '                                                <td>          </td>' +
                '                                                <td>Fecha:</td>' +
                '                                                <td>            </td>' +
                '                                            </tr>' +
                '                                            <tr>' +
                '                                                <td colspan="7">________________________________________________________________________________________________</td>' +
                '                                            </tr>' +
                '                                        </table>';


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
