<div>
    <form wire:submit.prevent='save'>
        <div class="d-flex justify-content-center">
        <div>
            <img src="{{ asset('logo.jpg') }}" width="70" height="70" class="user-image img-circle elevation-2" alt="User Image">
        </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card mt-2 w-50">
                <div class="card-body">
                        <div class="form-group">
                            <label for="schoolName">School name</label>
                            <input id="schoolName" class="form-control
                            @error('name') is-invalid border border-danger rounded @enderror"
                            type="text" wire:model.defer='state.name'>
                            @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="schoolPhone">Scholl phone</label>
                            <input id="schoolPhone" class="form-control
                            @error('phone') is-invalid border border-danger rounded @enderror""
                            type="text" wire:model.defer='state.phone'>
                            @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="schoolEmail">School email</label>
                            <input id="schoolEmail" class="form-control  @error('email') is-invalid border border-danger rounded @enderror"" "
                                type="text" wire:model.defer='state.email'>
                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                </div>
            </div>
        </div>
    </form>

</div>
