<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
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
            <h1 class="m-0"> {{$books['book']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-book">
          <i class="fa fa-plus">Add Data books</i></a>
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
                        <th>Title</th>
                        <th>Creator Id</th>
                        <th>Amount</th>
                        <th>Published Date</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    @foreach($books as $book)
                    <tbody>
                      <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->creator_id }}</td>
                        <td>{{ $book->amount }}</td>
                        <td>{{ $book->published_date }}</td>
                        <td>
                          <a class="btn btn-warning" href="/book/{{$book->id}}">edit</a>
                          <a class="btn btn-danger" href="/book/delete/{{$book->id}}">hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data book</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-book" method="post">
           {{ csrf_field() }}
           <div class="form-group">
                                <label for="exampleInputEmail1" >Title</label><br>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Creator Id</label><br>
                                <input type="number" name="creator_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Amount</label><br>
                                <input type="number" name="amount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Published Date</label><br>
                                <input type="date" name="published_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                  </div>
           <div class="modal-footer">
                <a class="btn btn-primary" href="/book">back</a>
                <button  class="btn btn-success btn-sm">save</button>
            </div>
            </form>  
        </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->

    {{ $books->links() }}
    </div>


</body>
</html>