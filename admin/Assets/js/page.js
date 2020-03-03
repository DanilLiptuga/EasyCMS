var page = {
    ajaxMethod: 'POST',

    add: function() {
        var formData = new FormData();

        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.fr-view').html());
        formData.append('Template', $('#formTemplate').val());
        formData.append('link', $('#formLink').val());
        if (!$('#formTitle').val().trim()){
            $('.error').text("You didn't set title!");
        }
        else if(!$('#formLink').val().trim()){
            $('.error').text("You didn't set link!");
        }
        else {
            $('.error').text("");
            $.ajax({
                url: '/admin/pages/create',
                type: this.ajaxMethod,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){

                },
                success: function(result){
                   window.location.replace("/admin/pages");
                }
            });
        }
    },
    edit: function(id) {
        var formData = new FormData();

        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.fr-view').html());
        formData.append('Template', $('#formTemplate').val());
        formData.append('link', $('#formLink').val());
        if (!$('#formTitle').val().trim()){
            $('.error').text("You didn't set title!");
        }
        else if(!$('#formLink').val().trim()){
            $('.error').text("You didn't set link!");
        }
        else {
            $('.error').text("");
            $.ajax({
                url: '/admin/pages/update/'+id,
                type: this.ajaxMethod,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){

                },
                success: function(result){
                    window.location.replace("/admin/pages");
                }
            });
        }
        }
};