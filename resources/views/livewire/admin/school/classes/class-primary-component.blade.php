<div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4>LISTE DES CLASSES PRIMAIRES</h4>
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#addClassePrimaryModal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Add new class
                </button>
            </div>
            @if ($classes->isEmpty())
            <h4 class="text-center text-success"><i class="fa fa-database" aria-hidden="true"></i> No data load</h4>
            @else
            <table class="table table-hover table-sm mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Classe</th>
                        <th scope="col">Enseignant titulaire</th>
                        <th class="text-center" scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $classe)
                        <tr>
                            <th scope="row">
                                <div class="form-check">

                                      <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>

                                    </label>
                                  </div>
                            </th>
                            <td>{{$classe->name}}</td>
                            <td class="{{$classe->user==null?'text-danger':''}}"
                            >{{$classe->user==null?'Empty':$classe->user->name}}</td>

                            <td class="text-center">
                                <a href="#" type="button" data-toggle="modal" data-target="#editClassePrimaryModal" wire:click='edit({{$classe}})'><i class="fas fa-edit    "></i></a>
                                <a href="#" wire:click='showDeleteclasse({{$classe}})'><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    @include('components.modals.classes.add-classe-primary')
    @include('components.modals.classes.edit-classe-primary')
</div>
