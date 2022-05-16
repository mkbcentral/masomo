<div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4>LISTE DES OPTIONS</h4>
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addOptionModal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Nouvelle option
                </button>
            </div>
            @if ($options->isEmpty())
            <h4 class="text-center text-success"><i class="fa fa-database" aria-hidden="true"></i> No data load</h4>
            @else
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Option</th>
                        <th class="text-center" scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($options as $option)
                        <tr>
                            <th scope="row">
                                <div class="form-check">

                                      <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>

                                    </label>
                                  </div>
                            </th>
                            <td>{{$option->name}}</td>

                            <td class="text-center">
                                <a href="#" type="button" data-toggle="modal" data-target="#editOptionModal" wire:click='edit({{$option}})'><i class="fas fa-edit    "></i></a>
                                <a href="#" wire:click='showDeleteOption({{$option}})'><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    @include('components.modals.add-option')
    @include('components.modals.edit-option')
</div>
