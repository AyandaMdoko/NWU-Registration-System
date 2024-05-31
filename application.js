const inputElement = document.getElementById('eightDigitInput');

inputElement.addEventListener('input', function() {
  // Remove any non-digit characters
  let inputValue = inputElement.value.replace(/\D/g, '');

  // Limit input to 8 digits
  if (inputValue.length > 8) {
    inputValue = inputValue.slice(0, 8);
  }

  // Update the input value
  inputElement.value = inputValue; 

  const inputElement = document.getElementById('IdBio');

  inputElement.addEventListener('input', function() {
   // Remove any non-digit characters
   let inputValue = inputElement.value.replace(/\D/g, '');
 
   // Limit input to 8 digits
   if (inputValue.length > 13) {
     inputValue = inputValue.slice(0, 13);
   }
 
   // Update the input value
   inputElement.value = inputValue;

   const inputElement = document.getElementById('UniNum-Father');

 inputElement.addEventListener('input', function() {
  // Remove any non-digit characters
  let inputValue = inputElement.value.replace(/\D/g, '');

  // Limit input to 8 digits
  if (inputValue.length > 8) {
    inputValue = inputValue.slice(0, 8);
  }

  // Update the input value
  inputElement.value = inputValue;

  const inputElement = document.getElementById('home-Num');

  inputElement.addEventListener('input', function() {
   // Remove any non-digit characters
   let inputValue = inputElement.value.replace(/\D/g, '');
 
   // Limit input to 8 digits
   if (inputValue.length > 3) {
     inputValue = inputValue.slice(0, 3);
   }
 
   // Update the input value
   inputElement.value = inputValue;

   const inputElement = document.getElementById('homeNum');

   inputElement.addEventListener('input', function() {
    // Remove any non-digit characters
    let inputValue = inputElement.value.replace(/\D/g, '');
  
    // Limit input to 8 digits
    if (inputValue.length > 9) {
      inputValue = inputValue.slice(0, 9);
    }
  
    // Update the input value
    inputElement.value = inputValue;

    const inputElement = document.getElementById('cell-Num');

    inputElement.addEventListener('input', function() {
     // Remove any non-digit characters
     let inputValue = inputElement.value.replace(/\D/g, '');
   
     // Limit input to 8 digits
     if (inputValue.length > 3) {
       inputValue = inputValue.slice(0, 3);
     }
    
      // Update the input value
      inputElement.value = inputValue;

      const inputElement = document.getElementById('cellNum');

      inputElement.addEventListener('input', function() {
       // Remove any non-digit characters
       let inputValue = inputElement.value.replace(/\D/g, '');
     
       // Limit input to 8 digits
       if (inputValue.length > 9) {
         inputValue = inputValue.slice(0, 9);
       }
     
       // Update the input value
       inputElement.value = inputValue;

       const inputElement = document.getElementById('acc-Num');

       inputElement.addEventListener('input', function() {
        // Remove any non-digit characters
        let inputValue = inputElement.value.replace(/\D/g, '');
      
        // Limit input to 8 digits
        if (inputValue.length > 3) {
          inputValue = inputValue.slice(0, 3);
        }
      
        // Update the input value
        inputElement.value = inputValue;

        const inputElement = document.getElementById('accNum');

        inputElement.addEventListener('input', function() {
         // Remove any non-digit characters
         let inputValue = inputElement.value.replace(/\D/g, '');
       
         // Limit input to 8 digits
         if (inputValue.length > 9) {
           inputValue = inputValue.slice(0, 9);
         }
       
         // Update the input value
         inputElement.value = inputValue;

         const inputElement = document.getElementById('zipCode');

         inputElement.addEventListener('input', function() {
          // Remove any non-digit characters
          let inputValue = inputElement.value.replace(/\D/g, '');
        
          // Limit input to 8 digits
          if (inputValue.length > 4) {
            inputValue = inputValue.slice(0, 4);
          }
        
          // Update the input value
          inputElement.value = inputValue;
      
         });
     
        });
    
       });
   
      });
 
    });

   });

  });

 });

});

});

