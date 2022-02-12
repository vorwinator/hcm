                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Szczegóły zakupionej usługi > <?php if($service['name_s']!=null)echo $service['name_s']?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Wybrany klient</b></center>
                        <table id="client" class="display" style="width:98%">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>email</td>
                                    <td>Nazwa</td>
                                    <td>Adres</td>
                                    <td>NIP</td>
                                    <td>Numer telefonu</td>
                                    <td>Numer managera</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $_SESSION['id_client'];?></td>
                                    <td><?php echo $_SESSION['email_client'];?></td>
                                    <td><?php echo $_SESSION['name_client'];?></td>
                                    <td><?php echo $_SESSION['localisation'];?></td>
                                    <td><?php echo $_SESSION['NIP'];?></td>
                                    <td><?php echo $_SESSION['phone_number'];?></td>
                                    <td><?php echo $_SESSION['id_manager'];?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php
                        if($service['id_pur_serv']!=null) {
                            $_SESSION['id_pur_serv'] = $service['id_pur_serv'];
                        }
                        echo form_open('client/pur_serv_details'); 
                    ?>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Id</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['id_pur_serv'];
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
                            <label class="col-form-label">Rodzaj</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['type'];
                                echo form_input('type', $var, "placeholder='$var' readonly class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('type'); ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Nazwa</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['name_s'];
                                echo form_input('name', $var, "placeholder='$var' readonly class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('name_pur_serv'); ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Data rozpoczęcia funkcjonowania usługi</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['service_start_date'];
                                echo form_input('service_start_date', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('service_start_date'); ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Data zakończenia funkcjonowania usługi</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['service_end_date'];
                                echo form_input('service_end_date', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('service_end_date'); ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Cena</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['price_ps'];
                                echo form_input('price', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('price'); ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Data płatności</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['payment_date'];
                                echo form_input('payment_date', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('payment_date'); ?>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center mt-4  mt-sm-3 mt-md-3 align-items-center">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Termin płatności</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                $var=$service['payment_deadline'];
                                echo form_input('payment_deadline', $var, "placeholder='$var' class='form-control'");
                            ?>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-center mt-1">
                        <div class="col-8 col-sm-6 col-md-6 col-lg-6 align-self-center">
                            <?php echo form_error('payment_deadline'); ?>
                        </div>
                    </div>

                    <div class="form-group row mt-2 mt-sm-3 mt-md-3 justify-content-center">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', 'Zatwierdź zmiany',"class='btn backgroundText' style='width:150px'");
                            ?>
                        </div>
                    </div>

                    </form>

                    <div class="row justify-content-center mt-4 ">
                        <div class="col-6 text-center">
                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/pur_serv_details?id_pur_serv_delete='.$_SESSION['id_pur_serv']);?> onclick="return confirm('Usunięcie tej usługi spowoduje usunięcie przypisanych do niej hostingów, domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń zakupioną usługę</a>
                        </div>
                    </div>

                    <?php
                        if($service['type']=='Hosting' || $service['type']=='hosting'){
                    ?>
                    <div class="row justify-content-center mt-4 text-center">
                        <a style="width:150px" class="btn backgroundText mt-1" href=<?php echo site_url('client/hosting_details?id_pur_serv='.$_SESSION['id_pur_serv']);?>>Szczegóły hostingu</a>
                    </div>
                    <?php
                        }
                    ?>
                </div>  
            </div>