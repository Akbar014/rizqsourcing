@extends('admin')
@section('content')

<div class="container">
    <div class="page-inner">


        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                  <div>
                    <h3 class="fw-bold mb-3">Products</h3>
                  </div> 
                  <div class="ms-md-auto py-2 py-md-0">
                    <!-- <a href="#" class="btn btn-label-info btn-round me-2">Add Product</a> -->
                    <a href="#" class="btn btn-success btn-round" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="clearModal()" > Add New Product </a>
                   
                  </div>
              </div>


            </div>
          </div>
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Product info Table</div>
                </div>
                <div class="card-body">
                  {{-- <div class="card-sub">
                    This is the basic table view of the ready dashboard :
                  </div> --}}
                  <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Product Code</th>
                            <th scope="col">Product Type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>
                              @php
                              $category = App\Models\Category::find($product->category_id);
                                  
                              @endphp
                              {{ $category->cname }}
                            </td>
                            <td>{{ $product->product_code }}</td>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src="{{ asset('images/'.$product->image) }}" alt="Product Image" width="50"></td>
                            <td>
                              <div class="form-button-action">
                               
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Edit Product" onclick="editproductInfo({{$product->id}})" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-link btn-primary btn-lg" title="Delete Product">
                                      <i class="fa fa-trash"></i>
                                  </button>
                              </form>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                

                </div>
              </div>
            </div>

            
          </div>
  
    </div>
  </div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Product </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="addproductForm" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Include CSRF token for security -->
        
            <div class="modal-body">
                <!-- Product Name -->
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control form-control-lg" name="product_name" id="productName" required>
                </div>
                <input type="hidden" name='productId' id="productId" value="0">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="product" class="form-label">Select category</label>
                            <select class="form-select form-control" id="category" name="category_id" required>
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cname }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="productCode" class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="product_code" id="productcode" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="product" class="form-label">Select Type</label>
                            <select class="form-select form-control" id="type" name="type" required>
                                <option value="">Select Type</option>
                                    <option value="Men">Men</option>
                                    <option value="Women">Women</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
        
        
                <!-- Product Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="image" id="image" onchange="previewImage()" >
                </div>
        
                <!-- Image Preview -->
                <div class="mb-3">
                    <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; height: 100px;">
                </div>
        
                <!-- Product Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                    
                </div>
    
            </div>
        
            <!-- Modal Footer with Save Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveOrUpdate">Save Product</button>
            </div>
        </form>
        
      </div>
    </div>
  </div>



  <script>
    function clearModal(){
        document.getElementById('productId').value = 0;
        document.getElementById('productName').value = '';
        document.getElementById('productcode').value = '';
        document.getElementById('category').value = '';
        document.getElementById('type').value = '';
        document.getElementById('description').innerText = '';
        document.getElementById('saveOrUpdate').innerText = 'Save product';
        document.getElementById('imagePreview').src= '';
        document.getElementById('image').value= '';
    }

    function editproductInfo(productId){
        // alert(productId)
        document.getElementById('productId').value = productId;

        fetch(`/products/${productId}/edit`)
        .then(response => response.json())
        .then(data => {
            // Populate the form with the fetched data
            document.getElementById('productName').value = data.product_name;
            document.getElementById('productcode').value = data.product_code;
            document.getElementById('description').innerText = data.description;
            document.getElementById('category').value = data.category_id;
            document.getElementById('type').value = data.type;
            document.getElementById('saveOrUpdate').innerText = 'Update product';

            const productImage = document.getElementById('imagePreview');

            if (productImage ) {
                productImage.src = data.image ? data.image : 'admin/assets/img/def_product.png'; 
            }

            // Handle image preview if available
            const imagePreview = document.getElementById('imagePreview');
            if (data.image) {
                imagePreview.src = `/images/${data.image}`;
                
                imagePreview.style.display = 'block';
            } 
            // else {
            //     imagePreview.style.display = 'none';
            // }

            // Show the modal
            // const productModal = new bootstrap.Modal(document.getElementById('productModal'));
            // productModal.show();
        })
        .catch(error => console.error('Error:', error));

    }

</script>

<script>
    document.getElementById('addproductForm').addEventListener('submit', function(event) {
        
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const formData = new FormData(this);

    // Determine the URL and method
    const productId = document.getElementById('productId').value;
    let url;

    if(productId==0){
       
         url = `/products/store`;
    }else{
        console.log(productId);
         url = `/products/update/${productId}`;
    }
    console.log(url);
    const method = 'POST'; // Use PUT for updates, POST for new
    
    // Send the AJAX request
    fetch(url, {
        method: method,
        body: formData,
        headers: {
            'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        // Handle successful response
        if (data) {
            // alert('product updated successfully!');
            window.location.reload(); // Optionally reload the page or update the UI dynamically
        } else {
            alert('An error occurred while updating the product.');
        }
    })
    .catch(error => console.error('Error:', error));
});



</script>

<script>
    $(document).ready(function() {
  $('#exampleModal').on('shown.bs.modal', function () {
    $('#summernote').summernote({
      height: 300,     // Set editor height
      minHeight: null, // Set minimum height of editor
      maxHeight: null, // Set maximum height of editor
      focus: true      // Focus on editable area after initializing summernote
    });
  });
});

  </script>
  

@endsection