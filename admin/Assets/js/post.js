var post = {
    ajaxMethod: 'POST',

    add: function() {
        var formData = new FormData();

        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.fr-view').html());
        formData.append('image', document.getElementById('file').files[0]);
        formData.append('description', $('#formDescription').val());
        formData.append('category', $('#category').val());
        if (!$('#formTitle').val().trim()){
            $('.error').text("Title hasn't set");
        }
        else {
            $('.error').text("");
            $.ajax({
                url: '/admin/posts/create',
                type: this.ajaxMethod,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){

                },
                success: function(result){
                   window.location.replace("/admin/posts");
                }
            });
        }
    },
    addCategory: function(){
        var formData = new FormData();
        formData.append('category', $('input.search').val());
        $.ajax({
            url: '/admin/category/create',
            type: this.ajaxMethod,
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(result){
                result = JSON.parse(result);
                $('#category').append(`<option selected value="`+ result.id +`">`+ result.name +`</option>`)
            }
        });
    },
    edit: function(id) {
        var formData = new FormData();

        formData.append('title', $('#formTitle').val());
        formData.append('content', $('.fr-view').html());
        formData.append('image', document.getElementById('file').files[0]);
        formData.append('description', $('#formDescription').val());
        formData.append('category', $('#category').val());
        if (!$('#formTitle').val().trim()){
            $('.error').text("Title hasn't set");
        }
        else {
            $('.error').text("");
            $.ajax({
                url: '/admin/posts/update/'+id,
                type: this.ajaxMethod,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){

                },
                success: function(result){
                    window.location.replace("/admin/posts");
                }
            });
        }
        }
};