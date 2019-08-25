@extends('layouts.layout_carprojects')

@section('content')

    <!------ Purchase new section Start ------>
    <div class="impl_purchase_wrapper" style="padding: 15px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="impl_purchase_inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="impl_sidebar">
                                    <div class="impl_product_search widget woocommerce">
                                        <div class="impl_footer_subs">
                                          <form action="{{ route('search') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="text" class="form-control" placeholder="¿Qué estás buscando?" name="search">
                                            <button type="submit" class="foo_subs_btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                          </form>
                                        </div>
                                    </div>
                                    <!--Brands-->
                                    <div class="impl_product_brand widget woocommerce">
                                        <h2 class="widget-title">brands</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
                              										Paradox
                              										<input type="checkbox" name="check">
                              										<span class="label-text"></span>
                              									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										Voyage
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Passion
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Curiosity
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Ivory
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Dawn
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Temper
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Thunder
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Blade
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Origin
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Titan
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Dominion
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Ferocity
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Tempest
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Flow
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Prime
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Grit
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Nimbus
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Essence
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    									Aura
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Colors-->
                                    <div class="impl_product_color widget woocommerce">
                                        <h2 class="widget-title">color</h2>
                                        <ul>
                                            <li>
                                                <label class="brnds_check_label">
    										black
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										blue
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										white
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										yellow
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										red
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										grey
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										brown
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                            <li>
                                                <label class="brnds_check_label">
    										orange
    										<input type="checkbox" name="check">
    										<span class="label-text"></span>
    									</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--Price Range-->
                                    <div class="impl_product_price widget woocommerce">
                                        <h2 class="widget-title">price range</h2>
                                        <div class="price_range">
                                            <input type="text" id="range_24" name="ionRangeSlider" value="" />
                                        </div>
                                    </div>
                                    <!--Car Type-->
                                    <div class="impl_product_type widget woocommerce">
                                        <h2 class="widget-title">car type</h2>
                                        <ul>
                                            <li><a href="#">Hatchback</a></li>
                                            <li><a href="#">Sedan</a></li>
                                            <li><a href="#">MPV</a></li>
                                            <li><a href="#">SUV</a></li>
                                            <li><a href="#">Couple</a></li>
                                            <li><a href="#">Convertible</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8">
                                <div class="container">
                                    <div class="row">
                                        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000" style="margin-top: -50px;">
                                            <div class="MultiCarousel-inner">
                                                @foreach($categories as $category)
                                                    <div class="item">
                                                        <div class="pad15">
                                                            <p class="lead">
                                                                <div class="btn-group dropright" style="z-index: 1;">
                                                                    <a class="btn" href="{{ url('/categories/'.$category->id.'/products') }}" role="button">{{$category->name}}</a>
                                                                    <a class="btn dropdown-toggle dropdown-toggle-split" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: -15px;"></a>
                                                                    <div class="dropdown-menu">
                                                                        @foreach($category->subcategories as $subcategory)
                                                                            <a class="dropdown-item" href="{{ url('/subcategories/'.$subcategory->id.'/products') }}">{{$subcategory->name}}</a>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a class="leftLst" href="#menu-slider" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="rightLst" href="#menu-slider" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @if(count($recommendedProducts) >= 1)
                                  <div class="row" style="background-color: #fff; border-radius: 111px 0px 0px 0px; -moz-border-radius: 111px 0px 0px 0px; -webkit-border-radius: 111px 0px 0px 0px; border: 0px solid #000000;">
                                      @foreach($recommendedProducts as $recommendedProduct)
                                      <div class="col-lg-4 col-md-6"  style="padding-top: 70px;">
                                          <div class="impl_fea_car_box">
                                              <div class="impl_fea_car_img">
                                                  <a href="{{ url('/products/'.$recommendedProduct->id) }}"><img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_frst_car_img" style="display:block;margin:auto;"/></a>
                                                  <a href="{{ url('/products/'.$recommendedProduct->id) }}"><img src="{{$recommendedProduct->path_to_thumbnail}}" alt="" class="img-fluid impl_hover_car_img" style="display:block;margin:auto;"/></a>
                                                  <span class="impl_img_tag" title="compare"><a href="{{ url('/products/compare/'.$recommendedProduct->id) }}"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                                              </div>
                                              <div class="impl_fea_car_data" style="border: 0px;">
                                                  <h2><a href="{{ url('/products/'.$recommendedProduct->id) }}">{{$recommendedProduct->name}}</a></h2>
                                                  <ul>
                                                      <li><span class="impl_fea_title">Marca</span>
                                                          <span class="impl_fea_name">{!!$recommendedProduct->brand!!}</span></li>
                                                      <li><span class="impl_fea_title">Modelo</span>
                                                          <span class="impl_fea_name">{!!$recommendedProduct->model!!}</span></li>
                                                      <li><span class="impl_fea_title">Hecho en</span>
                                                          <span class="impl_fea_name">{!!$recommendedProduct->made_in!!}</span></li>
                                                      <li><span class="impl_fea_title">Año</span>
                                                          <span class="impl_fea_name">{!!$recommendedProduct->year!!}</span></li>
                                                      <li><span class="impl_fea_title">Categoría</span>
                                                          <span class="impl_fea_name">{!!$recommendedProduct->Subcategory->name!!}</span></li>
                                                    </ul>
                                                  <div class="impl_fea_btn">
                                                      <button class="impl_btn"><a href="{{ url('/products/'.$recommendedProduct->id) }}"><span class="impl_doller">${{$recommendedProduct->price}}</span><span class="impl_bnw">buy now</span></a></button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      @endforeach
                                      <!--pagination start-->
                                      <div class="col-lg-12 col-md-12">
                                          <div class="impl_pagination_wrapper">
                                              @if ($recommendedProducts->hasPages())
                                                  <nav aria-label="Page navigation example">
                                                      <ul class="pagination">
                                                          {{-- Previous Page Link --}}
                                                          @if ($recommendedProducts->onFirstPage())

                                                          @else
                                                            <li class="page-item" style="float: left;"><a href="{{ $recommendedProducts->previousPageUrl() }}" class="page-link" rel="prev" style="background-color: #f50;"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                                          @endif

                                                          {{-- Next Page Link --}}
                                                          @if ($recommendedProducts->hasMorePages())
                                                              <li class="page-item"><a href="{{ $recommendedProducts->nextPageUrl() }}" class="page-link" rel="next" style="background-color: #f50;"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                          @else

                                                          @endif
                                                      </ul>
                                                  </nav>
                                              @endif
                                          </div>
                                      </div>
                                  </div>
                                @else
                                  <div class="row" style="background-color: #fff; border-radius: 111px 0px 0px 0px; -moz-border-radius: 111px 0px 0px 0px; -webkit-border-radius: 111px 0px 0px 0px; border: 0px solid #000000;">
                                      <div class="col-lg-6 col-md-6"  style="padding-top: 70px;">
                                          <h2 style="color: black;">No existen coincidencias.</h2>
                                      </div>
                                  </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------Text slider start---------->
    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function () {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this);
        });

        ResCarouselSize();

        $(window).resize(function () {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function () {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[3];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                }
                else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                }
                else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                $(this).find(itemClass).each(function () {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            }
            else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
    </script>
@endsection
