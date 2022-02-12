                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Szczegóły hostingu > <?php if($service['name_s']!=null)echo $service['name_s']?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Wybrana zakupiona usługa</b></center>
                        <table id="purchasedService" class="display" style="width:98%">
                            <thead>
                                <th>ID zakupionej usługi</th>
                                <th>Rodzaj</th>
                                <th>Nazwa</th>
                                <th>Data rozpoczęcia funkcjonowania usługi</th>
                                <th>Data zakończenia funkcjonowania usługi</th>
                                <th>Cena</th>
                                <th>Data płatności</th>
                                <th>Termin płatności</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php
                                        echo $service['id_pur_serv'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['type'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['name_s'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['service_start_date'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['service_end_date'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['price_ps'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['payment_date'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $service['payment_deadline'];
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center">
                            <a class="btn backgroundText mt-1 text-center" style="width:150px" href=<?php echo site_url('client/add_hosting_to_purchased_service');?>>Dodaj hosting</a>
                    </div>
                    <center><b>Hosting</b></center>
                    <div class="row justify-content-center">
                        <table id="hosting" class="display" style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Nazwa</th>
                                <th>Opis</th>
                                <th>Pojemność</th>
                                <th>Zajętość</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>
                                <?php foreach($hostings as $hosting): ?>
                                    <tr>
                                        <td>
                                            <?php
                                                echo $hosting['id_hosting'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $hosting['name'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $hosting['description'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $hosting['capacity_MB'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $hosting['occupied_MB'];
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn backgroundText mt-1"href=<?php echo site_url('services/update_hosting?id_hosting_edit='.$hosting['id_hosting']);?>>Edytuj</a>
                                            <a class="btn backgroundText mt-1"href=<?php echo site_url('client/hosting_details?hosting_delete='.$hosting['id_hosting']);?> onclick="return confirm('Usunięcie tego hostingu spowoduje usunięcie przypisanych do niego domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                            <a class="btn backgroundText mt-1"href=<?php echo site_url('client/hosting_domains?hosting_id='.$hosting['id_hosting']);?>>Lista Domen</a>
                                        </td>
                                    </tr>
                                    
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>