@section('plugins.DatatablesPlugin', true)


@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Customer's List</h1>
@stop

@section('content')
  
<div class="container">

<div class="row">


<div class="card col-12">
    <div class="card-header">
    <a href="{{route('customers.create')}}" class="btn btn-primary">Add New Customer</a>
    </div>
    <div class="card-body">
      
        <table class="table table-bordered text-center">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Document ID</th>
                <th scope="col-4">Address</th>
                <th scope="col-4">Phone</th>
                <th scope="col-4">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>              
                <td>
                    <a href="#" class="btn btn-success col-8">Edit</a>                                
                </td>
                <td>
                    <a href="#" class="btn btn-danger col-7">Delete</a>                    
                </td>             
              </tr>

              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>                  
                <td>
                    <a href="#" class="btn btn-success col-8">Edit</a>                                
                </td>
                <td>
                    <a href="#" class="btn btn-danger col-7">Delete</a>                    
                </td>             
              </tr>

              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td> 
                <td>@mdo</td>                 
                <td>
                    <a href="#" class="btn btn-success col-8">Edit</a>                                
                </td>
                <td>
                    <a href="#" class="btn btn-danger col-7">Delete</a>                    
                </td>             
              </tr>

              <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td> 
                <td>@mdo</td>                 
                <td>
                    <a href="#" class="btn btn-success col-8">Edit</a>                                
                </td>
                <td>
                    <a href="#" class="btn btn-danger col-7">Delete</a>                    
                </td>             
              </tr>
             
           

            </tbody>
          </table>


    </div>
  </div>

</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop