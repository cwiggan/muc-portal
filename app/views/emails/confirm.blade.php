<h3>Login Details</h3>

        <div>
          Login URL: {{ URL::to('/') }}<br />
          Username: {{ $user->email }}<br />
          Password: {{ $user->password }}<br />
        </div>

        <h3>Confirm Account</h3>

        <p>To ensure we don't send email to the wrong people, please confirm your account:<br />
          <a href='{{{ URL::to("user/confirm/{$user->confirmation_code}") }}}'>
      {{{ URL::to("user/confirm/{$user->confirmation_code}") }}}
      </a>
    </p>