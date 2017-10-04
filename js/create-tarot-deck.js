$(document).ready(function(){

	// create number series array
	function createNumberSeries(howMany) {
		var result = [];

		for(var count = 1; count<=howMany; count++) {
			result.push(count);
		}

		return result;
	}

	// shuffle sesquence number function
	function shuffle(obj) {
		var objShuffle = obj.length;
		var rnd, tmp;

		while (objShuffle) {
			rnd             = Math.floor(Math.random() * objShuffle);
			objShuffle     -= 1;
			tmp             = obj[objShuffle];
			obj[objShuffle] = obj[rnd];
			obj[rnd]        = tmp;
		}

		return obj;
	}

	// create tarot cards
	function createTarot(ids) {
		var length = ids.length;

		for (var l = 0; l<length; l++) {
			var tarotCard        = document.createElement('div');
			tarotCard.className  = 'each-tarot-card-collection';
			tarotCard.innerHTML  =
			'<img src="image/v02/a-duang-card.png" class="img-responsive img-tarot--card">';

			$(tarotCard).attr('id', "tarot-"+ids[l]);

			document.getElementById('tarot-deck--collection').appendChild(tarotCard);

		}
	}


	var numTarot = 78;
	var sliderIds = shuffle(createNumberSeries(numTarot));

	// console.log(sliderIds);
	createTarot(sliderIds);


	// select tarot function
	var selectCardArray = [];

	$('.each-tarot-card-collection').click(function() {
		var value = $(this).attr('id');
		if ($('.each-tarot-card-collection.active').length < '3') {
			// console.log("lek");
			if($.inArray(value, selectCardArray) == '-1') {
				selectCardArray.push(value);
				$(this).children('img').attr('src', 'image/v02/a-duang-card-active.png');
				$(this).addClass('active');
			} 

			return selectCardArray;
		}

	});

	// console.log(selectCardArray);




	// get all tarots
	$.get('http://aduang-svc-dev.azurewebsites.net/tools/decks/1/cards', function(data, status) {
		var picArray = [];


		$.each(data, function(i, item) {
			allTarot = item;
			allPic = item.imageUrl;

			picArray.push(allPic);

			// var xx = document.createElement('div');
			// xx.innerHTML = 
			// '<img src=' + picArray[i] + ' class="img-responsive img-tarot--card-1">';

			// document.getElementById('tarot-deck--collection').appendChild(xx);
			
			console.log(picArray[i]);
		});


	});
});