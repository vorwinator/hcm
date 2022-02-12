                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                        Klienci > Szczegóły hostingu > <?php if($hosting['name']!=null)echo $hosting['name']?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center text-center">
                        <div class="col-3 text-center">
                            <a class="btn backgroundText mt-1"href=<?php echo site_url('client/hosting_add_domain?hosting_id='.$_SESSION['hosting_id']);?>>Dodaj domenę</a>
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                        <table id="hostings" class="display" style="width:98%">
                            <thead>
                                <th>ID hostingu</th>
                                <th>Nazwa</th>
                                <th>Opis</th>
                                <th>Pojemność</th>
                                <th>Zajętość</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td><?php echo $hosting['id_hosting'];?></td>
                                        <td><?php echo $hosting['name'];?></td>
                                        <td><?php echo $hosting['description'];?></td>
                                        <td><?php echo $hosting['capacity_MB'];?></td>
                                        <td><?php echo $hosting['occupied_MB'];?></td>
                                        <td>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row justify-content-center">
                        <table id="clients" class="display" style="width:98%">
                            <thead>
                                <th>Id domeny</th>
                                <th>URL</th>
                                <th>Nazwa</th>
                                <th>Korzeń domeny</th>
                                <th>Wersja php</th>
                                <th>Liczba kont pocztowych</th>
                                <th>Pojemność poczty</th>
                                <th>Zajętość poczty</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($domains as $domain): ?>
                                    <tr>
                                            <td>
                                            <?php
                                                echo $domain['id_domain'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['url'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['name'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['domain_root'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['php_version'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['number_of_email_acc'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['mail_limit_MB'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['mail_occupied_MB'];
                                            ?>
                                            </td>
                                            <td>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('services/update_domain?id_domain_edit='.$domain['id_domain']);?>>Edytuj</a>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/hosting_domains?id_domain_del='.$domain['id_domain']);?> onclick="return confirm('Usunięcie tej domeny spowoduje usunięcie przypisanych do niej certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                            <a class="btn backgroundText mt-1" href=<?php echo site_url('client/hosting_domain_certificates?id_domain='.$domain['id_domain']);?>>Lista certyfikatów</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>