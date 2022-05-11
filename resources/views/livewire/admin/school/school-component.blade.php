<div>
    @if (Auth::user()->school==null)
        <x-create-school />
    @else
        <x-details-school/>
    @endif
</div>
