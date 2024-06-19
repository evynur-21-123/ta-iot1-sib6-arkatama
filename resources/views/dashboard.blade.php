<!doctype html>
<html lang="en">

   <head>
   @include('layouts.dashboard._head')  
   </head>
   <body>

      <!-- loader Start -->
      @include('layouts.dashboard.loader') 
      <!-- loader END -->

      <!-- Wrapper Start -->
      <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="../index.html">
               <img src="../images/logo.png" class="img-fluid" alt="">
               <span>Sofbox</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     <li>
                        <a href="#dashboard" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-line"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../index.html">Dashboard 1</a></li>
                           <li><a href="../dashboard1.html">Dashboard 2</a></li>
                        </ul>
                     </li>
                     <li class="active">
                        <a href="#mailbox" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li class="active"><a href="index.html">Inbox</a></li>
                           <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                     </li>
                     <li><a href="../todo.html" class="iq-waves-effect"><i class="ri-chat-check-line"></i><span>Todo</span></a></li>
                     <li>
                        <a href="#user-info" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../profile.html">User Profile</a></li>
                           <li><a href="../profile-edit.html">User Edit</a></li>
                           <li><a href="../add-user.html">User Add</a></li>
                           <li><a href="../user-list.html">User List</a></li>
                        </ul>
                     </li>
                     <li><a href="../calendar.html" class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                     <li><a href="../chat.html" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span></a></li>
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Components</span></li>                    
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../ui-colors.html">colors</a></li>
                           <li><a href="../ui-typography.html">Typography</a></li>
                           <li><a href="../ui-alerts.html">Alerts</a></li>
                           <li><a href="../ui-badges.html">Badges</a></li>
                           <li><a href="../ui-breadcrumb.html">Breadcrumb</a></li>
                           <li><a href="../ui-buttons.html">Buttons</a></li>
                           <li><a href="../ui-cards.html">Cards</a></li>
                           <li><a href="../ui-carousel.html">Carousel</a></li>
                           <li><a href="../ui-embed-video.html">Video</a></li>
                           <li><a href="../ui-grid.html">Grid</a></li>
                           <li><a href="../ui-images.html">Images</a></li>
                           <li><a href="../ui-list-group.html">list Group</a></li>
                           <li><a href="../ui-media-object.html">Media</a></li>
                           <li><a href="../ui-modal.html">Modal</a></li>
                           <li><a href="../ui-notifications.html">Notifications</a></li>
                           <li><a href="../ui-pagination.html">Pagination</a></li>
                           <li><a href="../ui-popovers.html">Popovers</a></li>
                           <li><a href="../ui-progressbars.html">Progressbars</a></li>
                           <li><a href="../ui-tabs.html">Tabs</a></li>
                           <li><a href="../ui-tooltips.html">Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../form-layout.html">Form Elements</a></li>
                           <li><a href="../form-validation.html">Form Validation</a></li>
                           <li><a href="../form-switch.html">Form Switch</a></li>
                           <li><a href="../form-chechbox.html">Form Checkbox</a></li>
                           <li><a href="../form-radio.html">Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../tables-basic.html">Basic Tables</a></li>
                           <li><a href="../data-table.html">Data Table</a></li>
                           <li><a href="../table-editable.html">Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../icon-dripicons.html">Dripicons</a></li>
                           <li><a href="../icon-fontawesome-5.html">Font Awesome 5</a></li>
                           <li><a href="../icon-lineawesome.html">line Awesome</a></li>
                           <li><a href="../icon-remixicon.html">Remixicon</a></li>
                           <li><a href="../icon-unicons.html">unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="../sign-in.html">Login</a></li>
                           <li><a href="../sign-up.html">Register</a></li>
                           <li><a href="../pages-recoverpw.html">Recover Password</a></li>
                           <li><a href="../pages-confirm-mail.html">Confirm Mail</a></li>
                           <li><a href="../pages-lock-screen.html">Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                            
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
               <div class="top-logo">
                  <a href="index.html" class="logo">
                  <img src="../images/logo.png" class="img-fluid" alt="">
                  <span>Sofbox</span>
                  </a>
               </div>
            </div>
            <div class="navbar-breadcrumb">
               <h5 class="mb-0">Mail Box</h5>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Mail Box</li>
                  </ol>
               </nav>
            </div>
             <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                           <form action="#" class="search-box">
                              <input type="text" class="text search-input" placeholder="Type here to search..." />
                           </form>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-line"></i>
                              <span class="badge badge-pill badge-primary badge-up count-mail">3</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Nik Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-notification-2-line"></i>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-danger p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Order Recieved</h6>
                                             <small class="float-right font-size-12">23 hrs ago</small>
                                             <p class="mb-0">Lorem is simply</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Nik</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="../images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40" src="../images/small/jpg.svg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Updates Available</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">120 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect iq-bg-box text-white"><img src="../images/user/1.jpg" class="img-fluid rounded" alt="user"></a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="../profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="../profile-edit.html" class="iq-sub-card iq-bg-primary-success-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-success">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="../account-setting.html" class="iq-sub-card iq-bg-primary-danger-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-danger">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="../privacy-setting.html" class="iq-sub-card iq-bg-primary-secondary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-secondary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="iq-bg-danger iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid relative">
            <div class="row">
               <div class="col-lg-3">
                  <div class="iq-card">
                     <div class="iq-card-body">
                        <div class="">
                           <div class="iq-email-list">
                              <button class="btn btn-primary btn-lg btn-block mb-3 font-size-16 p-3" data-target="#compose-email-popup" data-toggle="modal"><i class="ri-send-plane-line mr-2"></i>New Message</button>
                              <div class="iq-email-ui nav flex-column nav-pills">
                                 <li class="nav-link active" role="tab" data-toggle="pill" href="#mail-inbox"><a href="index.html"><i class="ri-mail-line"></i>Inbox<span class="badge badge-primary ml-2">4</span></a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-starred"><a href="#"><i class="ri-star-line"></i>Starred</a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-snoozed"><a href="#"><i class="ri-time-line"></i>Snoozed</a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-draft"><a href="#"><i class="ri-file-list-2-line"></i>Draft</a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-sent"><a href="#"><i class="ri-mail-send-line"></i>Sent Mail</a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-trash"><a href="#"><i class="ri-delete-bin-line"></i>Trash</a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-important"><a href="#"><i class="ri-bookmark-line"></i>Important</a></li>
                                 <li class="nav-link" role="tab" data-toggle="pill" href="#mail-spam"><a href="#"><i class="ri-spam-line"></i>Spam</a></li>
                              </div>
                              <h6 class="mt-4 mb-3">Labels</h6>
                              <ul class="iq-email-ui iq-email-label">
                                 <li><a href="#"><i class="ri-focus-fill text-primary"></i>Personal</a></li>
                                 <li><a href="#"><i class="ri-focus-fill text-danger"></i>Company</a></li>
                                 <li><a href="#"><i class="ri-focus-fill text-success"></i>Important</a></li>
                                 <li><a href="#"><i class="ri-focus-fill text-info"></i>Private</a></li>
                                 <li><a href="#"><i class="ri-focus-fill text-warning"></i>Private</a></li>
                                 <li><a href="#"><i class="ri-add-circle-line"></i>Add New Labels</a></li>
                              </ul>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <h6 class="mt-4 mb-3">Storage</h6>
                                 <div class="iq-progress-bar">
                                    <span class="bg-danger" data-percent="90"></span>
                                 </div>
                                 <span class="mt-1 d-inline-block w-100">7.02 GB (46%) of 15 GB used</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 mail-box-detail">
                  <div class="iq-card">
                     <div class="iq-card-body p-0">
                        <div class="">
                           <div class="iq-email-to-list p-3">
                              <div class="d-flex justify-content-between">
                                 <ul>
                                    <li>
                                       <a href="#" id="navbarDropdown" data-toggle="dropdown">
                                          <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label" for="customCheck1"><i class="ri-arrow-down-s-line"></i></label>
                                          </div>
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="#">Action</a>
                                          <a class="dropdown-item" href="#">Another action</a>
                                          <div class="dropdown-divider"></div>
                                          <a class="dropdown-item" href="#">Something else here</a>
                                       </div>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="top" title="Reload"><a href="#"><i class="ri-restart-line"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="Archive"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="Spam"><a href="#"><i class="ri-information-line"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="Inbox"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                    <li data-toggle="tooltip" data-placement="top" title="Zoom"><a href="#"><i class="ri-drag-move-2-line"></i></a></li>
                                 </ul>
                                 <div class="iq-email-search d-flex">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search">
                                          <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                       </div>
                                    </form>
                                    <ul>
                                       <li class="mr-3">
                                          <a class="font-size-14" href="#" id="navbarDropdown" data-toggle="dropdown">
                                          1 - 50 of 505
                                          </a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                             <a class="dropdown-item" href="#">20 per page</a>
                                             <a class="dropdown-item" href="#">50 per page</a>
                                             <a class="dropdown-item" href="#">100 per page</a>
                                          </div>
                                       </li>
                                       <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                       <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                       <li class="mr-0" data-toggle="tooltip" data-placement="top" title="Setting"><a href="#"><i class="ri-list-settings-line"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-email-listbox">
                              <div class="tab-content">
                                 <div class="tab-pane fade show active" id="mail-inbox" role="tabpanel">
                                    <ul class="iq-email-sender-list">
                                       <li class="iq-unread">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk">
                                                      <label class="custom-control-label" for="mailk"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@Mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@Mackenzieniko - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">08:00 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                        <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk1">
                                                      <label class="custom-control-label" for="mailk1"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Megan Allen (@meganallen) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">08:15 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk2">
                                                      <label class="custom-control-label" for="mailk2"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Dixa Horton (@dixahorton) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk3">
                                                      <label class="custom-control-label" for="mailk3"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk4">
                                                      <label class="custom-control-label" for="mailk4"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li class="iq-unread">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk5">
                                                      <label class="custom-control-label" for="mailk5"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk6">
                                                      <label class="custom-control-label" for="mailk6"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk7">
                                                      <label class="custom-control-label" for="mailk7"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                          <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       </li>
                                       <li class="iq-unread">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk8">
                                                      <label class="custom-control-label" for="mailk8"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk9">
                                                      <label class="custom-control-label" for="mailk9"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk10">
                                                      <label class="custom-control-label" for="mailk10"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk11">
                                                      <label class="custom-control-label" for="mailk11"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk12">
                                                      <label class="custom-control-label" for="mailk12"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk13">
                                                      <label class="custom-control-label" for="mailk13"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk14">
                                                      <label class="custom-control-label" for="mailk14"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk15">
                                                      <label class="custom-control-label" for="mailk15"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk16">
                                                      <label class="custom-control-label" for="mailk16"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk17">
                                                      <label class="custom-control-label" for="mailk17"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-starred" role="tabpanel">
                                    <ul class="iq-email-sender-list">
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk2">
                                                      <label class="custom-control-label" for="mailk2"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Dixa Horton (@dixahorton) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk3">
                                                      <label class="custom-control-label" for="mailk3"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk4">
                                                      <label class="custom-control-label" for="mailk4"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li class="iq-unread">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk5">
                                                      <label class="custom-control-label" for="mailk5"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk6">
                                                      <label class="custom-control-label" for="mailk6"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-snoozed" role="tabpanel">
                                    <ul class="iq-email-sender-list">
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk4">
                                                      <label class="custom-control-label" for="mailk4"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li class="iq-unread">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk5">
                                                      <label class="custom-control-label" for="mailk5"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk6">
                                                      <label class="custom-control-label" for="mailk6"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-draft" role="tabpanel">
                                    <ul class="iq-email-sender-list">
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk9">
                                                      <label class="custom-control-label" for="mailk9"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk10">
                                                      <label class="custom-control-label" for="mailk10"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk11">
                                                      <label class="custom-control-label" for="mailk11"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk12">
                                                      <label class="custom-control-label" for="mailk12"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk13">
                                                      <label class="custom-control-label" for="mailk13"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-sent" role="tabpanel">
                                   <ul class="iq-email-sender-list">
                                      <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk11">
                                                      <label class="custom-control-label" for="mailk11"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk12">
                                                      <label class="custom-control-label" for="mailk12"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk13">
                                                      <label class="custom-control-label" for="mailk13"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk14">
                                                      <label class="custom-control-label" for="mailk14"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk15">
                                                      <label class="custom-control-label" for="mailk15"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk16">
                                                      <label class="custom-control-label" for="mailk16"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-trash" role="tabpanel">
                                    <ul class="iq-email-sender-list">
                                      <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk14">
                                                      <label class="custom-control-label" for="mailk14"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk15">
                                                      <label class="custom-control-label" for="mailk15"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk16">
                                                      <label class="custom-control-label" for="mailk16"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-important" role="tabpanel">
                                    <ul class="iq-email-sender-list">
                                      <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk6">
                                                      <label class="custom-control-label" for="mailk6"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 25, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk7">
                                                      <label class="custom-control-label" for="mailk7"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                          <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       </li>
                                       <li class="iq-unread">
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk8">
                                                      <label class="custom-control-label" for="mailk8"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle text-warning"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre (@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk9">
                                                      <label class="custom-control-label" for="mailk9"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk10">
                                                      <label class="custom-control-label" for="mailk10"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk11">
                                                      <label class="custom-control-label" for="mailk11"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   </ul>
                                 </div>
                                 <div class="tab-pane fade" id="mail-spam" role="tabpanel">
                                   <ul class="iq-email-sender-list">
                                      <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk12">
                                                      <label class="custom-control-label" for="mailk12"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Jopour Xiong (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Mackenzie Niko (@mackenzieniko) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-1.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Jopour Xiong,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk13">
                                                      <label class="custom-control-label" for="mailk13"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Deray Billings (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg(@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-2.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Deray Billings,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk14">
                                                      <label class="custom-control-label" for="mailk14"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Lauren Drury (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-3.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Lauren Drury,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk15">
                                                      <label class="custom-control-label" for="mailk15"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Fabian Ros (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Let Hunre(@lethunre) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-4.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Fabian Ros,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk16">
                                                      <label class="custom-control-label" for="mailk16"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Dixa Horton (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Eb Begg (@ebbegg) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-5.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Dixa Horton,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <li>
                                          <div class="d-flex align-self-center">
                                             <div class="iq-email-sender-info">
                                                <div class="iq-checkbox-mail">
                                                   <div class="custom-control custom-checkbox">
                                                      <input type="checkbox" class="custom-control-input" id="mailk17">
                                                      <label class="custom-control-label" for="mailk17"></label>
                                                   </div>
                                                </div>
                                                <span class="ri-star-line iq-star-toggle"></span>
                                                <a href="javascript: void(0);" class="iq-email-title">Megan Allen (Me)</a>
                                             </div>
                                             <div class="iq-email-content">
                                                <a href="javascript: void(0);" class="iq-email-subject">Jecno Mac (@jecnomac) has sent
                                                you a direct message on Twitter! &nbsp;–&nbsp;
                                                <span>@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                                </a>
                                                <div class="iq-email-date">11:49 am</div>
                                             </div>
                                             <ul class="iq-social-media">
                                                <li><a href="#"><i class="ri-delete-bin-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-mail-line"></i></a></li>
                                                <li><a href="#"><i class="ri-file-list-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-time-line"></i></a></li>
                                             </ul>
                                          </div>
                                       </li>
                                       <div class="email-app-details">
                                          <div class="iq-card">
                                             <div class="iq-card-body p-0">
                                                <div class="">
                                                   <div class="iq-email-to-list p-3">
                                                      <div class="d-flex justify-content-between">
                                                         <ul>
                                                            <li class="mr-3">
                                                               <a href="javascript: void(0);">
                                                                  <h4 class="m-0"><i class="ri-arrow-left-line"></i></h4>
                                                               </a>
                                                            </li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Mail"><a href="#"><i class="ri-mail-open-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Info"><a href="#"><i class="ri-information-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Unread"><a href="#"><i class="ri-mail-unread-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Transfer"><a href="#"><i class="ri-folder-transfer-line"></i></a></li>
                                                            <li data-toggle="tooltip" data-placement="top" title="Bookmark"><a href="#"><i class="ri-bookmark-line"></i></a></li>
                                                         </ul>
                                                         <div class="iq-email-search d-flex">
                                                            <ul>
                                                               <li class="mr-3">
                                                                  <a class="font-size-14" href="#">1 of 505</a>
                                                               </li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Previous"><a href="#"><i class="ri-arrow-left-s-line"></i></a></li>
                                                               <li data-toggle="tooltip" data-placement="top" title="Next"><a href="#"><i class="ri-arrow-right-s-line"></i></a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <hr class="mt-0">
                                                   <div class="iq-inbox-subject p-3">
                                                      <h5 class="mt-0">Your elite author Graphic Optimization reward is ready!</h5>
                                                      <div class="iq-inbox-subject-info">
                                                         <div class="iq-subject-info">
                                                            <img src="../images/user/user-6.jpg" class="img-fluid rounded-circle" alt="#">
                                                            <div class="iq-subject-status align-self-center">
                                                               <h6 class="mb-0">Sofbox team <a href="dummy@sofbox.com"><dummy@sofbox.com></a></h6>
                                                               <div class="dropdown">
                                                                  <a class="dropdown-toggle" href="#"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  to Me
                                                                  </a>
                                                                  <div class="dropdown-menu font-size-12" aria-labelledby="dropdownMenuButton">
                                                                     <table class="iq-inbox-details">
                                                                        <tbody>
                                                                           <tr>
                                                                              <td>from:</td>
                                                                              <td>Medium Daily Digest</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>reply-to:</td>
                                                                              <td>noreply@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>to:</td>
                                                                              <td>iqonicdesigns@gmail.com</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>date:</td>
                                                                              <td>13 Dec 2019, 08:30</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>subject:</td>
                                                                              <td>The Golden Rule</td>
                                                                           </tr>
                                                                           <tr>
                                                                              <td>security:</td>
                                                                              <td>Standard encryption</td>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <span class="float-right align-self-center">Jan 15, 2029, 10:20AM</span>
                                                         </div>
                                                         <div class="iq-inbox-body mt-5">
                                                            <p>Hi Megan Allen,</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. </p>
                                                            <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                                            <p class="mt-5 mb-0">Regards,<span class="d-inline-block w-100">John Deo</span></p>
                                                         </div>
                                                         <hr>
                                                         <div class="attegement">
                                                            <h6 class="mb-2">ATTACHED FILES:</h6>
                                                            <ul>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.doc</span>
                                                               </li>
                                                               <li class="icon icon-attegment">
                                                                  <i class="fa fa-file-text-o" aria-hidden="true"></i> <span class="ml-1">mydoc.pdf</span>
                                                               </li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="compose-email-popup" class="compose-popup modal modal-sticky-bottom-right modal-sticky-lg">
                  <div class="iq-card iq-border-radius-20 mb-0">
                     <div class="iq-card-body">
                        <div class="row align-items-center">
                           <div class="col-md-12 mb-3">
                              <h5 class="text-primary float-left"><i class="ri-pencil-fill"></i> Compose Message</h5>
                              <button type="submit" class="float-right close-popup" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                           </div>
                        </div>
                        <form class="email-form">
                           <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">To:</label>
                              <div class="col-sm-10">
                                 <select  id="inputEmail3" class="select2jsMultiSelect form-control" multiple="multiple">
                                    <option value="Petey Cruiser">Petey Cruiser</option>
                                    <option value="Bob Frapples">Bob Frapples</option>
                                    <option value="Barb Ackue">Barb Ackue</option>
                                    <option value="Greta Life">Greta Life</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="cc" class="col-sm-2 col-form-label">Cc:</label>
                              <div class="col-sm-10">
                                 <select  id="cc" class="select2jsMultiSelect form-control" multiple="multiple">
                                    <option value="Brock Lee">Brock Lee</option>
                                    <option value="Rick O'Shea">Rick O'Shea</option>
                                    <option value="Cliff Hanger">Cliff Hanger</option>
                                    <option value="Barb Dwyer">Barb Dwyer</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="subject" class="col-sm-2 col-form-label">Subject:</label>
                              <div class="col-sm-10">
                                 <input type="text"  id="subject" class="form-control">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label for="subject" class="col-sm-2 col-form-label">Your Message:</label>
                              <div class="col-md-10">
                                 <textarea class="textarea form-control" rows="5">Next, use our Get Started docs to setup Tiny!</textarea>
                              </div>
                           </div>
                           <div class="form-group row align-items-center compose-bottom pt-3 m-0">
                              <div class="d-flex flex-grow-1 align-items-center">
                                 <div class="send-btn">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                 </div>
                                 <div class="send-panel">
                                    <label class="ml-2 mb-0 iq-bg-primary rounded" for="file"> <input type="file" id="file" style="display: none"> <a><i class="ri-attachment-line"></i> </a> </label>
                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-map-pin-user-line text-primary"></i></a>  </label>
                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-drive-line text-primary"></i></a>  </label>
                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-camera-line text-primary"></i></a>  </label>
                                    <label class="ml-2 mb-0 iq-bg-primary rounded"> <a href="javascript:void();"> <i class="ri-user-smile-line text-primary"></i></a>  </label>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center">
                                 <div class="send-panel float-right">
                                    <label class="ml-2 mb-0 iq-bg-primary rounded" ><a href="javascript:void();"><i class="ri-settings-2-line text-primary"></i></a></label>
                                    <label class="ml-2 mb-0 iq-bg-primary rounded"><a href="javascript:void();">  <i class="ri-delete-bin-line text-primary"></i></a>  </label>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      @include('layouts.dashboard.footer') 
      <!-- Footer END -->
      
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="../js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="../js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="../js/waypoints.min.js"></script>
      <script src="../js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="../js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="../js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="../js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="../js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="../js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="../js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth S../crollbar JavaScript -->
      <script src="../js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="../js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="../js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="../js/custom.js"></script>
   </body>
</html>