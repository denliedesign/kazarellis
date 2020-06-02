<div class="form-group">
    <label for="hours">Dining Hours</label>
    <textarea class="form-control" id="hours" name="hours" rows="3">{{ old('hours') }}</textarea>
    <div>{{ $errors->first('hours') }}</div>
</div>

@csrf
