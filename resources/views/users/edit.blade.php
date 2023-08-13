<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>user</title>
</head>
<body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <center><h3 class="text-center mb-4">Edit users</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/users/update/{{ $user->id}}" method="post" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="hidden" name="id" value="{{ $user->id}}">  
                <div class="card-body">
                <div class="form-group">
                                <label for="name">Name</label><br>
                                <input type="text" class="form-control" name="name" required="required"  value="{{ $user->name}}">
                                </div>
                                <div class="form-group">
                                <label for="email">Email</label><br>
                                <input type="email" class="form-control" name="email" required="required"  value="{{ $user->email}}">
                                </div>
                                <div class="form-group">
                                <label for="password">Password</label><br>
                                <input type="password" class="form-control" name="password" required="required"  value="{{ $user->password}}">                                </div>
                                <div class="form-group">
                                <label for="phone">Phone</label><br>
                                <input type="integer" class="form-control" name="phone" required="required" value="{{ $user->phone}}">
                                  </div>    
                                  <label for="address">Address</label><br>
                                <input type="text" class="form-control" name="address" required="required"  value="{{ $user->address}}">
                                </div>
                                <div class="form-group">
                                <label for="birthday">Birthday</label><br>
                                <input type="date" class="form-control" name="birthday" required="required"  value="{{ $user->birthday}}">
                                </div>
                                <!-- <div class="form-group">
                                <label for="is_active">Is Active</label><br>
                                <input type="string" class="form-control" name="is_active" required="required"  value="{{ $user->is_active}}">                                </div>
                                <div class="form-group"> -->
                                <label for="is_active" class="form-label">Is Active</label>
                            <select class="form-control" name="is_active" require="required">
                            <option>--select--</option>
                                <option>1</option>
                                <option>0</option>
                            </select>
                            </div> 
                            <label for="role" class="form-label">Role</label>
                            <select class="form-control" name="role" require="required">
                            <option>--select--</option>
                            <option>admin</option>
                                <option>seller</option>
                                <option>buyer</option>
                                <option>publisher</option>
                            </select>
                            </div>           <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="col-12">
                            <a a href="/users" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save Changes" class="btn btn-success float-right">
                        </div>
                    </div>
            <!-- /.card -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</body>
</html>