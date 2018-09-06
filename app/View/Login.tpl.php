<?php include_once 'Header.tpl.php'; ?>
  <div class="login-screen">
    <div class="login-icon">
      <img src="/app/view/docs/assets/images/login/icon.png" alt="Welcome to ZeroBlog" />
      <h4>Welcome to <small>ZeroBlog</small></h4>
    </div>

    <div class="login-form">
      <div class="form-group">
        <input type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" />
        <label class="login-field-icon fui-user" for="login-name"></label>
      </div>

      <div class="form-group">
        <input type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
        <label class="login-field-icon fui-lock" for="login-pass"></label>
      </div>

      <a class="btn btn-primary btn-lg btn-block" href="#" id="login-sub">Log in</a>
      <a class="login-link" href="#">Lost your password?</a>
    </div>
  </div>
<?php include_once 'Footer.tpl.php'; ?>
<script type="text/javascript">
    $("#login-sub").on("click", function(){
        axios.post('/api/login',{
          name: $("#login-name").val(),
          password: $("#login-pass").val()
        })
        .then(function(res) {
            if(res.data.status == 200)
                alert(2);
            alert(res.data.msg);
        })
        .catch(function(err){
          // console.log(err);
        });
    });
</script>
