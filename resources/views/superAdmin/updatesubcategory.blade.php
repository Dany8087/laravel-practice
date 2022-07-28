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
              <div class="ap-com sm-com-heading" style="margin-top:50px;">
                <h3>Add / Update Subcategory</h3>
              </div>
            </div>
            <div class="col col-6">
              <div class="text-end"> <a href="subCategory" class="grad-btn grad-btn-color"><img src="images/left-arrow-color.svg" alt="arrow" style="margin-right:15px;"/> Back </a> </div>
            </div>
          </div>
          <form action="" method="" enctype="multipart/form-data">
            <div class="row">
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Title</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter blog title" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Created By</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter author name" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Type</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter blog type" />
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Images and Author Photo</label>
                  <div class="file-loading">
                    <input type="file" class="inputphoto" multiple>
                  </div>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Details</label>
                  <textarea class="form-control editor-ctrl" id="ctrl-editor"></textarea>
                </div>
              </div>
              
            </div>
            <div class="row mb-4">
              <div class="col col-12 mb-3">
                <h4 class="sub-title">Social medial</h4>
              </div>
              
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Linkedin</label>
                  <input type="text" class="form-control" name="" value="" placeholder="Enter social media link" />
                </div>
              </div>
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