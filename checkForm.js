// To check for negative total_number of fruits and calculate total_cost
function validateInput() {

  var no_apple = parseInt(document.forms["form"]["appleTextBox"].value);
  var no_orange = parseInt(document.forms["form"]["orangeTextBox"].value);
  var no_banana = parseInt(document.forms["form"]["bananaTextBox"].value);
  var totalCost = 0.0;

  if (no_apple < 0) { //display error message if the number of apple is negative number
    document.getElementById("appleWarning").innerHTML = "Invalid Input! Number of Apples cannot be a negative number";
  } else {
    document.getElementById("appleWarning").innerHTML = "";
    if(!isNaN(no_apple)){
      totalCost += no_apple * 0.69;
    }
  }


  if (no_orange < 0) { //display error message if the number of orange is negative number
    document.getElementById("orangeWarning").innerHTML = "Invalid Input! Number of Oranges cannot be a negative number";
  } else {
    document.getElementById("orangeWarning").innerHTML = "";
    if(!isNaN(no_orange)){
      totalCost += no_orange * 0.59;
    }
  }

  if (no_banana < 0) { //display error message if the number of banana is negative number
    document.getElementById("bananaWarning").innerHTML = "Invalid Input! Number of Bananas cannot be a negative number";
  } else {
    document.getElementById("bananaWarning").innerHTML = "";
    if(!isNaN(no_banana)){
      totalCost += no_banana * 0.39;
    }
  }

  if(totalCost != 0.0){
    var total = Math.round(totalCost*100)/100; //change cent to dollar
    document.forms["form"]["totalCostTextBox"].value = total;
  }else{
    document.forms["form"]["totalCostTextBox"].value = "NaN";
  }

}

//To check for empty name filed and discoverTextBox
function checkInput(){
  if(document.forms["form"]["nameTextBox"].value === ""){
    document.getElementById("nameWarning").innerHTML = "Please Enter your Name";
    return false;
  }
  if(document.getElementById("DisRB").checked == true){
    if(document.forms["form"]["discoverTextBox"].value === ""){
      document.getElementById("discoverWarning").innerHTML = "Please Enter your Payment Method";
      return false;
    }
  }
}

//Blur the TotalCost textBox
function blurTextBox(){
  document.forms["form"]["totalCostTextBox"].blur();
}

//Show the discoverTextBox
function showDiscover(){
  var box = document.getElementById("discoverTB");
  box.style.display = "block";
}

//Hide the discoverTextBox
function hideDiscover(){
  var box = document.getElementById("discoverTB");
  box.style.display = "none";
}
