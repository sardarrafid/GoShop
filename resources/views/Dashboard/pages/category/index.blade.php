@include('Dashboard.Parth.header')

  



          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">
         <div id="categorySlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        @foreach($categorys->chunk(4) as $key => $chunk)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="row">

                    @foreach($chunk as $item)
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="rounded bg-info-subtle d-flex align-items-center justify-content-center mx-auto">
                                        <img src="{{ asset('uploads/category/' . $item->image) }}" alt="" class="avatar-xl">
                                    </div>
                                    <h4 class="mt-3 mb-0">{{ $item->name }}</h4>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endforeach

    </div>

    <!-- Controls -->
    
                    <button 
                    class="carousel-control-prev" 
                    type="button" 
                    data-bs-target="#categorySlider" 
                    data-bs-slide="prev"
                    style="background-color: rgba(255,140,0,0.15); width:45px; height:45px; border-radius:50%; top:50%; transform:translateY(-50%);"
                >
                    <span 
                        class="carousel-control-prev-icon"
                        style="filter: invert(52%) sepia(90%) saturate(450%) hue-rotate(5deg) brightness(102%) contrast(102%);"
                    ></span>
                </button>

                <button 
                    class="carousel-control-next" 
                    type="button" 
                    data-bs-target="#categorySlider" 
                    data-bs-slide="next"
                    style="background-color: rgba(255,140,0,0.15); width:45px; height:45px; border-radius:50%; top:50%; transform:translateY(-50%);"
                >
                    <span 
                        class="carousel-control-next-icon"
                        style="filter: invert(52%) sepia(90%) saturate(450%) hue-rotate(5deg) brightness(102%) contrast(102%);"
                    ></span>
                </button>

    
</div>

               <!-- Start Container Fluid -->
               <div class="container-fluid">

                    <div class="row">
                         <div class="col-xl-12">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center gap-1">
                                        <h4 class="card-title flex-grow-1">All Product List</h4>

                                        <a href="{{route('category.create')}}" class="btn btn-sm btn-primary">
                                             Add Product
                                        </a>


                                   </div>
                                   <div>
                                        <div class="table-responsive">
                                             <table class="table align-middle mb-0 table-hover table-centered">
                                                  <thead class="bg-light-subtle">
                                                       <tr>
                                                            <th style="width: 20px;">
                                                                 <div class="form-check ms-1">
                                                                      <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                      <label class="form-check-label" for="customCheck1"></label>
                                                                 </div>
                                                            </th>
                                                            <th>Category Name & Image</th>
                                                            <th>slug</th>
                                                            <th>meta_title</th>
                                                            <th>meta_description</th>
                                                            <th>meta_keywords</th>
                                                            <th>Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                @foreach($categorys as $item)
                                                <tr>
                                                    <td>
                                                        <div class="form-check ms-1">
                                                            <input type="checkbox" class="form-check-input" id="itemCheck{{ $item->id }}">
                                                            <label class="form-check-label" for="itemCheck{{ $item->id }}">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                <img src="{{ asset('uploads/category/' . $item->image) }}" alt="" class="avatar-md">
                                                            </div>
                                                            <div>
                                                                <a href="#!" class="text-dark fw-medium fs-15">{{ $item->name }}</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </td>
                                                    
                                                    <td>{{ $item->slug ?? 'slug' }}</td>
                                                    <td>
                                                        <span class="badge p-1 bg-light text-dark fs-12 me-1">
                                                            {{ $item->meta_title ?? 'Meta Title' }}
                                                        </span> 
                                                    </td>
                                                     <td>
                                                        <span class="badge p-1 bg-light text-dark fs-12 me-1">
                                                            {{ $item->meta_description ?? 'Meta Description' }}
                                                        </span> 
                                                    </td>
                                                     <td>
                                                        <span class="badge p-1 bg-light text-dark fs-12 me-1">
                                                            {{ $item->meta_keywords ?? 'Meta Keywords' }}
                                                        </span>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="" class="btn btn-light btn-sm">
                                                                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                            <a href="{{ route('category.edit', $item->id) }}" class="btn btn-soft-primary btn-sm">
                                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                                                            </a>
                                                            <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-soft-danger btn-sm">
                                                                    <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                                </table>    
                                        </div>
                                        <!-- end table-responsive -->
                                   </div>
                                   <div class="card-footer border-top">
                                        <nav aria-label="Page navigation example">
                                             <ul class="pagination justify-content-end mb-0">
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                                  <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                  
                                                  <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                             </ul>
                                        </nav>
                                   </div>
                              </div>
                         </div>

                    </div>

               </div>
               <!-- End Container Fluid -->
               <!-- ========== Footer Start ========== -->
               @include('Dashboard.Parth.footer')