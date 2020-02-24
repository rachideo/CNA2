jQuery(document).ready(function($) {
    var notice_wrapper_sel = '.awsm-pro-activate-notice';
    $(notice_wrapper_sel).on('click', '.notice-dismiss', function(e) {
        e.preventDefault();
        var $dismiss_elem = $(this);
        var $wrapper = $dismiss_elem.parents(notice_wrapper_sel);
        var nonce = $dismiss_elem.parents(notice_wrapper_sel).data('nonce');
        $.ajax({
            url: ajaxurl,
            type: "POST",
            data: {
                nonce: nonce,
                action: 'awsm_team_pro_admin_notice'
            },
            dataType: "json"
        }).done(function(response) {
            if (response && response.dismiss) {
                $wrapper.fadeTo(400, 0, function() {
                    $wrapper.slideUp(100, function() {
                        $wrapper.remove();
                    });
                });
            }
        })
        .fail(function(xhr) {
            console.log(xhr.responseText);
        })
    });

    $('#awsm_team_pro_enable_crop').on('click', function(e) {
        if ($(this).is(":checked")) {
            $('.awsm-team-pro-thumbnail-options').addClass('show');
        } else{
            $('.awsm-team-pro-thumbnail-options').removeClass('show');
        }
    });
});
