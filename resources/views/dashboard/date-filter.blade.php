<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>gateway to facebook</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
    
    <!-- plugins:css -->
    <!--datepicker files -->
    <!--end of css files here-->

    <link rel="stylesheet" href="{{asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html">
            {{-- <img src="{{asset('images/logo.svg')}}" alt="logo" /> </a> --}}
            <h1 style="margin:10px ; color:#070707" class="profile-name">Admin Area</h1>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="{{asset('images/logo-mini.svg')}}" alt="logo" /> </a>
        </div>
        {{-- <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-fr"></i>
                  </div>French
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ae"></i>
                  </div>Arabic
                </a>
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-ru"></i>
                  </div>Russian
                </a>
              </div>
            </li>
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              <input type="search" class="form-control" placeholder="Search Here">
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{asset('images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="{{asset('images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                    <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('/images/faces/face8.jpg')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('/images/faces/face8.jpg')}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div> --}}
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Kurt Snow</p>
                  <p class="designation">Admin user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title" >Dashboard</span>
              </a>
            </li>
            {{-- <li class="nav-item"> --}}
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                {{-- <span class="menu-title">Basic UI Elements</span> --}}
                <i class="menu-arrow"></i>
              </a>
              {{-- <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu"> --}}
                  {{-- <li class="nav-item"> --}}
                    {{-- <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a> --}}
                  {{-- </li> --}}
                  {{-- <li class="nav-item"> --}}
                    {{-- <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a> --}}
                  {{-- </li> --}}
                  {{-- <li class="nav-item"> --}}
                    {{-- <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a> --}}
                  {{-- </li> --}}
                {{-- </ul> --}}
              {{-- </div> --}}
            {{-- </li> --}}
            {{-- <li class="nav-item">
              {{-- <a class="nav-link" href="../../pages/forms/basic_elements.html"> --}}
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                {{-- <span class="menu-title">Form elements</span> --}}
              </a>
            {{-- </li> --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="../../pages/charts/chartjs.html">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                {{-- <span class="menu-title">Charts</span> --}}
              </a>
            {{-- </li>  --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <i class="menu-icon typcn typcn-bell"></i>
                {{-- <span class="menu-title">Tables</span> --}}
              {{-- </a> --}}
            {{-- </li>  --}}
            {{-- <li class="nav-item">
              <a class="nav-link" href="../../pages/icons/font-awesome.html">
                <i class="menu-icon typcn typcn-user-outline"></i>
                {{-- <span class="menu-title">Icons</span> --}}
              {{-- </a> --}}
            {{-- </li>  --}}
            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                {{-- <span class="menu-title">User Pages</span> --}}
                {{-- <i class="menu-arrow"></i>
              </a> --}}
              {{-- <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/login.html"> Login </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/register.html"> Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a>
                  </li>
                </ul>
              </div> --}}
            {{-- </li>  --}}
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              {{-- <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code> </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Profile</th>
                          <th>VatNo.</th>
                          <th>Created</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>53275532</td>
                          <td>15 May 2017</td>
                          <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>53275533</td>
                          <td>14 May 2017</td>
                          <td>
                            <label class="badge badge-info">Fixed</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>53275534</td>
                          <td>16 May 2017</td>
                          <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td>20 May 2017</td>
                          <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hoverable Table</h4>
                    <p class="card-description"> Add class <code>.table-hover</code> </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>Product</th>
                          <th>Sale</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>Photoshop</td>
                          <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            <label class="badge badge-danger">Pending</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Messsy</td>
                          <td>Flash</td>
                          <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                        </tr>
                        <tr>
                          <td>John</td>
                          <td>Premier</td>
                          <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                            <label class="badge badge-info">Fixed</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Peter</td>
                          <td>After effects</td>
                          <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i>
                          </td>
                          <td>
                            <label class="badge badge-success">Completed</label>
                          </td>
                        </tr>
                        <tr>
                          <td>Dave</td>
                          <td>53275535</td>
                          <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i>
                          </td>
                          <td>
                            <label class="badge badge-warning">In progress</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Striped Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code> </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> User </th>
                          <th> First name </th>
                          <th> Progress </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces-clipart/pic-1.png')}}" alt="image" /> </td>
                          <td> Herman Beck </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces-clipart/pic-2.png')}}" alt="image" /> </td>
                          <td> Messsy Adam </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces-clipart/pic-3.png')}}" alt="image" /> </td>
                          <td> John Richards </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('assets/images/faces-clipart/pic-4.png')}}" alt="image" /> </td>
                          <td> Peter Meggik </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('images/faces-clipart/pic-1.png')}}" alt="image" /> </td>
                          <td> Edward </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="{{asset('images/faces-clipart/pic-2.png')}}" alt="image" /> </td>
                          <td> John Doe </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 123.21 </td>
                          <td> April 05, 2015 </td>
                        </tr>
                        <tr>
                          <td class="py-1">
                            <img src="../../../assets/images/faces-clipart/pic-3.png" alt="image" /> </td>
                          <td> Henry Tom </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 150.00 </td>
                          <td> June 16, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
            {{-- previous and nex buttons for the need of pagination  --}}
              {{-- <div class="siema">
                <div><img src="https://pawelgrzybek.com/siema/assets/siema--pink.svg" alt="Siema image" /></div>
                <div><img src="https://pawelgrzybek.com/siema/assets/siema--yellow.svg" alt="Siema image" /></div>
                <div><img src="https://pawelgrzybek.com/siema/assets/siema--pink.svg" alt="Siema image" /></div>
                <div><img src="https://pawelgrzybek.com/siema/assets/siema--yellow.svg" alt="Siema image" /></div>
              </div> --}}
          
          
            <form id="paginate_form" action="{{route('prev_date_paginator')}}" method="POST">  
              @csrf
            @if($prev_link != "")
            <input type="submit" value="Prev">
            <input type="hidden" name="prev" value="{{$prev_link}}">
            @endif
          </form>


        <form id="paginate_form2" action="{{route('next_date_paginator')}}" method="POST">
          @csrf 
          @if($next_link != "")
               <input type="submit" value="Next">
             <input type="hidden" name="next" value="{{$next_link}}">
             @endif
              </form>

              @include('includes.datepicker')


               <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> Ad Accounts  </h2>
                    {{-- <p class="card-description"> Add class <code>.table-bordered</code> </p> --}}
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Account ID# </th>
                          <th> Account Name </th>
                          <th> Status </th>
                          <th> Amount Spent </th>
                          {{-- <th> Deadline </th> --}}
                        </tr>
                      </thead>
                      <tbody>                       
                      {{-- @foreach($ids as $id) 
                        @foreach($names as $name) 
                        @foreach($status as $stat) 
                        @foreach($spent as $spents) 
                        <tr>
                          <td> {{$id}} </td>
                          <td> {{$name}} </td>
                          <td> {{$stat}} </td>
                          <td> {{$spents}} </td>
                        </tr>
                        @endforeach  
                        @endforeach
                        @endforeach
                        @endforeach  --}}
                        
                        @for($i=0 ; $i<count($ids);$i++)
                        <tr>
                              <td>
                              {{$ids[$i]}}
                            </td>
                            
                            
                              <td>
                              {{$names[$i]}}
                            </td>
                            
                            
                              <td>
                                @if($status[$i] == 1)
                              <span style="color:#47A025">ACTIVE</span>
                              @endif
                              @if($status[$i] == 101)
                              <span style="color:#A50104">CLOSED</span>
                            
                               
                              @endif
                              @if($status[$i] == 2)
                              <span style="color:#A50104">DISABLED</span>
                            
                               
                              @endif
                              @if($status[$i] == 3)
                              <span style="color:#A50104">UNSETTLED</span>
                            
                               
                              @endif
                              @if($status[$i] == 7)
                              <span style="color:#A50104">PENDING_RISK_REVIEW</span>
                            
                               
                              @endif
                              @if($status[$i] == 8)
                              <span style="color:#A50104">PENDING_SETTLEMENT</span>
                            
                               
                              @endif
                              @if($status[$i] == 9)
                              <span style="color:#A50104">IN_GRACE_PERIOD</span>
                            
                               
                              @endif
                              @if($status[$i] == 100)
                              <span style="color:#A50104">PENDING_CLOSURE</span>
                            
                               
                              @endif
                              @if($status[$i] == 201)
                              <span style="color:#A50104">ANY_ACTIVE</span>
                            
                               
                              @endif
                              @if($status[$i] == 202)
                              <span style="color:#A50104">ANY_CLOSED</span>
                            
                               
                              @endif
                                                         
                              
                              
                            </td>
                            
                            
                              <td>
                              ${{$spent[$i]}}
                            </td>
                          </tr>
                        @endfor
                      
                     
                     
                     
                        {{-- @foreach($ids as $id)
                        <tr>
                          <td> {{$id}} </td>
                          @endforeach
                        @foreach($names as $name)   
                        <td> {{$name}} </td>
                        @endforeach
                        @foreach($status as $stat)
                        <td> {{$stat}} </td> 
                        @endforeach
                        @foreach($spent as $spents) 
                        <td> {{$spents}} </td>
                      </tr> 
                        @endforeach --}}
                      

                        
                       
                         
                      {{-- </tr> --}}
                          {{-- <td> Herman Beck </td>
                          <td>
                           
                          </td>
                          <td> $ 77.99 </td> --}}
                          {{-- <td> May 15, 2015 </td> --}}
                        {{-- </tr>
                        <tr> --}}
                          {{-- <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $245.30 </td>
                          {{-- <td> July 1, 2015 </td> --}}
                        {{-- </tr> --}}
                        {{-- <tr>
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $138.00 </td>
                          {{-- <td> Apr 12, 2015 </td> --}}
                        {{-- </tr>  --}}
                        {{-- <tr>
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 77.99 </td>
                          {{-- <td> May 15, 2015 </td> --}}
                        {{-- </tr> --}}
                        {{-- <tr>
                          <td> 5 </td>
                          <td> Edward </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 160.25 </td>
                          {{-- <td> May 03, 2015 </td> --}}
                        {{-- </tr>  --}}
                        {{-- <tr>
                          <td> 6 </td>
                          <td> John Doe </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 123.21 </td>
                          {{-- <td> April 05, 2015 </td> --}}
                        {{-- </tr>/ --}}
                        {{-- <tr>
                          <td> 7 </td>
                          <td> Henry Tom </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td> $ 150.00 </td>
                          {{-- <td> June 16, 2015 </td> --}}
                        {{-- </tr>  --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              {{-- <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Inverse table</h4>
                    <p class="card-description"> Add class <code>.table-dark</code> </p>
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> First name </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr>
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr>
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr>
                          <td> 5 </td>
                          <td> Edward </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                        <tr>
                          <td> 6 </td>
                          <td> John Doe </td>
                          <td> $ 123.21 </td>
                          <td> April 05, 2015 </td>
                        </tr>
                        <tr>
                          <td> 7 </td>
                          <td> Henry Tom </td>
                          <td> $ 150.00 </td>
                          <td> June 16, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Table with contextual classes</h4>
                    <p class="card-description"> Add class <code>.table-{color}</code> </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> First name </th>
                          <th> Product </th>
                          <th> Amount </th>
                          <th> Deadline </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="table-info">
                          <td> 1 </td>
                          <td> Herman Beck </td>
                          <td> Photoshop </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr class="table-warning">
                          <td> 2 </td>
                          <td> Messsy Adam </td>
                          <td> Flash </td>
                          <td> $245.30 </td>
                          <td> July 1, 2015 </td>
                        </tr>
                        <tr class="table-danger">
                          <td> 3 </td>
                          <td> John Richards </td>
                          <td> Premeire </td>
                          <td> $138.00 </td>
                          <td> Apr 12, 2015 </td>
                        </tr>
                        <tr class="table-success">
                          <td> 4 </td>
                          <td> Peter Meggik </td>
                          <td> After effects </td>
                          <td> $ 77.99 </td>
                          <td> May 15, 2015 </td>
                        </tr>
                        <tr class="table-primary">
                          <td> 5 </td>
                          <td> Edward </td>
                          <td> Illustrator </td>
                          <td> $ 160.25 </td>
                          <td> May 03, 2015 </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank">gateway2facebook</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>by aspire logics
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('js/shared/misc.js')}}"></script>

    

    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->


    <!--script files for date picker-->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <script src="{{asset('js/myjs.js')}}"></script>
    <!--script files end here for date picker-->

  </body>
</html>