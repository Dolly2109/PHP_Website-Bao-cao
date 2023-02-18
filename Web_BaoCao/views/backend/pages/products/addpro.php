<form action="<?= URL ?>index.php/backend/addProduct" method="post" class="form-horizontal">
    <div class="form-group">
        
        <label class="col-sm-2 control-label"><h5>Product_name</h5></label>
        <div class="col-sm-10">
            <input name="name" type="text" class="form-control" placeholder="Enter category name">
        </div>
    </div>
    <div class="form-group">
        
        <label class="col-sm-2 control-label"><h5>Price</h5></label>
        <div class="col-sm-10">
            <input name="price" type="text" class="form-control" placeholder="Enter category name">
        </div>
    </div>    
    <div class="form-group">
        <label class="col-sm-2 control-label"><h5>Detail</h5></label>
        <div class="col-sm-10">
            <textarea name="editor" id="" cols="30" rows="10"></textarea>
            <script>
                CKEDITOR.replace( 'editor');
            </script>
        </div>
    </div>
    <div class="form-group">
        
        <label class="col-sm-2 control-label"><h5>Category</h5></label>
        <div class="col-sm-10">
            <select class="form-control" name="category">
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
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>