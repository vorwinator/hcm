                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Szczegóły hostingu > <?php if($_SESSION['hosting_id']!=null)echo "ID hostingu: ".$_SESSION['hosting_id']?> > Dodaj domenę
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('client/hosting_add_domain');?>
                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Hosting ID</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('id_hosting', $_SESSION['hosting_id'], 'placeholder="Hosting ID" readonly class="form-control"');
                            ?>
                            <br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">URL</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('url', set_value('url'), 'placeholder="URL" class="form-control"');
                            ?>   
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('url'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Nazwa</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('name', set_value('name'), 'placeholder="Nazwa" class="form-control"');
                            ?>   
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('name'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Korzeń domeny</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('domain_root',set_value('domain_root'), 'placeholder="Korzeń domeny" class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('domain_root'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Wersja PHP</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('php_version',set_value('php_version'), 'placeholder="Wersja PHP" class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('php_version'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Liczba kont pocztowych</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('number_of_email_acc',set_value('number_of_email_acc'), 'placeholder="Liczba kont pocztowych" class="form-control"');
                            ?>
                            
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('number_of_email_acc'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Pojemność poczty</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('mail_limit_MB',set_value('mail_limit_MB'), 'placeholder="Pojemność poczty" class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('mail_limit_MB'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Zajętość poczty</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('mail_occupied_MB',set_value('mail_occupied_MB'), 'placeholder="Zajętość poczty" class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('mail_occupied_MB'); ?><br/>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', 'Stwórz domenę',"class='btn backgroundText mt-1' style='width:150px'");
                            ?>
                        </div>
                    </div>
                </div>  
            </div>