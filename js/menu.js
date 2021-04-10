function viewlist(){
	var d = [{
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
	net_price: 150,
}									
];

		for(var i = 0; i<d.length; i++){
		var maintrone = document.createElement("tr");
		
		var td = document.createElement("td");
		td.innerHTML = d[i].sno;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = d[i].food_name;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = d[i].price;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = d[i].discount;
		maintrone.appendChild(td);
		
		var td = document.createElement("td");
		td.innerHTML = d[i].net_price;
		maintrone.appendChild(td);
		
		var mainEl = document.getElementById("bindtable");
		mainEl.appendChild(maintrone);	
	}
}