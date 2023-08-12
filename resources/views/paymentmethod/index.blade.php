<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paymentmethod</title>
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
            <h1 class="m-0"> {{$paymentmethods['paymentmethod']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-paymentmethod">
          <i class="fa fa-plus">Add Data paymentmethods</i></a>
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
                        <th>Account Number</th>
                        <th>Type</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    @foreach($paymentmethods as $paymentmethod)
                    <tbody>
                      <tr>
                        <td>{{ $paymentmethod->name }}</td>
                        <td>{{ $paymentmethod->account_number }}</td>
                        <td>{{ $paymentmethod->type }}</td>
                        <td>
                          <a class="far fa-edit" href="/paymentmethod/{{$paymentmethod->id}}"></a>
                          <a class="fa fa-trash" href="/paymentmethod/delete/{{$paymentmethod->id}}"></a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data paymentmethod</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-paymentmethod" method="post">
           {{ csrf_field() }}

                                <div class="form-group">
                                <label for="exampleInputEmail1" >Name</label><br>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Account Number</label><br>
                                <input type="number" name="account_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Type</label><br>
                                <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>

           <div class="modal-footer">
                <a class="btn btn-danger" href="/paymentmethod">back</a>
                <button  class="btn btn-success btn-sm">save</button>
            </div>
            </form>  
        </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->

    {{ $paymentmethods->links() }}
    </div>


</body>
</html>