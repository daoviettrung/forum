@extends('client.index')

@section('title', 'Home')

@section('style')
    <link rel="stylesheet" href="client_assets/css/style.css">
@endsection

@section('main')
    <main id="tt-pageContent">
        <div class="container">
            <div class="tt-single-topic-list">
                <div class="tt-item">
                    <div class="tt-single-topic">
                        <div class="tt-item-header">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-ava-a"></use>
                                        </svg>
                                    </i>
                                </div>
                                <div class="tt-avatar-title">
                                    <a href="#">author</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-time"></use>
                                        </svg>
                                    </i>01/01/2000
                                </a>
                            </div>
                            <h3 class="tt-item-title">
                                <a href="#">Title</a>
                            </h3>
                            <div class="tt-item-tag">
                                <ul class="tt-list-badge">
                                    <li><a href="#"><span class="tt-color03 tt-badge">Topic</span></a></li>
                                    <li><a href="#"><span class="tt-badge">Category</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis dolores
                                perferendis repudiandae tempore! Ab amet eaque, esse excepturi, expedita laboriosam
                                laborum laudantium minus nesciunt nisi numquam, soluta tempora vero?
                            </div>
                            <div>A, accusantium architecto dolores expedita ipsa optio? Amet aperiam, blanditiis
                                corporis cum doloribus et, eum explicabo facere illum ipsum laudantium nulla optio,
                                provident quasi quod ratione repellendus saepe tempore voluptates.
                            </div>
                            <div>A cupiditate deserunt distinctio fuga illum ipsa nihil obcaecati, pariatur, possimus
                                provident sapiente ullam vero. Ab, dignissimos et hic laboriosam officiis optio placeat
                                possimus quasi, quod ratione similique, sit velit?
                            </div>
                            <div>Accusamus accusantium adipisci, animi aperiam asperiores, consectetur deleniti dolor
                                esse facere fuga id illum, in incidunt ipsa iusto natus necessitatibus nobis perferendis
                                quos recusandae repellendus sapiente sunt veritatis voluptate voluptates.
                            </div>
                            <div>Accusantium amet doloremque, doloribus earum esse eum ex fuga, id incidunt iusto
                                molestiae nesciunt nihil odio, perferendis provident quisquam tempore vel voluptates?
                                Dolorum ea et ipsam libero nobis quas, sed.
                            </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-flag"></use>
                                    </svg>
                                </i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-reply"></use>
                                    </svg>
                                </i>
                                <span class="tt-text">3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-wrapper-inner">
                    <div class="pt-editor form-default">
                        <h6 class="pt-title">Post Your Reply</h6>
                        <div class="pt-row">
                            <div class="col-left">
                                <ul class="pt-edit-btn">
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-quote"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-bold"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-italic"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-share_topic"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-blockquote"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-performatted"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="hr"></li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-upload_files"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-bullet_list"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-heading"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-horizontal_line"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-emoticon"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-settings"></use>
                                            </svg>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="btn-icon">
                                            <svg class="tt-icon">
                                                <use xlink:href="#icon-color_picker"></use>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-right tt-hidden-mobile">
                                <a href="#" class="btn btn-primary">Preview</a>
                            </div>
                        </div>
                        <div class="form-group">
                        <textarea name="message" class="form-control" rows="5"
                                  placeholder="Lets get started"></textarea>
                        </div>
                        <div class="pt-row">
                            <div class="col-auto">
                                <a href="#" class="btn btn-secondary btn-width-lg">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-ava-m"></use>
                                        </svg>
                                    </i>
                                </div>
                                <div class="tt-avatar-title">
                                    <a href="#">Member</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-time"></use>
                                        </svg>
                                    </i>01/01/2020
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis harum illum maxime
                                molestiae neque nihil nostrum repudiandae similique ullam. Animi distinctio doloremque
                                ea maiores molestias officiis voluptates? Necessitatibus, nulla, quod!
                            </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-flag"></use>
                                    </svg>
                                </i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-reply"></use>
                                    </svg>
                                </i>
                                <span class="tt-text">1</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-ava-m"></use>
                                        </svg>
                                    </i>
                                </div>
                                <div class="tt-avatar-title">
                                    <a href="#">Member</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-time"></use>
                                        </svg>
                                    </i>01/01/2000
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis harum illum maxime
                                molestiae neque nihil nostrum repudiandae similique ullam. Animi distinctio doloremque
                                ea maiores molestias officiis voluptates? Necessitatibus, nulla, quod!
                            </div>
                            <div class="topic-inner-list">
                                <div class="topic-inner">
                                    <div class="topic-inner-title">
                                        <div class="topic-inner-avatar">
                                            <i class="tt-icon">
                                                <svg>
                                                    <use xlink:href="#icon-ava-m"></use>
                                                </svg>
                                            </i>
                                        </div>
                                        <div class="topic-inner-title"><a href="#">Member</a></div>
                                    </div>
                                    <div class="topic-inner-description">
                                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis harum illum maxime
                                            molestiae neque nihil nostrum repudiandae similique ullam. Animi distinctio doloremque
                                            ea maiores molestias officiis voluptates? Necessitatibus, nulla, quod!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-flag"></use>
                                    </svg>
                                </i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-reply"></use>
                                    </svg>
                                </i>
                                <span class="tt-text">0</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tt-item">
                    <div class="tt-single-topic">
                        <div class="tt-item-header pt-noborder">
                            <div class="tt-item-info info-top">
                                <div class="tt-avatar-icon">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-ava-m"></use>
                                        </svg>
                                    </i>
                                </div>
                                <div class="tt-avatar-title">
                                    <a href="#">Member</a>
                                </div>
                                <a href="#" class="tt-info-time">
                                    <i class="tt-icon">
                                        <svg>
                                            <use xlink:href="#icon-time"></use>
                                        </svg>
                                    </i>01/01/2020
                                </a>
                            </div>
                        </div>
                        <div class="tt-item-description">
                            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis harum illum maxime
                                molestiae neque nihil nostrum repudiandae similique ullam. Animi distinctio doloremque
                                ea maiores molestias officiis voluptates? Necessitatibus, nulla, quod!
                            </div>
                        </div>
                        <div class="tt-item-info info-bottom">
                            <div class="col-separator"></div>
                            <a href="#" class="tt-icon-btn tt-hover-02 tt-small-indent">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-flag"></use>
                                    </svg>
                                </i>
                            </a>
                            <a href="#" class="tt-icon-btn tt-position-bottom">
                                <i class="tt-icon">
                                    <svg>
                                        <use xlink:href="#icon-reply"></use>
                                    </svg>
                                </i>
                                <span class="tt-text">0</span>
                            </a>
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
