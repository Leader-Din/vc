<div class="container">
    <h1>Edit Product</h1>
    <form action="/products/update/<?= $product['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        
        <div class="mb-3">
            <label for="name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category ID:</label>
            <input type="number" class="form-control" id="category_id" name="category_id" value="<?= htmlspecialchars($product['category_id']) ?>" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/products" class="btn btn-secondary">Cancel</a>
    </form>
</div>
