
 <aside class="app-sidebar sticky" id="sidebar">
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="{{ asset('admin/assets/images/brand-logos/logo.png') }}" class="header-brand-img" alt="">  
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
                  <li class="slide">
                           <a href="/admin/programs" class="side-menu__item">
                               <!-- <i class="fe fe-grid side-menu__icon"></i> -->
                               <i class="bi bi-file-person-fill"></i>
                               <span class="side-menu__label">Program</span>
                           </a>
                       </li>

                 <li class="slide__category"><span class="category-name">Roles</span></li>
                 <li class="slide">
                     <a href="{{ route('roles.index') }}" class="side-menu__item">
                        
                         <span class="side-menu__label">Roles</span>
                     </a>
                 </li>
                 <li class="slide">
                     <a href="{{ route('permissions.index') }}" class="side-menu__item">
                         
                         <span class="side-menu__label">Permission</span>
                     </a>
                 </li>
                 
                 <li class="slide__category"><span class="category-name">Users Management</span></li>
                 <a href="/admin/users" class="side-menu__item">
                     <i class="fe fe-users side-menu__icon"></i>
                     <span class="side-menu__label">Users</span>
                 </a>
                 <li class="slide__category"><span class="category-name">Webinars</span></li>
                 <a href="{{ route('webinars.index') }}" class="side-menu__item">
                     <i class="fe fe-users side-menu__icon"></i>
                     <span class="side-menu__label">Webinars</span>
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
             </ul>
             </li>
             </ul>
             <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                     height="24" viewBox="0 0 24 24">
                     <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                 </svg></div>
         </nav>
     </div>
 </aside>