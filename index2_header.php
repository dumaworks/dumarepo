<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DUMA</title>
    <meta name="description" content="">
    <meta name="author" content="">

   body { min-height: 0; }

div, section {position:relative;}
header,footer { width:100%;}

ul {margin-left:0 !important;}

input[type="text"],input[type="password"] {padding:0 8px;font-size:12px;width:150px;}
/* input, button {-moz-border-radius:0.4em;-khtml-border-radius:0.4em;border-radius:0.4em;} */
input:focus {
	background-color: lightyellow;
	outline: none;
}

button#toggle_login{
	border:none;
	background:transparent;
	color:#fff;
	font-size:18px;
}

#wrap_header, #wrap_content, section.hypeit {
  width: 910px;
  position: relative;
  margin: 0 auto;
  margin-left: .75em;
}

div#wrap_body.hypeit {min-height:470px;-moz-box-shadow: 0 0 5px 5px #222;
-webkit-box-shadow: 0 0 5px 5px#222;
box-shadow: 0 0 5px 5px #222;height:100%;width:100%;background:#fff;color:#222;}
header,body.hypeit {background:#3a3a3a;color:#fff;}
header{height:35px; padding-top:8px;}
body {font-family:"Helvetica Neue",Helvetica,sans-serif;height:100%;width:100%;position:relative;min-height:600px;}
div#login{}
div#returning_user{position:absolute;right:0;padding-right:20px;top:0;}
div#logo_text{background:url(../i/header/hypemarks-logo.png) no-repeat;width:165px;height:38px;position:absolute;left:0;top:-2px;}

body.hypeit-popup {
  min-height: 0;  
}
div.container.hypeit {
  background-color: #f9f9f9;
}
a.top {
  position: absolute;
  right: 36%;
  top: -3px;
}
a.top h2 {
  color: white;
}
div.hypeit table {
  margin-left: .75em;
  background-color: white;
  margin-top: .75em;
  border: 1px solid #ccc;
}
table tr td img.picker {
  background-color: #ccc;
  height: 175px;
  width: 200px;
  margin-left: auto;
  margin-right: auto;
  display: block;
}
table tr.url {
  background-color: white;
}
table tr.white td {
  text-align: center;
  height: 24px;
  max-width: 260px;
  overflow: hidden;
}
form {
  margin-top: .75em;
}
form input#title {
  font-size: 150%;
  height: 2em;
  width: 305px;
  margin-top: .5em;
}
div.field.desc {
  margin-top: .75em;
}
div.field.desc textarea {
  width: 313px;
}
div.actions {
  margin-top: 0;
  margin-bottom: 0;
  padding-right: 2.3em;
}
button#add {
  background-color: #FFC969;
  padding: .5em 1em .5em 1em;
  font-size: 150%;
  border: 1px solid #FF9933;
  border-radius: 0;
  color:white;
  font-weight:bold;
}

/* Add link */
.addlink div.modal-header {
    margin-top: .25em;
    margin-left: .75em;
    text-align: left;
    width: 560px;
}
.addlink input#url {
    width: 470px;
}
.addlink div.modal-body {
    text-align: left;
    margin-left: 2.25em;
    margin-top: .25em;
}
.addlink div.span4 {
    margin-left: 0;
}
.addlink div.site-info.span9 {
    margin-left: 1.7em;
}
.addlink td {
    border: none;
}
.addlink.modal {
    background-color: #fafafa;
    width: 595px;
    display:none;
}
.item {
    display: none;
}
.item.active {
    display: block;
}
.carousel {
  position: relative;
    margin-bottom: 0px;
      line-height: 1;
      }
      .carousel-inner {
        overflow: hidden;
          width: 100%;
            position: relative;
            }
            .carousel .item {
              display: none;
                position: relative;
                  -webkit-transition: 0.5s ease-in-out left;
                    -moz-transition: 0.5s ease-in-out left;
                      -ms-transition: 0.5s ease-in-out left;
                        -o-transition: 0.5s ease-in-out left;
                          transition: 0.5s ease-in-out left;
                          }
                          .carousel .item > img {
                            display: block;
                              line-height: 1;
                              }
                              .carousel .active, .carousel .next, .carousel .prev {
                                display: block;
                                }
                                .carousel .active {
                                  left: 0;
                                  }
                                  .carousel .next, .carousel .prev {
                                    position: absolute;
                                      top: 0;
                                        width: 100%;
                                        }
                                        .carousel .next {
                                          left: 100%;
                                          }
                                          .carousel .prev {
                                            left: -100%;
                                            }
                                            .carousel .next.left, .carousel .prev.right {
                                              left: 0;
                                              }
                                              .carousel .active.left {
                                                left: -100%;
                                                }
                                                .carousel .active.right {
                                                  left: 100%;
                                                  }
                                                  .carousel-control {
                                                    position: absolute;
                                                      top: 50%;
                                                        left: 15px;
                                                          width: 20px;
                                                            height: 20px;
                                                              margin-top: -20px;
                                                                font-size: 30px;
                                                                  font-weight: 100;
                                                                    line-height: 14px;
                                                                      color: #ffffff;
                                                                        text-align: center;
                                                                          background: #222222;
                                                                            border: 3px solid #ffffff;
                                                                              -webkit-border-radius: 23px;
                                                                                -moz-border-radius: 23px;
                                                                                  border-radius: 23px;
                                                                                    opacity: 0.5;
                                                                                      filter: alpha(opacity=30);
                                                                                      }
                                                                                      .carousel-control.right {
                                                                                        left: auto;
                                                                                          right: 15px;
                                                                                          }
                                                                                          .carousel-control:hover {
                                                                                            color: #ffffff;
                                                                                              text-decoration: none;
                                                                                                opacity: 0.9;
                                                                                                  filter: alpha(opacity=90);
                                                                                                  }
                                                                                                  .carousel-caption {
                                                                                                    position: absolute;
                                                                                                      left: 0;
                                                                                                        right: 0;
                                                                                                          bottom: 0;
                                                                                                            padding: 10px 15px;
                                                                                                              background: #333333;
                                                                                                                background: rgba(0, 0, 0, 0.75);
                                                                                                                }
                                                                                                                .carousel-caption p {
                                                                                                                  color: #ffffff;
                                                                                                                    margin: 0;
                                                                                                                    }

#loading {
    margin-left: auto;
    margin-right: auto;
    display: block;
    position: relative;
    bottom: -7.2em;
}