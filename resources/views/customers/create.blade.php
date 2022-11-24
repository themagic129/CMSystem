@section('plugins.DatatablesPlugin', true)


@extends('adminlte::page')


@section('title', 'Dashboard')

@section('content_header')
    <h1>Create new Customer</h1>
@stop

@section('content')
  
<div class="container">

<div class="row">


<div class="card col-12 mt-4">
    <div class="card-header">
      Customer's information
    </div>
    <div class="card-body">
      
        <form>


            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Name" id="name">             
                      </div>                    
            </div>

                
                <div class="col">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="lastname">             
                      </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="documentid" class="form-label">Document ID</label>
                        <input type="text" class="form-control" placeholder="Document ID" id="documentid">             
                      </div>                    
            </div>

                
                <div class="col">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" id="phone">             
                      </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="documentid" class="form-label">Document ID</label>
                        <input type="text" class="form-control" placeholder="Document ID" id="documentid">             
                      </div>                    
            </div>
            <div class="col">                 
                    
                <select class="form-control" style="margin-top: 32px" aria-label=".form-select-lg example">
                    <option selected>Customer Status</option>
                    <option value="1">Active</option>
                    <option value="2">Inactive</option>                 
                  </select>        
                  
            </div>
                
              </div>

            <button type="submit" class="btn btn-primary col-12 mt-3">Submit</button>
            <a href="{{route('customers.index')}}" class="btn btn-danger col-12 mt-3">Cancel</a>
          </form>

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