<x-layout>
<!-- loader -->
<div class="wrapper"> 
  <!-- ======== Header Section ======  -->
  <div id="content" class="ap-com content-wrapper"> 
    <!-- Sidebar start -->

    <div class="ap-com content-manger"> 
      <!-- header start -->

      <div class="ap-com container-main">
        <div class="ap-com sm-com-heading mb-4">
          <h3 style="margin-top: 50px;">Home / Landing Page</h3>
        </div>
        <div class="ap-com">
          <form action="add-slider" method="post" enctype="multipart/form-data">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
            @csrf
            <div class="row">
              <div class="col col-xxl-12 col-md-8 col-12">
                <div class="tab-content ap-com" id="nav-tabContent"> 
                  <!-- === Section 1 ===-->
                  <div class="tab-pane ap-com fade show active" id="nav-section1" role="tabpanel" aria-labelledby="nav-section1-tab">
                    <div class="ap-com form-panel">
                      <div class="row">
                        <div class="col col-12 mb-5">
                          <h3 class="main-heading">Slider Text and Images</h3>
                          <div class="divider"></div>
                        </div>
                        <div class="col col-12">
                          <div class="mb-4 form-group">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="Title" value="{{old('Title')}}" placeholder="Write a attrctive title"/>
                            <span class="text-danger">@error('Title') {{$message}} @enderror</span>
                          </div>
                        </div>
                        <div class="col col-12">
                          <div class="mb-4 form-group">
                            <label class="form-label">Subtitle</label>
                            <input type="text" class="form-control" name="Subtitle" value="{{old('Subtitle')}}" placeholder="If music be the food of love play on"/>
                            <span class="text-danger">@error('Subtitle') {{$message}} @enderror</span>
                          </div>
                        </div>
                        <div class="col col-12">
                          <div class="mb-4 form-group">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control" name="Description" value="{{old('Description')}}" placeholder="If music be the food of love play on"></textarea>
                            <span class="text-danger">@error('Description') {{$message}} @enderror</span>
                          </div>
                        </div>
                        <div class="col col-12">
                              <div class="mb-4 form-group">
                                <label class="form-label">Slide Images/ Videos</label>
                                  <input id="sect2RightSLide" name="sliderImg" type="file" multiple>
                                  <span class="text-danger">@error('sliderImg') {{$message}} @enderror</span>
                              </div>
                        </div>                                                
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col col-12 mt-5">
                  <div class="text-center submit-div">
                    <button type="submit" class="grad-btn">Update <img src="images/btn-arrow.svg" alt="arrow"/></button>
                  </div>
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








