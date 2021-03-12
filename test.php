<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=1.0,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>아토비엔</title>
<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/css/mobile_shop.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/js/font-awesome/css/font-awesome.min.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/js/owl.carousel.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/mobile/skin/latest/review/style.css?ver=200124">
<link rel="stylesheet" href="https://atobien.co.kr/js/owlcarousel/owl.carousel.min.css?ver=200124">
<!--[if lte IE 8]>
<script src="https://atobien.co.kr/js/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "https://atobien.co.kr";
var g5_bbs_url   = "https://atobien.co.kr/bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "1";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
var g5_theme_shop_url = "https://atobien.co.kr/theme/buzinga/shop";
var g5_shop_url = "https://atobien.co.kr/shop";


</script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- 추가 -->
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/font/SCDream.css?ver=200124"/>
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/react.css?ver=200124"/>
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/mk_mobile.css?ver=200124"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">




<script src="https://atobien.co.kr/js/jquery-1.12.4.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/jquery-migrate-1.4.1.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/common.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/wrest.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/placeholders.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/jquery.sidr.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/modernizr.custom.70111.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/owl.carousel.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/unslider.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/js/owlcarousel/owl.carousel.min.js?ver=200124"></script>
<script src="https://atobien.co.kr/theme/buzinga/mobile/skin/latest/review/latest.carousel.js?ver=200124"></script>
</head>
<body>


<!-- 슬라이드 -->
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/slick-theme.css"/>
<script src="https://atobien.co.kr/theme/buzinga/js/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/slick.min.js" type="text/javascript" charset="utf-8"></script>

<!-- 컬러박스 -->
<link rel="stylesheet" type="text/css" href="https://atobien.co.kr/theme/buzinga/css/colorbox.css"/>
<script src="https://atobien.co.kr/theme/buzinga/js/jquery.colorbox.js" type="text/javascript" charset="utf-8"></script>


<script>
//RN에서 WEB으로 스크립트 전송
if (window.ReactNativeWebView) {
	// 안드로이드
	document.addEventListener("message", function ({data}){
		var obj = JSON.parse(data);
		var chk_app = obj.chk_app;
		var token_id = obj.token_id;
	});

	//로그인 페이지 네비 하단 메뉴 숨김
	document.addEventListener("message", function (data){
		
		var obj = new Object();
            obj.MainScreen = false;	//메인화면인지
            obj.HeaderMenu = true;	//RN Header 사용여부
            obj.FooterMenu = true;	//RN Footer 사용여부
 
        var jsonData = JSON.stringify(obj);

		window.ReactNativeWebView.postMessage(jsonData);
	});


	//ios
	window.addEventListener("message", function ({data}){
		var obj = JSON.parse(data);
		var chk_app = obj.chk_app;
		var token_id = obj.token_id;
	});

	window.addEventListener("message", function (data){
		window.ReactNativeWebView.postMessage(true);
	});

}
</script>


<header id="hd">
    <h1>아토비엔</h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    
<!-- 팝업레이어 시작 { -->
<div id="hd_pop">
    <h2>팝업레이어 알림</h2>

<span class="sound_only">팝업레이어 알림이 없습니다.</span></div>

<script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
});
</script>
<!-- } 팝업레이어 끝 -->
        <div id="hd_wr">
    	<div id="hd_wr_inner">
	        <div id="logo"><a href="https://atobien.co.kr/shop/"><img src="https://atobien.co.kr/theme/buzinga/img/logo.svg" alt="아토비엔 메인"></a></div>
