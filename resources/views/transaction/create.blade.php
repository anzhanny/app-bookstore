<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>transaction</title>
</head>
<body>
    <center><h3 class="text-center mb-4"> Data transaction</h3></center>
    <form action="/transaction/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                        <div class="form-group">
                        <label for="buyer_id" class="form-label">Buyer Id</label>
                        <input type="number" class="form-control" name="buyer_id" require="required">
                        </div>
                        <div class="form-group">
                        <label for="book_id" class="form-label">Book Id</label>
                        <input type="number" class="form-control" name="book_id" require="required">
                        </div>
                        <div class="form-group">
                        <label for="payment_method_id" class="form-label">Payment Method Id</label>
                        <input type="number" class="form-control" name="payment_method_id" require="required">
                        </div>
                        <div class="form-group">
                        <label for="qty" class="form-label">QTY</label>
                        <input type="number" class="form-control" name="qty" require="required">
                        </div>
                        <div class="form-group">
                        <label for="price" class="form-label">Price</label><br>
                        <input type="number" class="form-control" name="price" require="required">
                        </div>
                        <div class="form-group">
                        <label for="ppn" class="form-label">PPN</label>
                        <input type="number" class="form-control" name="ppn" require="required">
                        </div>
                        <div class="form-group">
                        <label for="discount" class="form-label">Discount</label><br>
                        <input type="number" class="form-control" name="discount" require="required">
                        </div>
                        <div class="form-group">
                        <label for="total_payment" class="form-label">Total Payment</label>
                        <input type="number" class="form-control" name="total_payment" require="required">
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" name="status" require="required">
                                <option>--select--</option>
                                <option>1</option>
                                <option>0</option>
                            </select>
                            </div>

                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/transaction" class="btn btn-secoundary">back</a>
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