$(document).ready(function () {
  $('#login-form').submit(function (event) {
    event.preventDefault()
    var username = $('#username').val()
    var password = $('#password').val()

    console.log(`username: ${username}, password: ${password}`)

    $.post(
      'api/login_user.php',
      {
        username: username,
        password: password,
      },
      function (response) {
        var res = JSON.parse(response)

        if (res.success == '1') {
          alert('Login successful')
          window.location.href = 'home.php'
        } else {
          alert('Login failed: ' + res.error)
        }
      }
    )
  })
})