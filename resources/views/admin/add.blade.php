@extends('layouts.admin_dashboard')
@section('admin-content')
        <div class="form-group col-md-6 mb-3">
            <label for="exampleFormControlTextarea1">Book Title</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Book Name">
        </div>
        <div class="form-group col-md-6 mb-3">
            <label for="exampleFormControlTextarea1">Author Name</label>
            <input type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Author Name">
        </div>
        {{-- <div class="form-group col-md-4 mb-3">
            <label for="exampleFormControlSelect1">Select Genres</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Romance</option>
            </select>
        </div>
        <div class="col-md-1"><a class="btn btn-success" href="#" role="button">Add</a></div>   --}}
        <div class="form-group col-md-6 mb-3 mt-3">
            <label for="exampleFormControlTextarea1">All Genres</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="col-md-2 mb-5">
        <p>Choose Thumbnail:</p>
        <input type="file" id="myFile" name="filename2">
        </div>
  
        <div class="col-md-1"><a class="btn btn-success" href="#" role="button">Submit</a></div>
        
    
    
@endsection