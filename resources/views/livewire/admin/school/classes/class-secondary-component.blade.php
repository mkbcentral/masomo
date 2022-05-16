<div>
    <div class="card {{setting('is_dark_mode') ? 'bg-dark':'bg-light'}}"">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4>LISTE DES CLASSES SECONDAIRES</h4>
                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#addClasseSecondaryModal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Add new class
                </button>
            </div>
            @if ($classes->isEmpty())
            <h4 class="text-center text-success"><i class="fa fa-database" aria-hidden="true"></i> No data load</h4>
            @else
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">Classe</th>
                        <th scope="col">Enseignant titulaire</th>
                        <th class="text-center" scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $classe)
                        <tr>
                            <td>{{$classe->name}}</td>
                            <td class="{{$classe->user==null?'text-danger':''}}"
                            >{{$classe->user==null?'Empty':$classe->user->name}}</td>

                            <td class="text-center">
                                <a href="#" type="button" data-toggle="modal" data-target="#editClasseSecondaryModal" wire:click='edit({{$classe}})'><i class="fas fa-edit    "></i></a>
                                <a href="#" wire:click='showDeleteclasse({{$classe}})'><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    @include('components.modals.classes.add-classe-secondary')
    @include('components.modals.classes.edit-classe-secondary')
</div>
