$(document).ready(function () {
    //onchange of rooms-count
    $('#gender1').change(function() {
        var roomsSelected = $('#gender1 option:selected').val();
        var roomsDisplayed = $('[id^="room-"]:visible').length;
        var roomsRendered = $('[id^="room-"]').length;
        
        
        //if room count is greater than number displayed - add or show accordingly
        if (roomsSelected > roomsDisplayed) {

            for (var i=1;i<=roomsSelected;i++){
                var r=$('#room-'+i);
                if (r.length == 0) {

                    var clone=$('#room-1').clone(); //clone
                    clone.children(':first').text("Room "+i);
                    //change ids appropriately
                    setNewID(clone,i);
                    clone.children('div').children('select').each(function() {
                        setNewID($(this),i);
                    });
                    $(clone).insertAfter($('#room-'+roomsRendered));
                    
                }else {
                    //if the room exists and is hidden 
                    $(r).show();
                }
            }
            
        }
        else {
            //else if less than room count selected - hide
            for (var i=++roomsSelected;i<=roomsRendered;i++){
                $('#room-'+i).hide();
            }
        }
    
    });
    function setNewID(elem, i) {
        oldID=elem.attr('id');
        newId=oldID.substring(0,oldID.indexOf('-'))+"-"+i;
        elem.attr('id',newId);
    }

});
