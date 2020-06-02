@foreach($spencerdinings as $spencerdining)
    <p>{!! $spencerdining->hours !!}</p>
    @can('update', $spencerdining)
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Edit Hours
        </button>
        <div class="dropdown-menu" aria-labelledby="dLabel">
            <div>
                <form action="{{ route('spencerdinings.update', ['spencerdining' => $spencerdining]) }}" method="POST" class="p-3">
                    @method('PATCH')
                    @include('forms.dining')

                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    @endcan
@endforeach
