@extends('users.layout.layout')

@section('content')
    <main class="page">
        <section class="clean-block">
            <div class="container">
                <div class="block-content">
                    <form id="submit-form"> 
                        <fieldset>
                            <legend>Source</legend>
                            <div class="form-group">
                                <div id="div_id_name" class="form-group"> <label for="id_name" class=" requiredField">
                                        Name<span class="asteriskField">*</span> </label>
                                    <div class> <input type="text" name="name" maxlength="200"
                                            class="textinput textInput form-control" required id="id_name"> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div id="div_id_description" class="form-group"> <label for="id_description" class>
                                        Description
                                    </label>
                                    <div class>
                                        <textarea name="description" cols="25" rows="3" class="textarea form-control" id="id_description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        
                        <fieldset id="fieldset_manual_entries" style>
                            <legend>Manual Entries</legend>
                            <div class="form-group">
                                <div id="div_id_manual_entries" class="form-group"> <label for="id_manual_entries" class>
                                        Manual entries
                                    </label>
                                    <div class>
                                        <textarea name="manual_entries" cols="25" rows="12" placeholder="1.1.1.1 2.2.2.2/24Or.. somedomain.com" class="textarea form-control" id="id_manual_entries"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-primary btn-loader" >Submit</button>
                        <br>
                        <h6 class="msg text-success mt-4" ></h6>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $('#submit-form').on('submit', function(e) {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                $('.btn-loader').addClass('disabled').html('Loading...');
                e.preventDefault();
                $('.msg').html('');
                // $('input').removeClass('is-invalid');
                // $('input').next('.invalid-feedback').text('');
                var formData = new FormData(this);
                formData.append('_token', csrfToken);
                $.ajax({
                    type: 'POST',
                    url: '/sources/add',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            $('.msg').html('Sources created successfully!');
                            $('.btn-loader').removeClass('disabled').html('Submit');
                            $('input').val('');
                            $('textarea').val('');
                            // $('.btn-loader').removeClass('disabled').html('Submit');
                            // $('input').val('');
                            // $('input[type="checkbox"]').prop('checked', false);
                            // $('#alert').html(
                            //     '<br><div class="alert alert-success" role="alert">Your Account created successfully!</div>'
                            //     )
                            //window.location.href="/register/success";
                        }
                    },
                    // error: function(response) {
                    //     var errors = response.responseJSON.errors;
                    //     $('.btn-loader').removeClass('disabled').html('Submit');
                    //     $.each(errors, function(key, value) {
                    //         var $input = $('input[name=' + key + ']');
                    //         $input.addClass('is-invalid');
                    //         $input.next('.invalid-feedback').text(value[0]);
                    //     });
                    // }
                });
            });
        });
    </script>
@endsection
