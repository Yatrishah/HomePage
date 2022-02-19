var totalHRs = 0;
var totalPayment = 0;

function changeDate() {
	const date = document.getElementById('date').value;
	var dateChange = document.getElementById('dateText');
	dateChange.innerHTML = date;
	// console.log(dateChange);
}

function changeTime() {
	const time = document.getElementById('time').value;
	var timeChange = document.getElementById('timeText');
	timeChange.innerHTML = time;

	// console.log(dateChange);
}

function changeDuration() {
	const duration = document.getElementById('duration').value;
	var durationChange = document.getElementById('durationText');

	durationChange.innerHTML = duration;
	var total = document.getElementById("total");
	total.innerHTML = duration;
	
	var hrs = parseFloat(duration);
	totalHRs = hrs;
	updateTotalTime();
	// console.log(dateChange);
}



var insideCabinet=document.getElementById("insideCabinetCheck");
var insideFridge=document.getElementById("insideFridgeCheck");
var insideOven=document.getElementById("insideOvenCheck");
var laundry=document.getElementById("laundryCheck");
var interior=document.getElementById("interiorCheck");





function cabinetClick(){
	const cabinetText = document.getElementsByName("1")[0];
	
	if(insideCabinet.checked){
		
		cabinetText.style.display = "block";
		totalHRs = totalHRs + 0.5;
	}
	else{
		cabinetText.style.display = "none";
		totalHRs = totalHRs - 0.5;
	}

	updateTotalTime();
}

function fridgeClick(){
	const fridgeText = document.getElementsByName("2")[0];
	
	if(insideFridge.checked){
		
		fridgeText.style.display = "block";
		totalHRs = totalHRs + 0.5;
	}
	else{
		fridgeText.style.display = "none";
		totalHRs = totalHRs - 0.5;
	}

	updateTotalTime();
}
function ovenClick(){
	const ovenText = document.getElementsByName("3")[0];
	
	if(insideOven.checked){
		
		ovenText.style.display = "block";
		totalHRs = totalHRs + 0.5;
	}
	else{
		ovenText.style.display = "none";
		totalHRs = totalHRs - 0.5;
	}

	updateTotalTime();	
}
function laundaryClick(){
	const washText = document.getElementsByName("4")[0];
	
	if(laundry.checked){
		
		washText.style.display = "block";
		totalHRs = totalHRs + 0.5;
	}
	else{
		washText.style.display = "none";
		totalHRs = totalHRs - 0.5;
	}

	updateTotalTime();
}
function interiorClick(){
	const windowsText = document.getElementsByName("5")[0];
	
	if(interior.checked){
		
		windowsText.style.display = "block";
		totalHRs = totalHRs + 0.5;
	}
	else{
		windowsText.style.display = "none";
		totalHRs = totalHRs - 0.5;
	}
	updateTotalTime();
	
}


function updateTotalTime() {
	const totalTime = document.getElementById("total");
	totalTime.innerHTML = totalHRs;
	const totalPay = document.getElementById("totalPay");
	totalPay.innerHTML = totalHRs * 100;
	const totalPayment = document.getElementById("totalPayment");
	totalPayment.innerHTML = totalPay.innerHTML - 27;
}

