<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('/assets/style.css'); ?>">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script>
            <?php if(isset($success)) { ?>
                function successWindow(message) {
                    alert(message);
                }
            <?php } ?>
            function alertWindow() {
                    successWindow("<?php if(isset($success)) echo $success ?>");
                }
        </script>
    </head>


    <body onload=alertWindow()>
        <div class="bodyWrap">

            <div class="contentWrap">
                <div class="container-fluid mt-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12 align-self-center  offset-lg-1 offset-md-1 offset-sm-1 mb-3 mb-sm-0 mb-md-0 md-l-0">
                            <img class="banerImage" src="<?php echo base_url('/assets/media/artneoLogo.svg'); ?>">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 col-6  align-self-center text-center  offset-lg-2 offset-md-2  offset-sm-2">
                            Zalogowano jako<br/>
                            <?php 
                                if(isset($_SESSION['id_acc']))
                                    echo $_SESSION['firstname']
                            ?>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-6 align-self-center text-center">
                            <a class="btn backgroundText mt-1" href=<?php echo site_url('authentication/logout')?>>Wyloguj</a>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row navigationBar justify-content-start justify-content-sm-around">
                        <div class="col-3 col-sm-2 menuSection align-self-center alignTextCenter ml-0">
                            <button class="btn dropdown-toggle menuButton" type="button" id="clientMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Klienci
                            </button>
                            <div class="dropdown-menu" aria-labelledby="clientMenuButton">
                                <a class="dropdown-item" href=<?php echo site_url('client');?>>Lista klientów</a>
                                <a class="dropdown-item" href=<?php echo site_url('client/my_clients');?>>Moi klienci</a>
                                <a class="dropdown-item" href=<?php echo site_url('client/create');?>>Dodaj klienta</a>
                            </div>
                        </div>

                        <div class="col-3 col-sm-2 menuSection align-self-center alignTextCenter">
                            <button class="btn dropdown-toggle menuButton" type="button" id="servicesMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Usługi
                            </button>
                            <div class="dropdown-menu" aria-labelledby="servicesMenuButton">
                                <a class="dropdown-item" href=<?php echo site_url('services');?>>Lista usług</a>
                                <a class="dropdown-item" href=<?php echo site_url('services/domain');?>>Lista domen</a>
                                <a class="dropdown-item" href=<?php echo site_url('services/hosting');?>>Lista hostingów</a>
                                <a class="dropdown-item" href=<?php echo site_url('services/certificate');?>>Lista certyfikatów</a>
                                <a class="dropdown-item" href=<?php echo site_url('services/purchased_services');?>>Lista zakupionych usług</a>
                            </div>
                        </div>

                        <div class="col-3 col-sm-2 menuSection align-self-center alignTextCenter">
                            <button class="btn dropdown-toggle menuButton alignTextCenter" type="button" id="accountMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Konto
                            </button>
                            <div class="dropdown-menu dropdown-menu-right " aria-labelledby="accountMenuButton">
                                <a class="dropdown-item" href=<?php echo site_url('account/create');?>>Dodaj nowe konto</a>
                                <a class="dropdown-item" href=<?php echo site_url('account');?>>Lista kont</a>
                                <a class="dropdown-item" href=<?php echo site_url('account/change_password');?>>Zmień hasło</a>
                                <a class="dropdown-item" href=<?php echo site_url('account/update?id_acc='.$_SESSION['id_acc']);?>>Edytuj konto</a>
                            </div>
                        </div>
                    </div>
                </div>