function isChecked(){
   if (document.getElementById("firstYear-M").checked){
      document.getElementById("first-Year-M").style.visibility="visible";
   }
   else{
      document.getElementById("first-Year-M").style.visibility="hidden";
   }

   if(document.getElementById("firstYear-E").checked){
      document.getElementById("first-Year-E").style.visibility="visible";
   }
   else{
      document.getElementById("first-Year-E").style.visibility="hidden";
   }

   if(document.getElementById("SecondYear-M").checked){
      document.getElementById("Second-Year-M").style.visibility="visible";
   }
   else{
      document.getElementById("Second-Year-M").style.visibility="hidden";
   }

   if(document.getElementById("SecondYear-E").checked){
      document.getElementById("Second-Year-E").style.visibility="visible";
   }
   else{
      document.getElementById("Second-Year-E").style.visibility="hidden";
   }

   if(document.getElementById("ThirdYear-E").checked){
      document.getElementById("Third-Year-E").style.visibility="visible";
   }
   else{
      document.getElementById("Third-Year-E").style.visibility="hidden";
   }
}

function checkMark(){
 
   //First Year Modules Main-Stream  
   var ALDE111M_passmark = document.getElementById("mark-ALDE111").value;

   if ( ALDE111M_passmark >= 0 &&  ALDE111M_passmark <= 49 ){
      document.getElementById("level-ALDE111").value ="Fail";
   }
   else if( ALDE111M_passmark >= 50 &&  ALDE111M_passmark <= 74){
        document.getElementById("level-ALDE111").value ="Pass";
   }
   else if( ALDE111M_passmark >= 75 &&  ALDE111M_passmark <= 100){
      document.getElementById("level-ALDE111").value ="Distinction";
 }
   else {
      alert (" Please enter a valid number between 0 and 100");
   } 
   
   var ALDE122M_passmark = document.getElementById("mark-ALDE122").value;

   if ( ALDE122M_passmark >= 0 &&  ALDE122M_passmark <= 49 ){
      document.getElementById("level-ALDE122").value ="Fail";
   }
   else if( ALDE122M_passmark >= 50 &&  ALDE122M_passmark <= 74){
        document.getElementById("level-ALDE122").value ="Pass";
   }
   else if( ALDE122M_passmark >= 75 &&  ALDE122M_passmark <= 100){
      document.getElementById("level-ALDE122").value ="Distinction";
 }
   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var ACFS111M_passmark = document.getElementById("mark-ACFS111M").value;

   if ( ACFS111M_passmark >= 0 &&  ACFS111M_passmark <= 49 ){
      document.getElementById("level-ACFS111M").value ="Fail";
   }
   else if(ACFS111M_passmark >= 50 &&  ACFS111M_passmark <= 74){
        document.getElementById("level-ACFS111M").value ="Pass";
   }
   else if( ACFS111M_passmark >= 75 &&  ACFS111M_passmark <= 100){
      document.getElementById("level-ACFS111M").value ="Distinction";
 }
   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var ACFS121M_passmark = document.getElementById("mark-ACFS121M").value;

   if ( ACFS121M_passmark >= 0 &&  ACFS121M_passmark <= 49 ){
      document.getElementById("level-ACFS121M").value ="Fail";
   }
   else if(ACFS121M_passmark >= 50 &&  ACFS121M_passmark <= 74){
        document.getElementById("level-ACFS121M").value ="Pass";
   }
   else if( ACFS121M_passmark >= 75 &&  ACFS121M_passmark <= 100){
      document.getElementById("level-ACFS121M").value ="Distinction";
   } 

   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var BMAN111M_passmark = document.getElementById("mark-BMAN111M").value;

   if ( BMAN111M_passmark >= 0 &&  BMAN111M_passmark <= 49 ){
      document.getElementById("level-BMAN111M").value ="Fail";
   }
   else if(BMAN111M_passmark >= 50 &&  BMAN111M_passmark <= 74){
        document.getElementById("level-BMAN111M").value ="Pass";
   }
   else if( BMAN111M_passmark >= 75 &&  BMAN111M_passmark <= 100){
      document.getElementById("level-BMAN111M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   
   var BMAN121M_passmark = document.getElementById("mark-BMAN121M").value;

   if ( BMAN121M_passmark >= 0 &&  BMAN121M_passmark <= 49 ){
      document.getElementById("level-BMAN121M").value ="Fail";
   }
   else if(BMAN121M_passmark >= 50 &&  BMAN121M_passmark <= 74){
        document.getElementById("level-BMAN121M").value ="Pass";
   }
   else if( BMAN121M_passmark >= 75 &&  BMAN121M_passmark <= 100){
      document.getElementById("level-BMAN121M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   }
   
   var ECON112M_passmark = document.getElementById("mark-ECON112M").value;

   if ( ECON112M_passmark >= 0 &&  ECON112M_passmark <= 49 ){
      document.getElementById("level-ECON112M").value ="Fail";
   }
   else if(ECON112M_passmark >= 50 &&  ECON112M_passmark <= 74){
        document.getElementById("level-ECON112M").value ="Pass";
   }
   else if( ECON112M_passmark >= 75 &&  ECON112M_passmark <= 100){
      document.getElementById("level-ECON112M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var ECON122M_passmark = document.getElementById("mark-ECON122M").value;

   if (ECON122M_passmark >= 0 &&  ECON122M_passmark <= 49 ){
      document.getElementById("level-ECON122M").value ="Fail";
   }
   else if(ECON122M_passmark >= 50 &&  ECON122M_passmark <= 74){
        document.getElementById("level-ECON122M").value ="Pass";
   }
   else if(ECON122M_passmark >= 75 &&  ECON122M_passmark <= 100){
      document.getElementById("level-ECON122M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var INFS113M_passmark = document.getElementById("mark-INFS113M").value;

   if (INFS113M_passmark >= 0 &&  INFS113M_passmark <= 49 ){
      document.getElementById("level-INFS113M").value ="Fail";
   }
   else if(INFS113M_passmark >= 50 &&  INFS113M_passmark <= 74){
        document.getElementById("level-INFS113M").value ="Pass";
   }
   else if(INFS113M_passmark >= 75 &&  INFS113M_passmark <= 100){
      document.getElementById("level-INFS113M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var INFS122M_passmark = document.getElementById("mark-INFS122M").value;

   if (INFS122M_passmark >= 0 &&  INFS122M_passmark <= 49 ){
      document.getElementById("level-INFS122M").value ="Fail";
   }
   else if(INFS122M_passmark >= 50 &&  INFS122M_passmark <= 74){
        document.getElementById("level-INFS122M").value ="Pass";
   }
   else if(INFS122M_passmark >= 75 &&  INFS122_passmark <= 100){
      document.getElementById("level-INFS122M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   } 

   var STFM111M_passmark = document.getElementById("mark-STFM111M").value;

   if (STFM111M_passmark >= 0 &&  STFM111M_passmark <= 49 ){
      document.getElementById("level-STFM111M").value ="Fail";
   }
   else if(STFM111M_passmark >= 50 &&  STFM111M_passmark <= 74){
        document.getElementById("level-STFM111M").value ="Pass";
   }
   else if(STFM111M_passmark >= 75 &&  STFM111M_passmark <= 100){
      document.getElementById("level-STFM111M").value ="Distinction";
   }

   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var STFM125M_passmark = document.getElementById("mark-STFM125M").value;

   if (STFM125M_passmark >= 0 &&  STFM125M_passmark <= 49 ){
      document.getElementById("level-STFM125M").value ="Fail";
   }
   else if(STFM125M_passmark >= 50 &&  STFM125M_passmark <= 74){
        document.getElementById("level-STFM125M").value ="Pass";
   }
   else if(STFM125M_passmark >= 75 &&  STFM125M_passmark <= 100){
      document.getElementById("level-STFM125M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   //Second Year Main-Stream Modules
   var INFS211M_passmark = document.getElementById("mark-INFS211M").value;

   if ( INFS211M_passmark >= 0 &&   INFS211M_passmark <= 49 ){
      document.getElementById("level-INFS211M").value ="Fail";
   }
   else if( INFS211M_passmark >= 50 &&   INFS211M_passmark <= 74){
        document.getElementById("level-INFS211M").value ="Pass";
   }
   else if( INFS211M_passmark >= 75 &&   INFS211M_passmark <= 100){
      document.getElementById("level-INFS211M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS212M_passmark = document.getElementById("mark-INFS212M").value;

   if ( INFS212M_passmark >= 0 &&   INFS212M_passmark <= 49 ){
      document.getElementById("level-INFS212M").value ="Fail";
   }
   else if( INFS212M_passmark >= 50 &&   INFS212M_passmark <= 74){
        document.getElementById("level-INFS212M").value ="Pass";
   }
   else if( INFS212M_passmark >= 75 &&   INFS212M_passmark <= 100){
      document.getElementById("level-INFS212M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS213M_passmark = document.getElementById("mark-INFS213M").value;

   if ( INFS213M_passmark >= 0 &&   INFS213M_passmark <= 49 ){
      document.getElementById("level-INFS213M").value ="Fail";
   }
   else if( INFS213M_passmark >= 50 &&   INFS213M_passmark <= 74){
        document.getElementById("level-INFS213M").value ="Pass";
   }
   else if( INFS213M_passmark >= 75 &&   INFS213M_passmark <= 100){
      document.getElementById("level-INFS213M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS214M_passmark = document.getElementById("mark-INFS214M").value;

   if ( INFS214M_passmark >= 0 &&   INFS214M_passmark <= 49 ){
      document.getElementById("level-INFS214M").value ="Fail";
   }
   else if( INFS214M_passmark >= 50 &&   INFS214M_passmark <= 74){
        document.getElementById("level-INFS214M").value ="Pass";
   }
   else if( INFS214M_passmark >= 75 &&   INFS214M_passmark <= 100){
      document.getElementById("level-INFS214M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS221M_passmark = document.getElementById("mark-INFS221M").value;

   if ( INFS221M_passmark >= 0 &&   INFS221M_passmark <= 49 ){
      document.getElementById("level-INFS221M").value ="Fail";
   }
   else if( INFS221M_passmark >= 50 &&   INFS221M_passmark <= 74){
        document.getElementById("level-INFS221M").value ="Pass";
   }
   else if( INFS221M_passmark >= 75 &&   INFS221M_passmark <= 100){
      document.getElementById("level-INFS221M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS222M_passmark = document.getElementById("mark-INFS222M").value;

   if ( INFS222M_passmark >= 0 &&   INFS222M_passmark <= 49 ){
      document.getElementById("level-INFS222M").value ="Fail";
   }
   else if( INFS222M_passmark >= 50 &&   INFS222M_passmark <= 74){
        document.getElementById("level-INFS222M").value ="Pass";
   }
   else if( INFS222M_passmark >= 75 &&   INFS222M_passmark <= 100){
      document.getElementById("level-INFS222M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS223M_passmark = document.getElementById("mark-INFS223M").value;

   if ( INFS223M_passmark >= 0 &&   INFS223M_passmark <= 49 ){
      document.getElementById("level-INFS223M").value ="Fail";
   }
   else if( INFS223M_passmark >= 50 &&   INFS223M_passmark <= 74){
        document.getElementById("level-INFS223M").value ="Pass";
   }
   else if( INFS223M_passmark >= 75 &&   INFS223M_passmark <= 100){
      document.getElementById("level-INFS223M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS224M_passmark = document.getElementById("mark-INFS224M").value;

   if ( INFS224M_passmark >= 0 &&   INFS224M_passmark <= 49 ){
      document.getElementById("level-INFS224M").value ="Fail";
   }
   else if( INFS224M_passmark >= 50 &&   INFS224M_passmark <= 74){
        document.getElementById("level-INFS224M").value ="Pass";
   }
   else if( INFS224M_passmark >= 75 &&   INFS224M_passmark <= 100){
      document.getElementById("level-INFS224M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var WVES222M_passmark = document.getElementById("mark-WVES222M").value;

   if ( WVES222M_passmark >= 0 &&   WVES222M_passmark <= 49 ){
      document.getElementById("level-WVES222M").value ="Fail";
   }
   else if( WVES222M_passmark >= 50 &&  WVES222M_passmark <= 74){
        document.getElementById("level-WVES222M").value ="Pass";
   }
   else if( WVES222M_passmark >= 75 && WVES222M_passmark <= 100){
      document.getElementById("level-WVES222M").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   //Third Year Modules Extended

   var ACFS111E_passmark = document.getElementById("mark-ACFS111E").value;

   if ( ACFS111E_passmark >= 0 &&   ACFS111E_passmark <= 49 ){
      document.getElementById("level-ACFS111E").value ="Fail";
   }
   else if( ACFS111E_passmark >= 50 &&  ACFS111E_passmark <= 74){
        document.getElementById("level-ACFS111E").value ="Pass";
   }
   else if( ACFS111E_passmark >= 75 && ACFS111E_passmark <= 100){
      document.getElementById("level-ACFS111E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var ACFS121E_passmark = document.getElementById("mark-ACFS121E").value;

   if ( ACFS121E_passmark >= 0 &&   ACFS121E_passmark <= 49 ){
      document.getElementById("level-ACFS121E").value ="Fail";
   }
   else if( ACFS121E_passmark >= 50 &&  ACFS121E_passmark <= 74){
        document.getElementById("level-ACFS121E").value ="Pass";
   }
   else if( ACFS121E_passmark >= 75 && ACFS121E_passmark <= 100){
      document.getElementById("level-ACFS121E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS213E_passmark = document.getElementById("mark-INFS213E").value;

   if ( INFS213E_passmark >= 0 &&   INFS213E_passmark <= 49 ){
      document.getElementById("level-INFS213E").value ="Fail";
   }
   else if( INFS213E_passmark >= 50 &&  INFS213E_passmark <= 74){
        document.getElementById("level-INFS213E").value ="Pass";
   }
   else if( INFS213E_passmark >= 75 && INFS213E_passmark <= 100){
      document.getElementById("level-INFS213E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS214E_passmark = document.getElementById("mark-INFS214E").value;

   if ( INFS214E_passmark >= 0 &&   INFS214E_passmark <= 49 ){
      document.getElementById("level-INFS214E").value ="Fail";
   }
   else if( INFS214E_passmark >= 50 &&  INFS214E_passmark <= 74){
        document.getElementById("level-INFS214E").value ="Pass";
   }
   else if( INFS214E_passmark >= 75 && INFS214E_passmark <= 100){
      document.getElementById("level-INFS214E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS223E_passmark = document.getElementById("mark-INFS223E").value;

   if ( INFS223E_passmark >= 0 &&   INFS223E_passmark <= 49 ){
      document.getElementById("level-INFS223E").value ="Fail";
   }
   else if( INFS223E_passmark >= 50 &&  INFS223E_passmark <= 74){
        document.getElementById("level-INFS223E").value ="Pass";
   }
   else if( INFS223E_passmark >= 75 && INFS223E_passmark <= 100){
      document.getElementById("level-INFS223E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var INFS224E_passmark = document.getElementById("mark-INFS224E").value;

   if ( INFS224E_passmark >= 0 &&   INFS224E_passmark <= 49 ){
      document.getElementById("level-INFS224E").value ="Fail";
   }
   else if( INFS224E_passmark >= 50 &&  INFS224E_passmark <= 74){
        document.getElementById("level-INFS224E").value ="Pass";
   }
   else if( INFS224E_passmark >= 75 && INFS224E_passmark <= 100){
      document.getElementById("level-INFS224E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }

   var WVES222E_passmark = document.getElementById("mark-WVES222E").value;

   if ( WVES222M_passmark >= 0 &&   WVES222M_passmark <= 49 ){
      document.getElementById("level-WVES222E").value ="Fail";
   }
   else if( WVES222M_passmark >= 50 &&  WVES222M_passmark <= 74){
        document.getElementById("level-WVES222E").value ="Pass";
   }
   else if( WVES222M_passmark >= 75 && WVES222M_passmark <= 100){
      document.getElementById("level-WVES222E").value ="Distinction";
   }
   else {
      alert (" Please enter a valid number between 0 and 100");
   }


//First Year Module (Extended)
var ALDE111E_passmark = document.getElementById("mark-ALDE111E").value;

if (ALDE111E_passmark >= 0 &&  ALDE111E_passmark <= 49 ){
   document.getElementById("level-ALDE111E").value ="Fail";
}
else if(ALDE111E_passmark >= 50 && ALDE111E_passmark <= 74){
     document.getElementById("level-ALDE111E").value ="Pass";
}
else if(ALDE111E_passmark >= 75 &&  ALDE111E_passmark <= 100){
   document.getElementById("level-ALDE111E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var ALDE122E_passmark = document.getElementById("mark-ALDE122E").value;

if (ALDE122E_passmark >= 0 &&  ALDE122E_passmark <= 49 ){
   document.getElementById("level-ALDE122E").value ="Fail";
}
else if(ALDE122E_passmark >= 50 && ALDE122E_passmark <= 74){
     document.getElementById("level-ALDE122E").value ="Pass";
}
else if(ALDE122E_passmark >= 75 &&  ALDE122E_passmark <= 100){
   document.getElementById("level-ALDE122E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var BMAN111E_passmark = document.getElementById("mark-BMAN111E").value;

if (BMAN111E_passmark >= 0 &&  BMAN111E_passmark <= 49 ){
   document.getElementById("level-BMAN111E").value ="Fail";
}
else if(BMAN111E_passmark >= 50 && BMAN111E_passmark <= 74){
     document.getElementById("level-BMAN111E").value ="Pass";
}
else if(BMAN111E_passmark >= 75 &&  BMAN111E_passmark <= 100){
   document.getElementById("level-BMAN111E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var BMAN121E_passmark = document.getElementById("mark-BMAN121E").value;

if (BMAN121E_passmark >= 0 &&  BMAN121E_passmark <= 49 ){
   document.getElementById("level-BMAN121E").value ="Fail";
}
else if(BMAN121E_passmark >= 50 && BMAN121E_passmark <= 74){
     document.getElementById("level-BMAN121E").value ="Pass";
}
else if(BMAN121E_passmark >= 75 &&  BMAN121E_passmark <= 100){
   document.getElementById("level-BMAN121E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var ICOM111E_passmark = document.getElementById("mark-ICOM111E").value;

if (ICOM111E_passmark >= 0 &&  ICOM111E_passmark <= 49 ){
   document.getElementById("level-ICOM111E").value ="Fail";
}
else if(ICOM111E_passmark >= 50 && ICOM111E_passmark <= 74){
     document.getElementById("level-ICOM111E").value ="Pass";
}
else if(ICOM111E_passmark >= 75 &&  ICOM111E_passmark <= 100){
   document.getElementById("level-ICOM111E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var INFS113E_passmark = document.getElementById("mark-INFS113E").value;

if (INFS113E_passmark >= 0 &&  INFS113E_passmark <= 49 ){
   document.getElementById("level-INFS113E").value ="Fail";
}
else if(INFS113E_passmark >= 50 && INFS113E_passmark <= 74){
     document.getElementById("level-INFS113E").value ="Pass";
}
else if(INFS113E_passmark >= 75 &&  INFS113E_passmark <= 100){
   document.getElementById("level-INFS113E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var INFS122E_passmark = document.getElementById("mark-INFS122E").value;

if (INFS122E_passmark >= 0 &&  INFS122E_passmark <= 49 ){
   document.getElementById("level-INFS122E").value ="Fail";
}
else if(INFS122E_passmark >= 50 && INFS122E_passmark <= 74){
     document.getElementById("level-INFS122E").value ="Pass";
}
else if(INFS122E_passmark >= 75 &&  INFS122E_passmark <= 100){
   document.getElementById("level-INFS122E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var MTHS119E_passmark = document.getElementById("mark-MTHS119E").value;

if (MTHS119E_passmark >= 0 &&  MTHS119E_passmark <= 49 ){
   document.getElementById("level-MTHS119E").value ="Fail";
}
else if(MTHS119E_passmark >= 50 && MTHS119E_passmark <= 74){
     document.getElementById("level-MTHS119E").value ="Pass";
}
else if(MTHS119E_passmark >= 75 &&  MTHS119E_passmark <= 100){
   document.getElementById("level-MTHS119E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var MTHS129E_passmark = document.getElementById("mark-MTHS129E").value;

if (MTHS129E_passmark >= 0 &&  MTHS129E_passmark <= 49 ){
   document.getElementById("level-MTHS129E").value ="Fail";
}
else if(MTHS129E_passmark >= 50 && MTHS129E_passmark <= 74){
     document.getElementById("level-MTHS129E").value ="Pass";
}
else if(MTHS129E_passmark >= 75 &&  MTHS129E_passmark <= 100){
   document.getElementById("level-MTHS129E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}


//Second Year Modules (Extended)
var ECAT121E_passmark = document.getElementById("mark-ECAT121E").value;

if (ECAT121E_passmark >= 0 &&  ECAT121E_passmark <= 49 ){
   document.getElementById("level-ECAT121E").value ="Fail";
}
else if(ECAT121E_passmark >= 50 && ECAT121E_passmark <= 74){
     document.getElementById("level-ECAT121E").value ="Pass";
}
else if(ECAT121E_passmark >= 75 &&  ECAT121E_passmark <= 100){
   document.getElementById("level-ECAT121E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var ECON112E_passmark = document.getElementById("mark-ECON112E").value;

if (ECON112E_passmark >= 0 &&  ECON112E_passmark <= 49 ){
   document.getElementById("level-ECON112E").value ="Fail";
}
else if(ECON112E_passmark >= 50 && ECON112E_passmark <= 74){
     document.getElementById("level-ECON112E").value ="Pass";
}
else if(ECON112E_passmark >= 75 &&  ECON112E_passmark <= 100){
   document.getElementById("level-ECON112E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var ECON122E_passmark = document.getElementById("mark-ECON122E").value;

if (ECON122E_passmark >= 0 &&  ECON122E_passmark <= 49 ){
   document.getElementById("level-ECON122E").value ="Fail";
}
else if(ECON122E_passmark >= 50 && ECON122E_passmark <= 74){
     document.getElementById("level-ECON122E").value ="Pass";
}
else if(ECON122E_passmark >= 75 &&  ECON122E_passmark <= 100){
   document.getElementById("level-ECON122E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var ICAT111E_passmark = document.getElementById("mark-ICAT111E").value;

if (ICAT111E_passmark >= 0 &&  ICAT111E_passmark <= 49 ){
   document.getElementById("level-ICAT111E").value ="Fail";
}
else if(ICAT111E_passmark >= 50 && ICAT111E_passmark <= 74){
     document.getElementById("level-ICAT111E").value ="Pass";
}
else if(ICAT111E_passmark >= 75 &&  ICAT111E_passmark <= 100){
   document.getElementById("level-ICAT111E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var INFS211E_passmark = document.getElementById("mark-INFS211E").value;

if (INFS211E_passmark >= 0 &&  INFS211E_passmark <= 49 ){
   document.getElementById("level-INFS211E").value ="Fail";
}
else if(INFS211E_passmark >= 50 && INFS211E_passmark <= 74){
     document.getElementById("level-INFS211E").value ="Pass";
}
else if(INFS211E_passmark >= 75 &&  INFS211E_passmark <= 100){
   document.getElementById("level-INFS211E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var INFS212E_passmark = document.getElementById("mark-INFS212E").value;

if (INFS212E_passmark >= 0 &&  INFS212E_passmark <= 49 ){
   document.getElementById("level-INFS212E").value ="Fail";
}
else if(INFS212E_passmark >= 50 && INFS212E_passmark <= 74){
     document.getElementById("level-INFS212E").value ="Pass";
}
else if(INFS212E_passmark >= 75 &&  INFS212E_passmark <= 100){
   document.getElementById("level-INFS212E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var INFS221E_passmark = document.getElementById("mark-INFS221E").value;

if (INFS221E_passmark >= 0 &&  INFS221E_passmark <= 49 ){
   document.getElementById("level-INFS221E").value ="Fail";
}
else if(INFS221E_passmark >= 50 && INFS221E_passmark <= 74){
     document.getElementById("level-INFS221E").value ="Pass";
}
else if(INFS221E_passmark >= 75 &&  INFS221E_passmark <= 100){
   document.getElementById("level-INFS221E").value ="Distinction";
}
else {
   alert (" Please enter a valid number between 0 and 100");
}

var INFS222E_passmark = document.getElementById("mark-INFS222E").value;

if (INFS222E_passmark >= 0 &&  INFS222E_passmark <= 49 ){
   document.getElementById("level-INFS222E").value ="Fail";
}
else if(INFS222E_passmark >= 50 && INFS222E_passmark <= 74){
     document.getElementById("level-INFS222E").value ="Pass";
}
else if(INFS222E_passmark >= 75 &&  INFS222E_passmark <= 100){
   document.getElementById("level-INFS222E").value ="Distinction";
}else {
   alert (" Please enter a valid number between 0 and 100");
}

var STFM111E_passmark = document.getElementById("mark-STFM111E").value;

if (STFM111E_passmark >= 0 &&  STFM111E_passmark <= 49 ){
   document.getElementById("level-STFM111E").value ="Fail";
}
else if(STFM111E_passmark >= 50 && STFM111E_passmark <= 74){
     document.getElementById("level-STFM111E").value ="Pass";
}
else if(STFM111E_passmark >= 75 &&  STFM111E_passmark <= 100){
   document.getElementById("level-STFM111E").value ="Distinction";
}else {
   alert (" Please enter a valid number between 0 and 100");
}

var STFM125E_passmark = document.getElementById("mark-STFM125E").value;

if (STFM125E_passmark >= 0 &&  STFM125E_passmark <= 49 ){
   document.getElementById("level-STFM125E").value ="Fail";
}
else if(STFM125E_passmark >= 50 && STFM125E_passmark <= 74){
     document.getElementById("level-STFM125E").value ="Pass";
}
else if(STFM125E_passmark >= 75 &&  STFM125E_passmark <= 100){
   document.getElementById("level-STFM125E").value ="Distinction";
}else {
   alert (" Please enter a valid number between 0 and 100");
}

   
   
}




