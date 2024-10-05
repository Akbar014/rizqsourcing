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
                    <h3 class="fw-bold mb-3">Querys From Users </h3>
                  </div> 
                  
              </div>


            </div>
          </div>
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Query info Table</div>
                </div>
                <div class="card-body">
                  {{-- <div class="card-sub">
                    This is the basic table view of the ready dashboard :
                  </div> --}}
                  <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($queries as $query)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $query->name }}</td>
                          
                            <td>{{ $query->email }}</td>
                            <td>{{ $query->phone }}</td>
                            <td>{{ $query->subject }}</td>
                            <td>{{ $query->description }}</td>
                           
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






@endsection