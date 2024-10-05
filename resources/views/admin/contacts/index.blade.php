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
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Contact Info Update</div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('contacts.update',2)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Use PUT for updating -->
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address: </label>
                                            <input type="text" class="form-control"  name="address" value="{{$contact->address}}">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone : </label>
                                            <input type="text" class="form-control" name="phone"value="{{$contact->phone}}">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email : </label>
                                            <input type="text" class="form-control" name="email"value="{{$contact->email}}">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Others : </label>
                                            <input type="text" class="form-control" name="others"value="{{$contact->others}}">
                                        </div>
                                    </div>
                            
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone 2: </label>
                                            <input type="text" class="form-control" name="phone2">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email 2: </label>
                                            <input type="text" class="form-control" name="mail2">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Facebook: </label>
                                            <input type="text" class="form-control" name="facebook">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Instagram: </label>
                                            <input type="text" class="form-control" name="instagram">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">LinkedIn: </label>
                                            <input type="text" class="form-control" name="linkedin">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Whatsapp: </label>
                                            <input type="text" class="form-control" name="whatsapp">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Google Map: </label>
                                            <input type="text" class="form-control" name="map">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Image: </label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Description: </label>
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                    </div> --}}
                            
                                    <div class="form-layout-footer mt-3">
                                        <button class="btn btn-info mg-r-5" type="submit" style="cursor: pointer;">Update</button>
                                    </div>
                                </div>
                            </form>
                            

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>


    

<script>


</script>
 
@endsection
