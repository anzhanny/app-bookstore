<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Practice CRUD UNPASIM</title>
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
                <center><h3 class="text-center mb-4">Edit transaction</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/transaction/update/{{ $transactions->id}}" method="post" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="hidden" name="id" value="{{ $transactions->id}}">  
                <div class="card-body">
                <div class="form-group">
                                <label for="buyer_id">Buyer Id</label><br>
                                <input type="number" class="form-control" name="buyer_id" required="required"  value="{{ $transactions->buyer_id}}">
                                </div>
                                <div class="form-group">
                                <label for="book_id">Book Id</label><br>
                                <input type="number" class="form-control" name="book_id" required="required"  value="{{ $transactions->book_id}}">
                                </div>
                                <div class="form-group">
                                <label for="payment_method_id">Payment Method Id</label><br>
                                <input type="number" class="form-control" name="payment_method_id" required="required"  value="{{ $transactions->payment_method_id}}">                                </div>
                                <div class="form-group">
                                <label for="qty">QTY</label><br>
                                <input type="number" class="form-control" name="qty" required="required" value="{{ $transactions->qty}}">
                                  </div>    
                                  <label for="price">Price</label><br>
                                <input type="number" class="form-control" name="price" required="required"  value="{{ $transactions->price}}">
                                </div>
                                <div class="form-group">
                                <label for="ppn">PPN</label><br>
                                <input type="number" class="form-control" name="ppn" required="required"  value="{{ $transactions->ppn}}">
                                </div>
                                <div class="form-group">
                                <label for="discount">Discount</label><br>
                                <input type="number" class="form-control" name="discount" required="required"  value="{{ $transactions->discount}}">                                </div>
                                <div class="form-group">
                                <label for="total_payment">Total Payment</label><br>
                                <input type="number" class="form-control" name="total_payment" required="required" value="{{ $transactions->total_payment}}">
                                  </div>    
                                  <div class="form-group">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" require="required">
                                <option>Success</option>
                                <option>failure</option>
                            </select>
                            </div>         <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="col-12">
                            <a a href="/transaction" class="btn btn-secondary">Cancel</a>
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