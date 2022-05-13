@extends('layouts.app')
@section('content')
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-body">
            @livewire('user.user-profil-component')
          </div>
        </div>
        <!-- /.card -->
      </section>
      <!-- /.content -->
@endsection
