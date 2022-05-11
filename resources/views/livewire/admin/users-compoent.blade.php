<div>
    <div class="card">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
            <h4>LIST OF TEACHRES</h4>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addTeacherModal">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Add new teacher
            </button>
        </div>
        </div>
        <div class="card-body table-responsive p-0 table-sm">
          <table class="table table-striped table-valign-middle">
            <thead>
            <tr>
              <th>User name</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Role</th>
              <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($school->users as $user)
                    <tr>
                        <td>
                            <img src="{{ asset('defautl-user.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                            {{$user->name}}
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->gender}}</td>
                        <td>{{$user->role->name}}</td>
                        <td class="text-center">
                            <a href="#" type="button" data-toggle="modal" data-target="#editTeacherModal" wire:click='edit({{$user}})'><i class="fas fa-edit    "></i></a>
                            <a href="#" wire:click='showDeleteUser({{$user}})'><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
          </table>
        </div>
    </div>
    @include('components.modals.add-teacher')
    @include('components.modals.edit-teacher')
</div>
