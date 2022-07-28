<x-layout>
<!-- loader -->
<div class="wrapper"> 
  <!-- ======== Header Section ======  -->
  <div id="content" class="ap-com content-wrapper"> 
    <!-- Sidebar start -->

    <div class="ap-com content-manger"> 
      <!-- header start -->

      <div class="ap-com container-main">
        <div class="container">
          <div class="row mb-4 align-items-center">
            <div class="col col-6">
              <div class="ap-com sm-com-heading">
                <h3>Add Category</h3>
              </div>
            </div>
            <div class="col col-6" style="margin-top: 25px:">
              <div class="text-end"> <a href="{{route('category')}}" class="grad-btn grad-btn-color"><img src="images/left-arrow-color.svg" alt="arrow" style="margin-right:15px; "/> Back </a> </div>
            </div>
          </div>
          <form action="/addcategory" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Title</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter title" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Subtitle</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter subtitle" />
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Description</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter description" />
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Images </label>
                  <div class="file-loading">
                    <input type="file" class="inputphoto" multiple>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-4">

              <div class="col col-12 mt-5">
                  <div class="text-center submit-div">
                    <button type="submit" class="grad-btn">Submit <img src="images/btn-arrow.svg" alt="arrow"/></button>
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</x-layout>