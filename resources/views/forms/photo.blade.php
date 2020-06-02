<div class="form-group">
    <input type="file" class="form-control-file" name="image" id="image">
    <div>{{ $errors->first('image') }}</div>
    @csrf
</div>
