<div class="container my-5">
  <h3 class="text-center">Edit Product</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_title" class="form-label">Product Title</label>
      <input type="text" id="product_title" name="product_title" class="form-control" required placeholder="Product Title">
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_description" class="form-label">Product Description</label>
      <input type="text" id="product_description" name="product_description" class="form-control" required placeholder="Product Description">
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_keywords" class="form-label">Product Keywords</label>
      <input type="text" id="product_keywords" name="product_keywords" class="form-control" required placeholder="Product Keywords">
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_category" class="form-label">Product Keywords</label>
      <select name="product_category" id="product_category" class="form-select">
        <option value="">-- Choose Category --</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
      </select>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_brands" class="form-label">Product Keywords</label>
      <select name="product_brands" id="product_brands" class="form-select">
        <option value="">-- Choose Brands --</option>
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
      </select>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <div class="d-flex">
        <div>
          <label for="product_image1" class="form-label">Product Image 1</label>
          <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto">
        </div>
        <img src="product_images/ananas.jpg" alt="product image" style="width:25%;">
      </div>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <div class="d-flex">
        <div>
          <label for="product_image2" class="form-label">Product Image 2</label>
          <input type="file" id="product_image2" name="product_image2" class="form-control w-90 m-auto">
        </div>
        <img src="product_images/ananas.jpg" alt="product image" style="width:25%;">
      </div>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <div class="d-flex">
        <div>
          <label for="product_image3" class="form-label">Product Image 3</label>
          <input type="file" id="product_image3" name="product_image3" class="form-control w-90 m-auto">
        </div>
        <img src="product_images/ananas.jpg" alt="product image" style="width:25%;">
      </div>
    </div>
    <div class="form-outline w-50 mx-auto mb-4">
      <label for="product_price" class="form-label">Product Price</label>
      <input type="text" id="product_price" name="product_price" class="form-control" required placeholder="Product Price">
    </div>
    <div class="w-50 mx-auto mb-4">
      <input type="submit" name="update_product" value="Update Product" class="btn btn-info">
    </div>
  </form>
</div>