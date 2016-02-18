$('document').ready(function(){
	loadImages();
	displayFirst();
	gallery();
	hideEmail('apieforstrength', 'gmail.com', '.hiddenEmail');
});






function hideEmail(user, domain, replaceMe){
/*
1 - specify the username and domain
2 - build an anchor tag
3 - replace the dummy HTML code with my new A tag
*/

// create the email address
var address = user + '@' + domain;
// build anchor tag
var emailLink = '<a href="mailto:' + address + '">' + address + '</a>';
// put it on the page
$(replaceMe).html(emailLink);
}


 
function loadImages(){
	var galleryImages = [];
	var loadThese = $('#thumbs a');
	for(i=0; i<loadThese.length; i++){
		galleryImages[i] = new Image();
		galleryImages[i].src = loadThese[i];
		}
} // end loadImages

function displayFirst(){
		var firstImagePath = $('#thumbs a').attr('href');
		var firstImage = $('<img id="galleryBig" src="' + firstImagePath + '">');
		var caption = $('#thumbs a img').attr('alt');
		$('#thumbs').after(firstImage);
		//$('#gallery img:last').after('<div id="caption">' + caption + '</div>');
}

function gallery(){
	$('#gallery a').click(function(evt){
		evt.preventDefault();
		oldImage = $('#thumbs').next();
		var imgPath = $(this).attr('href');
		var newImage = $('<img id="galleryBig" src="' + imgPath + '">');
		$('#caption').remove();
		newImage.hide();
		// create alt

		var alt = $(this).children().attr('alt');
		
		//create alt
		//$('#gallery img:last').after('<div id="caption">' + alt + '</div>').fadeIn();
		$('#caption').hide().fadeIn();
		$('#thumbs').after(newImage);
		newImage.fadeIn();
		oldImage.remove();		
	}); //end anonymous fcn
/*
	$('#gallery a img').click(function(){
		alt = $(this).attr('alt');
	}); // end 2nd anonymous fcn
	
alt = $('#gallery a img')
*/
} //end gallery
