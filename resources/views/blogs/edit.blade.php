<x-app-layout>
    <div class="container pt-5">
        <h2 class="text-center">Edit Blog</h2>
        <form action="{{ route('blogs.update', $blog->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" required>{{ $blog->description }}</textarea>
            </div><br>
            <button type="submit" class="btn btnn btn-warning fw-bold fs-5 text-black d-flex justify-content-center mx-auto" onclick="return ('Blog Updated successfuly')">Update Blog</button>
        </form>
    </div>
</x-app-layout>
