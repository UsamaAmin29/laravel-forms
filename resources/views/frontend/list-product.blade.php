@extends('/home')

@section('extracss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
<div class="ms-5 me-5">
<div class="d-flex flex-row-reverse bd-highlight">
    <div class="p-2 bd-highlight"><a class="btn btn-md btn-primary " href={{ url('/add') }}>Add Product</a></div>
</div>
<table id="example" class="table table-striped" style="width:100%">

    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Contact No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
            
        
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->fname}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            <td> 
                <a class="btn btn-sm btn-warning" href="{{route('edit.product', ['id' => $item->id]) }}">Edit</a>
                <a class="btn btn-sm btn-danger" href="{{route('delete.product',['id' => $item->id])}}">Delete</a>
            </td>
        </tr>
        @endforeach 
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Father Name</th>
            <th>Address</th>
            <th>Contact No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </tfoot>
</table>
</div>
</div>
@endsection

@section('script')


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>

    $(document).ready(function() {
        $('#example').DataTable();
    } );
    
    </script>
@endsection