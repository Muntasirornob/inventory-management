
 @extends('./layout_master')

 {{-- section id is yeild name  --}}

 @section('admin')

 <div class="content-page center">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">


 <div class="row">
    <div class="col-lg-6">

        <div class="card">
            <div class="card-body">
                <h3 class="header-title">Add Product</h3>
                
                <form action="#" method="POST" class="parsley-examples">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name<span class="text-danger">*</span></label>
                        <input type="text" name="productName" parsley-trigger="change" required placeholder="Enter Product name" class="form-control" id="productName" />
                    </div>
                    <div class="mb-3">
                        <label for="productcode" class="form-label">Product Code<span class="text-danger">*</span></label>
                        <input type="text" name="productcode" parsley-trigger="change" required placeholder="Enter product code" class="form-control" id="productcode" />
                    </div>
                    <div class="mb-3">
                        <label for="sku_code" class="form-label">Sku Code<span class="text-danger">*</span></label>
                        <input type="text" name="sku_code" parsley-trigger="change" required placeholder="Enter sku code" class="form-control" id="sku_code" />
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price<span class="text-danger">*</span></label>
                        <input type="text" name="price" parsley-trigger="change" required placeholder="Enter price" class="form-control" id="price" />
                    </div>
                    <div class="mb-3">
                        <label for="count" class="form-label">Count<span class="text-danger">*</span></label>
                        <input type="text" name="count" parsley-trigger="change" required placeholder="Enter count" class="form-control" id="count" />
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                        <input type="text" name="status" parsley-trigger="change" required placeholder="Enter status" class="form-control"  />
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image<span class="text-danger">*</span></label>
                        <input type="file" name="image" parsley-trigger="change" required placeholder="Upload Image" class="form-control" id="image" />
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        <button type="reset" class="btn btn-secondary waves-effect">Cancel</button>
                    </div>
                </form>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- end col -->

 </div>
        </div>
    </div>
 </div>
@endsection