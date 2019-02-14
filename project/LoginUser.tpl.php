<?php
require(__CONFIGURATION__ . '/header.login.inc.php');
?>

<?php $this->RenderBegin() ?>


<!-- Start content -->

<div class="wrapper-page">

    <div class="text-center">
        <a href="index" class="logo-lg"><i class="mdi mdi-radar"></i> <span>SIGEPRU</span> </a>
    </div>

<!--    <form class="form-horizontal m-t-20" action="https://coderthemes.com/minton/blue/index.html">-->

        <div class="form-group row">
            <div class="col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-account"></i></span>
                    </div>
                    <!--<input class="form-control" type="text" required="" placeholder="Username">-->
                    <?php $this->txtEmail->Render(); ?>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="mdi mdi-radar"></i></span>
                    </div>
                    <!--<input class="form-control" type="password" required="" placeholder="Password">-->
                    <?php $this->txtPassword->Render(); ?>

                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-12">
                <div class="checkbox checkbox-primary">
                    <input id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup">
                        Remember me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group text-right m-t-20">
            <div class="col-xs-12">

                <!--<button class="btn btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In</button>-->
                <?php $this->btnLogin->Render(); ?>
            </div>
        </div>

        <div class="form-group row m-t-30">
            <div class="col-sm-7">
                <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your
                    password?</a>
            </div>
            <div class="col-sm-5 text-right">
                <a href="pages-register.html" class="text-muted">Create an account</a>
            </div>
        </div>
    <!--</form>-->
</div>

<!-- end content -->
<?php $this->RenderEnd() ?>
<?php require(__CONFIGURATION__ . '/footer.login.inc.php'); ?>
