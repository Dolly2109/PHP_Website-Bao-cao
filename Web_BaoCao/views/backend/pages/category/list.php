
<?php
    // print_r($data['category']);
?>
<a class="btn btn-primary" href="<?= URL ?>index.php/backend/fmAddCategory" role="button">Add</a>
<table class="table table-striped">
    <tr>
        <th>Category id</th>
        <th>Category name</th>
        <th>Parent</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
        foreach($data['category'] as $value):{
        }
    ?>
    <tr>
        <td><?=$value['id']?></td>
        <td><?=$value['category_name']?></td>
        <td>
            <?php
                if($value['parent'] == 0){
                    echo $value['parent'];
                }
                foreach($data['allCat'] as $p){
                    if ($value['parent'] == $p['id']){
                        echo $p['category_name'];
                    }
                }
            ?>
        </td>
        <td>
        <?php
                if($value['status'] == 1){
                ?>
                    <a class="showcursor" href=""><img class="icon" src="<?= URL ?>asset/backend/images/check_icon_big.png" /></a>
                <?php }
                        else {
                ?>
                    <a class="showcursor" href=""><img class="icon" src="<?= URL ?>asset/backend/images/forbidden_icon_big.png" /></a>
                <?php
                } 
                ?>
        </td>
        <td><a href="<?= URL ?>index.php/backend/editCat/<?= $value['id'] ?>"><img src="<?= URL ?>asset/backend/images/modify.png" alt=""></a></td>
        <td><a href=""><img src="<?= URL ?>asset/backend/images/del_icon.png" alt=""></a></td>
    </tr>
    <?php
        endforeach;
    ?>
</table>
<div><?= $data['paginator']; ?></div>
