@extends('layouts.admin_dashboard')
@section('admin-content')
      <!-- List of Requests -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      List of Requests</div>
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
                <a class="btn btn-success" href="#" role="button">Edit</a>
                <a class="btn btn-danger" href="#" role="button">Remove</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection