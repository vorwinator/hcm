                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Dodaj usługę > Artneo Sp. z o.o.
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Wybrany klient</b></center>
                        <?php echo form_open('client/add_service_details'); ?>
                        <table id="client" class="display" style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Nazwa</th>
                                <th>Lokalizacja</th>
                                <th>NIP</th>
                                <th>Numer telefonu</th>
                                <th>Pracownik</th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $_SESSION['id_client'];?></td>
                                    <td><?php echo $_SESSION['email'];?></td>
                                    <td><?php echo $_SESSION['name'];?></td>
                                    <td><?php echo $_SESSION['localisation'];?></td>
                                    <td><?php echo $_SESSION['NIP'];?></td>
                                    <td><?php echo $_SESSION['phone_number'];?></td>
                                    <td><?php echo $_SESSION['id_manager'];?></td>
                                </tr> 
                            </tbody>
                        </table>

                        <center><b>Wybrana zakupiona usługa</b></center>
                        
                        <table id="serviceDetailsPage" class="display" style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Rodzaj</th>
                                <th>Cena</th>
                                <th>Jednostka</th>
                                <th>Nazwa</th>
                            </thead>

                            <tbody>
                                <tr>
                                    <?php
                                            $_SESSION['id_service'] = $service['id_service'];
                                            $_SESSION['type'] = $service['type'];;
                                            $_SESSION['price'] = $service['price'];
                                            $_SESSION['price_type'] = $service['price_type'];
                                            $_SESSION['name'] = $service['name'];
                                    ?>
                                    <td><?php echo $_SESSION['id_service'];?></td>
                                    <td><?php echo $_SESSION['type'];?></td>
                                    <td><?php echo $_SESSION['price'];?></td>
                                    <td><?php echo $_SESSION['price_type'];?></td>
                                    <td><?php echo $_SESSION['name'];?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center align-items-center mt-2">
                        <center><b>Dodaj szczegóły usługi</b></center>
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Cena</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('price', set_value('price'), "placeholder='Cena' class='form-control'");
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-2">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Termin rozpoczęcia usługi</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('service_start_date', set_value('service_start_date'), "placeholder='YYYY-MM-DD' class='form-control'");
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-2">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Termin zakończenia usługi</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('service_end_date', set_value('service_end_date'), "placeholder='YYYY-MM-DD' class='form-control'");
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-2">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Termin płatności</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('payment_date', set_value('payment_date'), "placeholder='YYYY-MM-DD' class='form-control'");
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-2">
                        <div class="col-4 col-md-3 col-lg-2">
                            <label class="col-form-label">Termin płacenia usługi</label>
                        </div>
                        <div class="col-8 col-sm-6 col-md-4 col-lg-5">
                            <?php
                                echo form_input('payment_deadline', set_value('payment_deadline'), "placeholder='YYYY-MM-DD' class='form-control'");
                            ?>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-4 ">
                        <div class="col-6 text-center">
                            <?php
                                echo form_submit('submit', "Zatwierdź dane","class='btn backgroundText' style='width:150px'");
                            ?>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>