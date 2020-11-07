@extends('client.index')

@section('title', 'Home')

@section('style')
    <link rel="stylesheet" href="client_assets/css/style.css">
@endsection

@section('main')
    <main id="tt-pageContent" class="tt-offset-small">
        <div class="container">
            <div class="tt-tab-wrapper">
                <div class="tt-wrapper-inner">
                    <ul class="nav nav-tabs pt-tabs-default" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link show active" data-toggle="tab" href="#tt-tab-01"
                               role="tab"><span>Latest</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tt-tab-02" role="tab"><span>Popular</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tt-tab-03"
                               role="tab"><span>Categories</span></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane show fade active" id="tt-tab-01" role="tabpanel">
                        <div class="tt-layout-tab">
                            <div class="tt-categories-list">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tt-row-btn">
                                            <button type="button" class="btn-icon js-topiclist-showmore">
                                                <svg class="tt-icon">
                                                    <use xlink:href="#icon-load_lore_icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab-02" role="tabpanel">
                        <div class="tt-layout-tab">
                            <div class="tt-categories-list">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="tt-item">
                                            <div class="tt-item-header">
                                                <ul class="tt-list-badge">
                                                    <li><a href="#"><span class="tt-color05 tt-badge">Title</span></a>
                                                    </li>
                                                </ul>
                                                <h6 class="tt-title"><a href="#">Author</a>
                                                </h6>
                                            </div>
                                            <div class="tt-item-layout">
                                                <div class="innerwrapper">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua...
                                                    <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                                        Read more
                                                        <i class="tt-icon">
                                                            <svg>
                                                                <use xlink:href="#icon-reply"></use>
                                                            </svg>
                                                        </i>
                                                    </a>
                                                </div>
                                                <div class="innerwrapper">
                                                    <ul class="tt-list-badge">
                                                        <li><a href="#"><span class="tt-badge">Topic</span></a></li>
                                                        <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="tt-row-btn">
                                            <button type="button" class="btn-icon js-topiclist-showmore">
                                                <svg class="tt-icon">
                                                    <use xlink:href="#icon-load_lore_icon"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab-03" role="tabpanel">
                        <div class="tt-topic-list">
                            <div class="tt-list-header">
                                <div class="tt-col-topic">Category</div>
                                <div class="tt-col-value-large hide-mobile">Topic</div>
                                <div class="tt-col-value-large hide-mobile">Number of posts</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h6 class="tt-title"><a href="#">
                                            Category Name
                                        </a></h6>
                                    <div class="tt-col-message">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <div class="row align-items-center no-gutters hide-desktope">
                                        <div class="col-6">
                                            <ul class="tt-list-badge">
                                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">Topic</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 ml-auto show-mobile">
                                            <div class="tt-value">10 Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-col-category tt-col-value-large hide-mobile">
                                    <span class="tt-color05 tt-badge">Topic</span></div>
                                <div class="tt-col-value-large hide-mobile">10 Posts</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h6 class="tt-title"><a href="#">
                                            Category Name
                                        </a></h6>
                                    <div class="tt-col-message">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <div class="row align-items-center no-gutters hide-desktope">
                                        <div class="col-6">
                                            <ul class="tt-list-badge">
                                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">Topic</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 ml-auto show-mobile">
                                            <div class="tt-value">10 Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-col-category tt-col-value-large hide-mobile">
                                    <span class="tt-color05 tt-badge">Topic</span></div>
                                <div class="tt-col-value-large hide-mobile">10 Posts</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h6 class="tt-title"><a href="#">
                                            Category Name
                                        </a></h6>
                                    <div class="tt-col-message">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <div class="row align-items-center no-gutters hide-desktope">
                                        <div class="col-6">
                                            <ul class="tt-list-badge">
                                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">Topic</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 ml-auto show-mobile">
                                            <div class="tt-value">10 Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-col-category tt-col-value-large hide-mobile">
                                    <span class="tt-color05 tt-badge">Topic</span></div>
                                <div class="tt-col-value-large hide-mobile">10 Posts</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h6 class="tt-title"><a href="#">
                                            Category Name
                                        </a></h6>
                                    <div class="tt-col-message">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <div class="row align-items-center no-gutters hide-desktope">
                                        <div class="col-6">
                                            <ul class="tt-list-badge">
                                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">Topic</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 ml-auto show-mobile">
                                            <div class="tt-value">10 Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-col-category tt-col-value-large hide-mobile">
                                    <span class="tt-color05 tt-badge">Topic</span></div>
                                <div class="tt-col-value-large hide-mobile">10 Posts</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h6 class="tt-title"><a href="#">
                                            Category Name
                                        </a></h6>
                                    <div class="tt-col-message">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <div class="row align-items-center no-gutters hide-desktope">
                                        <div class="col-6">
                                            <ul class="tt-list-badge">
                                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">Topic</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 ml-auto show-mobile">
                                            <div class="tt-value">10 Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-col-category tt-col-value-large hide-mobile">
                                    <span class="tt-color05 tt-badge">Topic</span></div>
                                <div class="tt-col-value-large hide-mobile">10 Posts</div>
                            </div>
                            <div class="tt-item">
                                <div class="tt-col-avatar">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-ava-c"></use>
                                    </svg>
                                </div>
                                <div class="tt-col-description">
                                    <h6 class="tt-title"><a href="#">
                                            Category Name
                                        </a></h6>
                                    <div class="tt-col-message">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <div class="row align-items-center no-gutters hide-desktope">
                                        <div class="col-6">
                                            <ul class="tt-list-badge">
                                                <li class="show-mobile"><a href="#"><span class="tt-color05 tt-badge">Topic</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6 ml-auto show-mobile">
                                            <div class="tt-value">10 Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tt-col-category tt-col-value-large hide-mobile">
                                    <span class="tt-color05 tt-badge">Topic</span></div>
                                <div class="tt-col-value-large hide-mobile">10 Posts</div>
                            </div>
                            <div class="tt-row-btn">
                                <button type="button" class="btn-icon js-topiclist-showmore">
                                    <svg class="tt-icon">
                                        <use xlink:href="#icon-load_lore_icon"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script src="client_assets/js/bundle.js"></script>
@endsection
