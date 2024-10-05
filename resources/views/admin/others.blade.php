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
                            <div class="card-title">{{$type}} Info Update</div>
                        </div>
                        <div class="card-body">

                            <form action="{{route('others.update', $type1)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Use PUT for updating -->
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Description: </label>
                                            {{-- <input type="text" class="form-control"  name="address" value="{{$contact->address}}"> --}}
                                            <textarea class="summernote" name="description" id="description" >{{$data->description}}</textarea>
                                        </div>
                                    </div>
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


    


 
@endsection
