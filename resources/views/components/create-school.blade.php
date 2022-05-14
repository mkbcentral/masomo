<div>
    <form wire:submit.prevent='save'>
        <div class="d-flex justify-content-center">
            <div>
                <h3>CREATE YOUY SCHOOL</h3>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <div x-data="{imagePreview: '{{Auth::user()->school==null ? asset('logo.jpg') : Storage::url(Auth::user()->logo_url) }}'}">
                <input class="d-none" wire:model='logo_url' type="file" x-ref="image"x-on:change="
                                        reader = new FileReader();
                                        reader.onload=(event)=>{
                                            imagePreview=event.target.result;
                                        };
                                        reader.readAsDataURL($refs.image.files[0]);
                                    "
                                />
                <img x-on:click="$refs.image.click()"  x-bind:src="imagePreview ? imagePreview: '{{ asset('defautl-user.jpg') }}'" width="70" height="70" class="user-image img-circle elevation-2" alt="User Image">
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
@push('styles')
    <style>
        .user-image:hover{
            background-color: grey;
            cursor: pointer
        }
    </style>
@endpush
