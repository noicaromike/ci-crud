<div class="container add-item">
    
    <div class="panel">
    <h3 class="title center">Add Product</h3>
        <form action="<?= base_url('product-store')?>" method="post">
        <?= csrf_field() ?>
            <div class="form-item">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" class="form-input" placeholder="Enter product name">
            </div>
            <div class="form-item">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" class="form-input" placeholder="Enter product price">
            </div>
            <div class="form-item">
                <label for="" class="form-label">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-input">

                </textarea>
            </div>
            <div class="form-item">
                <button type="submit" class="form-btn">Save</button>
            </div>
            
            
        </form>
    </div>
</div>