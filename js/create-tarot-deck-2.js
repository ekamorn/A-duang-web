$(document).ready(function(){

	// create tarot cards
	for(var i =0; i<54; i++) {
		var tarotCard       = document.createElement('div');
		tarotCard.className = 'each-tarot-card-collection';
		tarotCard.innerHTML =
		'<img src="image/v02/a-duang-card.png" class="img-reponsive img-tarot--card">';

		document.getElementById('tarot-deck--collection').appendChild(tarotCard);
	}

	$('.each-tarot-card-collection').click(function(){

		if($('.each-tarot-card-collection.active').length < 1) {
			$(this).children('img').attr('src', 'image/v02/a-duang-card-active.png');
			$(this).addClass('active');
		}
	});

	$('.tarot-deck-button--collection').click(function(){

		if($('.each-tarot-card-collection.active').length < 1) {
			// alert for drawing the cards

		}	else if ($('.each-tarot-card-collection.active').length == 1) {
			// hide all deck cards
			$('.each-tarot-card-collection, .tarot-deck-button--collection').fadeOut(500);

			// random drawing the cards
			var randomCard1 = Math.floor((Math.random() * 78)+1);

			$.get('http://aduang-svc-dev.azurewebsites.net/tools/decks/1/cards', function(data, status) {

				var picArray  = [];
				var desArray  = [];
				var nameArray = [];

				$.each(data, function(i, item){
					allTarot = item;
					allPic   = item.imageUrl;
					allDes   = item.description  
					allMeta  = item.meta.name;

					picArray.push(allPic);
					desArray.push(allDes);
					nameArray.push(allMeta);

				});

				console.log(picArray[randomCard1]);
				console.log(desArray[randomCard1]);
				console.log(nameArray[randomCard1]);

				console.log(randomCard1);

				var meaningCard       = document.createElement('div');
				meaningCard.className = 'read-draw-card--collection';
				meaningCard.innerHTML = 

				'<div class="head-draw-card--collection">' + 
				'<div class="read-tarot-card"></div>' + 
				'<p class="head-meaning-tarot-card">'+ nameArray[randomCard1] +'</p>' +
				'</div>' +
				'<div class="body-draw-card--collection">' + 
				'<p class="body-meaning-tarot-card">' + desArray[randomCard1] + '</p>' + 
				'</div>';

				document.getElementById('tarot-deck--collection').appendChild(meaningCard);

				$('head').append("<style>.read-tarot-card:before {background: url(" + picArray[randomCard1] + ") no-repeat; background-size:cover;}</style>");
			});
		}	
	});


	// create article div
	for (var countArticle = 0; countArticle<12; countArticle++) {

		var createArticle       = document.createElement('div');
		createArticle.className = 'col-lg-2 col-md-2 col-sm-2 col-xl-2 col-2 article-body-collection';
		createArticle.innerHTML = 
		'<a href="article?id=1" class="each-article-body-collection">' + 
		'<div class="each-pic-article-collection">' + 
		'<img src="image/v02/article.png" class="img-reponsive article-pic">' +
		'</div>' +
		'<div class="each-name-article-collection">' + 
		'<p class="each-name-article">' + 'ดวงดีก็ดี ดวงไม่ดี ก็ไม่ดี...' + '</p>' +
		'<p class="creator-article-name">' + 'ใครสักคน' + '</p>'+
		'</div>' +
		'</a>';

		document.getElementById('article-body').appendChild(createArticle);

		var createQuiz       = document.createElement('div');
		createQuiz.className = 'col-lg-2 col-md-2 col-sm-2 col-xl-2 col-2 quiz-body-collection';
		createQuiz.innerHTML = 
		'<a href="#" class="each-quiz-body-collection">' +
		'<div class="each-pic-quiz-collection">' +
		'<img src="image/v02/article.png" class="img-reponsive quiz-pic">' +
		'</div>' +
		'<div class="each-name-quiz-collection">' +
		'<p class="each-name-quiz">' + 'ดวงดีก็ดี ดวงไม่ดี ก็ไม่ดี...' + '</p>' +
		'<p class="creator-quiz-name">' + 'ใครสักคน' + '</p>'+
		'</div>' +
		'</a>';

		document.getElementById('quiz-body').appendChild(createQuiz);
	}

});