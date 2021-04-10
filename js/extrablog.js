var arr = [{
	sno :1,
	food_name: "Burger",
	price: 100,
	discount: 20,
	net_price: 80,	
},
{
	sno :2,
	food_name: "Pizza",
	price: 200,
	discount: 30,
	net_price: 170,
},	
{
	sno :3,
	food_name: "Noodles",
	price: 150,
	discount: 20,
	net_price: 130,
},
{
	sno :4,
	food_name: "French Fries",
	price: 120,
	discount: 10,
	net_price: 110,
},
{
	sno :5,
	food_name: "Vada pav",
	price: 180,
	discount: 30,
	net_price: 150,
},
{
	sno :6,
	food_name: "Samosa",
	price: 50,
	discount: 10,
	net_price: 40,
},
{
	sno :7,
	food_name: "Chhole Bhature",
	price: 130,
	discount: 20,
	net_price: 110,
},
{
	sno :8,
	food_name: "Poha",
	price: 200,
	discount: 30,
	net_price: 170,
},
{
	sno :9,
	food_name: "Pongal",
	price: 170,
	discount: 20,
	net_price: 150,
},
{
	sno :10,
	food_name: "Khandvi",
	price: 190,
	discount: 20,
	net_price: 170,
}									
];
function showlist(arr){
		var map = arr.map((item, index) => {
		var maintrone = document.createElement("tr");
		
		var td = document.createElement("td");
		td.innerHTML = item.sno;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = item.food_name;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = item.price;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = item.discount;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = item.net_price;
		maintrone.appendChild(td);
		
		var mainEl = document.getElementById("bindtable");
		mainEl.appendChild(maintrone);	
		});
}
showlist(arr);

function search(searchkey){
	var filterarr = arr.filter((item, index) => item.food_name.match(searchkey));
	showlist(filterarr);
}

function seachclick(){
	document.getElementById("search").value = "";
}
