
 $(function(){
	function windowSize(){
		var leftBlock = $('.top-article-left');
		var rightBlock = $('.top-article-right');
		console.log(leftBlock);
		console.log(rightBlock);
	  if ($(window).width() < '975') {
  		// for (var i = 0; i < leftBlock.length; i++) {
  		// 	var block = leftBlock[i].detach();
  		// 	block.insertAfter(rightBlock[i]);
  		// }  
  		leftBlock.each(function(i, elem){
  			$(this).detach().insertAfter(rightBlock[i]);
  		});
	  } 
	  else {
	    // for (var i = 0; i < rightBlock.length; i++) {
  			// rightBlock[i].detach().insertAfter(leftBlock[i]);
  		// } 
  		leftBlock.each(function(i, elem){
  			$(this).detach().insertBefore(rightBlock[i]);
  		});
	  }
	  
	}
	$(window).load(windowSize); 
	$(window).resize(windowSize);
 });
