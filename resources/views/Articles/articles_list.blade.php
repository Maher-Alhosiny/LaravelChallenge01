@extends('admin.master')
@section('content')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Articals Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="{{route('art.create')}}" class="btn btn-success">Add New</a>

                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  <div class="col-md-12">




                  @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @else <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif


                    

                  </div>
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Catigory</th>
                      <th>Article Name</th>
                      <th>Article status</th>
                      <th>created at</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($arts as $articles)
                    <tr>
                      <td>{{$articles->id}}</td>
                      <td>{{$articles->cat_id}}</td>
                      <td>{{$articles->title}}</td>
                      <td>@if($articles->is_active==1)Active @else Not Active @endif</td>
                      <td><span class="tag tag-danger">{{$articles->created_at}}</span></td>
                      <td>{{$articles->updated_at}}</td>
                      <td><div class="btn-group" role="group" aria-label="Basic example">
                        <a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                        <a href="#" class="btn btn-coms"> Comments </a>

                      </div></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
                     </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
