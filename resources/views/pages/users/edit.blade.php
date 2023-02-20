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
            <form method="post" action="{{route('user.update',$user->id)}}">  
                @csrf
                <div class="row">
                  {{-- <div class="col-md-6">
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">First Name</label>
                      <input type="firstname" name="firstname" class="form-control">
                    </div>
                  </div> --}}
                  <?php 
                  $name_array = explode(' ',$user->name);
                //   var_dump($name_array);
                  ?>
                  <div class="col-12 col-sm-6">
                    <div class="input-group input-group-dynamic is-focused focused">
                    <label class="form-label">First Name</label>
                    <input class="multisteps-form__input form-control" name="firstname" value="{{$name_array[0]}}" type="text" onfocus="focused(this)" onfocusout="defocused(this)" required>
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="input-group input-group-outline my-3 is-focused focused">
                      <label class="form-label">Last Name</label>
                      <input type="lastname" name="lastname" value="{{(count($name_array) == 2)?$name_array[1]:''}}" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-outline my-3 is-focused focused">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label ms-0 mb-0">Select Team</label>
                        <select name="team" class="form-control" id="exampleFormControlSelect2" style="background-color: white; border:1px solid #d2d6da;">
                            <option value="1" {{ ($user->team == 1)?'selected': ''; }} >Team 1</option>
                            <option value="2" {{ ($user->team == 2)?'selected': ''; }}>Team 2</option>
                            <option value="3" {{ ($user->team == 3)?'selected': ''; }}>Team 3</option>
                        </select>
                        </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                        <label class="form-label ms-0 mb-0">Select Role</label>
                        <select name="role" class="form-control" id="exampleFormControlSelect2" style="background-color: white; border:1px solid #d2d6da;">
                            <option value="1" {{ ($user->team == 1)?'selected': ''; }}>Admin</option>
                            <option value="2" {{ ($user->team == 2)?'selected': ''; }}>Staff</option>
                        </select>
                        </div>
                  </div>
                  <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
              </form>        
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
        { data: 'Team'},
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