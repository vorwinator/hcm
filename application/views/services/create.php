                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi>Dodaj usługę
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('services/create');?>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Rodzaj usługi</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('type', set_value('type'), "placeholder='Rodzaj usługi' class='form-control'");
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

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Cena</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('price', set_value('price'), "placeholder='Cena' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('price'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Cena za</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $options = array(
                                    'miesiąc' => 'miesiąc',
                                    'rok' => 'rok'
                                );
                                echo form_dropdown('price_type', $options);
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('price_type');?>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', "Stwórz usługę", "class='addServiceButton btn btn-primary' style='width:150px'");
                            ?>

                            <?php echo form_close()?>
                        </div>
                    </div>
                </div>  
            </div>