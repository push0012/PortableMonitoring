$(document).ready(function() {
    var s = $('#clientTable').DataTable({
        paging: false,
        searching: false,
        ordering:  false,
        
        select: true
    });
    
    $('#addClient').on( 'click', function () {
        s.row.add( [
            '<input type=\"text\" class=\"form-control\" id=\"job_name\" name=\"job_name\"/>',
            '<input type=\"text\" class=\"form-control\" id=\"interval\" name=\"interval\"/>',
            '<input type=\"text\" class=\"form-control\" id=\"target\" name=\"target\"/>',  
        ] ).draw( false );
    });

    $('#clientTable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            s.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } ); 
    //remove selected row when click on remove button
    $('#removeClient').click( function () {
        s.row('.selected').remove().draw( false );
    } );
    $('input[name=options]').change(function(){
        if ($("#option2").is(":checked")) {
            $("#ip_address").removeAttr("disabled");
            $("#subnet_mask").removeAttr("disabled");
        } else {
            console.log('run 2')
            $("#ip_address").attr("disabled", "disabled");
            $("#subnet_mask").attr("disabled", "disabled");
        }
    }); 
    
});
//Client Nodes Configurations
function data_save(){
        var savedata = new FormData();
        var posts = []; 
        var senddata = []; 
        $('#clientTable > tbody  > tr').each(function() {
            var postData = {
                'job_name':$(this).find('#job_name').val(),
                'interval':$(this).find('#interval').val(),
                'target':$(this).find('#target').val(),
            };
            posts.push(postData);
        });

        console.log(posts)

        senddata =  JSON.stringify(posts);

        $.ajax({
            type: "POST",
            url: 'prometheus',
            dataType: "json",
            data: senddata,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
           /* enctype: 'multipart/form-data',*/
            success: function( msg ) {
                //console.log("go "+ msg)
                $.notify({
                    // options
                    icon: 'fa fa-check-circle fa-3x',
	                title: 'PSMT Tool notification',
                    message: msg
                },{
                    // settings
                    type: 'success',
                    icon_type: 'class',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutDown'
                    },
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                });
            },
            error: function(msg) {
                //console.log("error " + msg)
                $.notify({
                    // options
                    icon: 'fa fa-exclamation-circle fa-3x',
	                title: 'PSMT Tool notification',
                    message: 'Connection Failed'
                },{
                    // settings
                    type: 'warning',
                    icon_type: 'class',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutDown'
                    },
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                });
           }
        });
    }
    function adapter_save(){
        
        var postData = {
            'ssid':$('#ssid').val(),
            'password':$('#password').val(),
            'ip_address':$('#ip_address').val(),
            'subnet_mask':$('#subnet_mask').val(),
        };
        senddata =  JSON.stringify(postData);
        //console.log(senddata)
        $.ajax({
            type: "POST",
            url: 'adapter',
            dataType: "json",
            data: senddata,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            
            success: function( msg ) {
                //console.log("go "+ msg)
                $.notify({
                    // options
                    icon: 'fa fa-check-circle fa-3x',
	                title: 'PSMT Tool notification',
                    message: msg
                },{
                    // settings
                    type: 'success',
                    icon_type: 'class',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutDown'
                    },
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                });
               
            },
            error: function(msg) {
               // console.log("error " + msg)
                $.notify({
                    // options
                    icon: 'fa fa-exclamation-circle fa-3x',
	                title: 'PSMT Tool notification',
                    message: 'Connection Failed'
                },{
                    // settings
                    type: 'warning',
                    icon_type: 'class',
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutDown'
                    },
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                });
           }
        });

    } 
    