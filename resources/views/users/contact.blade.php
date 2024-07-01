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
                <div class="block-content">
                    <form method="post">
                        <input type="hidden" name="csrfmiddlewaretoken"
                            value="IKoYEXButhFI38MrsXfBbZg3H56eKqvhWLTCmjBgRTSCum7NtcZwgU8dz3zrlB7V">
                        <fieldset>
                            <legend>Contact Us</legend>
                            <div>
                                <div id="div_id_name" class="form-group">
                                    <label for="id_name" class=" requiredField"> Name <span class="asteriskField">*</span>
                                    </label>
                                    <div class>
                                        <input type="text" name="name" class="textinput textInput form-control"
                                            required id="id_name">
                                    </div>
                                </div>
                                <div id="div_id_email" class="form-group">
                                    <label for="id_email" class=" requiredField"> Email <span class="asteriskField">*</span>
                                    </label>
                                    <div class>
                                        <input type="email" name="email" class="emailinput form-control" required
                                            id="id_email">
                                    </div>
                                </div>
                                <div id="div_id_comment" class="form-group">
                                    <label for="id_comment" class=" requiredField"> Comment <span
                                            class="asteriskField">*</span>
                                    </label>
                                    <div class>
                                        <textarea name="comment" cols="40" rows="10" class="textarea form-control" required id="id_comment"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div>
                                <div id="div_id_captcha" class="form-group">
                                    <label for="id_captcha" class=" requiredField"> Captcha <span
                                            class="asteriskField">*</span>
                                    </label>
                                    <div class>
                                        <script src="../../www.recaptcha.net/recaptcha/api.js"></script>
                                        <script type="text/javascript">
                                            // Submit function to be called, after reCAPTCHA was successful.
                                            var onSubmit_78fc96b6a0f6442490a961031b803710 = function(token) {
                                                console.log("reCAPTCHA validated for 'data-widget-uuid=\"78fc96b6a0f6442490a961031b803710\"'")
                                            };
                                        </script>
                                        <div class="g-recaptcha" data-sitekey="6LenfpYbAAAAAFOM-ePDJhw6uA83zaDJQ4pfW7sA"
                                            class="recaptchav2checkbox form-control" required id="id_captcha"
                                            data-widget-uuid="78fc96b6a0f6442490a961031b803710"
                                            data-callback="onSubmit_78fc96b6a0f6442490a961031b803710" data-size="normal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div class>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary"
                                    id="submit-id-submit" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
