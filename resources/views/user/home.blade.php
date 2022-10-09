@extends("user.layout.app")
@section('title')
    <title>Tuấn Con - Trang chủ</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">
            <!-- Search Filter -->
            <div class="card search-filter">
                <div class="card-header">
                    <h4 class="card-title mb-0">Tìm kiếm</h4>
                </div>
                <div class="card-body">
                    <div class="filter-widget">
                        <input type="text" class="form-control" placeholder="Nhập từ khoá...">
                    </div>
                    <div class="filter-widget">
                        <h4>Danh mục</h4>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="gender_type">
                                <span class="checkmark"></span> Video
                            </label>
                        </div>
                        <div>
                            <label class="custom_check">
                                <input type="checkbox" name="gender_type">
                                <span class="checkmark"></span> Tool
                            </label>
                        </div>
                    </div>

                    <div class="btn-search">
                        <button type="button" class="btn w-100">Tìm kiếm</button>
                    </div>
                </div>
            </div>
            <!-- /Search Filter -->

        </div>

        <div class="col-md-12 col-lg-8 col-xl-9">
            <!-- Doctor Widget -->
            <div class="card">
                <div class="card-body">
                    <div class="doctor-widget">
                        <div class="doc-info-left">
                            <div class="doctor-img1">
                                <a href="pharmacy-details.html">
                                    <img src="user/assets/img/medical-img1.jpg" class="img-fluid" alt="User Image">
                                </a>
                            </div>
                            <div class="doc-info-cont">
                                <h4 class="doc-name mb-2"><a href="pharmacy-details.html">Medlife Medical</a></h4>
                                <div class="rating mb-2">
                                    <span class="badge badge-primary">4.0</span>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(17)</span>
                                </div>
                                <div class="clinic-details">
                                    <div class="clini-infos pt-3">

                                        <p class="doc-location mb-2"><i class="fas fa-phone-volume me-1"></i> 320-795-8815</p>
                                        <p class="doc-location mb-2 text-ellipse"><i class="fas fa-map-marker-alt me-1"></i> 96 Red Hawk Road Cyrus, MN 56323 </p>
                                        <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i> Chemists, Surgical Equipment Dealer</p>

                                        <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i> Opens at 08.00 AM</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doc-info-right">
                            <div class="clinic-booking">
                                <a class="view-pro-btn" href="pharmacy-details.html">View Details</a>
                                <a class="apt-btn" href="product-all.html">Browse Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Doctor Widget -->
            <!-- Doctor Widget -->
            <div class="card">
                <div class="card-body">
                    <div class="doctor-widget">
                        <div class="doc-info-left">
                            <div class="doctor-img1">
                                <a href="pharmacy-details.html">
                                    <img src="user/assets/img/medical-img2.jpg" class="img-fluid" alt="User Image">
                                </a>
                            </div>
                            <div class="doc-info-cont">
                                <h4 class="doc-name mb-2"><a href="pharmacy-details.html">PharmaMed Medical</a></h4>
                                <div class="rating mb-2">
                                    <span class="badge badge-primary">4.0</span>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">(17)</span>
                                </div>
                                <div class="clinic-details">
                                    <div class="clini-infos pt-3">

                                        <p class="doc-location mb-2"><i class="fas fa-phone-volume me-1"></i> 913-631-2538</p>
                                        <p class="doc-location mb-2 text-ellipse"><i class="fas fa-map-marker-alt me-1"></i> 3830 Poe Lane Kansas City, KS 66216 </p>
                                        <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i> Chemists, Surgical Equipment Dealer</p>

                                        <p class="doc-location mb-2"><i class="fas fa-chevron-right me-1"></i> Opens at 08.00 AM</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doc-info-right">
                            <div class="clinic-booking">
                                <a class="view-pro-btn" href="pharmacy-details.html">View Details</a>
                                <a class="apt-btn" href="product-all.html">Browse Products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Doctor Widget -->
        </div>
    </div>
@endsection
