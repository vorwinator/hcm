<div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Edytuj domenę > ID domeny: <?php echo $domain['id_domain'] ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('services/update_domain'); ?>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Id domeny</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                             <?php
                                $var=$domain['id_domain'];
                                echo form_input('id_domain', $var, "placeholder='$var' readonly class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('id_domain'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">URL</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['url'];
                                echo form_input('url', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('url'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Nazwa</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['name'];
                                echo form_input('name', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('name'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Korzeń domeny</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['domain_root'];
                                echo form_input('domain_root', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('domain_root'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Wersja PHP</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['php_version'];
                                echo form_input('php_version', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('php_version'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Liczba kont pocztowych</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['number_of_email_acc'];
                                echo form_input('number_of_email_acc', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('number_of_email_acc'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Liczba kont pocztowych</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['number_of_email_acc'];
                                echo form_input('number_of_email_acc', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('number_of_email_acc'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Pojemność poczty</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['mail_limit_MB'];
                                echo form_input('mail_limit_MB', $var, "placeholder='$var' class='form-control'");
                            ?>

                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('mail_limit_MB'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Zajętość poczty</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$domain['mail_occupied_MB'];
                                echo form_input('mail_occupied_MB', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('mail_occupied_MB'); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', "Zatwierdź zmiany", "class='btn backgroundText' style='width:150px'");
                                echo form_close()?>
                        </div>
                    </div>
                </div>  
            </div>