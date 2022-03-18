@extends('layouts.master')

@section('content')
 @include('layouts.nav')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
             <!-- Breadcrumb -->
            <div class="page-header">
                <h3 class="page-title"> Material design icons </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Icons</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Material design icons</li>
                  </ol>
                </nav>
              </div>
                <!--End Breadcrumb -->
            <!-- MY MAIN BODY -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Add New Purchase</h4>

                        <form action="{{ url('/purchase/insert') }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <label for="Name">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
                                </div>


                            </div>
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>

                        </form>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{session('success')  }}
                                </div>
                                @endif
                      </div>
             <!-- END MAIN BODY -->
        </div>
        <!-- content-wrapper ends -->
@endsection
