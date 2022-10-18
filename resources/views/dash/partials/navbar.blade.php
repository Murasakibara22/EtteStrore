<div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="/dashboard">
            <img src="../img/logo2.png" style="width: 100%; height: 100%;" alt="">
          </a>
          <a class="navbar-brand brand-logo-mini" href="/dashboard">
            <img src="{{ asset('dashStyle/images/logo-mini.svg')}}" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Administrer <span class="text-black fw-bold"></span></h1>
            <h3 class="welcome-sub-text">Votre résumé des performances </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Rechercher ici" title="Recherche">
            </form>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">Vous avez 4 Nouvelles notifications </p>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                  <p class="fw-light small-text mb-0"> Just now </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3" href="/Utilisateurs_list">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject fw-normal text-dark mb-1">Nouveau membre enregistrer</h6>
                  <p class="fw-light small-text mb-0"> recent </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3" href="/comment_list">
                <p class="mb-0 font-weight-medium float-left">Vous avez 7 nouveau messages </p>
                <span class="badge badge-pill badge-primary float-right" href="/comment_list">Voir tous</span>
              </a>
              <div class="dropdown-divider"></div>

            </div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{ asset('images/faces/joackim.jpg')}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{ asset('images/faces/joackim.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">Murasakibara</p>
                <p class="fw-light text-muted mb-0">MurasakibaraSecure@gmail.com</p>
              </div>

              <a class="dropdown-item" href="/contact_list"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item" href="/deconnexion"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>deconnexion</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="{{ asset('images/faces/face1.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('images/faces/face2.jpg')}}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('images/faces/face3.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('images/faces/face4.jpg')}}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('images/faces/face5.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('images/faces/face6.jpg')}}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
  <!-- Blog-->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Blog</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/addBlog"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Blog_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>

  <!-- Commandes-->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#com" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-message-processing "></i>
              <span class="menu-title">Commandes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="com">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/commandes_list">Tous</a></li>
              </ul>
             <!-- <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/comdate">Par année</a></li>
              </ul> -->
            </div>
          </li>

   <!-- Contact-->
   <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#chart" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-account-box"></i>
              <span class="menu-title">Contact</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="chart">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/contact_list">Voir</a></li>
              </ul>
             <!-- <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/comdate">Par année</a></li>
              </ul> -->
            </div>
          </li>





          <!--Categories -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-eleme" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-eleme" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/newCategorie"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Categorie_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>

<!--Team -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#utilisateur" aria-expanded="false" aria-controls="utilisateur">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">utilisateurs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="utilisateur" >
              <ul class="nav flex-column sub-menu">
              
                <li class="nav-item"> <a class="nav-link" href="/addUser"> Ajouter  <i class="menu-icon mdi mdi-pencil"></i></a> </li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Utilisateurs_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>

<!--Sous Categories -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#souscat" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi  mdi-layers-outline"></i>
              <span class="menu-title">Sous Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="souscat" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/new_SousCategorie"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/SousCategorie_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>
<!-- Secteurs D'intervention-->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#SecIn" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Nos Secteurs d'Inter...</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="SecIn" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/addSecteurs"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Secteurs_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>
<!--Partenaires -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Partner" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Nos Partenaires</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Partner" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/addPartnaire"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Partnaire_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>

<!--Produits -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#prod" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-drawing-box"></i>
              <span class="menu-title">Produits</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="prod" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/new_produit"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Produit_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#actu" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-drawing-box"></i>
              <span class="menu-title">Actualités</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="actu" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/addActu"> Ajouter </a></li>
              </ul>
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/Actu_list"> Voir tous </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Aperçu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">plus</a>
                    </li>
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                    <!--  <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Partager</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> imprimer</a> -->
                      <a href="#" class="btn btn-primary bg-primary text-white me-0"><i class="icon-download"></i> exporter</a>
                    </div>
                  </div>
                </div>