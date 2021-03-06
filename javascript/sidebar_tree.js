$(function () {

    
	$.ajax({
		url : "php/mysql/mysql_sidebar.php",
		type : 'POST',
		data : {
			sidebar: 1
		},
		beforeSend : function() {
			$('#spinner').show();
		},
		success : function(d) {
			$('#tree').find('ul').append(d);
			    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand').find(' > i').addClass('glyphicon-plus-sign').removeClass('glyphicon-minus-sign');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse').find(' > i').addClass('glyphicon-minus-sign').removeClass('glyphicon-plus-sign');
        }
        e.stopPropagation();
    });
		},
		complete : function() {
			$('#spinner').hide();
		}
	}); 
		

});