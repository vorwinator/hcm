                <div class="container-fluid">
                    <div class="row locationBaner">
                        <div class="col-lg-3 col-6 offset-lg-1  text-center pt-2 pb-2 text-black">
                            Konto > Lista kont
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4" class="main">
                    <div class="row justify-content-center">
                        <center><b>Konta</b></center>
                        <table id="clients" class="display">
                    <thead>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Imie</th>
                        <th>Nazwisko</th>
                        <th>Aktywny</th>
                        <th>Opcje</th>
                    </thead>
                    <tbody>
                        <?php foreach($account as $account_item):?>
                            <tr>
                                <td><?php echo $account_item['id_acc'];?></td>
                                <td><?php echo $account_item['email'];?></td>
                                <td><?php echo $account_item['firstname'];?></td>
                                <td><?php echo $account_item['lastname'];?></td>
                                <td><?php echo $account_item['active'];?></td>
                                <td>
                                    <a class="btn backgroundText mt-1" href=<?php echo site_url('account/update?id_acc='.$account_item['id_acc']);?>>Edytuj</a>
                                    <?php if($account_item['active']==1){ ?>
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('account/block?id_acc='.$account_item['id_acc']);?>>Zablokuj</a>
                                    <?php } else if($account_item['active']==0){ ?>
                                        <a class="btn backgroundText mt-1" href=<?php echo site_url('account/unblock?id_acc='.$account_item['id_acc']);?>>Odblokuj</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                    </div>
                </div>  
            </div>