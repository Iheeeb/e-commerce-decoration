<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Admin!</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('dashassets/css/user.min.css')}} "rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link active" href="index.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Dashbboard</span></div>
                  </a></li>
                <li class="nav-item">
                  <p class="navbar-vertical-label">Apps</p><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">E commerce</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="e-commerce">
                    <li class="nav-item"><a class="nav-link" href="admin/category" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Categories</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{'/categories/indexcategories'}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Products</span></div>
                      </a></li>
                      <li class="nav-item"><a class="nav-link" href="apps/e-commerce/orders.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Orders</span></div>
                      </a></li>
                  </ul>
                </li>
                
          
            </div>
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="#!"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Settings</span></a></div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">
                <a href="/admin">
                 <p class="logo-text ms-2 d-none d-sm-block">DECO</p>
    </a>
                </div>
              </div>
            </a></div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block" style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/behance.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-cloud.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/slack.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/github.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/bitbucket.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-drive.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/trello.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/figma.png" alt="" width="20">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/twitter.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/pinterest.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/linkedin.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-maps.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-photos.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/spotify.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                        <h6 class="mt-2">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" placeholder="Update your status"></div>
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr>
                      <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
              <div class="col-12 col-xxl-6">
                <div class="mb-8">
                  <h2 class="mb-2">Ecommerce Dashboard</h2>
                  <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
                </div>
                <div class="row align-items-center g-4">
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/4.png" alt="" height="46" width="46">
                      <div class="ms-3">
                        <h4 class="mb-0">57 new orders</h4>
                        <p class="text-800 fs--1 mb-0">Awating processing</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/2.png" alt="" height="46" width="46">
                      <div class="ms-3">
                        <h4 class="mb-0">5 orders</h4>
                        <p class="text-800 fs--1 mb-0">On hold</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-auto">
                    <div class="d-flex align-items-center"><img src="assets/img/icons/illustrations/3.png" alt="" height="46" width="46">
                      <div class="ms-3">
                        <h4 class="mb-0">15 products</h4>
                        <p class="text-800 fs--1 mb-0">Out of stock</p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="bg-200 mb-6 mt-4">
                <div class="row flex-between-center mb-4 g-3">
                  <div class="col-auto">
                    <h3>Total sells</h3>
                    <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                  </div>
                  <div class="col-8 col-sm-4"><select class="form-select form-select-sm mt-2" id="select-gross-revenue-month">
                      <option>Mar 1 - 31, 2022</option>
                      <option>April 1 - 30, 2022</option>
                      <option>May 1 - 31, 2022</option>
                    </select></div>
                </div>
     
          <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white pt-7 border-y border-300">
            <div data-list='{"valueNames":["product","customer","rating","review","time"],"page":6}'>
              <div class="row align-items-end justify-content-between pb-5 g-3">
                <div class="col-auto">
                  <h3>Latest reviews</h3>
                  <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="row g-2">
                    <div class="col-auto flex-1">
                      <div class="search-box">
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search" type="search" placeholder="Search" aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
                      </div>
                    </div>
                    <div class="col-auto"><button class="btn btn-sm btn-phoenix-secondary bg-white hover-bg-100" type="button">All products</button><button class="btn btn-sm btn-phoenix-secondary ms-2 bg-white hover-bg-100" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive mx-n1 px-1 scrollbar">
                <table class="table fs--1 mb-0">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs--1 border-top ps-0 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </th>
                      <th class="sort border-top white-space-nowrap align-middle" scope="col"></th>
                      <th class="sort border-top white-space-nowrap align-middle" scope="col" style="min-width:360px;" data-sort="product">PRODUCT</th>
                      <th class="sort border-top align-middle" scope="col" data-sort="customer" style="min-width:200px;">CUSTOMER</th>
                      <th class="sort border-top align-middle" scope="col" data-sort="rating" style="min-width:110px;">RATING</th>
                      <th class="sort border-top align-middle" scope="col" style="max-width:350px;" data-sort="review">REVIEW</th>
                      <th class="sort border-top text-start ps-5 align-middle" scope="col" data-sort="status">STATUS</th>
                      <th class="sort border-top text-end align-middle" scope="col" data-sort="time">TIME</th>
                      <th class="sort border-top text-end pe-0 align-middle" scope="col">ACTION</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/1.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Fitbit Sense Advanced Smartwatch with Tools</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l">
                            <div class="avatar-name rounded-circle"><span>R</span></div>
                          </div>
                          <h6 class="mb-0 ms-3 text-900">Richard Dawkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">Very helpful to get going with rapid prototype development. Great support via email when I asked question.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Just now</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/2.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">iPhone 13 pro max-Pacific Blue-128GB storage</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/59.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Ashley Garrett</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Just now</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/3.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Apple MacBook Pro 13 inch-M1-8/256GB-space</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/58.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Woodrow Burton</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">I have started using this theme in the last week and it has really impressed me very much, the support is second to n...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Just now</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/4.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/avatar-placeholder.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Eric McGee</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpas...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 09, 3:23 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/5.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Razer kraken V3 X wired 7.1 surround sound ga....</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/avatar-placeholder.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Kim Carroll</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">Team is very responsive to inquiries. Love this theme!</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 09, 2:15 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/6.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">PlayStation 5 DualSense Wireless Controller</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Barbara Lucas</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 08, 8:53 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/7.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) -...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/3.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Ansolo Lazinatov</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">The response time and service I received when contacted the designers were Phenomenal!</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 07, 9:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/8.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Amazon Basics Matte Black Wired Keyboard - US ...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/26.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Emma watson</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">I have started using this theme in the last week and it has really impressed me very much, the support is second to n...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 07, 11:20 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/9.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Amazon Basics Mesh, Mid-Back, Swivel Office De...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/29.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Rowen Atkinson</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">The best experience we could hope for. Customer service team is amazing and the quality of their products is unsurpas...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 07, 2:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/10.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Apple Magic Mouse (Wireless, Rechargable) - Si...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l">
                            <div class="avatar-name rounded-circle"><span>A</span></div>
                          </div>
                          <h6 class="mb-0 ms-3 text-900">Anthony Hopkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">This template has allowed me to convert my existing web app into a great looking, easy to use UI in less than 2 weeks...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 06, 8:00 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/11.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Echo Dot (4th Gen) _ Smart speaker with Alexa ...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/8.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Jennifer Schramm</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">The theme is really beautiful and the support answer very quickly and is friendly. Buy it, you will not regret it.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 05, 4:00 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/12.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">HORI Racing Wheel Apex for PlayStation 4_3, an...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/avatar-placeholder.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Raymond Mims</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">As others mentioned, the team behind this theme is super responsive. I sent a message during the weekend, fully expec...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 04, 6:53 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/13.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Nintendo Switch with Neon Blue and Neon Red Jo...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/9.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Michael Jenkins</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">I had a bit of a hard time at first but after I contacted the team they were able to help me set up the theme. It's r...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 04, 12:00 PM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/14.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Oculus Rift S PC-Powered VR Gaming Headset</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/avatar-placeholder.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Kristine Cadena</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">Excellent. All my doubts were answered by the team quickly. I highly recommend it.</p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-warning">Pending<span class="ms-2 fas fa-stopwatch"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 03, 8:53 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle ps-0">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"></div>
                      </td>
                      <td class="align-middle product white-space-nowrap py-0"><img src="assets/img//products/15.png" alt="" width="53"></td>
                      <td class="align-middle product white-space-nowrap">
                        <h6 class="fw-semi-bold mb-0">Sony X85J 75 Inch Sony 4K Ultra HD LED Smart G...</h6>
                      </td>
                      <td class="align-middle customer white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/24.png" alt=""></div>
                          <h6 class="mb-0 ms-3 text-900">Suzanne Martinez</h6>
                        </a></td>
                      <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning star-icon"></span><span class="fa fa-star text-300"></span></td>
                      <td class="align-middle review" style="min-width:350px;">
                        <p class="fs--1 fw-semi-bold text-1000 mb-0">This theme is great. Clean and easy to understand. Perfect for those who don't have time to start everything from scr...<a href="#!">See more</a></p>
                      </td>
                      <td class="align-middle text-start ps-5 status"><span class="badge fs--1 badge-light-success">Approved<span class="ms-2 fas fa-check"></span></span></td>
                      <td class="align-middle text-end time white-space-nowrap">
                        <div class="hover-hide">
                          <h6 class="text-1000 mb-0">Nov 03, 10:43 AM</h6>
                        </div>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="position-relative">
                          <div class="hover-actions"><button class="btn btn-sm btn-phoenix-secondary me-1 fs--2"><span class="fas fa-check"></span></button><button class="btn btn-sm btn-phoenix-secondary fs--2"><span class="fas fa-trash"></span></button></div>
                        </div>
                        <div class="font-sans-serif btn-reveal-trigger"><button class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center py-1">
                <div class="pagination d-none"></div>
                <div class="col d-flex fs--1">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less</a>
                </div>
                <div class="col-auto d-flex"><button class="btn btn-link px-1 me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left me-2"></span>Previous</button><button class="btn btn-link px-1 ms-1" type="button" title="Next" data-list-pagination="next">Next<span class="fas fa-chevron-right ms-2"></span></button></div>
              </div>
            </div>
          </div>
          <div class="row gx-6">
            <div class="col-12 col-xl-6">
              <div class="mb-5 mt-7">
              
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>