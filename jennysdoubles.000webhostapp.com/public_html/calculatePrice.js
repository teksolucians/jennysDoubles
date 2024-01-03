	var doublesPrice = 4;
	var alpPrice = 4;
	var sahPrice = 4;
	var drinksPrice = 5;

	var doublesBill = 0;
	var alpBill = 0;
	var sahBill = 0;
	var drinksBill = 0;
	var totalBill;



function calculatePrice(){
	
	totalBill = 0;
	var doublesQty = document.getElementById('doublesQty').value;
	var alpQty = document.getElementById('alpQty').value;
	var sahQty = document.getElementById('sahQty').value;	
	var drinksQty = document.getElementById('drinksQty').value;

	var billArea = document.getElementById("billArea");
	

	
	
	doublesBill = doublesQty*doublesPrice;
	alpBill = alpQty*alpPrice;
	sahBill = sahQty*sahPrice;
	drinksBill = drinksQty*drinksPrice;
	
	
	totalBill = doublesBill + alpBill + sahBill + drinksBill;
	
	billArea.innerHTML = totalBill;
	
	
}