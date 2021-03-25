<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html">Admin PoS</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../asset/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="data:image/jpeg;base64,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" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>