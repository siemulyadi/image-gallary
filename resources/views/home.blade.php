@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-center">
                        <div class="Images"></div>
                        <div>
                            <form class="form-inline">
                                <select class="form-control">
                                    <option>Oldest</option>
                                    <option>Latest</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">Personal</a>
                                <a href="#" class="list-group-item list-group-item-action">Friends</a>
                                <a href="#" class="list-group-item list-group-item-action">Family</a>
                              </div>
                        </div>
                        <div class="col-md-9">
                            <button data-toggle="collapse" class=" btn btn-success" data-target="#demo">Add Image</button>

                            <div id="demo" class="collapse">
                                <form action="/action_page.php">
                                    <div class="form-group">
                                      <label for="caption">Image Caption</label>
                                      <input type="text" class="form-control" placeholder="Enter Caption" id="caption">
                                    </div>
                                    <div class="form-group">
                                      <label for="pwd">Password:</label>
                                      <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label for="sel1">Select list:</label>
                                        <select class="form-control" id="sel1">
                                          <option>Select a category</option>
                                          <option>Personal</option>
                                          <option>Friends</option>
                                          <option>Family</option>
                                        </select>
                                      </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>



                            </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
