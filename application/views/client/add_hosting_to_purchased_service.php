                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Szczegóły hostingu > <?php if($_SESSION['id_pur_serv']!=null)echo "ID usługi hostingowej: ".$_SESSION['id_pur_serv']?> > Dodaj hosting
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <?php echo form_open('client/add_hosting_to_purchased_service'); ?>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">ID zakupionej usługi</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    $var=$_SESSION['id_pur_serv'];
                                    echo form_input('id_pur_serv', $var, "placeholder='$var' readonly class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('id_pur_serv'); ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Nazwa</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('name', set_value('name'), "placeholder=Nazwa class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('name'); ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Opis</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_textarea('description', set_value('description'), "placeholder=Opis class='form-control' style='height:33px'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('description'); ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Pojemność</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('capacity_MB', set_value('capacity_MB'), "placeholder=Pojemność class='form-control'");
                                ?>
                            </div>
                        </div>
                        <div class="row justify-content-end align-items-center mt-1">
                            <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                                <?php echo form_error('capacity_MB'); ?>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                            <div class="col-4 col-md-3 col-lg-2">
                                <label class="col-form-label">Zajętość</label>
                            </div>
                            <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                                <?php
                                    echo form_input('occupied_MB', set_value('occupied_MB'), "placeholder=Zajętość class='form-control'");
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
                                    echo form_submit('submit', "Dodaj hosting","class='btn backgroundText' style='width:150px'");
                                ?>
                            </div>
                        </div>
                    </form>
                </div> 