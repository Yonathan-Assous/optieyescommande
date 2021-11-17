<?php
include_once('header.php');
?>

<div class="wrapper-page login-page">
    <div id="login-page-flex">
        <div class="section-login" style="width: 100%; ">
            <div id="div-image" class="text-center div-image" style="background-color: #fbca353b;width: 100%;">
                <div class="login-page logo">
                    <img id="logo-optieyes" src="/static/img/logo.png" style="width: 18%;">
                </div>
            </div>
            <div id="card-box" class="m-t-30 card-box new-design" style="max-width: 1000px;">
                <div class="panel-body" id="panel-body">
                    <div id="registerForm" class="form-horizontal m-t-10">
                        <p style="text-align: center;">Votre inscription a bien été prise en compte, vos informations de connexion vous ont été transmises par mail</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center" style="margin-top:-20px; margin-bottom: 20px;">
                    <p class="text-muted"><span class="client-status">Déjà client ?</span>
                        <a href="../" id="register_link" class="text-warning m-l-5" rel="login"><b>Connectez-vous</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background: #fff;
        font-size: 0px;
    }

    .new-design {
        font-family: 'Roboto Condensed';
        letter-spacing: 1px;
        font-size: 15px;
    }

    input {
        letter-spacing: 1px;
        font-size: 15px;
        font-family: 'FontAwesome';
    }

    .client-status, #register_link {
        font-size: 14px;
    }

    @media screen and (min-width: 993px) {
        .card-box.new-design {
            margin-top: 190px !important;
        }
    }

    @media screen and (max-width: 992px) {
        .col-lg-6>input {
            border: solid #999 1px;
        }
    }

    #registerForm {
        width: 100%;
        font-size: 30px;
        font-weight: bold;
    }
    .client-status, #register_link {
        font-size: 30px;
        font-weight: bold;
    }

    #panel-body {
        margin-top: 185px;
    }
</style>


