<x-app-layout>
    <div class="container pt-5">
        <h2 class="text-center">Create a Blog</h2>
        <form action="{{ route('blogs.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div><br>
            <button type="submit" class="btn btnn btn-success fw-bold fs-5 text-black d-flex justify-content-center mx-auto ">Create Blog</button>
        </form>
    </div>
</x-app-layout>