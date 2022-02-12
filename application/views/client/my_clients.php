                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Moi klienci
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Moi klienci</b></center>
                        
                        <table id="clients" class="display" style="width:98%">
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
                                <?php 
                                if(isset($_SESSION['id_acc'])){ foreach($clients as $client):?>

                                    <tr>
                                        <td><?php echo $client['id_client'];?></td>
                                        <td><?php echo $client['email'];?></td>
                                        <td><?php echo $client['name'];?></td>
                                        <td><?php echo $client['localisation'];?></td>
                                        <td><?php echo $client['NIP'];?></td>
                                        <td><?php echo $client['phone_number'];?></td>
                                        <td><?php echo $client['id_manager'];?></td>
                                        <td>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/update?id_client='.$client['id_client']);?>>Edytuj</a>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/delete?id_client='.$client['id_client']);?> onclick="return confirm('Usunięcie tego klienta spowoduje usunięcie przypisanych do niego zakupionych usług, hostingów, domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/details?id_client='.$client['id_client']);?>>Szczegóły</a>
                                        </td>
                                    </tr>
                                <?php endforeach;}?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>