            <div class="container-fluid">
                <div class="row locationBaner">
                    <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                        Klienci > Dodaj usługę > Artneo Sp. z o.o.
                    </div>
                </div>
            </div>
            <div class="row content justify-content-center" style="width:100%">
                <table id="hostingAccounts" class="display" style="width:98%">
                    <thead>
                        <th>Id hostingu</th>
                        <th>Nazwa hostingu</th>
                        <th>Opis</th>
                        <th>Pojemność</th>
                        <th>Zajętość</th>
                        <th>Id zakupionej usługi</th>
                        <th>Opcje</th>
                    </thead>

                    <tbody>
                        <?php foreach($hostings as $hosting):
                            echo form_open('client/hosting_details');?>
                                <tr>
                                <form action="<?php echo base_url() ?>index.php/client/hosting_details" method="post">
                                    <td>
                                    <?php
                                        $var=$hosting['id_hosting'];
                                        echo form_input('id_hosting', $var, "placeholder='$var' readonly");
                                    ?>
                                    </td>
                                    <td>
                                    <?php
                                        $var=$hosting['name'];
                                        echo form_input('name', $var, "placeholder='$var'");
                                    ?>
                                    </td>
                                    <td>
                                    <?php
                                        $var=$hosting['description'];
                                        echo form_textarea('description', $var, "placeholder='$var' style='height:33px; width:100px'");
                                    ?>
                                    </td>
                                    <td>
                                    <?php
                                        $var=$hosting['capacity_MB'];
                                        echo form_input('capacity_MB', $var, "placeholder='$var'");
                                    ?>
                                    </td>
                                    <td>
                                    <?php
                                        $var=$hosting['occupied_MB'];
                                        echo form_input('occupied_MB', $var, "placeholder='$var'");
                                    ?>
                                    </td>
                                    <td>
                                    <?php
                                        echo $hosting['id_pur_serv_ps'];
                                    ?>
                                    </td>
                                    <td>
                                    <?php
                                        echo form_submit('submit', 'Zatwierdź zmiany','class="btn backgroundText mt-1"');
                                    ?>
                                    </form>
                                        <a class="btn backgroundText mt-1"  href=<?php echo site_url('client/hosting_details?hosting_delete='.$hosting['id_hosting']);?> onclick="return confirm('Usunięcie tego hostingu spowoduje usunięcie przypisanych do niego domen oraz certyfikatów, jeśli takie istnieją. Jesteś tego pewien?')">Usuń</a>
                                    </td>
                                </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>