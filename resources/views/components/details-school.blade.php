<div class="row">
    <div class="col-md-3">
       @livewire('admin.school.detail-school-component')
      </div>
      <!-- /.col -->
    <!-- /.col -->
    <div class="col-md-9">
      <div class="card">
        <div class="card-header p-2">
          <ul class="nav nav-pills">
            <li  class="nav-item">
                <a wire:ignore.self class="nav-link active" href="#sector" data-toggle="tab">
                    <i class="fa fa-folder" aria-hidden="true"></i> Sector
                </a>
            </li>
            <li  class="nav-item">
                <a wire:ignore.self class="nav-link" href="#section" data-toggle="tab">
                    <i class="fas fa-folder-open    "></i> Options
                </a>
            </li>
            <li  class="nav-item">
                <a wire:ignore.self class="nav-link" href="#users" data-toggle="tab">
                    <i class="fa fa-users" aria-hidden="true"></i> Teachers
                </a>
            </li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
             <div wire:ignore.self class="tab-pane active" id="sector">
                @livewire('admin.school.sector-component')
            </div>
            <div wire:ignore.self class="tab-pane" id="section">
                @livewire('admin.school.option-component')
            </div>
            <div wire:ignore.self class="tab-pane" id="users">
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
