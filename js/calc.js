
 let  first = document.getElementById('quantity');
let  second = document.getElementById('second');
let  price = document.getElementById('price');


first.addEventListener("input", sum);
second.addEventListener("input", sum);

function sum() {

 let  one = parseFloat(first.value) || 0;
 let  two = parseFloat(second.value) || 0;

let  add = one+two;

price.innerHTML = add + "zł";

}

/*

var theForm = document.forms["calcform"];

console.log(theForm)

let add_bonus = new Array();
add_bonus["ub"]=20;
add_bonus["ub2"]=25;
add_bonus["ub3"]=35;

function getBonusSizePrice()
{
    var cakeSizePrice=0;
    let theForm = document.forms["calcform"];
    var selectedBonus = theForm.elements["dodatki"];
    for(var i = 0; i < selectedBonus.length; i++)
    {
        if(selectedBonus[i].checked)
        {

            cakeSizePrice = cake_prices[selectedBonus[i].value];

            break;
        }
    }
    return cakeSizePrice;
}
function getTotal()
{
    var cakePrice = getBonusSizePrice() + 2

    //display the result
    document.getElementById('totalPrice').innerHTML =
                                      "Total Price For Cake $"+cakePrice;

}

//Set up an associative array
//The keys represent the size of the cake
//The values represent the cost of the cake i.e A 10" cake cost's $35
var cake_prices = new Array();
cake_prices["Round6"]=20;
cake_prices["Round8"]=25;
cake_prices["Round10"]=35;
cake_prices["Round12"]=75;

//Set up an associative array
//The keys represent the filling type
//The value represents the cost of the filling i.e. Lemon filling is $5,Dobash filling is $9
//We use this this array when the user selects a filling from the form
var filling_prices = new Array();
filling_prices["None"]=0;
filling_prices["Lemon"]=5;
filling_prices["Custard"]=5;
filling_prices["Fudge"]=7;
filling_prices["Mocha"]=8;
filling_prices["Raspberry"]=10;
filling_prices["Pineapple"]=5;
filling_prices["Dobash"]=9;
filling_prices["Mint"]=5;
filling_prices["Cherry"]=5;
filling_prices["Apricot"]=8;
filling_prices["Buttercream"]=7;
filling_prices["Chocolate Mousse"]=12;

// getCakeSizePrice() finds the price based on the size of the cake.
// Here, we need to take user's the selection from radio button selection
function getCakeSizePrice() {
	var cakeRadio = document.getElementsByName('selectedcake');

	for (i=0; i < cakeRadio.length; i++) {
		if (cakeRadio[i].checked) {
			user_input = cakeRadio[i].value;
		}
	}

	return cake_prices[user_input];
}

// getFillingPrice() finds the price based on the filling of the cake.
// Here, we need to take user's the selection from selection list
function getFillingPrice() {
	var cakeSelect = document.getElementById('filling');

	//alert(filling_prices[cakeSelect.value]);

	return filling_prices[cakeSelect.value];
}

// getCandlesPrice() finds the price based if Candles is selected or not.
function getCandlesPrice() {
	var cakeCandles = document.getElementById('includecandles');

	if(cakeCandles.checked) {
		return(5);
	} else {
		return(0);
	}
}

// getInscriptionPrice() finds the price based if Inscription is selected or not.
function getInscriptionPrice() {
	var cakeInscription = document.getElementById('includeinscription');

	if(cakeInscription.checked) {
		return(20);
	} else {
		return(0);
	}
}

function calculateTotal() {
	var total =  getFillingPrice() +getCakeSizePrice() + getCandlesPrice() + getInscriptionPrice();
	var totalEl = document.getElementById('price');

	document.getElementById('price').innerHTML = "Your Total is: $" + total;
	totalEl.style.display = 'block';
}

function hideTotal() {
	var totalEl = document.getElementById('price');
	totalEl.style.display = 'none';
}*/