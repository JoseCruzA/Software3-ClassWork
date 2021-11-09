{{-- request falsifying of cross sites --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input type="text" class="form-control" name="publication" id="publication" placeholder="Publication name"
        value="{{ old('publication', $post->publication) }}">
</div>
<div class="form-group">
    <select name="category_id" id="category_id" class="custom-select">
        <option selected disabled>Select Category</option>
        @foreach ($categories as $category_name => $id)
        <option {{ $post->category_id == $id ? 'selected' : '' }} value="{{ $id }}">
            {{ $category_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select name="state_publication" id="state_publication" class="custom-select">
        @include('dashboard.components.state_options', ['val' => $post->state_publication])
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="Publication content">
        {{ old('content_publication', $post->content_publication) }}
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
