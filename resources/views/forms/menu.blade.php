<div class="form-group">
    <label for="course">Select Course</label>
    <select class="form-control" id="course" name="course">
        <option value="Appetizers">Appetizers</option>
        <option value="Salads">Salads</option>
        <option value="Sandwiches">Sandwiches</option>
        <option value="Entrees">Entrees</option>
        <option value="Beverages">Beverages</option>
        <option value="Kid's Menu">Kid's Menu</option>
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
