<div class="container">
    <h2>Create Product</h2>
    <form action="/products/store" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category ID:</label>
            <input type="number" class="form-control" id="category_id" name="category_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="/products" class="btn btn-secondary">Cancel</a>
    </form>
</div>
