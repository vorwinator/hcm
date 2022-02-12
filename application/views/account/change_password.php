<div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Konto > Zmiana hasła 
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <?php
                            echo form_open('account/change_password'); 
                        ?>
                        <div class="row justify-content-center">
                            <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <label class="col-form-label">Aktualne hasło</label>
                                </div>
                                <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                    <?php
                                        echo form_password('pass', set_value('pass'), "placeholder='Aktualne hasło' class='form-control'");
                                    ?> 
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('pass'); ?>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center">
                            <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <label class="col-form-label">Nowe hasło</label>
                                </div>
                                <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                    <?php
                                        echo form_password('password','', "placeholder='Nowe hasło' class='form-control'");
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('password'); ?>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <label class="col-form-label">Powtórz hasło</label>
                                </div>
                                <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                    <?php
                                        echo form_password('password2','', "placeholder='Powtórz hasło' class='form-control'");
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('password2'); ?>
                            </div>
                        </div>

                        <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                            <div class="col-6 text-center">
                                <?php
                                    echo form_submit('submit', "Zmień hasło", "class='btn backgroundText' style='width:150px'");
                                ?>
                            </div>
                        </div>
                    </div>  
                </div>