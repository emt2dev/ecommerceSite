$(document).ready(function(){
    $('#table__support').after('<div id="table__supportNav"></div>');
    var rowsShown = 4;
    var rowsTotal = $('#table__support tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#table__supportNav').append('<a href="#" class="table__pageNum" rel="'+i+'">'+pageNum+'</a> ');
    }
    $('#table__support tbody tr').hide();
    $('#table__support tbody tr').slice(0, rowsShown).show();
    $('#table__supportNav a:first').addClass('active');
    $('#table__supportNav a').bind('click', function(){

        $('#table__supportNav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#table__support tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                css('display','table-row').animate({opacity:1}, 300);
    });
});

$(document).ready(function(){
    $('#table__products').after('<div id="table__productsNav"></div>');
    var rowsShown = 4;
    var rowsTotal = $('#table__products tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#table__productsNav').append('<a href="#" class="table__pageNum" rel="'+i+'">'+pageNum+'</a> ');
    }
    $('#table__products tbody tr').hide();
    $('#table__products tbody tr').slice(0, rowsShown).show();
    $('#table__productsNav a:first').addClass('active');
    $('#table__productsNav a').bind('click', function(){

        $('#table__productsNav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#table__products tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
                css('display','table-row').animate({opacity:1}, 300);
    });
});

