window.onload=function(){
	var slideshow = document.getElementsByClassName('slideshow').item(0);

	var train = slideshow.getElementsByClassName('train').item(0);
	go2slide = function (n) {
		train.style.left=(-1000*n)+'px';
	}

	var lists = slideshow.getElementsByClassName('btns').item(0).getElementsByTagName('li');
	for (var i=0; i<lists.length; i++) {
		(function(j){
			lists.item(j).onclick=function(){
				go2slide(j);
			}
		})(i);
	}
}