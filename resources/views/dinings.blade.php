@foreach($dinings as $dining)
    <p>{!! $dining->hours !!}</p>
    @can('update', $dining)
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Edit Hours
        </button>
        <div class="dropdown-menu" aria-labelledby="dLabel">
            <div>
                <form action="{{ route('dinings.update', ['dining' => $dining]) }}" method="POST" class="p-3">
                    @method('PATCH')
                    @include('forms.dining')

                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
            </div>
        </div>
    @endcan
@endforeach
