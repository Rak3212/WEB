<form method="POST" action="../backend/products.php">
    <label>Product Name:</label>
    <input type="text" name="name" required>
    <label>Description:</label>
    <textarea name="description"></textarea>
    <label>Price:</label>
    <input type="number" name="price" step="0.01" required>
    <button type="submit">Add Product</button>
</form>
