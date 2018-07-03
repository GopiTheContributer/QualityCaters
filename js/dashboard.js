$(document).ready(function(){
  $('#currentYear').text((new Date).getFullYear());
  //ajax call to get orders data for the grid

  $("#jqgrid").jqGrid({
    url:'getorders.php',
    datatype: "json",
    contentType: 'application/json; charset=utf-8',
    mtype: "GET",
    colNames:['Order Id','Booking Date', 'Name', 'Email', 'Event Date', 'No. of Persons', 'Event Name', 'Referred By', 'Referred by no.', 'Address'],
    colModel:[
      {name:'order_id',index:'order_id', width:0, hidden:true},
      {name:'booking_date',index:'booking_date', width:87, formatter: 'date'},
      {name:'name',index:'name', width:115},
      {name:'email',index:'email', width:170},
      {name:'event_date',index:'event_date', width:87},
      {name:'no_of_persons',index:'no_of_persons', width:100},
      {name:'event_name',index:'event_name', width:90},
      {name:'referred_by',index:'referred_by', width:115},
      {name:'referer_ph_no',index:'referer_ph_no', width:120},
      {name:'address',index:'address', width:190}
    ],
    rowNum:25,
    //rowList:[10,20,30],
    pager: '#pager',
    height:'500px',
    autowidth:true,
    viewrecords: true,
    gridview: true,
    caption:"Catering orders details",
    loadError: function (xhr, status, error) {
      alert('first load error: ' + xhr);
    }
  });
  jQuery("#pager").jqGrid('navGrid','#pager',{edit:false,add:false,del:false});//ajax call end
});//document ready end


//button create event click handle
$('#btnCreateEvent').click(function(){
  if( $('#txtname').val() == ''){
    $('#createEvent').fadeIn(1000);
    $('#createEvent').empty().addClass('create-event').text('All fields are mandatory');
    setTimeout(function () { $('#createEvent').fadeOut(); }, 3000);
    $('#txtname').focus();
    return;
  }
  debugger;
  //validation success
  $.ajax({
    url: 'createevent.php',
    data:{'eventName': $('#txtname').val()},
    dataType: 'json',
    type:'POST',
    success: function(result){
      if(result == 'created'){
        $('#createEvent').fadeIn(1000);
        $('#createEvent').empty().addClass('create-event').text('Event created successfully');
        setTimeout(function () { $('#createEvent').fadeOut(); }, 3000);
        $('#txtname').focus();
        $('#txtname').val('');
        return;
      }
      else {
        $('#createEvent').fadeIn(1000);
        $('#createEvent').empty().addClass('create-event').text('facing some network issue');
        setTimeout(function () { $('#createEvent').fadeOut(); }, 3000);
        $('#txtname').focus();
        return;
      }
    },
    error:function(xhr, status, error){var err = eval(xhr.responseText);
      console.log(err);}
    });
  });
  //End of button create event click

  //tab 2 div on click
  $('#event-tab').click(function(){
    $("#event").jqGrid({
      url:'getevents.php',
      contentType: 'application/json; charset=utf-8',
      datatype: 'json',
      type: 'GET',
      colNames: ['id', 'name'],
      colModel: [
        { name: 'id', index: 'id', width:170 },
        { name: 'name', index: 'name', width:187 },
      ],
      rowNum:25,
      sortname: 'id',
      viewrecords: true,
      sortorder: 'desc',
      gridview: true,
      caption: 'All available events',
      loadError: function (xhr, status, error) {
        debugger;
        alert('load error: ' + xhr);
      }
    });
    //jQuery("#pager").jqGrid('navGrid','#pager',{edit:false,add:false,del:false});///ajax call end
  });//click event end
