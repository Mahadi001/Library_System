@extends('layouts.admin_dashboard')
@section('admin-content')
        <div class="form-group col-md-6">
                <label for="title" class="col-form-label">Book Title</label>
                <input type="text" class="form-control" name="title" placeholder="title">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="exampleFormControlSelect1">Select Author</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Romance</option>
                </select>
                <button class="btn btn-success mt-3">Add</button>
            </div>  
            <div class="form-group col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">All Authors</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
    <div class="form-row">
        <div class="form-group col-md-6 mb-3">
            <label for="exampleFormControlSelect1">Select Genres</label>
            <select class="form-control" id="exampleFormControlSelect1">
            <option>Romance</option>
            </select>
            <button class="btn btn-success mt-3">Add</button>
        </div>  
        <div class="form-group col-md-6 mb-3">
            <label for="exampleFormControlTextarea1">All Genres</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
    </div>
        <div class="col-md-2 mb-5">
            <p>Choose Thumbnail:</p>
            <input type="file" id="myFile" name="filename2">
        </div>
  
        <div class="col-md-1 mb-5"><a class="btn btn-success" href="#" role="button">Submit</a></div>
        
    
    
@endsection