<!--	        --><!--	            <div class="top_life_mana">생활관리</div>-->
<!--	        -->
	        <ul class="gnb_wrap">
			  <li><a href="https://atobien.co.kr/shop">아토비엔홈</a></li>
                <li><a href="https://atobien.co.kr/lm_test.php?type=2">생활관리</a></li>
			  <li><a href="https://atobien.co.kr/shop_main.php">스토어</a></li>
			  <li><a href="https://atobien.co.kr/bbs/board.php?bo_table=review">실시간리뷰</a></li>
			  <li><a href="https://atobien.co.kr/mypage.php">마이페이지</a></li>
			</ul>
			
			<div id="hd_btn">
				<div class="hd_right_btn">
										<div class="hd_search btn_align">
			            <div class="hd_sch_wrap">
				            <form name="frmsearch1" action="https://atobien.co.kr/shop/search.php" onsubmit="return search_submit(this);">
				            <label for="sch_str" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				            <input type="text" name="q" value="" id="sch_str" required  placeholder="제품명을 검색해주세요">
				            <button type="submit" id="sch_submit"><img src="https://atobien.co.kr/theme/buzinga/img/top_sch.svg"><span class="sound_only">검색</span></button>
				            </form>
			            				            </div>
			            <script>
			            function search_submit(f) {
			                if (f.q.value.length < 2) {
			                    alert("검색어는 두글자 이상 입력하십시오.");
			                    f.q.select();
			                    f.q.focus();
			                    return false;
			                }
			                return true;
			            }
			            </script>
			        </div>

			        <a href="https://atobien.co.kr/shop/cart.php" class="cart"><img src="https://atobien.co.kr/theme/buzinga/img/top_cart.svg"><span class="sound_only">장바구니</span><span class="cart-count">0</span></a>
	        							<a href="https://atobien.co.kr/bbs/login.php" class="tnb_btn">
						<img src="https://atobien.co.kr/theme/buzinga/img/top_member.svg"><span class="sound_only">로그인</span>
					</a>
										<a href="#" class="m_view top_ic_btn">
						<img src="https://atobien.co.kr/theme/buzinga/img/top sch_btn.svg"><span class="sound_only">검색</span>
					</a>
	        	</div>
	        </div>
        </div>
    </div>
        <script>
    $( document ).ready( function() {
        var jbOffset = $( '#hd_wr' ).offset();
        $( window ).scroll( function() {
            if ( $( document ).scrollTop() > jbOffset.top ) {
                $( '#hd_wr' ).addClass( 'fixed' );
            }
            else {
                $( '#hd_wr' ).removeClass( 'fixed' );
            }
        });
    });

    $(document).ready(function() {
      $('#btn_hdcate, .menu_close').sidr();
    });

	$(".hd_right_btn .btn_close").click(function(e) {
		$(".tnb_con").hide();
	});

	$(".hd_right_btn .tnb_btn:not(:only-child)").click(function(e) {
	    $(this).siblings(".tnb_con").toggle();
	
	    $(".tnb_con").not($(this).siblings()).hide();
	    e.stopPropagation();
	
	    $("#wrapper").on("click", function() {
	        $(".tnb_con").hide();
	    });
	});
   </script>
</header>

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


<!-- ajax 로 수정 필요.. -->


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

			<!--
			<div class="input_wrap">
				<input class="input_st t_r" type="text" name="sm_age" required placeholder=""><span>세</span>
			</div>
		  -->

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
			
			<!--
			<div class="btn_radio">
				<input type="radio" id="sec1" name="sm_id1" value="1">
				<label for="sec1">머리</label>
			</div>
			<div class="btn_radio">
				<input type="radio" id="sec2" name="sm_id1" value="2">
				<label for="sec2">상지</label>
			</div>
			<div class="btn_radio">
				<input type="radio" id="sec3" name="sm_id1" value="3">
				<label for="sec3">몸통</label>
			</div>
			<div class="btn_radio">
				<input type="radio" id="sec4" name="sm_id1" value="4">
				<label for="sec4">하지</label>
			</div>
		  -->
		</div>





		<div class="input_div" >
			<h5 class="tit02">아토피 고민</h5>

			<!-- 클릭시 Ajax로 데이터 가져올수 있도록 수정 작업 ...-->


			<div id="sm_id_2_con">

				<!--
				<div class="btn_radio big">
					<input type="radio" id="sec5" name="sm_id2" value="1">
					<label for="sec5">붉은기<br>(홍반)</label>
				</div>
				<div class="btn_radio big">
					<input type="radio" id="sec6" name="sm_id2" value="2">
					<label for="sec6">주름<br>(태선화)</label>
				</div>

				<div class="btn_radio big">
					<input type="radio" id="sec7" name="sm_id2" value="3">
					<label for="sec7">찰상</label>
				</div>

				<div class="btn_radio big">
					<input type="radio" id="sec8" name="sm_id2" value="4">
					<label for="sec8">부종</label>
				</div>
			  -->
			</div>




		</div>

		<button type="submit" class="btn btn03">작성완료</button>
		</form>
	</div>
</div>
<div class="dark_overlay"></div>


<div class="cont01">
	<div class="container_1200">
		<!-- <h4 class="tit01 font22"><span class="font_dg">보송이</span>님 맞춤 제품 추천</h4> --><!-- 로그인했을때 -->
		<h4 class="tit01 font22">맞춤 제품 추천</h4><!-- 로그인 안했을때 -->

		<!-- <div class="not_list">
			<div class="ic_img"><img src="https://atobien.co.kr/theme/buzinga/img/main_not_list01.svg"></div>
			<p class="font19">제품 추천을 위해
			<b>설문조사</b>에 참여해주세요.</p>
		</div> --><!-- 로그인 안했을때 and 설문조사 참여 안했을때 -->

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
		</div> --><!-- 로그인 안했을때 and 설문조사 참여 안했을때 -->


					<div class="no_today"><img src="https://atobien.co.kr/theme/buzinga/img/ico_nonlist.png"></div>

				<!-- 로그인 했을때 and 설문조사 참여 했을때 -->

	</div>
