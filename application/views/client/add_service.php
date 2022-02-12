                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Dodaj usługę > Artneo Sp. z o.o. 
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center align-items-center">
                        Wybrany klient
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
                            <?php
                                $_SESSION['id_client']=$client['id_client'];
                                $_SESSION['email']=$client['email'];
                                $_SESSION['name']=$client['name'];
                                $_SESSION['localisation']=$client['localisation'];
                                $_SESSION['NIP']=$client['NIP'];
                                $_SESSION['phone_number']=$client['phone_number'];
                                $_SESSION['id_manager']=$client['id_manager'];
                                ?>
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
                    </div>

                    <div class="row justify-content-center align-items-center">
                        <table id="servicesToBuy" class="display"  style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Rodzaj</th>
                                <th>Cena</th>
                                <th>Jednostka</th>
                                <th>Nazwa</th>
                                <th>Opcje</th>
                            </thead>

                            <tbody>
                                <?php foreach($services as $service):?>
                                    <tr>
                                        <td><?php echo $service['id_service'];?></td>
                                        <td><?php echo $service['type'];?></td>
                                        <td><?php echo $service['price'];?></td>
                                        <td><?php echo $service['price_type'];?></td>
                                        <td><?php echo $service['name'];?></td>
                                        <td>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/add_service_details?id_service='.$service['id_service']);?>>Wybierz</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>