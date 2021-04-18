<?php
    header("Content-type: text/css; charset: UTF-8");
?>

html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  
  
#top {
    width: 100%;
    background-color: rgba(29, 139, 207, 1);
    height: 40px;
    z-index: 9999;
    position: fixed;
    margin: 0;
    padding: 0;
  }
.inner {
    position: relative;
    margin: 0 auto;
    text-align: center;
  }

#nav-text{
    color: white;
}

nav{
    background:#54bdff;
    position:fixed;
    top:0;
    bottom:0;
    height:100%;
    left:0;
    width:70px;
    margin-top: 40px;
    overflow:hidden;
    -webkit-transition:width .2s linear;
    transition:width .2s linear;
  }
  a {
    position:relative;
    text-decoration:none;
    color:white;
    font-size: 13px;
    display:table;
    width:250px;
    border-top:1px solid #03A2A2;  
  }
  .fa {
    position: relative;
    width: 70px;
    height: 36px;
    text-align: center;
    top:12px; 
    font-size:20px;
  }
  .far {
    position: relative;
    width: 70px;
    height: 36px;
    text-align: center;
    top:12px; 
    font-size:20px;
  }
  nav .nav-text  {
    position:relative;
    top:12px;
  }
  
  a:hover{
  color:#fff;
  background-color:#3863F4; 
  }
  nav:hover{
    width:250px;
  }
  .logo{
    width:70px;
    font-family: 'Tangerine', serif;
    text-align:center;
    transition:all 0.5s ease;
  }
  <!-- .label{
    height:0px; 
    float:left;
    width:70px;
    transition:all 0.5s ease;
    font-family: 'Tangerine', serif;
    opacity:0;
  } -->
  nav:hover> .logo{
    width:250px;
  }
  nav:hover> .logo > h2{
    text-indent: -999px
  }
  nav:hover> .logo > h2:before{
    text-indent: 0px;
    float: left;
    content: "<?php session_start();
  $logedInUsername = $_SESSION['username'];
  echo($logedInUsername);
   ?>";
    position:relative;
    left:90px;
  }
  nav:hover> .label{
    height:50px;
    width:250px;
    opacity:1;
    color:black;
    text-align:center;
  }
  .mid-block
  {
  background-color:#1d8bcf;
  text-transform:capitalize;
  box-shadow:inset 0px 5px 5px -1px rgba(50, 50, 50, 0.20), inset 0px -4px 5px -1px rgba(50, 50, 50, 0.20);;
  }
  .scrollbar
  {
  height: 90%;
  width: 100%;
  overflow-y: hidden;
  overflow-x: hidden;
  }
  
  #style-1::-webkit-scrollbar-track
  {
  border-radius: 2px;
  }
  
  #style-1::-webkit-scrollbar
  {
  width: 5px;
  background-color: #1d8bcf;
  }
  
  #style-1::-webkit-scrollbar-thumb
  {
  border-radius: 10px;
  box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #BFBFBF;
  }
  .scrollbar:hover{
    height: 90%;
    width: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
  }