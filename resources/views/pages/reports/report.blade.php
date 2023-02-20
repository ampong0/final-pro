@extends('layouts.app')

@section('content')
	<div class="container-fluid">
		<div class="col-12">
			<div class="card">
			  <div class="card-header pb-0 px-3">
				<div class="d-flex justify-content-between px-5">
					<h6 class="mb-0">Reports</h6>
					<a href="/report/add" class="btn btn-primary">Add</a>
				</div>
				
			  </div>
			  <div class="card-body pt-4 p-3">
				<table class="table table-flush dataTable-table" id="reports-list">
					<thead>
					  <tr>
						<th>Id</th>
						<th>Full Name</th>
						<th>Contact</th>
						<th>Disposition</th>
						<th>Failed Mandate</th>
						{{-- <th>Date</th> --}}
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
      url:"report/all",
    },
    columns: [
        { data: 'Id' },
        { data: 'User' },
        { data: 'Contact'},
        { data: 'Disposition'},
        { data: 'Failed Mandate'},
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
	window.location.href = `report/${id}/edit`
}
</script>
@endsection