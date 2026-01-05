@include('Dashboard.Parth.header')

<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <!-- LEFT PREVIEW -->
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img 
                            id="categoryPreview"
                            src="{{ $category->image 
                                ? asset('uploads/category/'.$category->image) 
                                : asset('assets/images/product/p-1.png') }}"
                            alt="Category Preview"
                            class="img-fluid rounded bg-light mb-3"
                        >

                        <div class="mt-3">
                            <h4>
                                {{ old('name', $category->name) }}
                                <span class="fs-14 text-muted ms-1"></span>
                            </h4>
                        </div>
                    </div>                                  
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="col-xl-9 col-lg-8">
                <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- IMAGE CARD -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Category Photo</h4>
                        </div>

                        <div class="card-body">
                            <div class="dropzone" id="myAwesomeDropzone">
                                <div class="dz-message needsclick">
                                    <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                    <h3 class="mt-4">
                                        Drop your images here, or 
                                        <span class="text-primary">click to browse</span>
                                    </h3>
                                    <span class="text-muted fs-13">
                                        1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                                    </span>
                                </div>

                                <center class="row mt-3">
                                    <div class="fallback">
                                        <input 
                                            id="imageInput"
                                            name="image"
                                            type="file"
                                            class="form-control"
                                            accept="image/*"
                                        >
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>

                    <!-- CATEGORY INFO -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category Information</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Category Name</label>
                                        <input 
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control"
                                            value="{{ old('name', $category->name) }}"
                                            placeholder="Category Name"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title</label>
                                        <textarea 
                                            name="meta_title"
                                            class="form-control bg-light-subtle"
                                            rows="7"
                                        >{{ old('meta_title', $category->meta_title) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea 
                                            name="meta_description"
                                            class="form-control bg-light-subtle"
                                            rows="7"
                                        >{{ old('meta_description', $category->meta_description) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Keywords</label>
                                        <textarea 
                                            name="meta_keywords"
                                            class="form-control bg-light-subtle"
                                            rows="7"
                                        >{{ old('meta_keywords', $category->meta_keywords) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BUTTONS -->
                    <div class="p-3 bg-light mb-3 rounded">
                        <div class="row justify-content-end g-2">
                            <div class="col-lg-2">
                                <a href="{{ route('category.index') }}" class="btn btn-outline-secondary w-100">
                                    Cancel
                                </a>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-primary w-100">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <!-- End Container Fluid -->

</div>
<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->

@include('Dashboard.Parth.footer')
