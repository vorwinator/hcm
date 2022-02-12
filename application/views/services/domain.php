<div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Lista domen
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Domeny</b></center>
                        <table id="clients" class="display" width=98%>
                            <thead>
                                <th>Id domeny</th>
                                <th>URL</th>
                                <th>Nazwa</th>
                                <th>Korzeń domeny</th>
                                <th>Wersja php</th>
                                <th>Liczba kont pocztowych</th>
                                <th>Pojemność poczty</th>
                                <th>Zajętość poczty</th>
                                <th>Klient</th>
                                <th>ID zakupionej usługi</th>
                                <th>ID hostingu</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>
                                <?php if($domains!=null) foreach($domains as $domain):?>
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
                                                echo $domain['name_d'];
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
                                            <?php
                                                echo $domain['name_c'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['id_pur_serv_ps'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $domain['id_hosting_acc'];
                                            ?>
                                            </td>
                                            <td>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('services/update_domain?id_domain_edit='.$domain['id_domain']);?>>Edytuj</a>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('services/domain?domain_delete='.$domain['id_domain']);?> onclick="return confirm('Usunięcie tej domeny spowoduje usunięcie przypisanych do niej certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                            </td>
                                        </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>