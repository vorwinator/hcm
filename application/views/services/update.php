                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Edytuj > ID usługi: <?php echo $service['id_service'] ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('services/update'); ?>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Id</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                             <?php
                                $var=$service['id_service'];
                                echo form_input('id_service', $var, "placeholder='$var' readonly class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('id_service'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Rodzaj</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['type'];
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
                            <label class="col-form-label">Cena</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['price'];
                                echo form_input('price', $var, "placeholder='$var' class='form-control'");
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
                            <label class="col-form-label">Jednostka</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['price_type'];
                                $options = array(
                                    'miesiąc' => 'miesiąc',
                                    'rok' => 'rok'
                                );
                                echo form_dropdown('price_type', $options, $var);
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('price_type'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Nazwa</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['name'];
                                echo form_input('name', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('name'); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', "Zatwierdź zmiany", "class='btn backgroundText' style='width:150px'");
                            ?>
                            <?php echo form_close()?>
                        </div>
                    </div>
                </div>  
            </div>