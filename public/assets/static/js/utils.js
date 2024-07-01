$(document).ready(function(){
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };

    // if url does not have pattern, run function
    if (window.location.href.indexOf("marketplace") == -1) {
        // New user signup Forms
        function plan_handling(){
            selected = $("input[name='plan']:checked").val();
            if (selected == "Basic"){
                $( "#company_info" ).hide();
                $("#id_company-name").prop('required', false);
                $("#id_company-address").prop('required', false);
                $("#id_company-city").prop('required', false);
                $("#id_company-state").prop('required', false);
                $("#id_company-postal_code").prop('required', false);
                $("#id_company-country").prop('required', false);
                $("#NewUserSignUp-Submit").prop('value', 'Sign Up');

            }
            else {
                $( "#company_info" ).show();
                $("#id_company-name").prop('required', true);
                $("#id_company-address").prop('required', true);
                $("#id_company-city").prop('required', true);
                $("#id_company-state").prop('required', true);
                $("#id_company-postal_code").prop('required', true);
                $("#id_company-country").prop('required', true);
                $("#NewUserSignUp-Submit").prop('value', 'Proceed to Payment');

            }
        }

        $('input[type=radio][name="plan"]').change(plan_handling);
        $('input[type=radio][name="plan"]').ready(function(){
            if (getUrlParameter('plan') != false){
                var plan = getUrlParameter('plan');
                $('input[name="plan"][value="' + plan + '"]').prop('checked', true);
            }
            plan_handling();
        });
    }


    //HTTP Basic Auth for EDL
    $("#id_enable_http_basic_auth").on('change',function(){
        //alert($("#id_enable_http_basic_auth").val())
        if ($('#id_enable_http_basic_auth').is(':checked')) {
            $('#http_basic_auth_credentials').slideDown(500);
            //$('#http_basic_auth_credentials').collapse('show');
        }
        else{
            $('#http_basic_auth_credentials').slideUp(500);
            //$('#http_basic_auth_credentials').collapse('hide');
        }
    });
    
    //IP Restriction for EDL
    function output_restrict_by_ip_handling(){
        if ($('#id_output_restrict_by_ip').is(':checked')) {
            $('#ip_allow_list').slideDown(500);
        }
        else{
            $('#ip_allow_list').slideUp(500);
        }
    };
    $("#id_output_restrict_by_ip").ready(output_restrict_by_ip_handling);
    $("#id_output_restrict_by_ip").on('change',output_restrict_by_ip_handling);

    // Source Forms
    function source_form_handling(){
        var slide_timing = 200
        var selected = $("#id_source_type").val();
        if (selected == "custom list"){
            $('#fieldset_json_filters').slideUp(slide_timing);
            $('#fieldset_manual_entries').slideUp(slide_timing);
            $('#fieldset_url').slideDown(slide_timing);
            $('#adv_edl_settings').slideDown(slide_timing);
        }
        else if (selected == "custom json"){
            $('#fieldset_manual_entries').slideUp(slide_timing);
            $('#fieldset_url').slideDown(slide_timing);
            $('#fieldset_json_filters').slideDown(slide_timing);
            $('#adv_edl_settings').slideDown(slide_timing);
        }
        else if (selected == "manual"){
            $('#id_url').val('');
            $('#fieldset_url').slideUp(slide_timing);
            $('#fieldset_json_filters').slideUp(slide_timing);
            $('#adv_edl_settings').slideUp(slide_timing);
            $('#fieldset_manual_entries').slideDown(slide_timing);
        }
        else if (selected == "clone template"){
            window.location.href = 'templates';
        }
    };
    $("#id_source_type").on('change',source_form_handling);
    $("#id_source_type").ready(source_form_handling);
    //add clone option to list
    $("#id_source_type").append(new Option("Clone Template", "clone template"));
    
    
    
    
    
    // if url has pattern, run function
    // Source Edits
    if (window.location.href.indexOf("manage/sources/edit/") > -1 || window.location.href.indexOf("manage/sources/add/") > -1) {
        // Advanced HTTP Request Options
        function id_http_source_auth_handling(){
            var slide_timing = 200
            var selected = $("#id_http_source_auth").val();
            if (selected == "none"){
                $('#div_id_http_username').slideUp(slide_timing);
                $('#div_id_http_password').slideUp(slide_timing);
                $('#div_id_http_bearer_token').slideUp(slide_timing);
                $('#div_id_show_password').slideUp(slide_timing);
            }
            else if (selected == "http_basic"){
                $('#div_id_http_bearer_token').slideUp(slide_timing);
                $('#div_id_http_username').slideDown(slide_timing);
                $('#div_id_http_password').slideDown(slide_timing);
                $('#div_id_show_password').slideDown(slide_timing);
            }
            else if (selected == "bearer_token"){
                $('#div_id_http_username').slideUp(slide_timing);
                $('#div_id_http_password').slideUp(slide_timing);
                $('#div_id_http_bearer_token').slideDown(slide_timing);
                $('#div_id_show_password').slideDown(slide_timing);
            }
        }
        $("#id_http_source_auth").on('change',id_http_source_auth_handling);
        $("#id_http_source_auth").ready(id_http_source_auth_handling);

        $("#id_http_add_custom_headers").on('change',function(){
            if ($('#id_http_add_custom_headers').is(':checked')) {
                $('#http_custom_headers').slideDown(500);
            }
            else{
                $('#http_custom_headers').slideUp(500);
            }
        });

        $("#id_http_add_payload").on('change',function(){
            if ($('#id_http_add_payload').is(':checked')) {
                $('#http_payload').slideDown(500);
            }
            else{
                $('#http_payload').slideUp(500);
            }
        });
        
        
        // show password on source form
        $('#id_show_password').on('click', function show_password(){
            var passInput=$("#id_http_password");
            if(passInput.attr('type')=='password')
            {
              passInput.attr('type','text');
            }else{
             passInput.attr('type','password');
            };
            var passInput=$("#id_http_bearer_token");

            if(passInput.attr('type')=='password')
            {
              passInput.attr('type','text');
            }else{
             passInput.attr('type','password');
            };

        })
        
        // Clear out nulls
        if ($("#id_http_payload").val() == 'null'){
            $("#id_http_payload").val('');
        }
        if ($("#id_http_custom_headers").val() == 'null'){
            $("#id_http_custom_headers").val('');
        }
        if ($("#id_plugin_data").val() == 'null'){
            $("#id_plugin_data").val('');
        }
    };
    
    
    // check all checkboxes
    $("#check_all_sources").on('change',function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    
    // enable tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    
    // Disable Changes you made may not be saved.
 
    if (window.location.href.indexOf("manage") > -1 && window.location.href.indexOf("edit") == -1) {
        window.onbeforeunload = null;
    }
    
    // if url has pattern, run function
    if (window.location.href.indexOf("signup/awsmarketplace") > -1) {
         // Marketplace user signup Forms
        function marketplace_aws_signup_handling(){
            selected = $("input[name='marketplaceselectsignin']:checked").val();
            if (selected == "existing_user"){
                //$( "#company_info" ).hide();
                $( "#user_info" ).hide();
                $( "#existing_user" ).show();
                $("#id_user-username").prop('required', false);
                $("#id_user-first_name").prop('required', false);
                $("#id_user-last_name").prop('required', false);
                $("#id_user-country").prop('required', false);
                $("#id_username").prop('required', true);
                $("#id_password").prop('required', true);
                //$("#id_company-name").prop('required', false);
                //$("#id_company-address").prop('required', false);
                //$("#id_company-city").prop('required', false);
                //$("#id_company-state").prop('required', false);
                //$("#id_company-postal_code").prop('required', false);
                //$("#id_company-country").prop('required', false);
            }
            else {
                //$( "#company_info" ).show();
                $( "#user_info" ).show();
                $( "#existing_user" ).hide();
                $("#id_user-username").prop('required', true);
                $("#id_user-first_name").prop('required', true);
                $("#id_user-last_name").prop('required', true);
                $("#id_user-country").prop('required', true);
                $("#id_username").prop('required', false);
                $("#id_password").prop('required', false);
                //$("#id_company-name").prop('required', true);
                //$("#id_company-address").prop('required', true);
                //$("#id_company-city").prop('required', true);
                //$("#id_company-state").prop('required', true);
                //$("#id_company-postal_code").prop('required', true);
                //$("#id_company-country").prop('required', true);
            }
        }

        $('input[type=radio][name="marketplaceselectsignin"]').change(marketplace_aws_signup_handling);
        $('input[type=radio][name="marketplaceselectsignin"]').ready(function(){
            marketplace_aws_signup_handling();
        });
    }

    // if url has pattern, run function
    if (window.location.href.indexOf("count/") > -1) {

        var days = getUrlParameter('days');

        $("#days select").val("30");
        if (days != false){
            $('#days option[value="'+days+'"]').attr('selected','selected');
        }

        // Days count select option
        $("#days").change(function() {
            var optionValue = $(this).val();
            var url = window.location.href.split("?")[0];
            // if (window.location.href.indexOf("?") > 0) {
            //   window.location = url + "days=" + optionValue;
            // } else {
            //   window.location = url + "?days=" + optionValue;
            // }
            window.location = url + "?days=" + optionValue;
        });
   }
   
	// if url has pattern, run function
    // EDL Edits
    if (window.location.href.indexOf("manage/edl/edit/") > -1) {
        var timeout;
        var parts = window.location.href.split('/');
        var id = parts.pop() || parts.pop();  // handle potential trailing slash
        function poll() {
            $.ajax({
                url: "/manage/edl/status/" + id + "/",
                type: "GET",
                success: function(data) {
                    console.log("polling EDL status");
                    if (data.status == 'finished'){
                        // clearTimeout(timeout);

                        // hide Updating messages
                        $("div.messages:contains('A background task is updating this EDL.')").hide();;
                        //$("div.messages:contains('A background task is updating this EDL. This page will automatically refresh when the task is completed')").append('<br>Update Completed<br><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>')
                        $('div#object_count a').text(data.count);
                        $('div#object_count').html($('div#object_count').html().replace(('(Updating)'),''));
                        console.log('polling finished');
                    }
                    else{
                        timeout = setTimeout(poll, 5000); // here we assign the timout
                    }
                },
                dataType: "json",
                error: function() {
                    timeout = setTimeout(poll, 5000); // here we assign the timout
                },
                timeout: 2000
            });
        }

        poll();

   }
    
    
});