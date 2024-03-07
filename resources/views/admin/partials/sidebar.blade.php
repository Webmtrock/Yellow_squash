 <!-- Start::app-sidebar -->
 <aside class="app-sidebar sticky" id="sidebar">

     <!-- Start::main-sidebar-header -->
     <div class="main-sidebar-header">
         <a href="index.html" class="header-logo">
             <img src="{{ asset('admin/assets/images/brand-logos/logo.png') }}" class="header-brand-img" alt="">
             <!-- <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-dark">
                    <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white"> -->
         </a>
     </div>

     <div class="main-sidebar" id="sidebar-scroll">


         <nav class="main-menu-container nav nav-pills flex-column sub-open">
             <div class="slide-left" id="slide-left">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                     <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                 </svg>
             </div>
             <ul class="main-menu">

                 <li class="slide__category"><span class="category-name">Main</span></li>
                 <li class="slide">
                     <a href="/admin/dashboard" class="side-menu__item">
                         <i class="fe fe-home side-menu__icon"></i>
                         <span class="side-menu__label">Dashboard</span>
                     </a>
                 </li>
                 <li class="slide">
                     <a href="{{ route('expert.index') }}" class="side-menu__item ">
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                             height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z">
                             </path>
                         </svg>
                         <span class="side-menu__label ml-1">Expert</span>
                     </a>
                 </li>
                 <li class="slide">
                     <a href="{{ route('article.index') }}" class="side-menu__item">
                         <!-- <i class="fe fe-users side-menu__icon"></i> -->
                         <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20"
                             width="20" xmlns="http://www.w3.org/2000/svg">
                             <g>
                                 <path fill="none" d="M0 0h24v24H0z"></path>
                                 <path
                                     d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM7 6h4v4H7V6zm0 6h10v2H7v-2zm0 4h10v2H7v-2zm6-9h4v2h-4V7z">
                                 </path>
                             </g>
                         </svg>
                         <span class="side-menu__label ml-1">Article</span>
                     </a>
                 </li>

                 <li class="slide__category"><span class="category-name">Roles</span></li>
                 <li class="slide">
                     <a href="{{ route('roles.index') }}" class="side-menu__item">
                         <!-- <i class="fe fe-home side-menu__icon"></i> -->
                         <span class="side-menu__label">Roles</span>
                     </a>
                 </li>
                 <li class="slide">
                     <a href="{{ route('permissions.index') }}" class="side-menu__item">
                         <!-- <i class="fe fe-home side-menu__icon"></i> -->
                         <span class="side-menu__label">Permission</span>
                     </a>
                 </li>
                 <!-- <li class="slide__category"><span class="category-name">Logout</span></li>
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">
                                <i class="fe fe-grid side-menu__icon"></i>
                                <span class="side-menu__label">Logout</span>
                            </a>
                        </li> -->
                 <li class="slide__category"><span class="category-name">Users Management</span></li>
                 <a href="/admin/users" class="side-menu__item">
                     <i class="fe fe-users side-menu__icon"></i>
                     <span class="side-menu__label">Users</span>
                 </a>
                 <li class="slide__category"><span class="category-name">Inventory</span></li>
                 <a href="/admin/categories" class="side-menu__item">
                     <i class="fe fe-book side-menu__icon"></i>
                     <span class="side-menu__label">Categories</span>
                 </a>
                 <li class="slide__category"><span class="category-name">Logout</span></li>
                 <li class="slide">
                     <a href="{{ route('admin/logout') }}" class="side-menu__item"
                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="fe fe-grid side-menu__icon"></i>
                         <span class="side-menu__label">Logout</span>
                     </a>
                 </li>
                 <form id="logout-form" action="{{ route('admin/logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                 <!-- =======

                 <nav class="main-menu-container nav nav-pills flex-column sub-open">
                     <div class="slide-left" id="slide-left">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                             viewBox="0 0 24 24">
                             <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                         </svg>
                     </div>
                     <ul class="main-menu">

                         <li class="slide__category"><span class="category-name">Main</span></li>
                         <li class="slide">
                             <a href="/dashboard" class="side-menu__item">
                                 <i class="fe fe-home side-menu__icon"></i>
                                 <span class="side-menu__label">Dashboard</span>
                             </a>
                         </li>
                         <li class="slide__category"><span class="category-name">Logout</span></li> -->





                 <!--  <li class="slide__category"><span class="category-name">General</span></li>
                       
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-package side-menu__icon"></i>
                                <span class="side-menu__label">Ui Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Ui Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                                </li>
                                <li class="slide">
                                    <a href="images_figures.html" class="side-menu__item">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="navs_tabs.html" class="side-menu__item">Navs & Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tags.html" class="side-menu__item">Tags</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                            </ul>
                        </li>
                     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Gutters</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Helpers</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Position</a>
                                </li>
                                <li class="slide">
                                    <a href="more.html" class="side-menu__item">Additional Content</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-pie-chart side-menu__icon"></i>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                     
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-file-text side-menu__icon"></i>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle hor-rightangle"></i>
                                <span class="badge bg-success side-badge fs-11">6</span>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_check_radios.html" class="side-menu__item">Checks & Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                                </li>
                                <li class="slide">
                                    <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form_validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                    
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-file side-menu__icon"></i>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions_collpase.html" class="side-menu__item">Accordions & Collapse</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="crypto-currencies.html" class="side-menu__item">Crypto-currencies</a>
                                </li>
                                <li class="slide">
                                    <a href="default-chat.html" class="side-menu__item">Default Chat</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="modals_closes.html" class="side-menu__item">Modals & Closes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="search.html" class="side-menu__item">Search</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                                <li class="slide">
                                    <a href="users-list.html" class="side-menu__item">User List</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                       

                       
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-package side-menu__icon"></i>
                                <span class="side-menu__label">Apps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="timeline.html" class="side-menu__item">Timeline</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-layers side-menu__icon"></i>
                                <span class="side-menu__label">Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item"> Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="editprofile.html" class="side-menu__item"> Edit Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="email.html" class="side-menu__item"> Mail-Inbox</a>
                                </li>
                                <li class="slide">
                                    <a href="emailservices.html" class="side-menu__item">Mail-Compose</a>
                                </li>
                                <li class="slide">
                                    <a href="about.html" class="side-menu__item"> About Company</a>
                                </li>
                                <li class="slide">
                                    <a href="services.html" class="side-menu__item"> Services</a>
                                </li>
                                <li class="slide">
                                    <a href="faq.html" class="side-menu__item"> FAQS</a>
                                </li>
                                <li class="slide">
                                    <a href="terms.html" class="side-menu__item"> Terms</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice.html" class="side-menu__item"> Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item"> Pricing Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item"> Empty Page</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">E-Commerce
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="shop.html" class="side-menu__item">Shop</a>
                                        </li>
                                        <li class="slide">
                                            <a href="shop-description.html" class="side-menu__item">Shopping Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="cart.html" class="side-menu__item">Shopping Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                        </li>
                                        <li class="slide">
                                            <a href="checkout.html" class="side-menu__item">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">File Manager
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                        </li>
                                        <li class="slide">
                                            <a href="filemanager-list.html" class="side-menu__item">File Manager List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="filemanager-details.html" class="side-menu__item">File Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-sliders side-menu__icon"></i>
                                <span class="side-menu__label">Nested Menu</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Nested Menu</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="slide__category"><span class="category-name">Tables & Authentication</span></li>
                        
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-clipboard side-menu__icon"></i>
                                <span class="side-menu__label">Tables</span>
                                <span class="badge bg-secondary side-badge fs-11">3</span>
                                <i class="fe fe-chevron-right side-menu__angle hor-rightangle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>

                                </li>
                            </ul>
                        </li>
                       
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-settings side-menu__icon"></i>
                                <span class="side-menu__label">Authentication</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Custom Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="login.html" class="side-menu__item"> Login</a>
                                </li>
                                <li class="slide">
                                    <a href="register.html" class="side-menu__item"> Register</a>
                                </li>
                                <li class="slide">
                                    <a href="forgot-password.html" class="side-menu__item"> Forgot Password</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen.html" class="side-menu__item"> Lock screen</a>
                                </li>
                                <li class="slide">
                                    <a href="construction.html" class="side-menu__item"> Under Construction</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Error Pages
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="400.html" class="side-menu__item">400</a>
                                        </li>
                                        <li class="slide">
                                            <a href="401.html" class="side-menu__item">401</a>
                                        </li>
                                        <li class="slide">
                                            <a href="403.html" class="side-menu__item">403</a>
                                        </li>
                                        <li class="slide">
                                            <a href="404.html" class="side-menu__item">404</a>
                                        </li>
                                        <li class="slide">
                                            <a href="500.html" class="side-menu__item">500</a>
                                        </li>
                                        <li class="slide">
                                            <a href="503.html" class="side-menu__item">503</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                       


                       
                        <li class="slide__category"><span class="category-name">Maps & Icons</span></li>
                        

                       
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-map-pin side-menu__icon"></i>
                                <span class="side-menu__label">Maps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li> -->
             </ul>
             </li>

             <!-- <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <i class="fe fe-command side-menu__icon"></i>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li> -->

             </ul>
             <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                     height="24" viewBox="0 0 24 24">
                     <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                 </svg></div>
         </nav>


     </div>


 </aside>