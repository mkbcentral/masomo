
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTeacherModalLabel">ADD NEW TEACHER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form autocomplete="off">
            <div class="form-group">
                <label for="nameSector">Name</label>
                <input id="nameSector" class="form-control
                    @error('name') is-invalid border border-danger rounded @enderror"
                    type="text" wire:model.defer="state.name"/>
                    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nameSector">Email</label>
                <input id="nameSector" class="form-control
                    @error('email') is-invalid border border-danger rounded @enderror"
                    type="email" wire:model.defer="state.email"/>
                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="sectorId">Role</label>
                <select id="sectorId" class="form-control
                    @error('gender') is-invalid border border-danger rounded @enderror"
                     wire:model.defer="state.gender">
                    <option>Choise gender...</option>
                    <option >M</option>
                    <option >F</option>
                </select>
                @error('gender') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="sectorId">Role</label>
                <select id="sectorId" class="form-control
                    @error('role_id') is-invalid border border-danger rounded @enderror"
                     wire:model.defer="state.role_id">
                    <option>Choise sector...</option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
                @error('role_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="sectorId">Is to</label>
                <select id="sectorId" class="form-control  @error('sector_id') is-invalid border border-danger rounded @enderror" wire:model.defer="state.sector_id">
                    <option>Choise sector...</option>
                    @foreach ($sectors as $sector)
                        <option value="{{$sector->id}}">{{$sector->name}}</option>
                    @endforeach
                </select>
                @error('sector_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button"  wire:click.prevent='saveTeacher' class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
