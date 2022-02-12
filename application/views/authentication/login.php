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
                            
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-6 align-self-center text-center">
                            
                        </div>
                    </div>
                    
                </div>
                <div class="container-fluid">
                    <div class="row locationBanerLogin">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Zaloguj się
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    
                    <div class="container-fluid mt-4" class="main">
                        <?php 
                            echo form_open('authentication/login'); 
                        ?>
                        <div class="row justify-content-center align-items-center ">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <input type="text" class='form-control' name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('email'); ?>
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center mt-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Haslo</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <input type="password" class='form-control'  name="password" placeholder="Haslo">
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('password'); ?>
                            </div>
                        </div>

                        <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                            <div class="col-6 text-center">
                                <input type="submit" name="submit" value="Zaloguj" style='width:150px' class='btn backgroundText mt-1'/>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>
                <footer class="text-center text-white">
                    <div class="text-center p-3" >
                        © 2021 Copyright:
                        <a class="text-white" href="https://www.artneo.pl/">Artneo Sp. z o.o.</a>
                    </div>
                </footer>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.25/af-2.3.7/b-1.7.1/b-colvis-1.7.1/b-html5-1.7.1/b-print-1.7.1/cr-1.5.4/date-1.1.0/fc-3.3.3/fh-3.1.9/kt-2.6.2/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.4/sb-1.1.0/sp-1.3.0/sl-1.3.3/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('/assets/dataTablesScript.js'); ?>"></script>
    </body>
</html>