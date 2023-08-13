<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transactions</title>
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
            <h1 class="m-0"> {{$transactions['transaction']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-transaction">
          <i class="fa fa-plus">Add Data transactions</i></a>
      </button>
      @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
      <br><br>

      @php
      function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
      }
      @endphp


      <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead>
                      <tr>
                        <th>Buyer Id</th>
                        <th>Book Id</th>
                        <th>Payment Method Id</th>
                        <th>QTY</th>
                        <th>Price</th>
                        <th>PPN</th>
                        <th>Discount</th>
                        <th>Total Payment</th>
                        <th>Status</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    @foreach($transactions as $transaction)
                    <tbody>
                      <tr>
                        <td>{{ $transaction->buyer_id }}</td>
                        <td>{{ $transaction->book_id }}</td>
                        <td>{{ $transaction->payment_method_id }}</td>
                        <td>{{ $transaction->qty }}</td>
                        <td>{{ rupiah($transaction->price) }}</td>
                        <td>{{ rupiah($transaction->ppn) }}</td>
                        <td>{{ $transaction->discount }}</td>
                        <td>{{ rupiah($transaction->total_payment) }}</td>
                        <td><label class="btn {{( $transaction->status == 1) ? 'btn-success' : 'btn-danger'}}">{{ ($transaction->status ==1) ? 'active' : 'Inactive' }}</label></td>
                        <td>
                          <a class="btn btn-warning" href="/transaction/{{$transaction->id}}">edit</a>
                          <a class="btn btn-danger" href="/transaction/delete/{{$transaction->id}}">hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data transaction</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-transaction" method="post">
           {{ csrf_field() }}
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Buyer Id</label><br>
                                <input type="number" name="buyer_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Book Id</label><br>
                                <input type="number" name="book_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Payment Method Id</label><br>
                                <input type="number" name="payment_method_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >QTY</label><br>
                                <input type="number" name="qty" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Price</label><br>
                                <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >PPN</label><br>
                                <input type="number" name="ppn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Discount</label><br>
                                <input type="number" name="discount" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Total Payment</label><br>
                                <input type="number" name="total_payment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1" >Status</label>
                                <select name="status"class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                <option>--select--</option>
                                <option>1</option>
                                <option>0</option>
                                </select>
                              </div>
                                    <div class="modal-footer">
                                    <a class="btn btn-danger" href="/transaction">back</a>
                                    <button  class="btn btn-success btn-sm">save</button>
                                    </div>
                                  </form>
        </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->

    {{ $transactions->links() }}
    </div>


</body>
</html>