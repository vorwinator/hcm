                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > <?php echo $_SESSION['name_client'] ?> > Szczegóły
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                
                    <div class="row justify-content-center">
                        <center><b>Wybrany klient</b></center>
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
                                    $_SESSION['id_client'] = $client['id_client'];
                                    $_SESSION['email_client'] = $client['email'];
                                    $_SESSION['name_client'] = $client['name'];
                                    $_SESSION['localisation'] = $client['localisation'];
                                    $_SESSION['NIP'] = $client['NIP']; 
                                    $_SESSION['phone_number'] = $client['phone_number']; 
                                    $_SESSION['id_manager'] = $client['id_manager']; 
                                ?>
                                
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

                    <div class="row">
                        <center><b>Ogólne informacje o hostingach</b></center>
                        <table id="overallClientHostingInfo" class="display" style="width:98%">
                            <thead>
                                <th>Liczba kont hostingowych</th>
                                <th>Suma zajętości/limit</th>
                                <th>Liczba domen</th>
                                <th>Liczba skrzynek pocztowych</th>
                                <th>Zajętość skrznek/limit</th>
                            </thead>
        
                            <tbody>
                                <tr>
                                    <td>
                                        <?php if($quantity_of_hosting_acc!=null) echo $quantity_of_hosting_acc; else echo "brak"?>
                                    </td>
                                    <td>
                                        <?php if($sum_of_occupied['SUM(h.occupied_MB)']!=null) echo $sum_of_occupied['SUM(h.occupied_MB)']; else echo "brak"; echo '/';if($sum_of_capacity['SUM(h.capacity_MB)']!=null) echo $sum_of_capacity['SUM(h.capacity_MB)']; else echo "brak" ?>
                                    </td>
                                    <td>
                                        <?php if($quantity_of_domains!=null) echo $quantity_of_domains; else echo "brak" ?>
                                    </td>
                                    <td>
                                        <?php if($quantity_of_domains_mail_acc['SUM(number_of_email_acc)']!=null) echo $quantity_of_domains_mail_acc['SUM(number_of_email_acc)']; else echo "brak"; ?>
                                    </td>
                                    <td>
                                        <?php if($occupied_of_domains_mail_acc['SUM(mail_occupied_MB)']!=null) echo $occupied_of_domains_mail_acc['SUM(mail_occupied_MB)']; else echo "brak"; echo '/'; if($limit_of_domains_mail_acc['SUM(mail_limit_MB)']!=null) echo $limit_of_domains_mail_acc['SUM(mail_limit_MB)']; else echo "brak"; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <center><b>Informacje o płatnościach</b></center>
                        <table id="paymentInfo" class="display" style="width:98%">
                            <thead>
                                <th>Zoobowiązanie miesięczne</th>
                                <th>Łączne zoobowiązanie roczne</th>
                                <th>Termin najbliższej płatności</th>
                            </thead>
        
                            <tbody>
                            <tr>
                                <?php
                                    $monthly=($payment_per_month+($payment_per_year/12));
                                    $yearly=(($payment_per_month*12)+($payment_per_year/12));
                                ?>
                                <td><?php echo $monthly;?></td>
                                <td><?php echo $yearly;?></td>
                                <td><?php echo $payment_deadline['payment_deadline'];?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <center><b>Zakupione usługi</b></center>
                        <table id="purchasedServices" class="display" style="width:98%"">
                            <thead>
                                <th>Id</th>
                                <th>Rodzaj</th>
                                <th>Nazwa</th>
                                <th>Opcje</th>
                            </thead>
        
                            <tbody>
                                <?php 
                                    foreach($services as $service):
                                ?>

                                <tr>
                                    <td><?php echo $service['id_pur_serv'];?></td>
                                    <td><?php echo $service['type'];?></td>
                                    <td><?php echo $service['name'];?></td>
                                    <td>
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('client/pur_serv_details?id_pur_serv='.$service['id_pur_serv']);?>>Szczegóły</a>
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('client/details?id_pur_serv_del='.$service['id_pur_serv']);?> onclick="return confirm('Usunięcie tej zakupionej usługi spowoduje usunięcie przypisanych do niej hostingów, domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>