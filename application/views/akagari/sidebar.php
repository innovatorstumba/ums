<div class="main-container" id="container">

<div class="overlay"></div>
<div class="search-overlay"></div>

<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
    
    <nav id="sidebar">
        

        <div class="shadow-bottom" ></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="#dashboard" data-toggle="collapse" aria-expanded="true">
                   
                </a>
              
            </li>

            <li class="menu md-visible menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>Ikaze</span></div>
            </li>

            <li class="menu md-visible">
                <a href="<?=base_url()?>akagari/chat" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-comment-alt" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-weight:bold; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Uruganiriro<span></i>                        

                    </div>
                </a>
            </li>

            <!-- <li class="menu md-visible">
                <a href="apps_mailbox.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>Mailbox</span>
                    </div>
                </a>
            </li>


            <li class="menu md-visible">
                <a href="#invoice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        <span>Invoice</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="invoice" data-parent="#accordionExample">
                    <li>
                        <a href="apps_invoice-list.html"> List </a>
                    </li>
                    <li>
                        <a href="apps_invoice-preview.html"> Preview </a>
                    </li>
                    <li>
                        <a href="apps_invoice-add.html"> Add </a>
                    </li>
                    <li>
                        <a href="apps_invoice-edit.html"> Edit </a>
                    </li>                            
                </ul>
            </li>

            <li class="menu md-visible">
                <a href="apps_calendar.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Calendar</span>
                    </div>
                </a>
            </li> -->

 
            <!-- <li class="menu">
                <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fa fa-male" style="font-size:16px;color:green;"><span style="color:#000; padding-left:20px">Umuganda<span></i>                        
                    </div>
                </a>
            </li>
           
            <li class="menu">
                <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fa fa-file" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px">Ibyemezo<span></i>                        
                    </div>
                </a>
            </li>-->

            <li class="menu">
            <a href="#umuganda" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-people-carry" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Umuganda<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="umuganda" data-parent="#accordionExample">
                    <li>
                        <a href="<?=base_url()?>akagari/umuganda"> Kureba Imiganda </a>
                    </li>
                                         
                    

                </ul>
            </li>

            <li class="menu">
            <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-bell" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Amatangazo<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                    <li>
                        <a href="<?=base_url()?>akagari/ayaleta"> Ayaleta </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/amatangazo"> Ayokurangisha  </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/ibyaranzwe"> Ibyaranzwe  </a>
                    </li>                      
                    

                </ul>
            </li>
            
            <li class="menu">
                <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-user-friends" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Imiryango<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                <li>
                        <a href="<?=base_url()?>akagari/ongeramo_umuryango"> ONGERAMO UMURYANGO </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/imiryango"> Kureba Imiryango </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/abagabo"> Abagabo</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/abagore"> Abagore</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/abana"> Abana</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/urubyiruko"> Urubyiruko</a>
                    </li>
                                              
                    

                </ul>
            </li>
            
            <li class="menu">
                <a href="<?=base_url()?>akagari/abaturage" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-user-circle" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Abaturage<span></i>                        

                    </div>
                </a>
            </li>
           
            <li class="menu">
                <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-address-card" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Umutekano<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                    <li>
                        <a href="<?=base_url()?>akagari/abashyitsi"> Abashyitsi</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/ibyibwe"> Ibyibwe</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/ayaleta"> Amatangazo y'umutekano</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/umutekano"> Umusanzu W'umutekano</a>
                    </li>
                   
                </ul>
            </li>
            <li class="menu">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-luggage-cart" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Imibereho myiza<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                
                    <li>
                        <a href="<?=base_url()?>akagari/akagoroba"> Umugoroba w'ababyeyi </a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>akagari/isuku"> Umusanzu w'isuku</a>
                    </li>
                </ul>
            </li>
        
            <!-- <li class="menu">
            <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-universal-access" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Iterambere<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
              
                            
                </ul>
            </li> -->
            <li class="menu">
            <a href="#komite" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-universal-access" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Komite Nyobozi<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="komite" data-parent="#accordionExample">
              
                    <li>
                        <a href="<?=base_url()?>akagari/abagize_komite"> Abagize komite </a>
                    </li>   
                    <li>
                        <a href="<?=base_url()?>akagari/kwandika_umuyobozi"> Ongeramo Umuyobozi</a>
                    </li>   
                                           
                    
                            
                </ul>
            </li>
            <li class="menu">
            <a href="#ibarura" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-file" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Ibarura<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="ibarura" data-parent="#accordionExample">
              
                    <li>
                        <a href="<?=base_url()?>akagari/girinka"> Girinka </a>
                    </li>   
                    <li>
                        <a href="<?=base_url()?>akagari/ibicanwa">Ibicinwa</a>
                    </li>   
                    <li>
                        <a href="<?=base_url()?>akagari/akarima">Akarima Kigikoni</a>
                    </li>  
                    <li>
                        <a href="<?=base_url()?>akagari/agatanda">Agatanda</a>
                    </li>  
                    <li>
                        <a href="<?=base_url()?>akagari/abanyeshuri">Abanyeshuri</a>
                    </li>  
                    <li>
                        <a href="<?=base_url()?>akagari/abakozi">Abakozi</a>
                    </li>                            
                    
                            
                </ul>
            </li>
            
            <!-- <li class="menu">
            <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                    <i class="fas fa-file" style="font-size:16px;color:blue;"><span style="color:#000; padding-left:20px; font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;">Ibyemezo<span></i>                        

                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                    <li>
                        <a href="component_tabs.html"> Ayaleta </a>
                    </li>
                    <li>
                        <a href="component_accordion.html"> Ayokurangisha  </a>
                    </li>
                    <li>
                        <a href="component_accordion.html"> Ibyaranzwe  </a>
                    </li>                      
                    

                </ul>
            </li> -->

           
        </ul>
        
    </nav>

</div>