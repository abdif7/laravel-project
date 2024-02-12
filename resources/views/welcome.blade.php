<x-app-layout>

    <div class="container text-center pt-5 ">
        <h1>Welcome to Laravel Blog Post App</h1>
        <p class="pt-3"><a href="{{ route('blogs.index') }}" class="btn btnn btn-primary fw-bold fs-5 text-black d-flex justify-content-center mx-auto ">VIEW BLOGS</a></p><br>
        <p><a href="{{ route('blogs.create') }}" class="btn btnn btn-success fw-bold fs-5 text-black d-flex justify-content-center mx-auto ">ADD BLOG</a></p>
    </div>

</x-app-layout>