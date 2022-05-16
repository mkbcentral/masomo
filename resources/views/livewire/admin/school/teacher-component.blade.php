<div>
    <div class="card {{setting('is_dark_mode') ? 'bg-dark':'bg-light'}}"">
        <div class="card-header border-0">
            <div class="d-flex justify-content-between">
            <h4>LISTE DES ENSEIGNANTS</h4>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addTeacherModal">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvel enseingnant
            </button>
        </div>
        </div>
        @if ($teachers->isempty())
        <h4 class="text-center text-success"><i class="fa fa-database" aria-hidden="true"></i> No data load</h4>
        @else
        <div class="card-body table-responsive p-0 table-sm">
            <table class="table table-striped table-valign-middle">
              <thead>
              <tr>
                <th>Nom enseignant</th>
                <th>Email</th>
                <th>Genre</th>
                <th>Role</th>
                <th class="text-center">Actions</th>
              </tr>
              </thead>
              <tbody>
                  @foreach ($teachers as $teacher)
                      <tr>
                          <td>
                              <img src="{{ asset('defautl-user.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                              {{$teacher->name}}
                          </td>
                          <td>{{$teacher->email}}</td>
                          <td>{{$teacher->gender}}</td>
                          <td>{{$teacher->role->name}}</td>
                          <td class="text-center">
                              <a href="#" type="button" data-toggle="modal" data-target="#editTeacherModal" wire:click='edit({{$teacher}})'><i class="fas fa-edit    "></i></a>
                              <a href="#" wire:click='showDeleteUser({{$teacher}})'><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                          </td>
                      </tr>
                      @endforeach
              </tbody>
            </table>
          </div>
        @endif
    </div>
    @include('components.modals.add-teacher')
    @include('components.modals.edit-teacher')
</div>
