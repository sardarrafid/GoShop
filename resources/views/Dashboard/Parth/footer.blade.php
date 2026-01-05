  <!-- ========== Footer Start ========== -->
               <footer class="footer">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-12 text-center">
                               <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                                   href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
                           </div>
                       </div>
                   </div>
               </footer>
               <!-- ========== Footer End ========== -->

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->
     <script>
        document.getElementById('imageInput').addEventListener('change', function (e) {
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    document.getElementById('categoryPreview').src = e.target.result;
                };

                reader.readAsDataURL(file);
            }
        });
     </script>


     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{asset('assets/js/vendor.js')}}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{asset('assets/js/app.js')}}"></script>

     <!-- Vector Map Js -->
     <script src="{{asset('assets/vendor/jsvectormap/js/jsvectormap.min.js')}}"></script>
     <script src="{{asset('assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
     <script src="{{asset('assets/vendor/jsvectormap/maps/world.js')}}"></script>

     <!-- Dashboard Js -->
     <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

</body>


<!-- Mirrored from techzaa.in/larkon/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Dec 2025 15:55:07 GMT -->
</html>