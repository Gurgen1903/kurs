<div id="registerModal" class="modal ">

    <div class="modal-content">
        <div class="header_login">
            <h5>Register</h5>
        </div>
        <div class="login_form">
            <div class="row">
                <form class="col s12" id="register_controller" method="POST" action="{{ url('/auth') }}">
                    {{ csrf_field() }}
                    <div class="row content_form">
                        <div class="input-field col s12">
                            <input id="first_name_register" type="text" name="name" class="validate">
                            <label for="first_name_register">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email_register" type="text" name="email" class="validate">
                            <label for="email_register">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="password_register" type="password" class="validate">
                            <label for="password_register">Password</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="confirm_password_register" type="password" class="validate">
                            <label for="confirm_password_register">Confirm Password</label>
                        </div>
                        <input class="btn waves-effect waves-light" type="submit" name="action" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>