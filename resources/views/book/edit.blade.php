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
                <center><h3 class="text-center mb-4">Edit book</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/book/update/{{ $books->id}}" method="post" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="hidden" name="id" value="{{ $books->id}}">  
                <div class="card-body">
                                <div class="form-group">
                                <label for="title">Title</label><br>
                                <input type="text" class="form-control" name="title" required="required"  value="{{ $books->title}}">
                                </div>
                                <div class="form-group">
                                <label for="creator_id">Creator Id</label><br>
                                <input type="number" class="form-control" name="creator_id" required="required"  value="{{ $books->creator_id}}">
                                </div>
                                <div class="form-group">
                                <label for="amount">Amount</label><br>
                                <input type="number" class="form-control" name="amount" required="required"  value="{{ $books->amount}}">                                </div>
                                <div class="form-group">
                                <label for="published_date">Published Date</label><br>
                                <input type="date" class="form-control" name="published_date" required="required" value="{{ $books->published_date}}">
                                  </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="col-12">
                            <a a href="/book" class="btn btn-secondary">Cancel</a>
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