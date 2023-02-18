<?php
    $trash = $data['trash'];
?>
    <p><a href="<?= URL ?>index.php/backend/proAdd">
    <button type="button" class="btn btn-primary">Add</button></a>
    <a href="<?=URL ?>index.php/backend/trashProlist"><button type="button" class="btn btn-primary">Trash(<?=$trash?>)</button></a></p>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Category_id</th>
            <th>Category_name</th>
            <th>Parent</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th></tr>
        <?php
            foreach ($data['products'] as $value):
        ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['product_name'] ?></td>
                <td>
                    <?php
                            foreach ($data['category'] as $p){
                                if($value['product_category'] == $p['id']){
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
                <td><a href="<?= URL ?>index.php/backend/editCat/<?= $value['id'] ?>">
                        <img class="icon" src="<?= URL ?>asset/backend/images/modify.png" /></a>
                </td>
                <td><a href="<?= URL ?>index.php/backend/delTempPro/<?= $value['id'] ?>">
                        <img class="icon" src="<?= URL ?>asset/backend/images/del_icon_big.png" /></a></td>
            </tr>

        <?php 
            endforeach;
        ?>
    </table>
               <div style='margin: auto;'><?= $data['paginator']; ?></div>