</div>


<div class="cont03">
	<div class="container_1200">
		<h4 class="tit01 font22">실시간 리뷰<a class="more" href="/bbs/board.php?bo_table=review">더보기</a></h4>


		<section class="list_slider03 item_list">

		    

	<div class="review_box">
		<a href="http://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=12&it_id=1603070993">
			<div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt='' ></div>
			<div class="txt">
				<div class="info"><span class="name">아요밍</span><span class="date">2021-01-12 11:13:40</span></div>
				<div class="star">
					<img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'>					<span>5.0</span>
				</div>
				<div class="rv_tit">test</div>
			</div>
		</a>
	</div>
	<div class="review_box">
		<a href="http://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=8&it_id=1603070993">
			<div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt='' ></div>
			<div class="txt">
				<div class="info"><span class="name">테스트2</span><span class="date">2021-01-06 11:13:04</span></div>
				<div class="star">
					<img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'>					<span>5.0</span>
				</div>
				<div class="rv_tit">테스트입니다</div>
			</div>
		</a>
	</div>
	<div class="review_box">
		<a href="http://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=6&it_id=1603070993">
			<div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt='' ></div>
			<div class="txt">
				<div class="info"><span class="name">임성호</span><span class="date">2021-01-06 11:09:17</span></div>
				<div class="star">
					<img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'>					<span>5.0</span>
				</div>
				<div class="rv_tit">dd</div>
			</div>
		</a>
	</div>
	<div class="review_box">
		<a href="http://atobien.co.kr/bbs/board.php?bo_table=review&amp;wr_id=5&it_id=1603070993">
			<div class="img"><img src='https://atobien.co.kr/theme/buzinga/img/noimg.png' width='115' height='115' alt='' ></div>
			<div class="txt">
				<div class="info"><span class="name">최고관리자</span><span class="date">2020-12-28 15:02:05</span></div>
				<div class="star">
					<img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'><img src='/theme/buzinga/img/ic_star_on.svg'>					<span>4.5</span>
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

