@extends('client.index')

@section('title', 'Home')

@section('style')
    <link rel="stylesheet" href="client_assets/css/style.css">
@endsection

@section('main')
    <main id="tt-pageContent" class="tt-offset-small">
        <div class="tt-wrapper-section">
            <div class="container">
                <div class="tt-user-header">
                    <div class="tt-col-avatar">
                        <div class="tt-icon">
                            <svg class="tt-icon">
                                <use xlink:href="#icon-ava-u"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="tt-col-title">
                        <div class="tt-title">
                            <a href="#">User Name</a>
                        </div>
                    </div>
                    <div class="tt-col-btn">
                        <div class="tt-list-btn">
                            <a href="#" class="btn btn-primary">10 Posts</a>
                            <a href="#" class="btn btn-secondary">20 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tt-tab-wrapper">
                <div class="tt-wrapper-inner">
                    <ul class="nav nav-tabs pt-tabs-default" role="tablist">
                        <li class="nav-item show">
                            <a class="nav-link active" data-toggle="tab" href="#tt-tab-01" role="tab"><span>Posts</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tt-tab-02" role="tab"><span>Information</span></a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane tt-indent-none  show active" id="tt-tab-01" role="tabpanel">
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
                    <div class="tab-pane tt-indent-none" id="tt-tab-02" role="tabpanel">
                        <div class="tt-wrapper-inner tt-layout-tab">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi debitis ducimus error
                                molestias, mollitia praesentium repellendus saepe ullam velit veniam. Adipisci cumque
                                est excepturi iure nam totam vel veniam voluptatem!
                            </div>
                            <div>Consequatur exercitationem, hic iure laboriosam odio sit vel voluptates. Accusantium
                                architecto, cum cumque dicta dolorem doloribus error explicabo hic illo, ipsa natus
                                nostrum numquam odio officia pariatur quod suscipit. Voluptate.
                            </div>
                            <div>Beatae cupiditate dignissimos excepturi explicabo laudantium numquam vel. A ab
                                aspernatur, consectetur cumque deleniti exercitationem ipsam nobis nulla rerum totam!
                                Dolorum eligendi, id nam nemo quia sapiente voluptatum. Accusantium, voluptates!
                            </div>
                            <div>Aliquam, aliquid animi consectetur dicta distinctio dolore dolorem esse est ex expedita
                                hic impedit laborum natus nisi nostrum quas qui quis quo reiciendis rem sequi ullam
                                vero! Eligendi, quo saepe!
                            </div>
                            <div>Architecto dignissimos doloribus ipsum maiores molestias numquam optio quibusdam sit
                                suscipit. Blanditiis commodi consequuntur deserunt dolorum earum enim ipsum, molestiae
                                nulla numquam porro quam quasi sint temporibus, tenetur, vitae voluptatibus.
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
