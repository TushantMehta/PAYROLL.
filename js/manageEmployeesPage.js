var url = "./mainEmployee.php";

var data;
var user;


function add_Employee() {

    var fName, lName, email, phoneNo, companyCode;


    fName = document.getElementById('fName').value;
    lName = document.getElementById('lName').value;
    email = document.getElementById('email').value;
    phoneNo = document.getElementById('number').value;
    companyCode = document.getElementById('companyCode').value;

   
    var errors = [];  
    var empty = false; 

    
    if(fName == "" || lName == '' ||  email == "" || phoneNo == "" || companyCode == "" ) {
        empty = true;
        document.getElementById("error").innerHTML = "* Please Enter Details"; 
        //console.log("empty");

    }
    
    if (phoneNo.length != 10) {
        errors.push("Invalid phone Number");
     
    }

    
    if(errors.length > 0 && empty == false) {
        for (var i = 0; i < errors.length; ++i) {
        document.getElementById("error").innerHTML += "* " + errors[i] + "<br>"; 
        

        }
    }


    else if(empty == false) {
        alert("inside empty being false");
        fetch(url,{ method: 'post',
        body: JSON.stringify({"id":Date.now(),"fName":fName,"lName":lName,"email":email,
        "phoneNo":phoneNo,"companyCode":companyCode})

    })

   }

}

function delete_Employee() {

    var fName, lName, email, phoneNo, companyCode;


    fName = document.getElementById('fName').value;
    lName = document.getElementById('lName').value;
    email = document.getElementById('email').value;
    phoneNo = document.getElementById('number').value;
    companyCode = document.getElementById('companyCode').value;

   
    var errors = [];  
    var empty = false; 

    
    if(fName == "" || lName == '' ||  email == "" || phoneNo == "" || companyCode == "" ) {
        empty = true;
        document.getElementById("error").innerHTML = "* Please Enter Details"; 
    }
    
    if (phoneNo.length != 10) {
        errors.push("Invalid phone Number");
     
    }


    if(errors.length > 0 && empty == false) {
        for (var i = 0; i < errors.length; ++i) {
        document.getElementById("error").innerHTML += "* " + errors[i] + "<br>";      

        }
    }
    else if(empty == false) {
        fetch(url,{ method: 'DELETE',
        body: JSON.stringify({"fName":fName,"lName":lName,"email":email,
        "phoneNo":phoneNo,"companyCode":companyCode})

    })

   }

}


function redirectPage() {
    window.location = './loginPage.php';
}

async function loadData() {

    data = await getData();

    if (is_null($data ) == false)
    {
        return; 
    }
    if (is_null($data ) == false)
    { 
        var eml = sessionStorage.getItem("email");

        for(var i = 0; i < data.length; ++i) {
            if(data[i]['email'] == eml) {
                user = data[i];
            }
        }
    
    }



    document.getElementById('fName').value = user['fName'];
    document.getElementById('lName').value =  user['lName'];
    document.getElementById('email').value = user['email'];
    document.getElementById('number').value = user['phoneNo'];
    document.getElementById('companyCode').value = user['companyCode'];
}

async function getData() {

    var res = await fetch(url)
    var dat  = await res.json()
    
    return dat;
}

