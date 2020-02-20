@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Laravel 5.8 Datatables Tutorial <br/> HDTuto.com</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Estate</th>
                <th>Status</th>
                <th>From</th>
                <th>To</th>
                <th>Service</th>
                <th>Delivery</th>


                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.orders') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'estate', name: 'estate'},
            {data: 'status', name: 'status'},
            {data: 'by.name', name: 'by.name'},
            {data: 'to.name', name: 'to.name'},
            {data: 'date', name: 'date'},
            {data: 'service.name', name: 'service.name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>

@endsection