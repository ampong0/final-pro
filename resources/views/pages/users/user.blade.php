@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-12">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <div class="d-flex justify-content-between px-5">
                <h6 class="mb-0">Reports</h6>
                <a href="/user/add" class="btn btn-primary">Add</a>
            </div>
            
          </div>
          <div class="card-body pt-4 p-3">
            <table class="table table-flush dataTable-table" id="reports-list">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Team</th>
                    <th>Action</th>
                  </tr>
                </thead>
               <tbody></tbody>
              </table>
          </div>
        </div>
      </div>
</div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>


	$(document).ready(function () {
$('#reports-list').DataTable({
    ajax: {
      url:"/users/fetch",
    },
    columns: [
        { data: 'Id' },
        { data: 'Name' },
        {data: 'Email'},
        { data: 'Role'},
        { data: 'Team'},
        { data: 'Id',
         render:function(data,type,row,meta){
          return `<button class="btn" data-bs-toggle="tooltip" data-bs-original-title="Preview product"  onclick="showRecord(${data})">
                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                        </button>
                    <button class="btn" onclick="editRecord(${data})"class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                    <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                    </button>
                    <button class="btn" onclick="deleteRecords(${data})" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                          <i class="material-icons text-secondary position-relative text-lg">delete</i>
                        </button>`;
         } },
    ],
});
});

function editRecord(id){
    console.log(id)
	window.location.href = `user/${id}/edit`
}
</script>
@endsection