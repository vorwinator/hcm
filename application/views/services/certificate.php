                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Usługi > Lista certyfikatów
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Certyfikaty</b></center>
                        <table id="clients" class="display" width=98%>
                            <thead>
                                <th>Id certyfikatu</th>
                                <th>Id domeny</th>
                                <th>Id hostingu</th>
                                <th>Id zakupionej usługi</th>
                                <th>Klient</th>
                                <th>Rodzaj certyfikatu</th>
                                <th>Data wystawienia</th>
                                <th>Data końca ważności</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>
                                <?php if($certificates!=null) foreach($certificates as $certificate): ?>
                                        <tr>
                                            <td>
                                            <?php
                                                echo $certificate['id_certificate'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['id_d'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['id_h'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['id_pur_serv_ps'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['name_c'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['type'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['issue_date'];
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                                echo $certificate['expire_date'];
                                            ?>
                                            </td>
                                            <td>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('services/update_certificate?id_certificate_edit='.$certificate['id_certificate']);?>>Edytuj</a>
                                                <a class="btn backgroundText mt-1" href=<?php echo site_url('services/certificate?id_certificate_del='.$certificate['id_certificate']);?> onclick="return confirm('To spowoduje usunięcie tego certyfikatu. Jesteś tego pewien?')">Usuń</a>
                                            </td>
                                        </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>