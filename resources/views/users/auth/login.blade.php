@extends('users.layout.layout')

@section('content')
    <main class="page">
        <section class="dark">
            <div class="container">
                <div class="block-heading"></div>
                <div class="block-heading"></div>
                <div class="block-heading"></div>
                <div class="block-heading"></div>
            </div>
        </section>
        <section class="clean-block">
            <div class="container">
                <div class="block-heading">
                    <style>
                        .asteriskField {
                            display: none;
                        }
                    </style>
                    <form id="login-form">
                        
                        <fieldset>
                            <legend>Login</legend>
                            <div class="form-group">
                                <div id="div_id_username" class="form-group">
                                    <label for="id_username" class=" requiredField"> Email address <span
                                            class="asteriskField">*</span>
                                    </label>
                                    <div class>
                                        <input type="text" name="email" autofocus autocapitalize="none"
                                            autocomplete="username" maxlength="254" class="textinput textInput form-control"
                                            required id="id_username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="div_id_password" class="form-group">
                                    <label for="id_password" class=" requiredField"> Password <span
                                            class="asteriskField">*</span>
                                    </label>
                                    <div class>
                                        <input type="password" name="password" autocomplete="current-password"
                                            class="textinput textInput form-control" required id="id_password">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-loader" >Submit</button>

                        </fieldset>
                        <fieldset>
                            <br>
                            <!-- <a href="../password_reset/index.html">Forgot Password?</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script>
            $(document).ready(function() {
                $('#login-form').on('submit', function(e) {
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $('.btn-loader').addClass('disabled').html('Loading...');
                    e.preventDefault();
                    // $('input').removeClass('is-invalid');
                    // $('input').next('.invalid-feedback').text('');
                    var formData = new FormData(this);
                    formData.append('_token', csrfToken);
                    $.ajax({
                        type: 'POST',
                        url: '/login',
                        processData: false,
                        contentType: false,
                        data: formData,
                        success: function(response) {
                            window.location.href = "/";
                        },
                        error: function(response) {
                            console.log(response);
                            $('.btn-loader').removeClass('disabled').html('Submit');
                           alert(response.responseJSON.message)
                        }
                    });
                });
            });
        </script>
@endsection
