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
                            <h3 class="fw-bold mb-3">sliders</h3>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <!-- <a href="#" class="btn btn-label-info btn-round me-2">Add Slider</a> -->
                            <a href="#" class="btn btn-success btn-round" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" onclick="clearModal()"> Add New Slider </a>

                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Slider info Table</div>
                        </div>
                        <div class="card-body">
                            {{-- <div class="card-sub">
                    This is the basic table view of the ready dashboard :
                  </div> --}}
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Slider Image</th>
                                        <th scope="col">Slider Position</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $Slider)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if ($Slider->image)
                                                    <img src="{{ asset('images/' . $Slider->image) }}"
                                                        alt="Slider Image" style="width: 100px; height: auto;">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                            </td>
                                            <td>{{ $Slider->position }}</td>
                                            <td>
                                                <div class="form-button-action">
                               
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Edit Slider" onclick="editSliderInfo({{$Slider->id}})" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
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
                    <h5 class="modal-title" id="exampleModalLabel"> Slider </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addSliderForm" action="{{ route('sliders.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf <!-- Include CSRF token for security -->

                    <div class="modal-body">
                        <!-- Slider Name -->
                        <input type="hidden" name="Slider_id" id="SliderId">
                        


                        <!-- Slider Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Slider Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                onchange="previewImage()" >
                        </div>

                        <!-- Image Preview -->

                        <div class="mb-3">
                            <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; height: 100px;">
                        </div>

                        <div class="mb-3">
                            <label for="SliderName" class="form-label">Slider Position</label>
                            <input type="number" class="form-control form-control-lg" name="position" id="position"
                                required>
                        </div>
                       

                    </div>

                    <!-- Modal Footer with Save Button -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveOrUpdate">Save Slider</button>
                    </div>
                </form>



            </div>
        </div>
    </div>

<script>
    function clearModal(){
        document.getElementById('SliderId').value = 0;
        document.getElementById('SliderName').value = '';
        document.getElementById('description').innerText = '';
        document.getElementById('saveOrUpdate').innerText = 'Save Slider';
        document.getElementById('imagePreview').src= '';
        document.getElementById('image').value= '';
    }

    function editSliderInfo(SliderId){
        // alert(SliderId)
        document.getElementById('SliderId').value = SliderId;

        fetch(`/sliders/${SliderId}/edit`)
        .then(response => response.json())
        .then(data => {
            // Populate the form with the fetched data
            document.getElementById('position').value = data.position;
            document.getElementById('saveOrUpdate').innerText = 'Update Slider';

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
            // const SliderModal = new bootstrap.Modal(document.getElementById('SliderModal'));
            // SliderModal.show();
        })
        .catch(error => console.error('Error:', error));

    }

    

     

    

</script>

<script>
    document.getElementById('addSliderForm').addEventListener('submit', function(event) {
        
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const formData = new FormData(this);

    // Determine the URL and method
    const SliderId = document.getElementById('SliderId').value;
    let url;

    if(SliderId==0){
        console.log(SliderId);
         url = `/sliders/store`;
    }else{
         url = `/sliders/update/${SliderId}`;
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
            // alert('Slider updated successfully!');
            window.location.reload(); // Optionally reload the page or update the UI dynamically
        } else {
            alert('An error occurred while updating the Slider.');
        }
    })
    .catch(error => console.error('Error:', error));
});

</script>
    
@endsection
