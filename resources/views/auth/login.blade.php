<div id="loginModal" class="modal ">

    <div class="modal-content">
        <div class="header_login">
            <h5>Login</h5>
        </div>
        <div class="login_form">
            <div class="row">
                <form class="col s12" method="POST" id="login_controller">
                    {{ csrf_field() }}
                    <div class="row content_form">
                        <div class="input-field col s12">
                            <input id="email" type="text" name="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                        <input class="btn waves-effect waves-light" type="submit" name="action" value="Log In">
                    </div>


                </form>
            </div>
        </div>
    </div>

</div>