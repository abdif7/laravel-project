<x-app-layout>
    <div class="container pt-5">
        <h2 class="text-center fs-2 text-bold">All Blogs</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 pt-2">
            <!-- Loop through blogs and display them as cards -->
            @foreach($blogs as $blog)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder fs-3 text-center">{{ $blog->title }}</h5>
                            <p class="card-text">{{ $blog->description }}</p>
                        </div>
                        <div class=" text-center text-muted">
                            Created At: {{ $blog->created_at }} by {{ $blog->user->name }}
                        </div>
                        <!-- <div class="card-footer">
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning fw-bold fs-5 d-flex justify-content-center mx-auto">Edit</a>
                        </div> -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
