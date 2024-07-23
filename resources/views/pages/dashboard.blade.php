@extends("layouts.app")


@section("content")
<!--begin::Content-->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-fluid">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10 draggable-zone">
            <!--begin::Col-->
            <div class="col-xl-6 draggable">
                <!--begin::Chart widget 4-->
                <div class="card card-flush overflow-hidden draggable-handle h-md-100">
                    <!--begin::Header-->
                    <div class="card-header py-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Discounted Product Sales</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Users from all channels</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                <i class="ki-outline ki-dots-square fs-1"></i>
                            </button>
                            <!--begin::Menu 2-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mb-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Ticket</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Customer</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title">New Group</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Admin Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Staff Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Member Group</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">New Contact</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator mt-3 opacity-75"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3 py-3">
                                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                        <!--begin::Info-->
                        <div class="px-9 mb-5">
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Currency-->
                                <span class="fs-4 fw-semibold text-gray-500 align-self-start me-1">$</span>
                                <!--end::Currency-->
                                <!--begin::Value-->
                                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,706</span>
                                <!--end::Value-->
                                <!--begin::Label-->
                                <span class="badge badge-light-success fs-base">
															<i class="ki-outline ki-arrow-down fs-5 text-success ms-n1"></i>4.5%</span>
                                <!--end::Label-->
                            </div>
                            <!--end::Statistics-->
                            <!--begin::Description-->
                            <span class="fs-6 fw-semibold text-gray-500">Total Discounted Sales This Month</span>
                            <!--end::Description-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Chart widget 4-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 draggable">
                <!--begin::Table widget 2-->
                <div class="card draggable-handle h-md-100">
                    <!--begin::Header-->
                    <div class="card-header align-items-center border-0">
                        <!--begin::Title-->
                        <h3 class="fw-bold text-gray-900 m-0">Recent Orders</h3>
                        <!--end::Title-->
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-outline ki-dots-square fs-1"></i>
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-2">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom mb-3">
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_1">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <img alt="" src="assets/media/svg/products-categories/t-shirt.svg" class="" />
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">T-shirt</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_2">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <img alt="" src="assets/media/svg/products-categories/gaming.svg" class="" />
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Gaming</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_3">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <img alt="" src="assets/media/svg/products-categories/watch.svg" class="" />
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Watch</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3 me-3 me-lg-6">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_4">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <img alt="" src="assets/media/svg/products-categories/gloves.svg" class="nav-icon" />
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Gloves</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mb-3">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_2_tab_5">
                                    <!--begin::Icon-->
                                    <div class="nav-icon">
                                        <img alt="" src="assets/media/svg/products-categories/shoes.svg" class="nav-icon" />
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Shoes</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="ps-0 w-50px">ITEM</th>
                                            <th class="min-w-125px"></th>
                                            <th class="text-end min-w-100px">QTY</th>
                                            <th class="pe-0 text-end min-w-100px">PRICE</th>
                                            <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/210.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$72.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$126.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/215.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1321</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$45.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/209.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$84.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$168.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="ps-0 w-50px">ITEM</th>
                                            <th class="min-w-125px"></th>
                                            <th class="text-end min-w-100px">QTY</th>
                                            <th class="pe-0 text-end min-w-100px">PRICE</th>
                                            <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/197.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$32.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$312.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/178.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-3122</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$62.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/22.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1142</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$74.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$139.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="ps-0 w-50px">ITEM</th>
                                            <th class="min-w-125px"></th>
                                            <th class="text-end min-w-100px">QTY</th>
                                            <th class="pe-0 text-end min-w-100px">PRICE</th>
                                            <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/1.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1324</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$43.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$231.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/24.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5314</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$71.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/71.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4222</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$23.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$213.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="ps-0 w-50px">ITEM</th>
                                            <th class="min-w-125px"></th>
                                            <th class="text-end min-w-100px">QTY</th>
                                            <th class="pe-0 text-end min-w-100px">PRICE</th>
                                            <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/41.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 2635</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$65.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$163.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/63.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2745</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$73.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/59.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5173</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$54.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$173.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                        <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                            <th class="ps-0 w-50px">ITEM</th>
                                            <th class="min-w-125px"></th>
                                            <th class="text-end min-w-100px">QTY</th>
                                            <th class="pe-0 text-end min-w-100px">PRICE</th>
                                            <th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
                                        </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/10.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2163</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$287.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/96.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2162</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$51.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="assets/media/stock/ecommerce/13.png" class="w-50px ms-n1" alt="" />
                                            </td>
                                            <td class="ps-0">
                                                <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1537</span>
                                            </td>
                                            <td>
                                                <span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$27.00</span>
                                            </td>
                                            <td class="text-end pe-0">
                                                <span class="text-gray-800 fw-bold d-block fs-6">$167.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Table widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 draggable">
                <!--begin::Card widget 19-->
                <div class="card card-flush draggable-handle h-lg-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Performance</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Label-->
                            <span class="badge badge-light-danger fs-base mt-n3">
														<i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>7.4%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-6">
                        <!--begin::Row-->
                        <div class="row align-items-center mx-0 w-100">
                            <!--begin::Col-->
                            <div class="col-7 px-0">
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-success me-3" style="border-radius: 3px;width: 12px;height: 12px"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bold text-gray-600 me-5">CRM Team Performance:</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">72.56%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center my-4">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-primary me-3" style="border-radius: 3px;width: 12px;height: 12px"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bold text-gray-600 me-5">Recurring Calls:</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">29.34%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet me-3" style="border-radius: 3px;background-color: #E4E6EF;width: 12px;height: 12px"></div>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bold text-gray-600 me-5">Tickets Raised:</div>
                                        <!--end::Label-->
                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">17.83%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-5 d-flex justify-content-end px-0">
                                <!--begin::Chart-->
                                <div id="kt_card_widget_19_chart" class="min-h-auto h-150px w-150px" data-kt-size="150" data-kt-line="25"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 19-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 draggable">
                <!--begin::Engage widget 9-->
                <div class="card draggable-handle h-lg-100" style="background: linear-gradient(112.14deg, #FF8A00 0%, #E96922 100%)">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row align-items-center">
                            <!--begin::Col-->
                            <div class="col-sm-7 pe-0 mb-5 mb-sm-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                    <!--begin::Container-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <div class="mb-6">
                                            <h3 class="fs-2x fw-semibold text-white">Upgrade Your Plan</h3>
                                            <span class="fw-semibold text-white opacity-75">Flat cartoony and illustrations with vivid color</span>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Items-->
                                        <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center me-5 me-xl-13">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px symbol-circle me-3">
																				<span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
																					<i class="ki-outline ki-abstract-41 fs-4 text-white"></i>
																				</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <a href="pages/user-profile/projects.html" class="text-white text-opacity-75 fs-8">Projects</a>
                                                    <span class="fw-bold text-white fs-7 d-block">Up to 500</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px symbol-circle me-3">
																				<span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
																					<i class="ki-outline ki-abstract-26 fs-4 text-white"></i>
																				</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <a href="apps/user-management/users/list.html" class="text-white text-opacity-75 fs-8">Tasks</a>
                                                    <span class="fw-bold text-white fs-7 d-block">Unlimited</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Container-->
                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                                    </div>
                                    <!--begin::Action-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--begin::Col-->
                            <!--begin::Col-->
                            <div class="col-sm-5">
                                <!--begin::Illustration-->
                                <img src="assets/media/svg/illustrations/easy/7.svg" class="h-200px h-lg-250px my-n6" alt="" />
                                <!--end::Illustration-->
                            </div>
                            <!--begin::Col-->
                        </div>
                        <!--begin::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 9-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 draggable">
                <!--begin::Table widget 9-->
                <div class="card card-flush draggable-handle h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Top Referral Sources</span>
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light">PDF Report</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fs-7 fw-bold border-0 text-gray-500">
                                    <th class="min-w-150px" colspan="2">CAMPAIGN</th>
                                    <th class="min-w-150px text-end pe-0" colspan="2">SESSIONS</th>
                                    <th class="text-end min-w-150px" colspan="2">CONVERSION RATE</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Google</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">1,256</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3">23.63%</span>
                                            <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Facebook</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">446</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3">12.45%</span>
                                            <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-57.02%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Bol.com</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">67</span>
                                            <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3">73.63%</span>
                                            <span class="text-success min-w-60px d-block text-end fw-bold fs-6">+28.73%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Dutchnews.nl</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">2,136</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3">3.67%</span>
                                            <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-12.29%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Stackoverflow</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">945</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3">25.03%</span>
                                            <span class="text-danger min-w-60px d-block text-end fw-bold fs-6">-9.35%</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Themeforest</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6 me-1">237</span>
                                            <span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6 me-3">36.52%</span>
                                            <span class="text-success min-w-60px d-block text-end fw-bold fs-6">+3.06%</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Table Widget 9-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 draggable">
                <!--begin::Table widget 10-->
                <div class="card card-flush draggable-handle h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Top Performing Pages</span>
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Counted in Millions</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light">PDF Report</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                <tr class="fs-7 fw-bold border-0 text-gray-500">
                                    <th class="min-w-200px" colspan="2">LANDING PAGE</th>
                                    <th class="min-w-100px text-end pe-0" colspan="2">CLICKS</th>
                                    <th class="text-end min-w-100px" colspan="2">AVG. POSITION</th>
                                </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Index</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6">1,256</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-935</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6">2.63</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1.35</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Products</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6">446</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-576</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6">1.45</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">0.32</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">devs.keenthemes.com</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6">67</span>
                                            <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+24</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6">7.63</span>
                                            <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+8.73</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">studio.keenthemes.com</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6">2,136</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-1,229</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6">3.67</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-2.29</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">graphics.keenthemes.com</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6">945</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-634</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6">5.03</span>
                                            <span class="text-danger min-w-50px d-block text-end fw-bold fs-6">-0.35</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="" colspan="2">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Licenses</a>
                                    </td>
                                    <td class="pe-0" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-800 fw-bold fs-6">237</span>
                                            <span class="text-success min-w-50px d-block text-end fw-bold fs-6">106</span>
                                        </div>
                                    </td>
                                    <td class="" colspan="2">
                                        <div class="d-flex justify-content-end">
                                            <span class="text-gray-900 fw-bold fs-6">3.52</span>
                                            <span class="text-success min-w-50px d-block text-end fw-bold fs-6">+3.06</span>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Table Widget 10-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->
@endsection
