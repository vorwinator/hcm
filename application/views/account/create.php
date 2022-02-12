                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Konto > Dodaj konto
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                    <?php echo form_open('account/create');?>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('email', set_value('email'), "placeholder='Email' class='form-control'");
                                ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('email'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Imie</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('firstname', set_value('firstname'), "placeholder='Imie' class='form-control'");
                                ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('firstname'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Nazwisko</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('lastname', set_value('lastname'), "placeholder='Nazwisko' class='form-control'");
                                ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('lastname'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Hasło</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_password('password','',"placeholder='Hasło' class='form-control'");
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('password'); ?><br/>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Powtórz hasło</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_password('password2','',"placeholder='Powtórz hasło' class='form-control'");
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('password2'); ?><br/>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', "Stwórz konto", "class=' btn backgroundText' style='width:150px'");

                            ?>
                        </div>
                    </div>
                </div>  
            </div>