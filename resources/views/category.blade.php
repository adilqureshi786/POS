@extends('layouts.app')

@section('demo')
<table id="users-table" class="table table-condensed">

    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>active</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>
</table>
@endsection
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}"></script>
@section('js')
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url("user/basic-data") }}'
        });
    });
@endsection




