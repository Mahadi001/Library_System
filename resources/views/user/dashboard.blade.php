@extends('layouts.user_dashboard')
@section('user-content')
  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-dark o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5"><h2>Due - $0.00</h2></div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">Payment Online</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- List of Books -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      List of Books</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Author</th>
              <th>Genre</th>
              <th>Start date</th>
              <th>End date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>To Kill a Mockingbird</td>
              <td>Harper Lee</td>
              <td>Novel, Bildungsroman, Southern Gothic, Thriller, Domestic Fiction, Legal Story</td>
              <td>2011/04/25</td>
              <td>2011/04/31</td>
              <td>
                <button name="return" class="btn btn-success">Return</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

