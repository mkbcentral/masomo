
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="editOptionModal" tabindex="-1" role="dialog" aria-labelledby="editOptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editOptionModalLabel">ADD NEW SECTOR</h5>
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
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" wire:click.prevent='updateOption'  class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
