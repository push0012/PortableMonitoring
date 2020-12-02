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



    //Adapter Configurations
    $("#adapt_store").click(function(){

            var savedata = {
                'host_name': $('#host_name').val(),
                'ip_address': $('#ip_address').val(),
                'subnet_mask': $('#subnet_mask').val()
            }

            console.log(savedata);
            senddata =  JSON.stringify(savedata);
            $.ajax({
                type: "POST",
                url: 'adapterdata',
                data: savedata,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function( msg ) {
                    console.log(msg);
                },
                error: function(msg) {
                    console.log(msg);
                }
            });
        
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
            url: 'prom',
            dataType: "json",
            data: senddata,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
           /* enctype: 'multipart/form-data',*/
            success: function( msg ) {
                console.log("go "+ msg)
               /* callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/confirm/?ref=' + msg.ref+'&date='+msg.date;
                },2500);*/
            },
            error: function(msg) {
                console.log("error " + msg)
                /*callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/failure';
                },2500);*/
           }
        });
    }

    