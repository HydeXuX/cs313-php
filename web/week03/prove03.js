var pay = [0, 0, 0, 0];

function fun() {
    for (var i = 0; i < items.length; i++) {
        console.log(items[i]);
        if (items[i] == true) {
            good = true;
        } else {
            good = false;
        }
    }
    if (good == true) {
        console.log("good");
    } else {
        console.log("bad");
    }
}


function total(amount, theNum) {
    if (theNum == 1) {
        console.log("1");
        if (document.getElementById("blue").checked == true) {
            console.log("2");
            pay[0] = amount;
            items[8] = true;
        }
        if (document.getElementById("blue").checked == false) {
            pay[0] = 0;
            items[8] = false;
        }
    }
    if (theNum == 2) {
        console.log("2");
        if (document.getElementById("dark").checked == true) {
            console.log("2");
            pay[1] = amount;
            items[8] = true;
        }
        if (document.getElementById("dark").checked == false) {
            pay[1] = 0;
            items[8] = false;
        }
    }
    if (theNum == 3) {
        console.log("3");
        if (document.getElementById("lube").checked == true) {
            console.log("3");
            pay[2] = 10;
            items[8] = true;
        }
        if (document.getElementById("lube").checked == false) {
            pay[2] = 0;
            items[8] = false;
        }
    }
    if (theNum == 4) {
        console.log("4");
        if (document.getElementById("lube2").checked == true) {
            console.log("2");
            pay[3] = 20;
            items[8] = true;
        }
        if (document.getElementById("lube2").checked == false) {
            pay[3] = 0;
            items[8] = false;
        }
    }
    console.log(pay[0], pay[1], pay[2], pay[3]);
}

function display() {
    var amount = 0;
    for (var i = 0; i < pay.length; i++) {
        amount = amount + pay[i];
        console.log(amount);
    }
    if (document.getElementById("amount").innerHTML = amount) {
        console.log(1212121);
    }
}

function update() {
    for (var i = 0; i < items.length; i++) {
        console.log(items[i] + "  ");
        if (items[i] == false) {
            console.log(items[i] + "  ");
            document.getElementById("err").innerHTML = "Invaild " + keyword[i];
            break;
        } else {
            document.getElementById("err").innerHTML = "You are at set and ready to submit!";
        }
    }
}