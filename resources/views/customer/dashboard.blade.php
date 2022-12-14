@extends('welcome')
@section('content')



<section class="dashboard section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
        <div class="col-lg-12">
            <section class="">
                <!-- Container Start -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                          
                            <!-- Advance Search -->
                            <div class="advance-search">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 col-md-12 align-content-center">
                                            <form action="{{ url('/') }}/link-generator" method="post" id="link-generator">
                                                <div class="form-row">
                                                    <div class="form-group col-xl-12 col-lg-12 col-md-12">
                                                        <input name="to_url" type="text" class="form-control my-2 my-lg-1" id="inputtext4"
                                                            placeholder="Enter Your URl">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6">
                                                    <input name="thumbnail_url" type="text" class="form-control my-2 my-lg-1" id="inputtext4"
                                                            placeholder="Thumbnail URl">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <input name="title" type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Title">
                                                    </div>
                                                    <div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
                                                        <button type="submit" class="btn btn-primary active w-100">Submit</button>
                                                    </div>
                                                    <div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
                                                        Generated Link:
                                                    </div>
                                                    <div class="form-group col-xl-6 col-lg-3 col-md-6 align-self-center">
                                                        <input type="text" id="generated_link" class="form-control my-2 my-lg-1" id="inputLocation4" value="" placeholder="Link">
                                                    </div>
                                                    <div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
                                                        <span id="copy_data" class="btn btn-success">COPY</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container End -->
            </section>
        </div>
      <div class="col-lg-3">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-dashboard-profile">
            <!-- User Image -->
            <div class="profile-thumb">
              <img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
            </div>
            <!-- User Name -->
            <h5 class="text-center">Samanta Doe</h5>
            <p>Joined February 06, 2017</p>
            <!-- <a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a> -->
          </div>
          <!-- Dashboard Links -->
          <div class="widget user-dashboard-menu">
            <ul>
              <li class="active"><a href="dashboard-my-ads.html"><i class="fa fa-user"></i> My Ads</a></li>
              <li><a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite Ads<span>5</span></a></li>
              <li><a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archived Ads<span>12</span></a></li>
              <li><a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i> Pending Approval<span>23</span></a></li>
              <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-cog"></i> Logout</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
             <li><a href="#!" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a></li>
            
            </ul>
          </div>
          
          <!-- delete-account modal -->
          <!-- delete account popup modal start-->
<!-- Modal -->
<div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
        <h6 class="py-2">Are you sure you want to delete your account?</h6>
        <p>Do you really want to delete these records? This process cannot be undone.</p>
        <textarea class="form-control" name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
      </div>
      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- delete account popup modal end-->
          <!-- delete-account modal -->

        </div>
      </div>
      <div class="col-lg-9">
        <!-- Recently Favorited -->
        <div class="widget dashboard-container my-adslist">
          <h3 class="widget-header">My Ads</h3>
          <table class="table table-responsive product-dashboard-table">
            <thead>
              <tr>
                <th>Image</th>
                <th>Title</th>
                <th >link</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($shortlinks as $link)
                
              <tr>
                <td class="product-thumb" style="position: relative;">
                  <img width="80px" height="auto" src="{{$link->thumbnail_url}}" alt="image">
                  <input type="text" style="opacity:0;position:absolute;" value="{{url('/')}}/{{$link->code}}" id="selector_{{$link->id}}">
                </td>
                <td class="product-category"><span class="categories">{{$link->title}}</span></td>
                <td class="product-details">
                    <h3 class="title"><a href="{{url('/')}}/{{$link->code}}">{{url('/')}}/{{$link->code}}</a></h3>
                </td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" onclick="copyToClick('{{$link->id}}')" style="cursor:pointer" data-placement="top" title="view" class="view" >
                          <i class="fa fa-files-o"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
             @endforeach
            </tbody>
          </table>

        </div>

        <!-- pagination -->
        <div class="pagination justify-content-center">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <!-- <li class="page-item">
                <a class="page-link" href="dashboard.html" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="dashboard.html">1</a></li>
              <li class="page-item active"><a class="page-link" href="dashboard.html">2</a></li>
              <li class="page-item"><a class="page-link" href="dashboard.html">3</a></li>
              <li class="page-item">
                <a class="page-link" href="dashboard.html" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li> -->
            </ul>
          </nav>
        </div>
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>
@endsection