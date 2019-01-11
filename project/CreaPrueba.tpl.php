<?php
//require('includes/configuration/prepend.inc.php');
$strPageTitle = QApplication::Translate('Crea Prueba');
require(__CONFIGURATION__ . '/header.inc.php');
?>


<style>
    /*    td{
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
        }*/
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















        <div class="row">
            <div class="col-md-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Basic Form Wizard</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                    </p>

                    <form id="basic-form" action="#">
                        <div role="application" class="wizard clearfix" id="steps-uid-0"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="steps-uid-0-t-0" href="#steps-uid-0-h-0" aria-controls="steps-uid-0-p-0"><span class="current-info audible">current step: </span><span class="number">1.</span> Account</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-1" href="#steps-uid-0-h-1" aria-controls="steps-uid-0-p-1"><span class="number">2.</span> Profile</a></li><li role="tab" class="disabled" aria-disabled="true"><a id="steps-uid-0-t-2" href="#steps-uid-0-h-2" aria-controls="steps-uid-0-p-2"><span class="number">3.</span> Hints</a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="steps-uid-0-t-3" href="#steps-uid-0-h-3" aria-controls="steps-uid-0-p-3"><span class="number">4.</span> Finish</a></li></ul></div><div class="content clearfix">
                                <h3 id="steps-uid-0-h-0" tabindex="-1" class="title current">Account</h3>
                                <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false">
                                    <div class="form-group clearfix">
                                        <label class="control-label " for="userName">User name *</label>
                                        <div class="">
                                            <input class="form-control required" id="userName" name="userName" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="control-label " for="password"> Password *</label>
                                        <div class="">
                                            <input id="password" name="password" type="text" class="required form-control">

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="confirm">Confirm Password *</label>
                                        <div class="">
                                            <input id="confirm" name="confirm" type="text" class="required form-control">
                                        </div>
                                    </div>

                                </section>
                                <h3 id="steps-uid-0-h-1" tabindex="-1" class="title">Profile</h3>
                                <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
                                    <div class="form-group clearfix">

                                        <label class="control-label" for="name"> First name *</label>
                                        <div class="">
                                            <input id="name" name="name" type="text" class="required form-control">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="control-label " for="surname"> Last name *</label>
                                        <div class="">
                                            <input id="surname" name="surname" type="text" class="required form-control">

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="email">Email *</label>
                                        <div class="">
                                            <input id="email" name="email" type="text" class="required email form-control">
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="control-label " for="address">Address *</label>
                                        <div class="">
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-lg-12 control-label ">(*) Mandatory</label>
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
                            </div><div class="actions clearfix"><ul role="menu" aria-label="Pagination"><li class="disabled" aria-disabled="true"><a href="#previous" role="menuitem">Previous</a></li><li aria-hidden="false" aria-disabled="false"><a href="#next" role="menuitem">Next</a></li><li aria-hidden="true" style="display: none;"><a href="#finish" role="menuitem">Finish</a></li></ul></div></div>
                    </form>

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
