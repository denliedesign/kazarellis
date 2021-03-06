<div class="container socialpics">
    <hr>
    <h1 class="text-center text-wrap social-heading mb-3"><span class="social-heads">Keep Up With Us On <span class="font-weight-bold">Facebook</span></span></h1>
    <div class="row px-3">
    @foreach($photos as $photo)
        <div class="col-sm p-0">
            <a href="https://www.facebook.com/Kazarellis/" target="_blank"><img class="img-fluid social-img" src="{{ asset('/storage/' . $photo->image)}}"></a>
            @can('update', $photo)
                <div class="card-body">
                    <div class="d-flex justify-content-around align-items-end">
                        <form action="{{ route('photos.update', ['photo' => $photo]) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @include('forms.photo')

                            <button class="btn btn-primary" type="submit">Change Photo</button>
                        </form>

                        <form action="/photos/{{ $photo->id }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            @endcan
        </div>
    @endforeach
    </div>
    <hr>
</div>

@can('update', \App\Photo::class)
    <hr>
    <div class="container p-3" id="add-photo-section">
            <div class="mb-5">
                <h3>Add Photo</h3>
                <form action="/photos" method="POST" enctype="multipart/form-data">
                    @include('forms.photo')
                    <button type="submit" class="btn btn-primary">Add Photo</button>
                </form>
            </div>
    </div>
    <hr>
@endcan
