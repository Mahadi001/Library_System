@extends('layouts.user_dashboard')
@section('user-content')
<form action="#" method="post" novalidate="novalidate">
    <div class="row">
        <div class="container mb-3">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <input type="text" class="form-control search-slt" placeholder="Enter Book Name">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <input type="text" class="form-control search-slt" placeholder="Enter Author Name">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <select class="form-control search-slt" id="exampleFormControlSelect1">
                            <option>Fantasy</option>
                            <option>Adventure</option>
                            <option>Romance</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                        <button type="button" class="btn btn-dark wrn-btn">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <h2>Available Books</h2>
            </li>
          </ol>

<div class="card mb-5" style="width: 18rem;">
    <img src="{{ asset('img/To_Kill_a_Mockingbird.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">To Kill a Mockingbird</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Request</a>
    </div>
</div>
@endsection