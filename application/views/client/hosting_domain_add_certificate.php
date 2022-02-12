                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Szczegóły hostingu > <?php if($_SESSION['id_domain']!=null)echo "ID domeny: ".$_SESSION['id_domain']?> > Dodaj certyfikat
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('client/hosting_domain_add_certificate');?>
                    <div class="row justify-content-center align-items-center">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Domain ID</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('id_domain', $_SESSION['id_domain'], 'placeholder="Domain ID" readonly class="form-control"');
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-1">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Rodzaj certyfikatu</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('type', set_value('type'), 'placeholder="Rodzaj certyfikatu" class="form-control"');
                            ?>  
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('type'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-1">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Data wystawienia</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('issue_date', set_value('issue_date'), 'placeholder="YYYY-MM-DD" class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('issue_date'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-1">
                        
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label ">Data końca ważności</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5 align-self-center">
                            <?php
                                echo form_input('expire_date',set_value('expire_date'), 'placeholder="YYYY-MM-DD" class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('expire_date'); ?>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', 'Dodaj certyfikat',"class='btn backgroundText' style='width:150px'");
                            ?>
                        </div>
                    </div>
                </div>  
            </div>