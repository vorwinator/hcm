                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Klienci > Szczegóły hostingu > <?php if($hosting['name']!=null)echo $hosting['name']?> > <?php if($domain['name']!=null)echo $domain['name']?>
                        </div>
                    </div>
                </div>
                
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                    <a class="btn backgroundText" style="width:150px" href=<?php echo site_url('client/hosting_domain_add_certificate?id_domain='.$_SESSION['id_domain']);?>>Dodaj certyfikat</a>
                    </div>
                    <div class="row justify-content-center">
                        <table id="hosting" class="display" style="width:98%">
                            <thead>
                                <th>ID hostingu</th>
                                <th>Nazwa</th>
                                <th>Opis</th>
                                <th>Pojemność</th>
                                <th>Zajętość</th>
                            </thead>
                            <tbody>

                                    <tr>
                                        <td><?php echo $hosting['id_hosting'];?></td>
                                        <td><?php echo $hosting['name'];?></td>
                                        <td><?php echo $hosting['description'];?></td>
                                        <td><?php echo $hosting['capacity_MB'];?></td>
                                        <td><?php echo $hosting['occupied_MB'];?></td>
                                    </tr>
                            </tbody>
                        </table>
                        
                    </div>

                    <div class="row justify-content-center">
                        <table id="domain" class="display" style="width:98%">
                            <thead>
                                <th>Id domeny</th>
                                <th>URL</th>
                                <th>Nazwa</th>
                                <th>Korzeń domeny</th>
                                <th>Wersja php</th>
                                <th>Liczba kont pocztowych</th>
                                <th>Pojemność poczty</th>
                                <th>Zajętość poczty</th>
                            </thead>
                        
                            <tbody>
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
                                </tr>
                            </tbody>
                        
                        </table>
                    </div>

                    <div class="row justify-content-center">
                        <table id="clients" class="display" style="width:98%">
                            <thead>
                                <th>ID certyfikatu</th>
                                <th>Rodzaj certyfikatu</th>
                                <th>Data wystawienia</th>
                                <th>Data końca ważności</th>
                                <th>Opcje</th>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($certificates as $certificate): 
                                ?>
                                <tr>
                                    <?php
                                        echo form_open('client/hosting_domain_certificates');
                                    ?>

                                    <td>
                                        <?php
                                            $var=$certificate['id_certificate'];
                                            echo form_input('id_certificate', $var, "placeholder='$var' readonly");
                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                            $var=$certificate['type'];
                                            echo form_input('type', $var, "placeholder='$var'");
                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                            $var=$certificate['issue_date'];
                                            echo form_input('issue_date', $var, "placeholder='$var'");
                                        ?>
                                    </td>

                                    <td>
                                        <?php
                                            $var=$certificate['expire_date'];
                                            echo form_input('expire_date', $var, "placeholder='$var'");
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo form_submit('submit', 'Zatwierdź zmiany','class="btn backgroundText mt-1"');
                                        ?>
                                        </form>
                                        <a class="btn backgroundText mt-1"  href=<?php echo site_url('client/hosting_domain_certificates?id_certificate_del='.$certificate['id_certificate']);?>>Usuń</a>
                                    </td>
                                </tr>
                                <?php
                                    endforeach;
                                ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>  
            </div>