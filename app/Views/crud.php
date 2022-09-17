<div class="container">
    <h3 class="title">Product Details</h3>
    
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product):?>
            <tr>
                <td><?= $product['id']?></td>
                <td><?= $product['name']?></td>
                <td><?= $product['description']?></td>
                <td><?= $product['price']?></td>
                <td><?= $product['created_at']?></td>
                <td class="action">
                    <a href="<?= base_url('products/edit/'. $product['id']);?>" class="btn-edit">Edit</a>
                    <form action="<?= base_url('products/delete/'. $product['id']);?>" method="post">
                    <?= csrf_field() ?>

                        <button type="submit" class="btn-delete">delete</button>
                    </form>
                </td>

            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>