$("input:radio[name=sm_id1]").click(function(){

	 var sm_id1 = $("input:radio[name=sm_id1]:checked").val();
	 // ajax로 넘기기

	 var select_json = {
		 'sm_id1' : sm_id1
	 }

	 $.ajax({

                  url: '../lib/ajax_sm2_cate.php',
                  type: "POST",
                  data: select_json,
                  datatype:"json",
                  success: function(obj){

									var jsonObj = JSON.parse(obj);

									$("#sm_id_2_con").empty();


									for(var i=0; i<jsonObj.length; i++){

										sm_id2   = jsonObj[i].sm_id2;
										sm_name2 = jsonObj[i].sm_name2;

										$("#sm_id_2_con").append(
										"<div class='btn_radio big'>"+
										  "<input type='radio' id='sec"+sm_id2+"' name='sm_id2' value='"+sm_id2+"'>"+
										  "<label for='sec"+sm_id2+"'>"+sm_name2+"</label>"+
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
									console.log("----->"+obj);

   }});






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
        <a href="https://atobien.co.kr/lm_test.php?type=2" >
            <div class="img">
                <img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/mn2_on.svg" style="height: 30px">
                <img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/mn2_off.svg" style="height: 30px">
            </div>
            <span>생활관리</span>
        </a>
    </li>
  <li>
	<a href="https://atobien.co.kr/shop_main.php" >
		<div class="img">
			<img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic02_on.svg">
			<img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic02_off.svg">
		</div>
		<span>스토어</span>
	</a>
  </li>
  <li>
	<a href="https://atobien.co.kr/bbs/board.php?bo_table=review" >
		<div class="img">
			<img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic03_on.svg">
			<img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic03_off.svg">
		</div>
		<span>실시간리뷰</span>
	</a>
  </li>
  <li>
	<a href="https://atobien.co.kr/mypage.php" >
		<div class="img">
			<img class="img_on" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic04_on.svg">
			<img class="img_off" src="https://atobien.co.kr/theme/buzinga/img/bottom_ic04_off.svg">
		</div>
		<span>마이페이지</span>
	</a>
  </li>
</ul>
<div id="ft">
    <h2>아토비엔 정보</h2>
    <div class="ft_wr">
    	<div id="ft_cs" class="ft_con">
            <h3>고객센터</h3>
            <div>
                                <strong class="cs_tel">0507-1312-2708</strong>
                <p class="cs_info"><span>평일 10:00 - 17:00</span><span>점심시간 12:00 - 13:00</span><span>주말 공휴일 휴무</span></p>
            </div>
        </div>
        <div id="ft_if" class="ft_con">
            <ul class="ft_link">
				<li><a href="https://atobien.co.kr/company.php">회사소개</a></li>
				<li><a href="https://atobien.co.kr/bbs/content.php?co_id=provision">이용약관</a></li>
				<li><a href="https://atobien.co.kr/bbs/content.php?co_id=privacy">개인정보처리방침</a></li>
			</ul>
			<div class="ft_info"><span>아토비엔</span><span>대표 : 임성호</span><span>개인정보 보호책임자 : 임성호</span>
				<span>주소 : 대전광역시 중구 중앙로 85, 4층 406호(대전창업허브)</span><span>전화 : 0507-1312-2708</span><span>팩스 : 0504-164-2708</span>
				<span>사업자등록번호 : 601-03-37918</span><span>통신판매업신고번호 : 제 2020-대전중구-0791호</span>			</div>
			<p class="ft_copy">Copyright &copy; 2020 아토비엔. All Rights Reserved.</p>
        </div>
    </div>
	<a href="#" id="ft_to_top"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></a>

   <script>
    $(function() {
        $("#ft_to_top").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>


<script>
$('.list_slider').slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	dots: true,
	arrows: false,
	responsive: [
		{
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
});//메인리스트슬라이드
$('.list_slider02').slick({
	infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	dots: true,
	arrows: false,
	responsive: [
		{
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
				slidesToShow: 2,
				slide: false,
			}
		},
	]
});//메인리스트슬라이드
$('.list_slider03').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	dots: true,
	arrows: false,
	responsive: [
		{
			breakpoint: 978,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 640,
			settings: {
				variableWidth: true,
				slidesToShow: 1,
				dots: false,
			}
		},
	]
});//메인리뷰슬라이드
$('.list_slider04').slick({
	infinite: true,
	slidesToShow: 5,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
	dots: true,
	arrows: false,
	responsive: [
		{
			breakpoint: 978,
			settings: {
				slidesToShow: 4,
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
});//관련상품슬라이드
</script>

<script>
$('.banner_slide').slick({
	infinite: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 5000,
	dots: true,
	arrows: false,
    dotsClass: 'custom_paging',
    customPaging: function (slider, i) {
        console.log(slider);
        return  (i + 1) + '/' + slider.slideCount;
    }
});//서브배너슬라이드
</script>




<script>
$('.detail_slide').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.detail_slide_nav',
});
$('.detail_slide_nav').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	asNavFor: '.detail_slide',
	dots: false,
	focusOnSelect: true,
	variableWidth: true,
});//상세페이지 슬라이드
</script>

<script>
$( document ).ready(function(){
	$( ".survey_close" ).click(function(){
		$( ".survey_pop" ).fadeOut();
		$( ".dark_overlay" ).fadeOut();
		
		//스크롤 풀기
		$('#container').off('scroll touchmove mousewheel');
	});
	$( ".dark_overlay" ).click(function(){
		$( ".survey_pop" ).fadeOut();
		$( ".dark_overlay" ).fadeOut();
	});
	$( ".survey_btn" ).click(function(){
		$( ".survey_pop" ).fadeIn();
		$( ".dark_overlay" ).fadeIn();
		
		//스크롤 막기
		$('#container').on('scroll touchmove mousewheel', function(event) {
		  event.preventDefault();
		  event.stopPropagation();
		  return false;
		});

	});
});//모달창
</script>


<script type="text/javascript">
$('.tab_tit li button').click(function(){
    var tab_id = $(this).attr('data-type');
    $('.tab_tit li button').removeClass('selected');
    $('.tab_content').removeClass('selected');
    $(this).addClass('selected');
    $("#"+tab_id).addClass('selected');
})//상세페이지 탭메뉴


$('.tab_titsc li button').click(function(){
    var tab_id = $(this).attr('data-type');
    $('.tab2_tit li button').removeClass('selected');
    $('.tab2_content').removeClass('selected');
    $(this).addClass('selected');
    $("#"+tab_id).addClass('selected');
})//탭2
</script>



<script src="https://atobien.co.kr/js/sns.js"></script>
<script src="https://atobien.co.kr/theme/buzinga/js/css3-animate-it.js"></script>
<link rel="stylesheet" href="https://atobien.co.kr/theme/buzinga/css/animate.css">



<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->


</body>
</html>
