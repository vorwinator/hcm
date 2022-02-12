                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Edytuj hosting > ID hostingu: <?php echo $hosting['id_hosting'] ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('services/update_hosting'); ?>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Id hostingu</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                             <?php
                                $var=$hosting['id_hosting'];
                                echo form_input('id_hosting', $var, "placeholder='$var' readonly class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('id_hosting'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Nazwa</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$hosting['name'];
                                echo form_input('name', $var, "placeholder='$var' class='form-control'");
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
                            <label class="col-form-label">Opis</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$hosting['description'];
                                echo form_textarea('description', $var, "placeholder='$var' class='form-control'");
                            ?>

                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('description'); ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Pojemność</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$hosting['capacity_MB'];
                                echo form_input('capacity_MB', $var, "placeholder='$var' class='form-control'");
                            ?>

                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('capacity_MB'); ?>
                        </div>
                    </div>
                    
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Zajętość</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$hosting['occupied_MB'];
                                echo form_input('occupied_MB', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('occupied_MB'); ?>
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