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
                <h3>Add Sub Category</h3>
              </div>
            </div>
            <div class="col col-6" style="margin-top: 25px:">
              <div class="text-end"> <a href="{{route('subCategory')}}" class="grad-btn grad-btn-color"><img src="images/left-arrow-color.svg" alt="arrow" style="margin-right:15px; "/> Back </a> </div>
            </div>
          </div>
          <form action="add-subcategory" method="post" enctype="multipart/form-data">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
            @csrf
            <div class="row">
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Title</label>
                  <input type="text" class="form-control" name="subCategoryTitle" value="{{old('CategoryTitle')}}" placeholder="Enter title" />
                  <span class="text-danger">@error('subCategoryTitle') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Subtitle</label>
                  <input type="text" class="form-control" name="subCategorySubtitle" value="{{old('CategorySubtitle')}}" placeholder="Enter subtitle" />
                  <span class="text-danger">@error('subCategorySubtitle') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Description</label>
                  <input type="text" class="form-control" name="subCategoryDescription" value="{{old('CategoryDescription')}}" placeholder="Enter description" />
                  <span class="text-danger">@error('subCategoryDescription') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Category Images </label>
                    <input type="file" name="subcategoryImg" class="inputphoto" multiple>
                    <span class="text-danger">@error('subcategoryImg') {{$message}} @enderror</span>
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
                  <input type="text" class="form-control" name="Facebook" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" name="Twitter" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" name="Instagram" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Linkedin</label>
                  <input type="text" class="form-control" name="Linkedin" value="" placeholder="Enter social media link" />
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