<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>

@include('template.head')
@include('template.navbar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> {{$user['users']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-users">
          <i class="fa fa-plus">Add Data User</i></a>
      </button>
      @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
      <br><br>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Birthday</th>
            <th>Is Active</th>
            <th>Role</th>
            <th>Opsi</th>
        </tr>
        </thead>
        @foreach($user as $users)
        <tbody>
        <tr>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->birthday }}</td>
            <td>{{ $users->is_active }}</td>
            <td>{{ $users->role }}</td>
        <td>
            <a class="far fa-edit" href="/users/{{$users->id}}"></a>
            <a class="fa fa-trash" href="/users/delete/{{$users->id}}"></a>
        </td>
        </tr>
        </tbody>
        @endforeach
    </table>

      <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data users</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-users" method="post">
           {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1" >Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Password Strength</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fas fa-lock"></i>
                </div>
                </div>
                 <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Phone Number</label>
                <div class="input-group">
                <div class="input-group-prepend">
                 <div class="input-group-text">
                <i class="fas fa-phone"></i>
                </div>
                </div>
                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Address</label>
                <input type="text" name="payment_method_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Birthday</label>
                <input type="date" name="qty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
                <div class="form-group">
                <label for="exampleInputEmail1" >Is Active</label>
                <select name="is_active" class="form-control select2" multiple="">
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            <div class="form-group">
                <label for="exampleInputEmail1" >Role</label>
                <select name="role" class="form-control select2" multiple="">
                    <option>Admin</option>
                    <option>Seller</option>
                    <option>Buyer</option>
                    <option>Publisher</option>
                </select>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="/users">back</a>
                <button  class="btn btn-success btn-sm">save</button>
            </div>
            </form>  
        </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->

    {{ $user->links() }}
    </div>


</body>
</html>