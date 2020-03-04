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



});