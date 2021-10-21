@extends('Frontend.master')
@section('body')
<style>
    
    /* Our Team
    -------------------------------------------------------*/
    *{
        overflow-x: hidden;
    }
    .our-team .team-row {
      margin-left: -40px;
      margin-right: -40px;
    }
    
    .our-team .team-wrap {
      padding: 0 40px;
    }
    
    .our-team .container-fluid {
      padding: 0 50px;
    }
    
    .team-img img {
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
      overflow: hidden;
      width: 100%;
    }
    
    .team-member,
    .team-img {
      position: relative;
      overflow: hidden;
    }
    
    .team-title {
      margin: 30px 0 7px;
    }
    
    .overlay {
      background-color: rgba(20,20,20,.7);
      position: absolute;
      top: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
    }
    
    .team-details {
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 0;
      padding: 5%;
      overflow: hidden;
      width: 100%;
      z-index: 2;
      -webkit-transition: all .2s ease-in-out;
      -moz-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
    }
    
    .team-details p {
      color: #fff;
    }
    
    .team-img:hover .team-details {
      opacity: 1;
      margin-top: -80px;
    }
    
    .team-img:hover .overlay {
      opacity: 1;
    }
    
    .socials a {
      display: inline-block;
      width: 37px;
      height: 37px;
      overflow-y: hidden;
      background-color: transparent;
    }
    
    .socials i {
      line-height: 37px;
      color: #616161;
      font-size: 14px;
      width: 37px;
      height: 37px;
      border-radius: 50%;
      text-align: center;
      -webkit-transition: all 0.2s linear;
      -moz-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      -ms-transition: all 0.2s linear;
      transition: all 0.2s linear;
    }
    
    .team-details .socials i {
        color: #fff;
    }
    
    .socials a:hover i {
      color: #fff;
      background-color: #355c7d;
    }
    
    
    </style>
    <div class="container">
    
        <div class="row heading">
          <div class="col-12 col-md-offset-3 text-center">
            <h2 class="text-center bottom-line" style="overflow-y: hidden;">Meet Our Team</h2>
            <p class="subheading text-center">Here is some meta team description.</p>
          </div>
        </div>
      
        <div class="row team-row">
          <div class="col-md-4 col-sm-12 team-wrap">
            <div class="team-member text-center">
              <div class="team-img">
                <img src="#" alt="">
                <div class="overlay">
                  <div class="team-details text-center">
                    <div class="socials mt-20">
                      <a href=""><i class="fab fa-facebook"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href=""><i class="fa fa-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <h6 class="team-title"></h6>
              <span></span>
            </div>
          </div>
        </div>
      </div>
@endsection