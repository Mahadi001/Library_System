@extends('layouts.admin_dashboard')
@section('admin-content')
        <div class="form-row">
            <div class="form-group col-md-4 mx-3">
                    <label for="title" class="col-form-label">Book Title</label>
                    <input type="text" class="form-control" name="title" placeholder="title">
            </div>
            <div class="form-group col-md-4">
                <label for="title" class="col-form-label">Language</label>
                <input type="text" class="form-control" name="title" placeholder="Language">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4 mb-3 mx-3">
                <label for="exampleFormControlSelect1">Select Author</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Harper lee</option>
                </select>
                <button class="btn btn-success mt-3">Add</button>
            </div> 
            <div class="form-group col-md-4 mb-3">
                <label for="exampleFormControlTextarea1">All Authors</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>        
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-4 mb-3 mx-3">
                <label for="exampleFormControlSelect1">Select Genre</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Romance</option>
                </select>
                <button class="btn btn-success mt-3">Add</button>
            </div>  
            <div class="form-group col-md-4 mb-3">
                <label for="exampleFormControlTextarea1">All Genres</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4 mx-3">
                    <label for="title" class="col-form-label">Number of Pages</label>
                    <input type="text" class="form-control" name="number_of_pages" placeholder="Number of Pages">
            </div>
            <div class="form-group col-md-4">
                <label for="title" class="col-form-label">Published Date</label>
                <input type="date" class="form-control" name="published_date" placeholder="Published Date">
            </div>
        </div>
    
        <div class="col-md-2 mb-5">
            <p>Choose Thumbnail:</p>
            <input type="file" id="myFile" name="filename2">
        </div>
  
        <div class="col-md-1 mb-5"><a class="btn btn-success" href="#" role="button">Submit</a></div>
        
    
    
@endsection