<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>user</title>
</head>
<body>
    <center><h3 class="text-center mb-4"> Data user</h3></center>
    <form action="/users/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                            <label for="name" class="form-label">Name</label><br>
                            <input type="text" class="form-control" name="name" require="required">
                            </div>
                            <div class="form-group">
                            <label for="email" class="form-label">Email</label><br>
                            <input type="email" class="form-control" name="email" require="required">
                            </div>
                            <div class="form-group">
                            <label for="password" class="form-label">Password</label><br>
                            <input type="password" class="form-control" name="password" require="required">
                            </div>
                            <div class="form-group">
                            <label for="phone" class="form-label">Phone</label><br>
                            <input type="text" class="form-control" name="phone" require="required">
                            </div>
                            <div class="form-group">
                            <label for="address" class="form-label">Address</label><br>
                            <input type="text" class="form-control" name="address" require="required">
                            </div>
                            <div class="form-group">
                            <label for="birthday" class="form-label">Birthday</label><br>
                            <input type="date" class="form-control" name="birthday" require="required">
                            </div>
                            <div class="form-group">
                            <label for="is_active" class="form-label">Is Active</label><br>
                            <input type="text" class="form-control" name="is_active" require="required">
                            </div>
                            <div class="form-group">
                                <label for="role" class="form-label">Role</label>
                                <div class="form-group">
                                <select class="form-control">
                                    <option>Admin</option>
                                    <option>Seller</option>
                                    <option>Buyer</option>
                                    <option>Publisher</option>
                                </select>
                                </div> 
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/users" class="btn btn-secoundary">back</a>
                              <input type="submit" value="Save" class="btn btn-primary float-right">
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
</body>
</html>
</html>