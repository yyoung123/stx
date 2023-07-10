<?include("../include/header.html")?>
<section id="industry">
  <nav id="lnb" class="lnb">
    <div class="inner">
      <a href="index.html" class="home">Home</a>
      <div class="depth01">
        <button class="">사업분야</button>
        <? include("../include/depth01.html"); ?>
      </div>
      <div class="depth02">
        <button>건축사업</button>
        <? include("../include/lnb.html"); ?>
      </div>
    </div>
  </nav>
  <div class="subContainer" id="subContainer">
    <div class="title">
      <h2>건축사업</h2>
    </div>
    <div class="tabArea">
      <ul>
        <li><a href="industry.html" class="on">사업소개</a></li>
        <li><a href="project.html">사업실적</a></li>
      </ul>

    </div>
    <div class="contents">
      <div class="txtBox">
        <h3>21세기는 세계화,정보화,고도화 사회<br>
          STX건설은 건축의 미래를 제시하고 건축기술을 선도하고 있습니다.</h3>
        <p>
          STX건설을 폭넓은 분야에서 쌓아온 월등한 건설노하우를 바탕으로, 차별화된 설계, 완벽한 시공을 통한 미래형 인텔리전트 빌딩을 건축하며,<br>
          미래의 건축기술을 선도하고 있습니다. 특히, STX건설의 기술력은 국내보다 해외에서 더욱 호평을 받아, UAE 아부다비, 중곡, 베트남 등 다수의<br>
          해외 최첨단 빌딩 건축공사 수주 및 주택단지 시공실적을 보유하고 있습니다. STX건설이 추구하는 미래형 빌딩은, 단순 업무시설이 아닌 도시의 이미지를<br>
          재창조하는 공간이며 도시의 품격과 기업의 경쟁력을 대표할 수 있는 랜드마크 건설을 목표로 하고 있습니다.
        </p>
      </div>
      <div class="subVisual">
        <div class="slideBox">
          <div class="sImg">
            <ul class="swiper-wrapper" >
              <li class="swiper-slide"><a href="">pic1<img src="../images/contents/architec01.png" alt=""></a></li>
              <li class="swiper-slide"><a href="">pic2<img src="../images/contents/architec02.png" alt=""></a></li>
              <li class="swiper-slide"><a href="">pic3<img src="../images/contents/architec03.png" alt=""></a></li>
              <li class="swiper-slide"><a href="">pic4<img src="../images/contents/architec04.png" alt=""></a></li>
            </ul>
            <div class="pagination"></div>
          </div>
          <div class="navigation">
            <button class="prev"></button>
            <button class="next"></button>
          </div>
        </div>
      </div>
      <div class="btn">
        <button><a href="project.html">실적보기</a></button>
      </div>
    </div>
  </div>
</section>
<?include ("../include/footer.html")?> 
    <script>
      const gnb = $("#gnb");
      const header = $("#header");
      const btnAll = $("#header .btnAll");
      const depth01 = $("#gnb .depth01");
      const depth02 = $("#gnb .depth02");

      const lnbDepth01 =$("#lnb .depth01");
      const lnbDepth02 =$("#lnb .depth02");

      lnbDepth01.on("click",function() {
        lnbDepth01.toggleClass("open");
      })
      lnbDepth01.on("mouseleave",function() {
        lnbDepth01.removeClass("open");
      })
      lnbDepth02.on("click",function() {
        lnbDepth02.toggleClass("open");
      })
      lnbDepth02.on("mouseleave",function() {
        lnbDepth02.removeClass("open");
      })

      // const scroll = $("#header .scroll");
      gnb.on("mouseenter", function () {
        header.addClass("on");
      });
      header.on("mouseleave", function () {
        header.removeClass("on");
      });
      
      btnAll.on("click",function(e){
        header.toggleClass("open");
        depth02.delay(500).slideUp();
        return false;
      });
      depth01.on("click", function(e){
        // e.preventDefault();
        if(header.hasClass("mobile")){
          const depth02 = $(this).next() ;
          const siblings = $(this).parent().siblings().find(".depth02");
          siblings.stop().slideUp();
          depth02.stop().slideToggle();
          return false;
        }
      });

      $(window).on("resize",function(){
        const w = $(window).outerWidth();
        if(w<=1200) {
          header.addClass("mobile");
        }else{
          header.removeClass("mobile open");
          depth01.removeAttr("style");
          depth02.removeAttr("style");
          // lnbDepth02.removeAttr("style");
        }
      });
      $(window).trigger("resize");

      const myArray = ["pic1","pic2","pic3","pic4"];

      new Swiper("#subContainer .sImg", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 80,
        pagination: {
          el: "#subContainer .pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return `<span class="${className}"><strong>${myArray[index + 1]}</strong></span>`;
          },
        },
        navigation: {
          prevEl: "#subContainer .navigation .prev",
          nextEl: "#subContainer .navigation .next",
        },
      });
    </script>
  </body>
</html>