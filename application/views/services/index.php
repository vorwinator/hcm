                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center mb-2">
                        <a class="btn backgroundText mt-1" style="width:150px" href="<?php echo site_url('services/create')?>">Dodaj usługę</a>
                    </div>
                
                    <div class="row justify-content-center">
                        <center><b>Usługi</b></center>
                        <table id="services" class="display" style="width:98%">
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
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('services/update?id_service='.$service['id_service']);?>>Edytuj</a>
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('services/delete?id_service='.$service['id_service']);?> onclick="return confirm('Usunięcie tej usługi spowoduje usunięcie przypisanych do niej zakupionych usług, hostingów, domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('services/who_got_this?id_service='.$service['id_service']);?>>Kto wykupił</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>