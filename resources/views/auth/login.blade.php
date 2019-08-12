<form role="form" action ="/doLogin" method="post">
  @csrf
  <div class="form-group">
    <div class="input-group input-group-alternative mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
      </div>
      <input name="email" class="form-control" placeholder="Email" type="email">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
      </div>
      <input name="password" class="form-control" placeholder="Password" type="password">
    </div>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary my-4">Sign in</button>
  </div>

  <div class="btn-wrapper text-center">
    <a href="/auth/google" class="btn btn-neutral btn-icon">
      <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
      <span class="btn-inner--text">Google</span>
    </a>
  </div>
</form>
