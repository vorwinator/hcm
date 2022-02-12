                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Lista hostingów
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <center><b>Hostings</b></center>
                    <table id="hostings" class="display" width=98%>
                        <thead>
                            <th>Id hostingu</th>
                            <th>Nazwa hostingu</th>
                            <th>Opis</th>
                            <th>Pojemność</th>
                            <th>Zajętość</th>
                            <th>Klient</th>
                            <th>Id zakupionej usługi</th>
                            <th>Opcje</th>
                        </thead>
                        <tbody>
                            <?php if($hostings!=null) foreach($hostings as $hosting):?>
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
                                            <?php
                                                echo $hosting['name_c'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $hosting['id_pur_serv_ps'];
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('services/update_hosting?id_hosting_edit='.$hosting['id_hosting']);?>>Edytuj</a>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/hosting_details?hosting_delete='.$hosting['id_hosting']);?>  onclick="return confirm('Usunięcie tego hostingu spowoduje usunięcie przypisanych do niego domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                        </td>
                                    </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>  
            </div>