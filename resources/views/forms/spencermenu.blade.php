<div class="form-group">
    <label for="course">Select Course</label>
    <select class="form-control" id="course" name="course">
        <option value="Appetizers">Appetizers</option>
        <option value="Pub Fare">Pub Fare</option>
        <option value="Sides">Sides</option>
        <option value="Premium Sides">Premium Sides</option>
        <option value="BBQ">BBQ</option>
        <option value="Pastas">Pastas</option>
        <option value="Steaks">Steaks</option>
    </select>
</div>

<div class="form-group">
    <label for="item">Menu Item</label>
    <input id="item" type="text" class="form-control" name="item" value="{{ old('item') }}">
    <div>{{ $errors->first('item') }}</div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">
    <div>{{ $errors->first('description') }}</div>
</div>


@csrf
