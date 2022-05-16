
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addClasseSecondaryModal" tabindex="-1" role="dialog" aria-labelledby="addClasseSecondaryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addClasseSecondaryModalLabel">ADD NEW CLASS SECONDARY</h5>
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
                <label for="sectorId">Teacher manager</label>
                <select id="sectorId" class="form-control
                    @error('user_id') is-invalid border border-danger rounded @enderror"
                     wire:model.defer="state.user_id">
                    <option>Choise sector...</option>
                    @foreach ($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>
                @error('user_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button"  wire:click.prevent='saveClasse' class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
