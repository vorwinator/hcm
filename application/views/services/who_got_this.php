                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > <?php echo "id usługi: ".$service['id_service']; ?> > Lista klientów którzy wykupili tą usługę
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Wybrana usługa</b></center>
                        <table id="purchasedService" class="display" style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Rodzaj</th>
                                <th>Cena</th>
                                <th>Nazwa</th>
                                <th>Jednostka</th>
                                <th>Opcje</th>
                            </thead>
                            
                            <tbody>
                                <?php 
                                    $_SESSION['id_service'] = $service['id_service'];
                                    $_SESSION['type'] = $service['type'];
                                    $_SESSION['price'] = $service['price'];
                                    $_SESSION['price_type'] = $service['price_type'];
                                    $_SESSION['name'] = $service['name']; 
                                    ?>  
                                        <tr>
                                            <td><?php echo $_SESSION['id_service'];?></td>
                                            <td><?php echo $_SESSION['type'];?></td>
                                            <td><?php echo $_SESSION['price'];?></td>
                                            <td><?php echo $_SESSION['price_type'];?></td>
                                            <td><?php echo $_SESSION['name'];?></td>
                                            <td>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('services/update?id_service='.$service['id_service']);?>>Edytuj</a>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('services/delete?id_service='.$service['id_service']);?> onclick="return confirm('Usunięcie tej usługi spowoduje usunięcie przypisanych do niej zakupionych usług, hostingów, domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                            </td>
                                        </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center">
                        <center><b>Lista klientów, którzy wykupili usługę</b></center>
                        <table id="whoPurchasedService" class="display" style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Nazwa</th>
                                <th>Lokalizacja</th>
                                <th>NIP</th>
                                <th>Numer telefonu</th>
                                <th>Pracownik</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>
                                <?php if($clients!=null){ 
                                    foreach($clients as $client):?>
                                        <tr>
                                            <td><?php echo $client['id_client'];?></td>
                                            <td><?php echo $client['email'];?></td>
                                            <td><?php echo $client['name'];?></td>
                                            <td><?php echo $client['localisation'];?></td>
                                            <td><?php echo $client['NIP'];?></td>
                                            <td><?php echo $client['phone_number'];?></td>
                                            <td><?php echo $client['id_manager'];?></td>
                                            <td>
                                                <a class="btn backgroundText mt-1" class="btn backgroundText mt-1"href=<?php echo site_url('client/update?id_client='.$client['id_client']);?>>Edytuj</a>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('client/delete?id_client='.$client['id_client']);?>  onclick="return confirm('Usunięcie tego klienta spowoduje usunięcie przypisanych do niego zakupionych usług, hostingów, domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('client/details?id_client='.$client['id_client']);?>>Szczegóły</a>
                                            </td>
                                        </tr>
                                <?php endforeach;}?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>  
            </div>