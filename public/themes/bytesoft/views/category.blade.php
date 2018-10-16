<!-- <section data-background="{{ Theme::asset()->url('images/page-intro-03.jpg') }}" class="section page-intro pt-100 pb-100 bg-cover">
    <div style="opacity: 0.7" class="bg-overlay"></div>
    <div class="container">
        <h3 class="page-intro__title">{{ $category->name }}</h3>
        {!! Theme::breadcrumb()->render() !!}
    </div>
</section> -->
<div class="header-banner">
            <div class="banner-pages">
                <div class="bs-container">
                    <div class="banner-content">
                        <h1 class="title" data-aos="fade-down" data-aos-delay="1200">{{ $category->name }}</h1>
                        <p class="desc" data-aos="fade-down" data-aos-delay="1200">{!! Theme::breadcrumb()->render() !!}</p>
                    </div>
                </div>
            </div>
        </div>


  <!--       
<section class="section pt-100 pb-50 bg-lightgray">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="page-content">
                    @if ($posts->count() > 0)
                        @foreach ($posts as $post)
                            <article class="post post__horizontal mb-40 clearfix">
                                <div class="post__thumbnail">
                                    <img src="{{ get_object_image($post->image, 'medium') }}" alt="{{ $post->name }}"><a href="{{ route('public.single', $post->slug) }}" class="post__overlay"></a>
                                </div>
                                <div class="post__content-wrap">
                                    <header class="post__header">
                                        <h3 class="post__title"><a href="{{ route('public.single', $post->slug) }}">{{ $post->name }}</a></h3>
                                        <div class="post__meta"><span class="post__created-at"><i class="ion-clock"></i><a href="#">{{ date_from_database($post->created_at, 'M d, Y') }}</a></span><span class="post__author"><i class="ion-android-person"></i><a href="{{ route('public.author', $post->user->username) }}">{{ $post->user->getFullName() }}</a></span><span class="post-category"><i class="ion-cube"></i><a href="{{ route('public.single', $category->slug) }}">{{ $category->name }}</a></span></div>
                                    </header>
                                    <div class="post__content">
                                        <p data-number-line="4">{{ $post->description }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        <div class="page-pagination text-right">
                            {!! $posts->links() !!}
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <p>{{ __('There is no data to display!') }}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-3">
                <div class="page-sidebar">
                    {!! Theme::partial('sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</section> -->

    </header>
    <main id="main" class="main-pages">
        <section class="section-blog">
            <div class="bs-container">
                <div class="bs-row bs-row-md">
                    <div class="bs-col md-66-15 lg-70-15">
                        <div class="main-left" data-aos="fade-left" data-aos-delay="1400">
                            <div class="blog-content">
                                <div class="blog-item">
                                    <div class="content">
                                        <div class="time-post">
                                            <div class="day">{{ date_from_database($post->created_at, 'd') }}</div>
                                            <div class="month_year">{{ date_from_database($post->created_at, 'M, Y') }}</div>
                                        </div>
                                        <div class="img">
                                            <div class="ImagesFrame">
                                                <a href="{{ route('public.single', $post->slug) }}" class="ImagesFrameCrop0">
                                                <img src="{{ get_object_image($post->image, 'medium') }}" alt="{{ $post->name }}">
                                                <i class="fas fa-search-plus"></i>
                                            </a>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <h4 class="title"><a href="{{ route('public.single', $post->slug) }}">{{ $post->name }}</a></h4>
                                            <p class="time__desc"><span>Posted by</span> {{ $post->user->username }}, <span>In</span> <a href="{{ route('public.single', $category->slug) }}">{{ $category->name }}</a></p>
                                            <p class="desc">{{ $post->description }}</p>
                                            <a href="#" class="link">{{ __('View more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            <div class="blog-pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bs-col md-33-15 lg-30-15">
                        <div class="main-right" data-aos="fade-right" data-aos-delay="1400">
                            <div class="bs-row bs-row-md15">
                                <div class="bs-col md-100-15 sm-50-15">
                                    <div class="sidebar">
                                        <div class="head">
                                            <h3 class="title">BÀI VIẾT MỚI NHẤT</h3>
                                        </div>
                                        <div class="content">
                                            <div class="sidebar-item">
                                                <div class="bs-row bs-row-tn5">
                                                    <div class="bs-col tn-40-5">
                                                        <div class="img">
                                                            <div class="ImagesFrame">
                                                                <a href="#" class="ImagesFrameCrop0">
                                                            <img src="images/sidebar_item1.jpg" alt="">
                                                        </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col tn-60-5">
                                                        <div class="text">
                                                            <h4 class="title"><a href="#">Tuyển Dụng Nhân Viên Thiết Kế Đồ Họa </a></h4>
                                                            <p class="desc">Dec 23, 2016</p>
                                                            <p class="desc">By Aazztech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sidebar-item">
                                                <div class="bs-row bs-row-tn5">
                                                    <div class="bs-col tn-40-5">
                                                        <div class="img">
                                                            <div class="ImagesFrame">
                                                                <a href="#" class="ImagesFrameCrop0">
                                                            <img src="images/sidebar_item2.jpg" alt="">
                                                        </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col tn-60-5">
                                                        <div class="text">
                                                            <h4 class="title"><a href="#">Tuyển Dụng Nhân Viên Phân tích thiết kế hệ thống </a></h4>
                                                            <p class="desc">Dec 23, 2016</p>
                                                            <p class="desc">By Aazztech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sidebar-item">
                                                <div class="bs-row bs-row-tn5">
                                                    <div class="bs-col tn-40-5">
                                                        <div class="img">
                                                            <div class="ImagesFrame">
                                                                <a href="#" class="ImagesFrameCrop0">
                                                            <img src="images/sidebar_item3.jpg" alt="">
                                                        </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col tn-60-5">
                                                        <div class="text">
                                                            <h4 class="title"><a href="#">Tuyển Dụng Lập trình viên</a></h4>
                                                            <p class="desc">Dec 23, 2016</p>
                                                            <p class="desc">By Aazztech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sidebar-item">
                                                <div class="bs-row bs-row-tn5">
                                                    <div class="bs-col tn-40-5">
                                                        <div class="img">
                                                            <div class="ImagesFrame">
                                                                <a href="#" class="ImagesFrameCrop0">
                                                            <img src="images/sidebar_item4.jpg" alt="">
                                                        </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col tn-60-5">
                                                        <div class="text">
                                                            <h4 class="title"><a href="#">Tuyển Dụng Nhân Viên marketing online</a></h4>
                                                            <p class="desc">Dec 23, 2016</p>
                                                            <p class="desc">By Aazztech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sidebar-item">
                                                <div class="bs-row bs-row-tn5">
                                                    <div class="bs-col tn-40-5">
                                                        <div class="img">
                                                            <div class="ImagesFrame">
                                                                <a href="#" class="ImagesFrameCrop0">
                                                            <img src="images/sidebar_item5.jpg" alt="">
                                                        </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bs-col tn-60-5">
                                                        <div class="text">
                                                            <h4 class="title"><a href="#">Tuyển Dụng thực tập sinh các vị trí </a></h4>
                                                            <p class="desc">Dec 23, 2016</p>
                                                            <p class="desc">By Aazztech</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bs-col md-100-15 sm-50-15">
                                    <div class="tag">
                                        <div class="head">
                                            <h3 class="title">tags</h3>
                                        </div>
                                        <div class="content">
                                            <div class="bs-row bs-row-tn5">
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">FASHION</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">DESIGN</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">CODE</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">BRANDING</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">FASHION</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">FASHION</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">FASHION</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">FASHION</a></div>
                                                <div class="bs-col tn-33-5"><a href="#" class="tag__item">FASHION</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
