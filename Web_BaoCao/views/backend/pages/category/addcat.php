<form action="<?= URL ?>index.php/backend/doCatAdd" method="post" class="form-horizontal">
    <div class="form-group">
        
        <label class="col-sm-2 control-label"><h5>Category_name</h5></label>
        <div class="col-sm-10">
            <input name="cat_name" type="text" class="form-control" placeholder="Enter category name">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label"><h5>Parent</h5></label>
        <div class="col-sm-10">
            <select class="form-control" name="parent">
                <?php
                    foreach ($data['category'] as $value){
                        echo "<option value = '".$value['id']."'>
                        ".$value['category_name']. "</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label"><h5>Status</h5></label>
        <div class="col-sm-10">
            <select class="form-control" name="status">
                <option selected value="1" >Show</option>
                <option value="0">Hide</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>