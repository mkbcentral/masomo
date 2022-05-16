<div>
     <!-- Widget: user widget style 2 -->
     <div class="card card-widget widget-user-2 {{setting('is_dark_mode') ? 'bg-dark':'bg-light'}}">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-info">
          <div class="widget-user-image" x-data="{imagePreviewLogo: '{{Auth::user()->school->logo_url==null ? asset('logo.jpg') : Storage::url(Auth::user()->school->logo_url) }}'}">
            <input class="d-none" wire:model='logo' type="file" x-ref="image"x-on:change="
                                        reader = new FileReader();
                                        reader.onload=(event)=>{
                                            imagePreviewLogo=event.target.result;
                                            document.getElementById('logoImage').src= `${imagePreviewLogo}`;
                                        };
                                        reader.readAsDataURL($refs.image.files[0]);
                                    "
                                />
            <img x-on:click="$refs.image.click()"  x-bind:src="imagePreviewLogo ? imagePreviewLogo: '{{ asset('defautl-user.jpg') }}'"
                     class="img-circle  elevation-2" src="{{Auth::user()->school==null ? asset('logo.jpg') : Storage::url(Auth::user()->school->logo_url) }}" alt="User Avatar">
          </div>
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">{{Auth::user()->school->name}}</h3>
          <h5 class="widget-user-desc">Savoir est pouvoir</h5>
        </div>
        <div class="card-footer p-0">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Teachers <span class="float-right badge bg-primary">{{$teachers}}</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.widget-user -->
</div>

@push('styles')
    <style>
        .img-circle:hover{
            background-color: grey;
            cursor: pointer
        }
    </style>
@endpush
