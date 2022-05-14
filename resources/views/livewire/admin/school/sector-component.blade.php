<div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4>LIST OF SECTOR</h4>
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addSectorModal">
                    <i class="fa fa-plus-circle" aria-hidden="true"></i> Add new sector
                </button>
            </div>
            @if ($sectors->isEmpty())
                <h4 class="text-center text-success"><i class="fa fa-database" aria-hidden="true"></i> No data load</h4>
            @else
            <table class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sector name</th>
                        <th scope="col">Section</th>
                        <th scope="col">Classes</th>
                        <th class="text-center" scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sectors as $sector)
                        <tr>
                            <th scope="row">
                                <div class="form-check">

                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>

                                  </label>
                                </div>
                            </th>
                            <td>{{$sector->name}}</td>
                            <td>0</td>
                            <td>0</td>
                            <td class="text-center">
                                <a href="#" type="button" data-toggle="modal" data-target="#editSectorModal" wire:click='edit({{$sector}})'><i class="fas fa-edit    "></i></a>
                                <a href="#" wire:click='showDeleteSector({{$sector}})'><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
    @include('components.modals.add-sector')
    @include('components.modals.edit-sector')
</div>
