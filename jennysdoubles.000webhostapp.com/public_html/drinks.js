	/*
		function drinks(){
			var drinkSelect = document.getElementById('drinkSelect');
				var drinkImage = document.getElementById("drinkImage");
			
			if (drinkSelect.value=="cocacola"){
				drinkImage.src = "cocacola.jpeg";
		}
		
			if (drinkSelect.value=="fanta"){
				drinkImage.src = "fanta.jpeg";
		}
		}
		*/
		var drinkSelect = document.getElementById("drinkSelect");
		var fantaOption = document.getElementById("fantaOption");
		var cocacolaOption = document.getElementById("cocacolaOption");
		
		
		
		fantaOption.addEventListener("click",function(){
		drinkImage.src="fanta.jpeg";	
		});
		
			cocacolaOption.addEventListener("click",function(){
		drinkImage.src="cocacola.jpeg";	
		});
		