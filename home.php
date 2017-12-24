<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Social app - Home Page</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/home.css">

    <!-- CUSTOM JS -->
    <script src="js/home.js" type="text/javascript"></script>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
      <nav class="navbar navbar-inverse navbar-static-top">
         <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                <a href="#" class="navbar-brand">LOGO</a>
            </div>
            <div class="nav navbar-nav navbar-right navbar-collapse">
                <li><a href="#">Explore</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="glyphicon glyphicon-user"></span>
                      <strong>Username</strong>
                      <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <div class="navbar-login">
                              <div class="row">
                                  <div class="col-lg-4">
                                      <p class="text-center">
                                          <span class="glyphicon glyphicon-user icon-size"></span>
                                      </p>
                                  </div>
                                  <div class="col-lg-8">
                                        <p class="text-left"><strong>First Name Last Name</strong></p>
                                        <p class="text-left small">username@email.com</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">Log out</a>
                                        </p>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="#" class="btn btn-default btn-block">Profile</a>
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-default btn-block">Settings</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                  </ul>
                </li>
            </div>
         </div>
      </nav>
      <div class="container-fluid content-wrapper">
        <div class="row">
            <div class="col-md-3 updates">
              <h3 class="updates-header">Latest Updates</h3>
              <div class="updates-wrapper">
                <div class="updates-section">
                  <a href="#"><h4 class="updates-post-header">Chopper flies over dessert</h4></a>
                  <div class="update-image">
                      <a href="#" class="updates-post-img"><img src="img/thumb/chopperfeed_thumb.jpg" alt=""></a>
                  </div>
                  <p class="update-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="update-date"><em>16/08/2017</em></p>
                </div>
                <div class="updates-section">
                  <a href="#"><h4 class="updates-post-header">Chopper flies over dessert</h4></a>
                  <div class="update-image">
                      <a href="#" class="updates-post-img"><img src="img/thumb/chopperfeed_thumb.jpg" alt=""></a>
                  </div>
                  <div class="update-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <p class="update-date"><em>16/08/2017</em></p>
                </div>
              </div>

            </div>
            <div class="col-md-5 posts">
                <form action="" method="post" class="post-form">
                    <div class="form-group">
                      <div class="post-textarea">
                          <textarea type="text" placeholder="Whats up?" class="form-control" name="post-text" value=""></textarea>
                      </div>
                        <a href="#"><i class="fa fa-camera fa-2x post-control post-image"></i></a>
                        <a href="#"><i class="fa fa-video-camera post-control fa-2x post-video"></i></a>
                        <a href="#" class="btn btn-primary post-control post-button"><i class="fa fa-check-square"></i> Post</a>
                    </div>
                </form>
                <div class="post-all">
                  <div class="post-single post-single-noimage">
                    <div class="post-header">
                      <img class="post-avatar" src="img/thumb/avatar_thumb.jpg" alt="post user avatar">
                      <a href="#">Mark Anthony</a>
                    </div>
                    <hr>
                    <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="post-date"><a href="#">17<sup>th</sup> December 2017</a></p>
                  </div>
                  <div class="post-single post-single-image">
                    <div class="post-header">
                      <div class="row">
                          <div class="col-md-8 col-sm-8">
                            <img class="post-avatar" src="img/thumb/avatar_thumb.jpg" alt="post user avatar">
                            <a href="#">Mark Anthony</a>
                          </div>
                          <div class="col-md-4 col-sm-4">

                          </div>
                      </div>

                    </div>
                    <hr>
                    <div class="post-pic-wrap">
                        <img class="post-pic" src="img/pizzapost.jpg" alt="post pic">
                    </div>
                    <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                       exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p class="post-date"><a href="#">17<sup>th</sup> December 2017</a></p>
                  </div>
                </div>
            </div>
            <div class="col-md-4 right-container">
                <div class="right-wrapper">
                    <div class="interests-wrapper">
                      <div class="interest-header">
                          <h3>Suggested Interests</h3>
                      </div>
                        <div class="interest-section">
                            <div class="suggested-interest">
                              <a href="#">
                                <div class="int-head">
                                    <h4>Helicopter Emporium</h4>
                                </div>
                                <div class="int-image">
                                    <img src="img/thumb/helicopterint_thumb.jpg" alt="">
                                </div>
                              </a>
                            </div>
                        </div>
                        <div class="interest-section">
                            <div class="suggested-interest">
                              <a href="#">
                                <div class="int-head">
                                    <h4>Science and Tech</h4>
                                </div>
                                <div class="int-image">
                                    <img src="img/thumb/sciencetechint_thumb.jpg" alt="">
                                </div>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-wrapper">
          <div class="chat-box">
              <button type="submit" class="btn btn-default chat-open"><i class="glyphicon glyphicon-chevron-up"></i> Online</button>
          </div>
        </div>
      </div>
      <script type="text/javascript">
          $(document).ready(function(){
              var maxLength = 200;
              $("update-content").each(function(){
                  var text = $(this).text();
                  console.log(text);
                  if($.trim(text).length > maxLength)
                  {
                      var newText = text.substring(0,maxLength);
                      var removedText = text.substring(maxLength, $.trim(text).length);
                      $(this).empty().html(newText);
                      $(this).append('<a href="javascript:void(0);" class="show-read-more">Read more</a>');
                      $(this).append('<span class="more-text">'+removedText+'</span>');
                  }
              });
              $('read-more').click(function(){
                  $(this).siblings('.more-text').contents().unwrap();
                  $(this).remove();
              });
          });
      </script>
  </body>
</html>
