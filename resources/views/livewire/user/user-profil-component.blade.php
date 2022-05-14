<div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center" x-data="{imagePreview: '{{Auth::user()->avatar==null ? asset('defautl-user.jpg') : Storage::url(Auth::user()->avatar) }}'}">
                                <input class="d-none" wire:model='avatar' type="file" x-ref="image"x-on:change="
                                        reader = new FileReader();
                                        reader.onload=(event)=>{
                                            imagePreview=event.target.result;
                                            document.getElementById('profileImage').src= `${imagePreview}`;
                                            document.getElementById('profileImage1').src= `${imagePreview}`;
                                            document.getElementById('profileImage2').src= `${imagePreview}`
                                            document.getElementById('profileImage3').src= `${imagePreview}`;
                                        };
                                        reader.readAsDataURL($refs.image.files[0]);
                                    "
                                />
                                <img x-on:click="$refs.image.click()" class="profile-user-img img-circle"
                                    x-bind:src="imagePreview ? imagePreview: '{{ asset('defautl-user.jpg') }}'"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                            <p class="text-muted text-center">{{Auth::user()->role->name }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills" wire:ignore>
                                <li class="nav-item"><a class="nav-link active" href="#settings"
                                        data-toggle="tab">Settings</a></li>
                                <li class="nav-item"><a class="nav-link" href="#changePassword" data-toggle="tab">Change
                                        Password</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings" wire:ignore.self>
                                    <form wire:submit.prevent='updateProfile' class="form-horizontal" autocomplete="off">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input wire:model.defer='state.name' type="text"
                                                    class="form-control  @error('name') is-invalid border border-danger rounded @enderror" id="inputName"
                                                    placeholder="Name">
                                                    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input wire:model.defer='state.email' type="email"
                                                    class="form-control @error('email') is-invalid border border-danger rounded @enderror" id="inputEmail"
                                                    placeholder="Email">
                                                    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane" id="changePassword" wire:ignore.self>
                                    <form autocomplete="off" class="form-horizontal" wire:submit.prevent='changePassword'>
                                        <div class="form-group row">
                                            <label for="currentPassword" class="col-sm-3 col-form-label">Current
                                                Password</label>
                                            <div class="col-sm-9">
                                                <input wire:model.defer='state.current_password' type="password"
                                                    class="form-control @error('current_password') is-invalid border border-danger rounded @enderror" id="currentPassword"
                                                    placeholder="Current Password">
                                                    @error('current_password') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="newPassword" class="col-sm-3 col-form-label">New
                                                Password</label>
                                            <div class="col-sm-9">
                                                <input wire:model.defer='state.password' type="password"
                                                    class="form-control @error('password') is-invalid border border-danger rounded @enderror" id="newPassword"
                                                    placeholder="New Password">
                                                    @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="passwordConfirmation" class="col-sm-3 col-form-label">Confirm
                                                New Password</label>
                                            <div class="col-sm-9">
                                                <input wire:model.defer='state.password_confirmation' type="password"
                                                    class="form-control @error('password_confirmation') is-invalid border border-danger rounded @enderror" id="passwordConfirmation"
                                                    placeholder="Confirm New Password">
                                                    @error('password_confirmation') <span class="error text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-3 col-sm-9">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@push('styles')
    <style>
        .profile-user-img:hover{
            background-color: gray;
            cursor: pointer
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function(){
            Livewire.on('nameChanged',(changedName)=>{
                $('[x-ref="username"]').text(changedName);
            });
        });
    </script>
@endpush
