                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Konto > Edytuj > <?php echo $account['email'] ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php 
                        echo form_open('account/update'); 
                    ?>
                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">ID</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$account['id_acc'];
                                    echo form_input('id_acc', $var, "placeholder='$var' readonly class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center text-center">
                            <?php echo form_error('id_acc'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Email</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$account['email'];
                                    echo form_input('email', $var, "placeholder='$var' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center text-center">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Imię</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$account['firstname'];
                                    echo form_input('firstname', $var, "placeholder='$var' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center text-center">
                            <?php echo form_error('firstname'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Nazwisko</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$account['lastname'];
                                    echo form_input('lastname', $var, "placeholder='$var' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center text-center">
                            <?php echo form_error('lastname'); ?>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', "Zatwierdź zmiany", "class='btn backgroundText' style='width:150px'");
                            ?>
                        </div>
                    </div>
                </div>  
            </div>