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
                            <h3 class="fw-bold mb-3">{{$type}}</h3>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <!-- <a href="#" class="btn btn-label-info btn-round me-2">Add Category</a> -->
                            <a href="#" class="btn btn-success btn-round" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" onclick="clearModal()"> Add New {{$type}} </a>

                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">{{$type}} info Table</div>
                        </div>
                        <div class="card-body">
                            {{-- <div class="card-sub">
                    This is the basic table view of the ready dashboard :
                  </div> --}}
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">{{$type}} Name</th>
                                        <th scope="col">Description</th>
                                        {{-- <th scope="col">Image</th> --}}
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->cname }}</td>
                                            <td>{!! $category->description !!}</td>
                                            {{-- <td>
                                                @if ($category->image)
                                                    <img src="{{ asset('images/' . $category->image) }}"
                                                        alt="Category Image" style="width: 100px; height: auto;">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                            </td> --}}
                                            <td>{{ $category->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <div class="form-button-action">
                               
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Edit Category" onclick="editCategoryInfo({{$category->id}})" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>

                                                    {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Edit Product" onclick="editProductInfo()" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                        <i class="fa fa-trash"></i>
                                                    </button> --}}
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
                    <h5 class="modal-title" id="exampleModalLabel"> {{$type}} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addCategoryForm" action="{{ route('categories.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf <!-- Include CSRF token for security -->

                    <div class="modal-body">
                        <!-- Category Name -->
                        <input type="hidden" name="category_id" id="categoryId">
                        <div class="mb-3">
                            <label for="CategoryName" class="form-label">{{$type}} Name</label>
                            <input type="text" class="form-control form-control-lg" name="cname" id="CategoryName"
                                required>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="product" class="form-label">Select Type</label>
                                    <select class="form-select form-control" id="type" name="type" required>
                                        <option value="">Select Type</option>
                                            <option value="Buying_services">Buying Services</option>
                                            <option value="Capabilities">Capabilities</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Category Image -->
                        <div class="mb-3 d-none">
                            <label for="image" class="form-label">Category Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                onchange="previewImage()" >
                        </div>

                        <!-- Image Preview -->

                        <div class="mb-3 d-none">
                    <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; height: 100px;">
                </div>

                        <!-- Category Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            {{-- <textarea class="form-control" name="description" id="description" rows="3" required></textarea> --}}
                            <textarea class="summernote" name="description" id="description" ></textarea>
                        </div>


                         <!-- Category Image -->
                         <div class="mb-3">
                            <label class="form-label">Multiple Images</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>

                    </div>

                    <!-- Modal Footer with Save Button -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveOrUpdate">Save Category</button>
                    </div>
                </form>



            </div>
        </div>
    </div>

<script>
    function clearModal(){
        document.getElementById('categoryId').value = 0;
        document.getElementById('CategoryName').value = '';
        document.getElementById('type').value = '';
        document.getElementById('description').innerText = '';
        document.getElementById('saveOrUpdate').innerText = 'Save Category';
        document.getElementById('imagePreview').src= '';
        document.getElementById('image').value= '';
    }

    function editCategoryInfo(categoryId){
        // alert(categoryId)
        document.getElementById('categoryId').value = categoryId;

        fetch(`/categories/${categoryId}/edit`)
        .then(response => response.json())
        .then(data => {
            // Populate the form with the fetched data
            document.getElementById('CategoryName').value = data.cname;
            document.getElementById('type').value = data.type;
            document.getElementById('description').innerText = data.description;
            document.getElementById('saveOrUpdate').innerText = 'Update Category';

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
            // const categoryModal = new bootstrap.Modal(document.getElementById('categoryModal'));
            // categoryModal.show();
        })
        .catch(error => console.error('Error:', error));

    }

    

     

    

</script>

<script>
    document.getElementById('addCategoryForm').addEventListener('submit', function(event) {
        
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const formData = new FormData(this);

    // Determine the URL and method
    const categoryId = document.getElementById('categoryId').value;
    let url;

    if(categoryId==0){
        console.log(categoryId);
         url = `/categories/store`;
    }else{
         url = `/categories/update/${categoryId}`;
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
            // alert('Category updated successfully!');
            window.location.reload(); // Optionally reload the page or update the UI dynamically
        } else {
            alert('An error occurred while updating the category.');
        }
    })
    .catch(error => console.error('Error:', error));
});

</script>



@endsection
