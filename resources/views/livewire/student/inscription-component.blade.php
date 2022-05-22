<div>
    <!-- Content Header (Page header) -->
<section class="content-header">
   <div class="container-fluid">
       <div class="row mb-2">
           <div class="col-sm-6">
               <h4 class="text-danger"><i class="fa fa-folder" aria-hidden="true"></i> GESTIONNAIRE DES INSCRIPTIONS</h4>
           </div>
           <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                   <li class="breadcrumb-item active">Gestion inscription</li>
               </ol>
           </div>
       </div>
   </div><!-- /.container-fluid -->
</section>
<div class="row ">
   <div class="col-md-12">
     <div class="card {{setting('is_dark_mode') ? 'bg-dark':'bg-light'}}"">
       <div class="card-header p-2">
         <ul class="nav nav-pills">
           <li  class="nav-item">
               <a wire:ignore.self class="nav-link active" href="#sector" data-toggle="tab">
                   <i class="fas fa-user-alt    "></i> Primaire
               </a>
           </li>
           <li  class="nav-item">
               <a wire:ignore.self class="nav-link" href="#section" data-toggle="tab">
                   <i class="fas fa-user-check    "></i> Secondaire
               </a>
           </li>
           <li  class="nav-item">
               <a wire:ignore.self class="nav-link" href="#users" data-toggle="tab">
                   <i class="fa fa-users" aria-hidden="true"></i> Maternelle
               </a>
           </li>
         </ul>
       </div><!-- /.card-header -->
       <div class="card-body">
         <div class="tab-content">
            <div wire:ignore.self class="tab-pane active" id="sector">
               @livewire('student.primary.primary-inscription-component')
           </div>
           <div wire:ignore.self class="tab-pane" id="section">
              Secondaire
           </div>
           <div wire:ignore.self class="tab-pane " id="users">
               Maternelle
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

</div>
