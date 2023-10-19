<div class="card" id="login-card">
    <div class="card-body text-center">
        <h3><span class="text-carolina bold">Future</span>Systems</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.auth.login') }}" method="post">
            @csrf
            <div class="text-center pb-3">
                <h5 class="text-center bold">Sign-In</h5>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ti-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="username" name="email">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ti-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="password" name="password">
            </div>
            <div class="form-checkbox">
                <label>
                    <input type="checkbox" name="remember">
                    <span class="checkmark"><i class="ti-check"></i></span>
                    Remember
                </label>
                <div class="float-right"><a href="javascript:;" class="card-link" id="forget-password">Forgot
                        password?</a></div>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-carolina">Login</button>
            </div>
        </form>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item text-center">
            <p><strong>Or login with</strong></p>
            <button type="button" class="btn btn-outline-primary"><i class="ti-facebook"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="ti-twitter"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="ti-google"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="ti-github"></i></button>
        </li>
        <li class="list-group-item text-center">
            <p class="card-text">Don't have an account? <a href="javascript:;" class="card-link">Sign Up</a></p>
        </li>
    </ul>
    <div class="card-footer">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem sapiente illum obcaecati unde cum alias assumenda eos animi, temporibus molestiae dignissimos debitis consequatur id aut praesentium nisi accusamus quos possimus.</p>
        <p><small>Copyright © 2019-2020 BoolFalse</small></p>
    </div>
</div>
