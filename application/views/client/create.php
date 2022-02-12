                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Dodaj nowego klienta
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('client/create'); ?>
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
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('email'); ?> 
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Nazwa</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('name', set_value('name'), "placeholder='Nazwa' class='form-control'");
                                ?>   
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('name'); ?> 
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Adres</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('adress', set_value('adress'), "placeholder='Adres' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('adress'); ?>  
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">NIP</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('NIP', set_value('NIP'), "placeholder='NIP' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('NIP'); ?>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Numer telefonu</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('phone_number', set_value('phone_number'), "placeholder='Numer telefonu' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('phone_number'); ?>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label" class="col-form-label">Numer managera</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('id_manager', set_value('id_manager'), "placeholder='Numer managera' class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center text-center">
                            <?php echo form_error('id_manager'); 
                                if(isset($manager_not_found))echo $manager_not_found."<br/>";
                            ?>
                        </div>

                        <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                            <?php
                                echo form_submit('submit', "Dodaj nowe konto", "class='addServiceButton btn backgroundText text-center' style='width:150px'");
                            ?>
                        </div>
                    </form>
                </div>  
            </div>