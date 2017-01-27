<?php
  $path = getcwd();
  $path .= "/partials/html-header.php";
  include_once($path);
?>
<?php
if (isset($_SESSION["user"])) {
  die(header("Location: /"));
}
?>
    <title>SipNub | Log in</title>
</head>
<body id="signin-page">

<div class="header">
    <a class="logo-link" href="/">
        <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32">
            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
        </svg>
    </a>
</div>

<div class="signin-section">
    <div class="content container-fluid">
        <h1 class="title">Sign in to SipNub</h1>
        <!-- Error validation alert -->
        <div class="session-authentication flash">
            <button type="button" class="close">
                <span aria-hidden="true">&times;</span>
            </button>
            Incorrect username or password
        </div>
        <form class="holder" action="user/login_user" method="POST">
            <div class="form-group">
                <label class="control-label pull-left">Username or email address</label>
                <input type="text" name="usernameOrEmail" class="form-control" id="username-or-email-input" aria-describedby="usernameOrEmailHelp">
            </div>
            <div class="form-group">
                <label class="control-label pull-left">Password <a class="forgot-pass float-right" href="" tabindex="-1">Forgot password?</a></label>
                <input type="password" name="password" class="form-control" id="password-input" aria-describedby="passwordHelp">
            </div>
            <button type="submit" name="login-form" class="signup-btn btn btn-success">Sign in</button>
        </form>

        <div class="new-to-github holder">
            <p>New to SipNub? <a href="join">Create an account</a>.</p>
        </div>
    </div>
</div>

<footer class="login-page-footer">
    <div class="content container">
        <div class="site-footer">
            <ul class="list list1">
                <li><a href="">Terms</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Security</a></li>
                <li><a href="">Contact SipNub</a></li>
            </ul>
        </div>
    </div>
</footer>



</body>
<?php
  $path = getcwd();
  $path .= "/partials/html-footer.php";
  include_once($path);
?>
