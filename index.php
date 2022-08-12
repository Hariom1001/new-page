<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="./jquery.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://freefonticon.xyz/official-icon/icons/main.min.css" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

  <title>New page CodingSeekho</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
body{
  font-family: 'Poppins', sans-serif;
}
    /* important  */
    .right-slide {
      display: none;
    }

    .side-bar-toggle {
      display: block;
    }

    img {
      width: 100%;
    }

    .main {
      display: flex;
      border: 0px solid red;
      padding: 45px 0;
      min-height: 100vh;
    }

    .main .left , .right {
      width: 100%;
      border: 0px solid blue;
      margin: 2px;
    }

    .right {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .left {
      display: flex;
      justify-content: center;
      font-family: 'Poppins', sans-serif;
    }

    .left div {
      width: 80%;
      display: flex;
      justify-content: center;
      flex-direction: column;
    }

    .right .img-box {
      width: 500px;
    }

    .start-now {
      background-color: dodgerblue;
      width: 30%;
      text-align: center;
      padding: 10px;
      margin-top: 15px;
      display: block;
      color: white;
    }

    /* .right .img-box{width: 500px;height: 600px;} */

    .banner__overline {
      font-size: 16px;
      line-height: 24px;
      letter-spacing: 0.15px;
      color: #0f4089;
    }

    .banner__title {
      font-size: 34px;
      line-height: 48px;
      color: rgba(0, 0, 0, 0.87);
      margin: 0;
      font-weight: 600;
    }

    .banner__desc {
      font-size: 16px;
      line-height: 32px;
      letter-spacing: 0.5px;
      color: rgba(0, 0, 0, 0.6);
      margin-top: 16px;
    }

    .banner-text-list {
      position: relative;
      margin-top: 16px;
      height: 40px;
      text-align: center;
    }

    ul,
    ol {
      list-style: none;
      list-style-type: none;
    }

    .banner-text__item.one {
      animation: appear 9s infinite ease;
    }

    .banner-text__item {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transform: translateY(10px);
      width: 100%;
    }

    .hp-banner {
      padding: 16px;
      margin-top: 70px;
      text-align: center;
      white-space: initial;
    }

    .banner__overline {
      font-size: 16px;
      line-height: 24px;
      letter-spacing: 0.15px;
      /* color: #0f4089; */
      color: white;
    }

    .banner__title {
      font-size: 34px;
      line-height: 48px;
      /* color: rgba(0, 0, 0, .87); */
      color: white;
      margin: 0;
      font-weight: 600;
    }

    .banner__desc {
      font-size: 16px;
      line-height: 32px;
      letter-spacing: 0.5px;
      /* color: rgba(0, 0, 0, .6); */
      color: white;

      margin-top: 16px;
    }

    .bannner__add-text {
      font-size: 20px;
      line-height: 28px;
      letter-spacing: 0.15px;
      color: white;
      font-weight: 600;
    }

    .banner__btn {
      margin-top: 16px;
    }

    .banner-image {
      display: block;
      margin: 0 auto;
      height: auto;
    }

    .banner-text-list {
      position: relative;
      margin-top: 16px;
      height: 40px;
      text-align: center;
    }

    .banner-text__item {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
      transform: translateY(10px);
      width: 100%;
    }

    .banner-text__item.one {
      animation: appear 9s infinite ease;
    }

    .banner-text__item.two {
      animation: appear 9s 3s infinite ease;
    }

    .banner-text__item.three {
      animation: appear 9s 6s infinite ease;
    }

    @media only screen and (min-width: 768px) {
      .hp-banner {
        display: flex;
        align-items: center;
        text-align: left;
        padding-top: 0;
      }

      .banner-text-list {
        margin-top: 24px;
        text-align: left;
      }

      .bannner__add-text {
        /* font-size: 24px; */
        line-height: 32px;
      }

      .hp-banner__content {
        width: 60%;
        padding-right: 20px;
      }

      .banner-image {
        width: 100%;
      }

      .hp-banner__image {
        width: 40%;
      }

      #gl-banner-slider .gl-slider-container {
        height: auto !important;
      }

      .banner__btn {
        display: inline-block !important;
      }
    }

    @media only screen and (min-width: 1024px) {
      .hp-banner__content {
        width: 50%;
      }

      .hp-banner__image {
        width: 50%;
      }

      .banner__title {
        font-size: 48px;
        line-height: 64px;
      }

      .banner-image {
        max-width: 500px;
      }

      .banner__btn {
        display: inline-block;
      }
    }

    @keyframes appear {
      0% {
        opacity: 0;
      }

      10% {
        opacity: 1;
        transform: translateY(0);
      }

      30% {
        opacity: 1;
        transform: translateY(0);
      }

      35% {
        opacity: 0;
        transform: translateY(0);
      }

      100% {
        opacity: 0;
        transform: translateY(0);
      }
    }

    .sec2-inner {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .sec2-box {
      width: 20%;
      display: flex;
      vertical-align: top;
      white-space: normal;
      border-radius: 0.5rem !important;
      padding: 1.6rem;
      box-align: center !important;
      align-items: center;
      justify-content: center !important;
      font-size: 15px;
      margin-top: 1.5rem;
    }

    .sec2-box span i {
      font-size: 3.5rem;
      font-weight: 700;
      color: white;
      padding-right: 5px;
    }

    .sec2-item-desc {
      font-weight: 700;
      color: #fff;

    }

    .sec2-item-desc h5 {
      font-size: 1.3125rem;
    }

    .pad-3r {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }

    /* section 3  */
   
    .section-title {
      text-align: center;
      font-size: 2rem;
      margin-top: 0;
    margin-bottom: 1.4rem;
    font-family: Heebo,sans-serif;
    font-weight: 700;
    line-height: 1.25;
    color: #24292d;
    line-height: 1.26;

    }

    .inner-sec3 {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .sec3-item {
      width: 22%;
      padding: 1.3rem 0.4rem;
      margin: 0.8rem;
      border-radius: 0.5rem;
      background-color: #e6f0f9;
      /* opacity: 0.1; */
    }

    .sec3-item:hover {
      box-shadow: 0px 0px 4px #bfbfbf;
      cursor: pointer;
    }

    .sec3-item-a {
      color: #313131;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .sec3-content {
      color: #000;
    }

    .sec3-image {
      width: 90px;
      height: 90px;
      background-color: #fff;
      border-radius: 50px;
      display: flex;
      justify-content: inherit;
      align-items: center;
    }


    .sec3-image-inner img {
      width: 42px;
      object-fit: cover;
      vertical-align: middle;
    }

    .sec3-content {

      text-align: center;
    }

    .sec3-title h3 {
      color: #fff;
      font-size: 1.5rem;
      padding: 13px 0;
      font-weight: 700;
      line-height: 1.25;
      color: #24292d;
    }

    .sec3-desc {}

/* section 5 */
.sec4-inner{
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}
.sec4-item{
  width: 48%;
    padding: 1rem;
    margin: 0.6rem 0.1rem;
    border-radius: 0.5rem;
    box-shadow: 0 0 40px rgb(29 58 83 / 15%);
}
.sec-4-item-link-cont{
display: flex;
justify-content: space-around;
align-items: center;
/* flex-wrap: wrap; */
}
.sec-4-item-link{
  width: 30%;
  display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 15px 0;

}
.sec4-item-title{
  padding-left: 0.25rem;
    font-size: 1.3125rem;
}
.sec4-item-title i{
  padding-right: 4px;
}
.sec-4-item-link-image{
  width: 60%;
}
.sec-4-item-link img{
  width: 100%;
}
.sec-4-view-more-btn{
  background-image: none!important;
    width: auto;
    height: auto;
    margin: 0px;
    border: 1px solid #ccc;
    float: right;
    padding: 5px 10px;
    margin-top: 10px;
    cursor: pointer;
}
.sec-4-view-more-btn:hover{
  color: #fff!important;
    background-color: dodgerblue !important;
}
.sec-4-item-link-title{
  width: auto;
    color: #343a40;
    padding: 0px 0 0 0px;
    text-align: center;
    font-size: 13px;
    line-height: 18px;
}
.np-container{
  /* width: 1200px; */
  margin: 0 auto;
}

    /* section 4  */


    .accordian-header {
width: 100%;
/* margin: 5px 0px; */
cursor: pointer;
border: 1px solid lightgray;
}

.accordian {
/* width: 700px; */

}

.accordian-header h3 {
/* position: absolute; */
display: inline;
font-size: 20px;
}

.accordian-body {
padding: 15px;
/* box-shadow: 0px 2px 5px; */
background-color: #fff;
color: #666;
display: none;
}

.plus-sign {
display: inline-block;
font-size: 25px;
height: 60px;
width: 50px;
line-height: 60px;
background-color: lightgray;
clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
text-align: center;


}
.fq-ques{
  padding: 10px 10px;
    color: #262626;
}
/* .accordian:nth-child(1) .accordian-body {
display: block;
} */



/* section 6  */
.sec3-inner{
  display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.sec6{
  margin: 0 15px;
}
.sec6-item{
  width: 33%;
  display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}
.sec6-item-content{
  text-align: center;
}
.sec6-item-image{
  display: inline-block;
    position: relative;
    margin: 0 auto 25px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 0 20px 0 rgb(29 31 89 / 10%);
    text-align: center;
    transition: all 300ms;
    max-width: calc(100% - 60px);

}
.sec6-item-image:hover{
  transform: scale(1.03);
}
.sec6-item-image img{
  transition: all 300ms;
    max-width: 100%;
    border-radius: 10px;
  object-fit: cover;
}
.sec6-item-desc{
  margin: 0 0 50px;
    font-size: 16px;
    font-weight: 500;
    color: #172b4d;
}
.sec6-item-span{
  box-sizing: border-box;
    height: 40px;
    width: 40px;
    background: linear-gradient(90deg,#2c31cf 0%,#b44fff 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    color: #fff;
    position: absolute;
    left: 0;
    top: 0;
    transform: translate(-50%,-50%);
    border-radius: 50%;
    z-index: 1;
    text-align: center;
}
.sec6-btn{
  border: 1px solid dodgerblue;
  padding: 10px 9px;
}

/* section 8   */
.sec8-item{
  width: 22%;
  margin: 14px;
  border: 1px solid lightgray;
  transition: all 300ms;

}
.sec8-item:hover{
  transform: scale(1.03);
}
.sec8-item-image{}
.sec8-item-image img{}
.sec8-item-content{padding: 10px 17px;}
.sec8-item-title{padding-left:9px;border-left: 4px solid dodgerblue;}
.sec8-item-desc{padding: 8px 0;}
.sec8-item-btn a{padding: 5px 8px;background-color:dodgerblue ;color: white;margin: 5px 0;display:block;text-align: center;}

@media (max-width:960px) {
  .right .img-box {
    width: 50%;
}

.left div {
    width: 90%;
}
.banner__title {
    font-size: 26px;
    line-height: 36px;}
    .start-now{
      margin-top: 44px;
    }
    .sec-4-item-link {
    width: 15%;
  }
  .sec-4-item-link-cont {
    width: 100%;
    flex-wrap: wrap;
  }
  .sec-4-item-link {
    width: 30%;
    margin: 2px 0;
  }
  .sec3-item {
    width: 45%;
  }
  .sec6-item-content {
   padding: 0 27px;
}
.sec8-item {
    width: 33%;
}
}
@media (max-width:768px) {
.accordian {
width: 100%;
}
.np-container {
    /* width:768px; */
}

.sec2-box {
    width: 44%;
    margin: 10px;
}
.sec6-item {
    width: 47%;
}
.inner-sec3 {
  flex-wrap: wrap;
}
.main{
  flex-wrap: wrap;
}
.main .left , .right {
  width: 100%;
}
.sec4-inner{
  flex-wrap: wrap;
}
.sec4-item {
  width: 100%;
  margin: 1rem 0.8rem;
}
.section-title {
  font-size: 1.3rem;
}

.sec8-item {
    width: 45%;
}
  .sec3-item {
    width: 45%;
}


  .pad-3r {
    padding-top: 0.1rem;
    padding-bottom: 1rem;
}
.left {
    text-align: center;
}
.left div {
    width: 95%;
}
.start-now-outer{
  display: flex;
    justify-content: center;
    align-items: center;
}
.start-now {
 
    margin-top: 47px;}
    .banner-image {
        max-width: 100%;
      }
      .right .img-box {
    width: 100%;
}
.img-box {
    min-width: 100%;
    min-height: 100%;
}
}

@media (max-width:540px) {
  .sec8-item {
    width: 40%;
}

}


@media (max-width:420px) {

  .sec3-item {
    width: 45%;
    padding: 1rem 0.4rem;
    margin: 0.4rem;
  }

  .sec3-title h3 {
    font-size: 1rem;
    padding: 7px 0;
    line-height: 1;
    
}
.sec3-item {
    padding: 0.6rem 0.4rem;
}
.sec3-image {
    width: 75px;
    height: 75px;
}
  .sec2-box {
    width: 100%;
}

.sec-4-item-link {
    width: 50%;
    margin: 10px 0;
  }
  .sec4-item {
    padding: 1rem 0.4rem;
    margin: 0.8rem 0.5rem;
}

.sec6-item {
    width: 100%;
}
/* .sec-4-item-link {
    width: %;
} */
.sec4-item-title {
    font-size: 1.2rem;
}
.section-title{
  margin-bottom: 0.5rem;
}
.banner__title {
    font-size: 1.4rem;
    line-height: 30px;
    
}
.left div {
    width: 100%;
}
.main .left, .right {
  
    padding: 0 12px;
}

.start-now {
    width: 60%;
}

.bannner__add-text {
    font-size: 1rem;
}
.banner__overline {
    font-size: 1.6rem;
    margin-bottom: 1.1rem;
}
.sec2-inner {
    padding: 0.4rem 0;
    margin: 0.3rem 0.2rem;
}
.sec8-item {
    width: 100%; 
  }

  .sec8-item {
    margin: 14px 3px;
  }
  .sec6-item-image {
   
    max-width: 100%;
}
.sec-4-view-more-btn {
   
    margin-top: 16px;
}
}
  </style>
 
</head>

<body>
  <?php include "./navbar.php"; ?>

  <div class="main" style="background-color: rgb(117,79,254); ">
  <div class="np-container pad-3r">
    <!-- left-side-img  -->
    <div class="left">
      <div>
        <p class="banner__overline">CodingSeekho</p>
        <h1 class="banner__title">Simplified and enhanced your coding knowledge in a better way</h1>
       
        <ul class="banner-text-list">
          <li class="banner-text__item one">
            <p class="bannner__add-text">Learn Web Development & Web Design</p>
          </li>
          <li class="banner-text__item two">
            <p class="bannner__add-text">Read & Download Interview Questions</p>
          </li>
          <li class="banner-text__item three">
            <p class="bannner__add-text">Make 20+ more web development Projects</p>
          </li>
        </ul>
       <div class="start-now-outer">
        <a class="start-now">
          Start Now
        </a></div>
      </div></div>
    </div>

    <!-- right side img  -->
    <div class="right">
      <div class="img-box"> <img src="./media/img/main-img1.png" alt=""></div>
    </div>
  </div>
  <section class="sec2 pad-3r">
    <div class="np-container">
  <div class="sec2-inner">
    
    <!-- item 1  -->
    <div class="sec2-box" style="opacity: 0.7;background-color:rgb(247,195,46);">
      <span><i class="fa-solid fa-laptop"></i></span>
      <div class="sec2-item-desc">
        <h5> 10 +</h5>
        <p>Courses Available</p>
      </div>
    </div>

    <!-- item 2  -->
    <div class="sec2-box" style="opacity: 0.7;background-color:rgb(29,59,83);">
      <span><i class="fa-solid fa-user-tie"></i></span>
      <div class="sec2-item-desc">
        <h5> 10 +</h5>
        <p>Courses Available</p>
      </div>
    </div>

    <!-- item 3  -->
    <div class="sec2-box" style="opacity: 0.7;background-color:rgb(111,66,193);">
      <span><i class="fa-solid fa-user-graduate"></i></span>
      <div class="sec2-item-desc">
        <h5> 10 +</h5>
        <p>Courses Available</p>
      </div>
    </div>

    <!-- item 4 -->
    <div class="sec2-box" style="opacity: 0.7;background-color:rgb(23,162,184);">
      <span><i class="fa-solid fa-certificate"></i></span>
      <div class="sec2-item-desc">
        <h5> 10 +</h5>
        <p>Courses Available</p>
      </div>
    </div>
    </div>
    </div>
  </section>

  <section class=" pad-3r">
    <div class="np-container">
    <div class="section-title">
      <h2> <i class="ffi-grid-3x3"></i> Top<span style="color: dodgerblue;"> Categories</span></h2>
    </div>
    <div class="inner-sec3">

      <!-- sec3 item start 1  -->
      <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

       <!-- sec3 item start 2 -->
       <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

       <!-- sec3 item start 3  -->
       <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

       <!-- sec3 item start 4  -->
       <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

      
      <!-- sec3 item start 1  -->
      <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

       <!-- sec3 item start 2 -->
       <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

       <!-- sec3 item start 3  -->
       <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

       <!-- sec3 item start 4  -->
       <div class="sec3-item">
        <a href="" target="_blank" class="sec3-item-a">
          <div class="sec3-image">
            <div class="sec3-image-inner"> <img src="./media/img/tut-point/development.svg" alt="" style="font-size: 2rem;"></div>
          </div>
          <div class="sec3-content">
            <div class="sec3-title">
              <h3> Development</h3>
            </div>
            <div class="sec3-desc">2,8000+ <span>Course</span></div>
          </div>
        </a>
      </div>

    </div>
    </div>
  </section>

  <!-- section 4  -->
  <section class="sec4 pad-3r">
    <div class="np-container">
  <div class="section-title">
      <h2> <i class="ffi-grid-3x3"></i> Free Tutorials <span style="color: dodgerblue;"> Library</span></h2>
     
    </div> 
    <div class="sec4-inner">

    <!-- sec4 item 1 -->
      <div class="sec4-item">
<h4 class="sec4-item-title">     <i class="ffi-technology"></i>Full Stack Development</h4>
<div class="sec4-item-content">
<div class="sec-4-item-link-cont">

<!-- link 1  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/800px-Bitcoin.svg.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a> Tutorial</h5>
  </div>

  <!-- link 2  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blockchain.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 3  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blueprism.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 4  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/ethereum.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

  <!-- link 5  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/python.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

    <!-- link 6  -->
    <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/openshift.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

</div>
<div> <a class="sec-4-view-more-btn">View More <i class="ffi-arrow-right"></i> </a></div>
</div>
      </div>


    <!-- sec4 item 2  -->
    <div class="sec4-item">
<h4 class="sec4-item-title">     <i class="ffi-technology"></i> MEAN Development</h4>
<div class="sec4-item-content">
<div class="sec-4-item-link-cont">

<!-- link 1  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/800px-Bitcoin.svg.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a> Tutorial</h5>
  </div>

  <!-- link 2  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blockchain.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 3  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blueprism.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 4  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/ethereum.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

  <!-- link 5  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/python.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

    <!-- link 6  -->
    <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/openshift.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

</div>
<div> <a class="sec-4-view-more-btn">View More <i class="ffi-arrow-right"></i> </a></div>
</div></div>


    <!-- sec4 item 1 -->
    <div class="sec4-item">
<h4 class="sec4-item-title">     <i class="ffi-technology"></i>  MERN Development</h4>
<div class="sec4-item-content">
<div class="sec-4-item-link-cont">

<!-- link 1  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/800px-Bitcoin.svg.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a> Tutorial</h5>
  </div>

  <!-- link 2  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blockchain.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 3  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blueprism.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 4  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/ethereum.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

  <!-- link 5  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/python.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

    <!-- link 6  -->
    <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/openshift.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

</div>
<div> <a class="sec-4-view-more-btn">View More <i class="ffi-arrow-right"></i> </a></div>
</div>
      </div>


    <!-- sec4 item 2  -->
    <div class="sec4-item">
<h4 class="sec4-item-title">     <i class="ffi-technology"></i>       Web Technologies</h4>
<div class="sec4-item-content">
<div class="sec-4-item-link-cont">

<!-- link 1  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/800px-Bitcoin.svg.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a> Tutorial</h5>
  </div>

  <!-- link 2  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blockchain.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 3  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/blueprism.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin<br>  </a>Tutorial</h5>
  </div>

  <!-- link 4  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/ethereum.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

  <!-- link 5  -->
  <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/python.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

    <!-- link 6  -->
    <div class="sec-4-item-link">
    <div class="sec-4-item-link-image" ><img src="./media/img/tut-point/openshift.png" alt=""></div>
    <h5 class="sec-4-item-link-title"> <a href="">BitCoin <br> </a>Tutorial</h5>
  </div>

</div>
<div> <a class="sec-4-view-more-btn">View More <i class="ffi-arrow-right"></i> </a></div>
</div></div>


    </div>
    </div>
  </section>

  <!-- section 6  -->
  <section class="sec6  pad-3r">
    <div class="np-container">
    <div class="section-title" style="text-align: center;">
      <h2>  Roadmap to become <br>
a programmer</h2>
    </div>
    <br>
    <div class="sec6-inner sec2-inner ">

    <!-- item 1  -->
      <div class="sec6-item">
<div class="sec6-item-image"><img src="./media/img/tut-point/luyen-lap-trinh.png" alt=""><span class="sec6-item-span">1</span></div>
<div class="sec6-item-content">
<div class="sec6-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec6-item-desc"> <a href="">Start learning with a wide range of basic to advanced courses created by top experts.</a> </div>
</div></div>

  <!-- item 2  -->
  <div class="sec6-item">
<div class="sec6-item-image"><img src="./media/img/tut-point/luyen-lap-trinh.png" alt=""><span class="sec6-item-span">1</span></div>
<div class="sec6-item-content">
<div class="sec6-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec6-item-desc"> <a href="">Start learning with a wide range of basic to advanced courses created by top experts.</a> </div>
</div></div>


  <!-- item 3  -->
  <div class="sec6-item">
<div class="sec6-item-image"><img src="./media/img/tut-point/luyen-lap-trinh.png" alt=""><span class="sec6-item-span">1</span></div>
<div class="sec6-item-content">
<div class="sec6-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec6-item-desc"> <a href="">Start learning with a wide range of basic to advanced courses created by top experts.</a> </div>
</div></div>


    </div>
   <div  style="text-align: center;display: block;font-size: 1.2rem;"> <a href="#" class="sec6-btn">Let's become a programmer  <i class="ffi-arrow-right" style="font-size: 1.2rem;"></i> </a></div>
    </div>
  </section>

  <!-- section 8  -->
  <section class="sec8  pad-3r">
    <div class="np-container">
    <div class="section-title" style="text-align: center;">
      <h2> Coding Realted Blog</h2>
    </div>
    <div class="sec8-inner sec2-inner ">

    <!-- item 1  -->
      <div class="sec8-item">
<div class="sec8-item-image"><img src="./media/img/tut-point/course_1895_image.png" alt=""></div>
<div class="sec8-item-content">
<div class="sec8-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec8-item-desc"> Start learning with a wide range of basic to advanced courses created by top experts. </div>
<div class="sec8-item-btn"> <a href="">Read More...</a> </div>
</div></div>

 <!-- item 2  -->
 <div class="sec8-item">
<div class="sec8-item-image"><img src="./media/img/tut-point/course_1895_image.png" alt=""></div>
<div class="sec8-item-content">
<div class="sec8-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec8-item-desc"> Start learning with a wide range of basic to advanced courses created by top experts. </div>
<div class="sec8-item-btn"> <a href="">Read More...</a> </div>
</div></div>
 <!-- item 3  -->
 <div class="sec8-item">
<div class="sec8-item-image"><img src="./media/img/tut-point/course_1895_image.png" alt=""></div>
<div class="sec8-item-content">
<div class="sec8-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec8-item-desc"> Start learning with a wide range of basic to advanced courses created by top experts. </div>
<div class="sec8-item-btn"> <a href="">Read More...</a> </div>
</div></div>
  

 <!-- item 3  -->
 <div class="sec8-item">
<div class="sec8-item-image"><img src="./media/img/tut-point/course_1895_image.png" alt=""></div>
<div class="sec8-item-content">
<div class="sec8-item-title"> <h3>Learn TO Code</h3> </div>
<div class="sec8-item-desc"> Start learning with a wide range of basic to advanced courses created by top experts. </div>
<div class="sec8-item-btn"> <a href="">Read More...</a> </div>
</div></div>
  

    </div>
    <br>
   <div  style="text-align: center;display: block;font-size: 1.2rem;"> <a href="#" class="sec6-btn">Read more latest post  <i class="ffi-arrow-right" style="font-size: 1.2rem;"></i> </a></div>
    </div>
  </section>


  <!-- section 7  -->

  <section class="sec6">
<div class="np-container">
<div class="section-title">
      <h2> <i class="ffi-unique-idea"></i> Frequently <br><span style="color: dodgerblue;"> Asked Questioned</span></h2>
    </div>

<!-- accordian - 1 -->
<div class="accordian">
<div class="accordian-header">
<span class="plus-sign">+</span>

<h3 class="fq-ques">What is CodingSeekho ?</h3>
</div>
<div class="accordian-body">
<p>Learn Web Development , Web Design and other Coding Skills in very simple and easy way with totally free . This  is a plateform where you learn Interestingly various coding skills from Beginners to Advance with Expert and Specialits.  </p>
</div>
</div>

<!-- accordian - 2 -->
<div class="accordian">
<div class="accordian-header">
<span class="plus-sign">+</span>

<h3 class="fq-ques">What is CSS3 ?</h3>
</div>
<div class="accordian-body">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt
commodi molestias explicabo quos molestiae, iste modi.Lorem ipsum dolor sit amet consectetur
adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt
commodi molestias explicabo quos molestiae, iste modi.</p>
</div>
</div>


<!-- accordian - 3 -->
<div class="accordian">
<div class="accordian-header">
<span class="plus-sign">+</span>

<h3 class="fq-ques">What is javaScript ?</h3>
</div>
<div class="accordian-body">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt
commodi molestias explicabo quos molestiae, iste modi.Lorem ipsum dolor sit amet consectetur
adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt
commodi molestias explicabo quos molestiae, iste modi.</p>
</div>
</div>


<!-- accordian - 4 -->
<div class="accordian">
<div class="accordian-header">
<span class="plus-sign">+</span>

<h3 class="fq-ques">What is PHP ?</h3>
</div>
<div class="accordian-body">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt
commodi molestias explicabo quos molestiae, iste modi.Lorem ipsum dolor sit amet consectetur
adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt
commodi molestias explicabo quos molestiae, iste modi.</p>
</div>
</div>

<!-- accordian - 4 -->
<div class="accordian">
<div class="accordian-header">
<span class="plus-sign">+</span>

<h3 class="fq-ques">What is jQuery ?</h3>
</div>
<div class="accordian-body">
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi consectetur omnis ipsam.
Nesciunt
commodi molestias explicabo quos molestiae, iste modi.Lorem ipsum dolor sit amet consectetur
adipisicing elit. Excepturi consectetur omnis ipsam. Nesciunt commodi molestias explicabo quos
molestiae, iste modi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam repellat
laborum beatae assumenda? Ex, numquam!</p>
</div>

</div>
</section>


  <script>
$(document).ready(function() {

$(".accordian-header").click(function() {
$('.accordian .accordian-body').slideUp();
$(this).next('.accordian-body').slideDown();
$('.accordian .accordian-header .plus-sign').text('+');
$(this).children('.plus-sign').text('-');
});
});
  </script>
  <?php include "./footer.php"; ?>