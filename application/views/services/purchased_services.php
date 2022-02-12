                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Wykupione usługi
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Lista wykupionych usług</b></center>
                        <table id="purchasedServices" class="display" style="width:98%">
                            <thead>
                                <th>Id</th>
                                <th>Rodzaj</th>
                                <th>Cena</th>
                                <th>Jednostka</th>
                                <th>Klient</th>
                                <th>Usługa</th>
                            </thead>
                            
                            <tbody>
                                <?php foreach($purchased_services as $service):?>
                                <tr>
                                    <td><?php echo $service['id_pur_serv'];?></td>
                                    <td><?php echo $service['type'];?></td>
                                    <td><?php echo $service['price'];?></td>
                                    <td><?php echo $service['price_type'];?></td>
                                    <td><?php echo $service['name_c'];?></td>
                                    <td><?php echo $service['name_s'];?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>