<?php
include_once('./_common.php');

// define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH . '/shop.head.php');
?>

<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>

<div id="wrapper">
    <div id="container">

        <div class="main_visual">
            <a class="survey_btn">
                <div class="container_1200">
                    <div class="text">
                        <em>설문조사</em>
                        <strong>나에게 딱 맞는
                            <b>아토피 제품</b>을 찾고 있다면?</strong>
                        <span class="a_btn"><img src="https://atobien.co.kr/theme/buzinga/img/main_visual_ic.svg"><span class="font21">제품추천 받기</span><i class="xi-arrow-right font25"></i></span>
                    </div>
                    <div class="img"><img class="m_view" src="https://atobien.co.kr/theme/buzinga/img/m_main_visual.svg"></div>
                </div>
            </a>
        </div>

        <div class="pop_wrap survey_pop">
            <a class="survey_close"><i class="xi-close-thin"></i></a>
            <div class="t_c font21">설문조사</div>
            <div class="content_in">
                <form name="fitemqa" method="post" action="./index.php" onsubmit="return fitemqa_submit(this);" autocomplete="off">
                    <input type="hidden" name="w" value="s">

                    <div class="input_div">

                        <h5 class="tit02">나이</h5>
                        <!-- SELECT BOX EDIT  -->

                        <div class="input_wrap">
                            <select name="sm_age" style="max-width:200px" class="select">
                                <option value="" selected="">연령대 선택</option>
                                <option value="30">30대 이하</option>
                                <option value="40">40대</option>
                                <option value="50">50대</option>
                                <option value="60">60대</option>
                                <option value="70">70대</option>
                                <option value="80">80대 이상</option>
                            </select>
                        </div>
                    </div>


                    <div class="input_div">
                        <h5 class="tit02">증상이 있는 부위</h5>

                        <div class="btn_radio">
                            <input type="radio" id="sec_1_1" name="sm_id1" value="1">
                            <label for="sec_1_1">머리</label>
                        </div>
                        <div class="btn_radio">
                            <input type="radio" id="sec_1_2" name="sm_id1" value="2">
                            <label for="sec_1_2">상지</label>
                        </div>
                        <div class="btn_radio">
                            <input type="radio" id="sec_1_3" name="sm_id1" value="3">
                            <label for="sec_1_3">몸통</label>
                        </div>
                        <div class="btn_radio">
                            <input type="radio" id="sec_1_4" name="sm_id1" value="4">
                            <label for="sec_1_4">하지</label>
                        </div>
                    </div>

                    <div class="input_div">
                        <h5 class="tit02">아토피 고민</h5>

                        <!-- 클릭시 Ajax로 데이터 가져올수 있도록 수정 작업 ...-->


                        <div id="sm_id_2_con">

                        </div>
                    </div>

                    <button type="submit" class="btn btn03">작성완료</button>
                </form>
                <script>
                    $(document).ready(function() {
                        $(".survey_close").click(function() {
                            $(".survey_pop").fadeOut();
                            $(".dark_overlay").fadeOut();

                            //스크롤 풀기
                            $('#container').off('scroll touchmove mousewheel');
                        });
                        $(".dark_overlay").click(function() {
                            $(".survey_pop").fadeOut();
                            $(".dark_overlay").fadeOut();
                        });
                        $(".survey_btn").click(function() {
                            $(".survey_pop").fadeIn();
                            $(".dark_overlay").fadeIn();

                            //스크롤 막기
                            $('#container').on('scroll touchmove mousewheel', function(event) {
                                event.preventDefault();
                                event.stopPropagation();
                                return false;
                            });

                        });
                    }); //모달창
                </script>
            </div>
        </div>
            <div class="cont01">
                <div class="container_1200">

                    <h4 class="tit01 font22">맞춤 제품 추천</h4>
                    <section class="list_slider item_list">

                        <div class="item_box">
                            <a href="https://atobien.co.kr/shop/item.php?it_id=1613377213">
                                <div class="item_icon item_icon_new">NEW</div>
                                <div class="img">
                                    <img src="https://atobien.co.kr/data/item/1613377213/thumb-20210226_135019_280x280.png" width="280" height="280" alt="베비루미 아토로션(판매예시입니다)">
                                </div>
                                <div class="txt">
                                    <div class="name">베비루미 아토로션(판매예시입니다)</div>
                                    <div class="discount font_scd">18%</div>
                                    <div class="price font_scd"><strong>20,500원</strong><span>25,000원</span></div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <!-- 로그인 했을때 and 설문조사 참여 했을때 -->
                </div>
            </div>


            <div class="cont02">
                <div class="container_1200">
                    <h4 class="tit01 font22">최근 본 상품<a class="more" href="#">더보기</a></h4>

                    <!-- <div class="not_list">
			    <div class="ic_img ic_img02"><img src="https://atobien.co.kr/theme/buzinga/img/main_not_list02.svg"></div>
			    <p class="font19">최근 본 상품이 없습니다.</p>
		        </div> -->
                    <!-- 로그인 안했을때 and 설문조사 참여 안했을때 -->


                    <div class="no_today"><img src="https://atobien.co.kr/theme/buzinga/img/ico_nonlist.png"></div>

                    <!-- 로그인 했을때 and 설문조사 참여 했을때 -->

                </div>
            </div>


            <div class="cont03">
                <div class="container_1200">
                    <h4 class="tit01 font22">실시간 리뷰<a class="more" href="/bbs/board.php?bo_table=review">더보기</a></h4>


                    <section class="list_slider03 item_list">



                        <div class="review_box">
                            <a href="https://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=12&it_id=1603070993">
                                <div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt=''></div>
                                <div class="txt">
                                    <div class="info"><span class="name">아요밍</span><span class="date">2021-01-12 11:13:40</span></div>
                                    <div class="star">
                                        <img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'> <span>5.0</span>
                                    </div>
                                    <div class="rv_tit">test</div>
                                </div>
                            </a>
                        </div>
                        <div class="review_box">
                            <a href="https://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=8&it_id=1603070993">
                                <div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt=''></div>
                                <div class="txt">
                                    <div class="info"><span class="name">테스트2</span><span class="date">2021-01-06 11:13:04</span></div>
                                    <div class="star">
                                        <img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'> <span>5.0</span>
                                    </div>
                                    <div class="rv_tit">테스트입니다</div>
                                </div>
                            </a>
                        </div>
                        <div class="review_box">
                            <a href="https://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=6&it_id=1603070993">
                                <div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt=''></div>
                                <div class="txt">
                                    <div class="info"><span class="name">임성호</span><span class="date">2021-01-06 11:09:17</span></div>
                                    <div class="star">
                                        <img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'> <span>5.0</span>
                                    </div>
                                    <div class="rv_tit">dd</div>
                                </div>
                            </a>
                        </div>
                        <div class="review_box">
                            <a href="https://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=5&it_id=1603070993">
                                <div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt=''></div>
                                <div class="txt">
                                    <div class="info"><span class="name">최고관리자</span><span class="date">2020-12-28 15:02:05</span></div>
                                    <div class="star">
                                        <img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'> <span>4.5</span>
                                    </div>
                                    <div class="rv_tit">11</div>
                                </div>
                            </a>
                        </div>

                    </section>

                </div>
            </div>
            <script>
                $("#container").removeClass("container").addClass("idx-container");

                /* 첫번째 카테고리 클릭 이벤트..*/

                $("input:radio[name=sm_id1]").click(function() {

                    var sm_id1 = $("input:radio[name=sm_id1]:checked").val();
                    // ajax로 넘기기

                    var select_json = {
                        'sm_id1': sm_id1
                    }

                    $.ajax({

                        url: '../lib/ajax_sm2_cate.php',
                        type: "POST",
                        data: select_json,
                        datatype: "json",
                        success: function(obj) {

                            var jsonObj = JSON.parse(obj);

                            $("#sm_id_2_con").empty();


                            for (var i = 0; i < jsonObj.length; i++) {

                                sm_id2 = jsonObj[i].sm_id2;
                                sm_name2 = jsonObj[i].sm_name2;

                                $("#sm_id_2_con").append(
                                    "<div class='btn_radio big'>" +
                                    "<input type='radio' id='sec" + sm_id2 + "' name='sm_id2' value='" + sm_id2 + "'>" +
                                    "<label for='sec" + sm_id2 + "'>" + sm_name2 + "</label>" +
                                    "</div>"
                                );

                                //console.log("--->"+jsonObj[i].sm_id2);

                                /*
                                <div id="sm_id_2_con">
                                	<div class="btn_radio big">
                                		<input type="radio" id="sec5" name="sm_id2" value="1">
                                		<label for="sec5">붉은기<br>(홍반)</label>
                                	</div>
                                */


                            }


                            //배열받기..
                            /*
									for(var i=0; i<data.length; i++){
                    team_name_data=data[i].team_name;
                    team_image_info=data[i].icon_little;
                    team_color=data[i].team_color;
                    team_code=data[i].team_code;
                  }
									*/
                            /*
									var jsonObj = JSON.parse(obj);
                  result      = jsonObj.result;
									*/
                            console.log("----->" + obj);

                        }
                    });






                });
            </script>

        </div><!-- container End -->
    </div><!-- wrapper End -->

    <ul class="bottom_menu" id="APP_FTMENU">
        <li>
            <a href="/index.php" class="on">
                <div class="img">
                    <img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic01_on.svg">
                    <img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic01_off.svg">
                </div>
                <span>아토비엔홈</span>
            </a>
        </li>
        <li>
            <a href="https://atobien.co.kr/lm_test.php?type=2">
                <div class="img">
                    <img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/mn2_on.svg" style="height: 30px">
                    <img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/mn2_off.svg" style="height: 30px">
                </div>
                <span>생활관리</span>
            </a>
        </li>
        <li>
            <a href="https://atobien.co.kr/shop_main.php">
                <div class="img">
                    <img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic02_on.svg">
                    <img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic02_off.svg">
                </div>
                <span>스토어</span>
            </a>
        </li>
        <li>
            <a href="https://atobien.co.kr/bbs/board.php?bo_table=review">
                <div class="img">
                    <img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic03_on.svg">
                    <img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic03_off.svg">
                </div>
                <span>실시간리뷰</span>
            </a>
        </li>
        <li>
            <a href="https://atobien.co.kr/mypage.php">
                <div class="img">
                    <img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic04_on.svg">
                    <img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic04_off.svg">
                </div>
                <span>마이페이지</span>
            </a>
        </li>
    </ul>



    <a href="#" id="ft_to_top"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></a>

    <script>
        $(function() {
            $("#ft_to_top").on("click", function() {
                $("html, body").animate({
                    scrollTop: 0
                }, '500');
                return false;
            });
        });
        $('.list_slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: false,
            responsive: [{
                    breakpoint: 978,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        variableWidth: true,
                        dots: false,
                    }
                },
            ]
        });
    </script>

    <script>
        $("#container").removeClass("container").addClass("idx-container");
    </script>

    <?php
    include_once(G5_THEME_MSHOP_PATH . '/shop.tail.php');
    ?>