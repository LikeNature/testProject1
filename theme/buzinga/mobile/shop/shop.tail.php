<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
	</div><!-- container End -->
</div><!-- wrapper End -->

<div id="sidr">
<?php include_once(G5_THEME_MSHOP_PATH.'/category.php'); // 분류 ?>
</div>
    
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
<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>
<script src="<?php echo G5_THEME_JS_URL ?>/css3-animate-it.js"></script>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL ?>/animate.css">

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>