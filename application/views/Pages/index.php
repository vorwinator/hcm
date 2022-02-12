<table border=3px>
<tr>
<td>ID</td>
<td>email</td>
<td>password</td>
<td>firstname</td>
<td>lastname</td>
<td>active</td>
</tr>
<?php foreach($account as $account_item):?>
        <tr>
            <td><?php echo $account_item['id_acc'];?></td>
            <td><?php echo $account_item['email'];?></td>
            <td><?php echo $account_item['password'];?></td>
            <td><?php echo $account_item['firstname'];?></td>
            <td><?php echo $account_item['lastname'];?></td>
            <td><?php echo $account_item['active'];?></td>
        </tr>
<?php endforeach;?>
</table>