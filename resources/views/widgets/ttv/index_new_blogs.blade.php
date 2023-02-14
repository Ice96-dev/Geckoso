<?php
$apiFE = new \App\Api\FE();
$blogs = $apiFE->getLastNews(4);
$apiMobile = new \App\Api\Mobile;
$isMobile = $apiMobile->isMobile();

if (count($blogs) > 3):
?>

<div id="shopify-section-1590311460919" class="shopify-section nt_section type_featured_blog type_carousel">
    <style data-shopify>
        #shopify-section-1590311460919 {
            background-color: #ffffff !important;
        }

        .nt_se_1590311460919 {
            margin-top: 78px !important;
            margin-right: !important;
            margin-bottom: 60px !important;
            margin-left: !important;
        }
    </style>
    <div class="nt_se_1590311460919 container">
        <div class="row al_center fl_center title_10 mb__30">
            <div class="col-auto col-md"><h3 class="dib tc section-title fs__24 text-uppercase">Góc Tư Vấn</h3></div>
            <div class="col-auto"><a href="{{url('goc-tu-van')}}">Xem nhiều hơn</a></div>
        </div>
        <div class="articles nt_products_holder row nt_cover ratio4_3 position_8 equal_nt js_carousel nt_slider prev_next_0 btn_owl_1 dot_owl_2 dot_color_3 btn_vi_1"
             data-flickity='{"imagesLoaded": 0,"adaptiveHeight": 1, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": false,"prevNextButtons": false,"percentPosition": 1,"pageDots": true, "autoPlay" : 4000, "pauseAutoPlayOnHover" : false, "rightToLeft": false }'>
            <?php
            $count = 0;
            foreach ($blogs as $blog):
            $count++;
            ?>
            @if ($count == 1)
            <article
                class="post-392063451217 post_nt_loop post_1 col-lg-3 col-md-4 col-12 pr_animated done mb__40">
                <a class="mb__15 db pr oh" href="{{$blog->getHref()}}">
                    <div class="lazyload nt_bg_lz pr_lazy_img"
                         data-bgset="{{$blog->getAvatar()}}"
                         data-ratio="0.666796875" data-sizes="auto"></div>
                </a>
                <div class="post-info mb__10">
                    <h4 class="mg__0 fs__16 mb__5 ls__0">
                        <a class="cd chp open" href="{{$blog->getHref()}}">{{$blog->getTitle()}}</a>
                    </h4><span class="post-time">on <span class="cd"><time
                                datetime="2020-05-28T12:05:00Z">{{date('M d, Y', strtotime($blog->created_at))}}</time></span></span></div>
{{--                <div class="post-content">{{$blog->getShortBody(180)}}</div>--}}
            </article>
            @elseif ($count == 2)
            <article
                class="post-392065155153 post_nt_loop post_1 col-lg-3 col-md-4 col-12 pr_animated done mb__40">
                <a class="mb__15 db pr oh"
                   href="{{$blog->getHref()}}">
                    <div class="lazyload nt_bg_lz pr_lazy_img"
                         data-bgset="{{$blog->getAvatar()}}"
                         data-ratio="1.7777777777777777" data-sizes="auto"></div>
                </a>
                <div class="post-info mb__10">
                    <h4 class="mg__0 fs__16 mb__5 ls__0">
                        <a class="cd chp open" href="{{$blog->getHref()}}">{{$blog->getTitle()}}</a>
                    </h4><span class="post-time">on <span
                            class="cd"><time datetime="2020-05-28T12:04:00Z">{{date('M d, Y', strtotime($blog->created_at))}}</time></span></span></div>
{{--                <div class="post-content">{{$blog->getShortBody(180)}}</div>--}}
            </article>
            @elseif ($count == 3)
            <article
                class="post-392063483985 post_nt_loop post_1 col-lg-3 col-md-4 col-12 pr_animated done mb__40">
                <a class="mb__15 db pr oh"
                   href="{{$blog->getHref()}}">
                    <div class="lazyload nt_bg_lz pr_lazy_img"
                         data-bgset="{{$blog->getAvatar()}}"
                         data-ratio="0.666796875" data-sizes="auto"></div>
                </a>
                <div class="post-info mb__10">
                    <h4 class="mg__0 fs__16 mb__5 ls__0">
                        <a class="cd chp open" href="{{$blog->getHref()}}">{{$blog->getTitle()}}</a>
                    </h4><span class="post-time">on <span
                            class="cd"><time datetime="2020-05-28T12:04:00Z">{{date('M d, Y', strtotime($blog->created_at))}}</time></span></span></div>
{{--                <div class="post-content">{{$blog->getShortBody(180)}}</div>--}}
            </article>
            @else
            <article
                class="post-392063516753 post_nt_loop post_1 col-lg-3 col-md-4 col-12 pr_animated done mb__40">
                <a class="mb__15 db pr oh" href="{{$blog->getHref()}}">
                    <div class="lazyload nt_bg_lz pr_lazy_img"
                         data-bgset="{{$blog->getAvatar()}}"
                         data-ratio="1.5" data-sizes="auto"></div>
                </a>
                <div class="post-info mb__10">
                    <h4 class="mg__0 fs__16 mb__5 ls__0">
                        <a class="cd chp open" href="{{$blog->getHref()}}">{{$blog->getTitle()}}</a>
                    </h4><span class="post-time">on <span
                            class="cd"><time datetime="2020-05-28T12:03:00Z">{{date('M d, Y', strtotime($blog->created_at))}}</time></span></span></div>
{{--                <div class="post-content">{{$blog->getShortBody(180)}}</div>--}}
            </article>
            @endif
            <?php endforeach;?>
        </div>
    </div>
</div>

<?php endif;?>
