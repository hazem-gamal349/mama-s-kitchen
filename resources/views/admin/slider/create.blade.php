@extends('layouts.app')

@section('title', 'Slider')

@push('css')


@endpush
    

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @include('layouts.partial.msg')
          <div class="card">
            <div class="card-header " data-background-color="purple">
              <h4 class="card-title ">Add New Slider</h4>
            </div>
            <div class="card-body">
              <div class="card-content">
                <form method="POST" action="{{route('slider.store') }}" enctype="multipart/form-data">
            
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group  label-floating">
                            <label class="control-label">Title</label>
                            <input type="text" class="form-control" name="title">
                          </div>
                        </div> 
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group  label-floating">
                            <label class="control-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title">
                          </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label">Image</label>
                            <input type="file" name="image">
                        </div>
                    </div>
                    <a href="{{route('slider.index') }}" class="btn btn-danger">Back</a>
                    <button type="submit" class="btn btn-primary">Save</button>

                    @csrf
                </form>
              </div>
            </div>
          </div>
        </div>
       
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="">
                    <th>
                      ID
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Country
                    </th>
                    <th>
                      City
                    </th>
                    <th>
                      Salary
                    </th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@push('scripts')
    

@endpush