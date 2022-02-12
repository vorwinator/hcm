                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Edytuj certyfikat > ID certyfikatu: <?php echo $certificate['id_certificate'] ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('services/update_certificate'); ?>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Id</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                             <?php
                                $var=$certificate['id_certificate'];
                                echo form_input('id_certificate', $var, "placeholder='$var' readonly class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('id_certificate'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Rodzaj</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$certificate['type'];
                                echo form_input('type', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('type'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Data wystawienia</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$certificate['issue_date'];
                                echo form_input('issue_date', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('issue_date'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Data końca ważności</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$certificate['expire_date'];
                                echo form_input('expire_date', $var, "placeholder='$var' class='form-control'");
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
                                echo form_submit('submit', "Zatwierdź zmiany", "class='btn backgroundText' style='width:150px'");
                                echo form_close()?>
                        </div>
                    </div>
                </div>  
            </div>