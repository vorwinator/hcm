                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Edytuj > <?php echo $client['name'] ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('client/update'); ?>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputId" class="col-form-label">Id</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['id_client'];
                                    echo form_input('id_client', $var, "placeholder='$var' readonly class='form-control' id='inputId' ");
                                ?>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputEmail" class="col-form-label">Email</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['email'];
                                    echo form_input('email', $var, "placeholder='$var' class='form-control' id='inputEmail' ");
                                ?> 
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputName" class="col-form-label">Nazwa</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['name'];
                                    echo form_input('name', $var, "placeholder='$var' class='form-control' id='inputName' ");
                                ?>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputAdress" class="col-form-label">Adres</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['localisation'];
                                    echo form_input('localisation', $var, "placeholder='$var' class='form-control' id='inputAdress' ");
                                ?>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputNIP" class="col-form-label">NIP</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['NIP'];
                                    echo form_input('NIP', $var, "placeholder='$var' class='form-control' id='inputNIP' ");
                                ?>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center mt-3 mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputPhoneNumber" class="col-form-label">Numer telefonu</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['phone_number'];
                                    echo form_input('phone_number', $var, "placeholder='$var' class='form-control' id='inputPhoneNumber' ");
                                ?>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-3 mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label for="inputManagerNumber" class="col-form-label">Numer menadżera</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$client['id_manager'];
                                    echo form_input('id_manager', $var, "placeholder='$var' class='form-control' id='inputManagerNumber' ");
                                ?>
                            </div>
                        </div>

                        <div class="row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                            <div class="col-6 text-center">
                                <?php
                                    echo form_submit('submit', "Zatwierdź zmiany","class='btn backgroundText' style='width:150px'");
                                ?>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center mt-4 ">
                        <div class="col-6 text-center">
                        <a class=" pt-1 pb-1 ps-3 pe-3 submitButton btn backgroundText" href=<?php echo site_url('client/add_service?id_client='.$client['id_client']);?>>Dodaj usługę</a>
                        </div>
                    </div>
                </div>  
            </div>