<x-layout>
<!-- loader -->
<div class="wrapper"> 
  <!-- ======== Header Section ======  -->
  <div id="content" class="ap-com content-wrapper"> 
    <!-- Sidebar start -->

    <div class="ap-com content-manger"> 
      <!-- header start -->

      <div class="ap-com container-main">
        <div class="row mb-4 align-items-center">
          <div class="col col-6">
            <div class="ap-com sm-com-heading" style="margin-top:50px;">
               <h3>Sub Category List</h3>
            </div>
          </div>
          <div class="col col-6">
            <div class="text-end">
              <a href="{{route('addsubCategory')}}" class="grad-btn grad-btn-color" style="">Add Category <img src="images/btn-arrow-color.svg" alt="arrow"/></a>
            </div>
          </div>
        </div>
        
        <div class="ap-com">
          <div class="row">
            <div class="col col-12">
              <div class="table-responsive table-panel">
                <table class="table table-bordered align-middle ven-table">
                  <thead>
                    <tr>
                      <th scope="col">Sr.no</th>
                      <th scope="col" class="text-center"> Image</th>
                      <th scope="col"> Title</th>
                      <th scope="col"> Subtitle</th>
                      <th scope="col"> Description</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($sub_categories as $items)
                  <tr>
                      <td>{{$items['id']}}</td>
                      <td class="text-center"><img src="(asset('$items->subcategoryImg))" alt="" class="td_blog_img" /></td>
                      <td>{{$items['subCategoryTitle']}}</td>
                      <td>{{$items['subCategorySubtitle']}}</td>
                      <td>{{$items['subCategoryDescription']}}</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="updatecategory/{{$items['id']}}"><i class="fas fa-pencil-alt"></i> Edit</a></li>
                              <li><a class="dropdown-item" href={{"deletesc/".$items['id']}}><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</x-layout>