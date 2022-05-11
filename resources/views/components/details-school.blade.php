<div class="row">
    <div class="col-md-3">
        <!-- Widget: user widget style 2 -->
        <div class="card card-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-warning">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{ asset('logo.jpg') }}" alt="User Avatar">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">{{Auth::user()->school->name}}</h3>
              <h5 class="widget-user-desc">Savoir est pouvoir</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Projects <span class="float-right badge bg-primary">31</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Tasks <span class="float-right badge bg-info">5</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Completed Projects <span class="float-right badge bg-success">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Followers <span class="float-right badge bg-danger">842</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
      </div>
      <!-- /.col -->
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li  class="nav-item">
                <a wire:ignore.self class="nav-link " href="#sector" data-toggle="tab">
                    <i class="fa fa-folder" aria-hidden="true"></i> Sector
                </a>
            </li>
            <li  class="nav-item">
                <a wire:ignore.self class="nav-link" href="#section" data-toggle="tab">
                    <i class="fas fa-folder-open    "></i> Sections
                </a>
            </li>
            <li  class="nav-item">
                <a wire:ignore.self class="nav-link active" href="#users" data-toggle="tab">
                    <i class="fa fa-users" aria-hidden="true"></i> Teachers
                </a>
            </li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
             <div wire:ignore.self class="tab-pane " id="sector">
                @livewire('admin.school.sector-component')
            </div>
            <div wire:ignore.self class="tab-pane" id="section">
                @livewire('admin.school.option-component')
            </div>
            <div wire:ignore.self class="tab-pane active" id="users">
                @livewire('admin.school.teacher-component')
            </div>

          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
