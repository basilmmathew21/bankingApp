@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Accounts</h1>
@stop

@section('content')

<div class="container">
    <div class="main-body">
    
            <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  
                   <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile Image" class="rounded-circle" width="150">
                   
                    
                    <div class="mt-3">
                      <h4>{{$user->name}}</h4>
                      <p class="text-muted font-size-sm">{{@$user->account->account_no}}</p>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      
                    </div>
                  </div>
                  <hr>
				  
				   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      </div>
                  </div>
                  <hr>
				  
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Dob</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    </div>
                  </div>
                  <hr>
				  
                  <div class="row">
                    <div class="col-sm-6">
                      <h6 class="mb-0">Email : {{@$user->email}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
					</div>
                  </div>
				  
				 <hr>
				  
					  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    </div>
                  </div>
                  <hr>
				  
					  
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Whatsapp Number</h6>
            </div>
            <div class="col-sm-9 text-secondary">
            </div>
          </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nationality</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
					</div>
                  </div>
                  <hr>
                  
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">State</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    </div>
                  </div>
				  <hr>
				  
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary" 
                      href="" title="Edit">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@stop



        