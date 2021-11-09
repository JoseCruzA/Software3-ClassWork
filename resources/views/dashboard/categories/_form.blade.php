{{-- request falsifying of cross sites --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category name"
        value="{{ old('category_name', $category->category_name) }}">
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="Category content" value="{{ old('content_publication', $category->content_publication) }}">
        {{ old('content_publication', $category->content_publication) }}
    </textarea>
</div>
<div class="form-group text-center">
    <button type="submit" class="btn btn-success">
        Accept
    </button>
    <a class="btn btn-danger" href="{{ URL::previous() }}">
        Cancel
    </a>
</div>
