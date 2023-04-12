@extends('admin-template')

@section ('content-wrapper')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">
        {{ $title }}
        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard v1</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">User Information</h3>


              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">


                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>

                  </div>

                </div>

                  <a class="btn btn-primary" href="{{url('Users/create')}}" > + Add Member <a>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap">
                <thead>
      						<tr>
      							<th>Name</th>
      							<th>Email</th>
      							<th>Password</th>
      							<th>Action</th>
      						</tr>

      					</thead>

      					<tbody>

      						@foreach($User_list as $user)
      							<tr>
      								<td>{{ $user->name }}</td>
      								<td>{{ $user->email }}</td>
      								<td>{{ $user->password }}</td>
      								<td>


                        <div class="btn-group">

                          <a class="btn btn-warning btn-sm" href="{{ url('/Users/'.$user->id.'/edit') }}" > Edit <a>
                            <form method="post" action="{{ url('/Users/'.$user->id )}}">
                              <input type="hidden" name="_method" value="DELETE" />
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                              <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>
                        </div>

      								</td>
      							</tr>

      						@endforeach
      					</tbody>


      				</table>
      			</div>
      		</div>
      	</div>


          <!-- /.card -->
        </div>
      </div>

</section>
<!-- /.content -->
@stop
