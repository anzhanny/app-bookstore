<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>book</title>
</head>
<body>
    <center><h3 class="text-center mb-4"> Data book</h3></center>
    <form action="/book/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label><br>
                            <input type="text" class="form-control" name="title" require="required">
                            </div>
                            <div class="form-group">
                            <label for="creator_id" class="form-label">Creator Id</label><br>
                            <input type="number" class="form-control" name="creator_id" require="required">
                            </div>
                            <div class="form-group">
                            <label for="amount" class="form-label">Amount</label><br>
                            <input type="number" class="form-control" name="amount" require="required">
                            </div>
                            <div class="form-group">
                            <label for="published_date" class="form-label">Published Date</label><br>
                            <input type="date" class="form-control" name="published_date" require="required">
                            </div>                       
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/book" class="btn btn-secoundary">back</a>
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