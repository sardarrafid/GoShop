     @include('Dashboard.Parth.header')



          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    <div class="row">
                         <div class="col-xl-3 col-lg-4">
                              <div class="card">
                                   <div class="card-body">
                                         <img 
                                             id="categoryPreview"
                                             src="{{ asset('assets/images/product/p-1.png') }}"
                                             alt="Category Preview"
                                             class="img-fluid rounded bg-light mb-3"
                                        >

                                        <div class="mt-3">
                                             <h4>Men Black Slim Fit T-shirt <span class="fs-14 text-muted ms-1"></span></h4>
                                             
                                            
                                           
                                        </div>
                                   </div>                                  
                              </div>
                         </div>

                         <div class="col-xl-9 col-lg-8 ">
                         <form action="{{ route('category.store')}}" method="POST" 
                         enctype="multipart/form-data">
                          @csrf

                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Add Category Photo</h4>
                                   </div>
                                   <div class="card-body">
                                        <!-- File Upload -->
                                       <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                             
                                             <div class="dz-message needsclick">
                                                  <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                                                  <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                                                  <span class="text-muted fs-13">
                                                       1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                                                  </span>
                                             </div>
                                             <center id="file-previews" class="row mt-3">
                                             <div class="fallback">
                                                  <input  id="imageInput" name="image" type="file" multiple class="form-control" accept="image/*" />
    
                                             </div>
                                             </center>
                                        </div>
                                   </div>
                              </div>
                              <div class="card">
                                   <div class="card-header">
                                        <h4 class="card-title">Category Information</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  
                                                       <div class="mb-3">
                                                            <label for="name" class="form-label">category Name</label>
                                                            <input type="text" name="name" id="name" class="form-control" placeholder="Category Name" >
                                                       </div>
                                                 
                                             </div>
                                             
                                        </div>
                                        
                                        
                                        <div class="row">
                                             <div class="col-lg-12">
                                                  <div class="mb-3">
                                                       <label for="meta_title" class="form-label">Meta Title</label>
                                                       <textarea class="form-control bg-light-subtle" id="meta_title" name="meta_title" rows="7" placeholder="Meta Title about the category"></textarea>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="row">
                                             <div class="col-lg-12">
                                                  <div class="mb-3">
                                                       <label for="meta_description" class="form-label">Meta Description</label>
                                                       <textarea class="form-control bg-light-subtle" id="meta_description" name="meta_description" rows="7" placeholder="Meta Description about the category"></textarea>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="row">
                                             <div class="col-lg-12">
                                                  <div class="mb-3">
                                                       <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                                       <textarea class="form-control bg-light-subtle" id="meta_keywords" name="meta_keywords" rows="7" placeholder="Meta Keywords about the category"></textarea>
                                                  </div>
                                             </div>
                                        </div>
                                        
                                       
                                   </div>
                              </div>
                             
                              <div class="p-3 bg-light mb-3 rounded">
                                   <div class="row justify-content-end g-2">
                                        <div class="col-lg-2">
                                             <button type="reset" class="btn btn-outline-secondary w-100">
                                             Reset
                                             </button>

                                        </div>
                                        <div class="col-lg-2">
                                             <button type="submit" class="btn btn-primary w-100">
                                             Save
                                             </button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         </form>
                    </div>

               </div>
               <!-- End Container Fluid -->

             

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->


   
     @include('Dashboard.Parth.footer')
   