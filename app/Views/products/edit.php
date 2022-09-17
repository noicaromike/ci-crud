<!-- <?php require APPPATH . '\Views\templates\header.php';?> -->


<div class="container add-item">
    
    <div class="panel">
    <h3 class="title center">Edit Product</h3>
        <form action="<?= base_url('products/update/' . $products['id'])?>" method="POST">
        <?= csrf_field() ?>
            <div class="form-item">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" value="<?= $products['name']; ?>" class="form-input" placeholder="Enter product name">
            </div>
            <div class="form-item">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price" value="<?= $products['price']; ?>" class="form-input" placeholder="Enter product price">
            </div>
            <div class="form-item">
                <label for="" class="form-label">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-input"><?= $products['description']; ?>
                </textarea>
            </div>
            <div class="form-item">
                <button type="submit" class="form-btn">Update</button>
            </div>
            
            
        </form>
    </div>
</div>

<!-- <?php require APPPATH . '\Views\templates\footer.php';?> -->
