document.addEventListener("DOMContentLoaded", function() {

  var markALDE111 = document.getElementById("mark-ALDE111");
  var cbALDE111M = document.getElementById("cb-ALDE111M");
  var tableSecondYear = document.getElementById("Second-Year-M");

  markALDE111.addEventListener("change", function() {
    var markValue = parseInt(markALDE111.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="ALDE111-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-ALDE111M" checked>
        </td>
        <td id="ALDE111-Heading"> ALDE 111 Academic Literacy Development</td>
      `;
      tableSecondYear.appendChild(newRow);
    }
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
  });

  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_ALDE111M");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });
});



  document.addEventListener("DOMContentLoaded", function() {
  var markALDE122M = document.getElementById("mark-ALDE122M");
  var tableSecondYear = document.getElementById("Second-Year-M");

  markALDE122M.addEventListener("change", function() {
    var markValue = parseInt(markALDE122M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="ALDE122M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-ALDE122M" checked>
        </td>
        <td id="ALDE122M-Heading"> ALDE 122 Academic Literacy Development </td>
      `;
      tableSecondYear.appendChild(newRow);
    }
    var ALDE122M_passmark = document.getElementById("mark-ALDE122M").value;

 if ( ALDE122M_passmark >= 0 &&  ALDE122M_passmark <= 49 ){
    document.getElementById("level-ALDE122M").value ="Fail";
 }
 else if( ALDE122M_passmark >= 50 &&  ALDE122M_passmark <= 74){
      document.getElementById("level-ALDE122M").value ="Pass";
 }
 else if( ALDE122M_passmark >= 75 &&  ALDE122M_passmark <= 100){
    document.getElementById("level-ALDE122M").value ="Distinction";
}
 else {
    alert (" Please enter a valid number between 0 and 100");
 } 
  });
  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_ALDE122M");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });
});




  document.addEventListener("DOMContentLoaded", function() {
  var markACFS111M = document.getElementById("mark-ACFS111M");
  var cbACFS111M = document.getElementById("cb-ACFS111M");
  

  markACFS111M.addEventListener("change", function() {
    var markValue = parseInt(markACFS111M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="ACFS111M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-ACFS111M" checked>
        </td>
        <td id="ACFS111M-Heading"> ACFS 111 Financial Accounting Special </td>
      `;
      tableSecondYear.appendChild(newRow);
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
  });

  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_ACFS111");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });

});

  document.addEventListener("DOMContentLoaded", function() {
  var markACFS121M = document.getElementById("mark-ACFS121M");
  var cbACFS121M = document.getElementById("cb-ACFS121M");


  markACFS121M.addEventListener("change", function() {
    var markValue = parseInt(markACFS121M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="ACFS121M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-ACFS121M" checked>
        </td>
        <td id="ACFS121M-Heading"> ACFS 121 Financial Accounting Special </td>
      `;
      tableSecondYear.appendChild(newRow);
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
  });
  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_ACFS121");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });

});


  document.addEventListener("DOMContentLoaded", function() {
  var markBMAN111M = document.getElementById("mark-BMAN111M");
  var cbBMAN111M = document.getElementById("cb-BMAN111M");

  markBMAN111M.addEventListener("change", function() {
    var markValue = parseInt(markBMAN111M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="BMAN111M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-BMAN111M" checked>
        </td>
        <td id="BMAN111M-Heading"> BMAN 111 Introduction to Business Management </td>
      `;
      tableSecondYear.appendChild(newRow);
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
  });
  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_BMAN111M");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });
});

  document.addEventListener("DOMContentLoaded", function() {
  var markBMAN121M = document.getElementById("mark-BMAN121M");
  var cbBMAN121M = document.getElementById("cb-BMAN121M");

  markBMAN121M.addEventListener("change", function() {
    var markValue = parseInt(markBMAN121M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="BMAN121M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-BMAN121M" checked>
        </td>
        <td id="BMAN121M-Heading"> BMAN 121 General Management </td>
      `;
      tableSecondYear.appendChild(newRow);
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
  });

  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_BMAN121M");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });

});

  document.addEventListener("DOMContentLoaded", function() {
  var markECON112M = document.getElementById("mark-ECON112M");
  var cbECON112M = document.getElementById("cb-ECON112M");

  markECON112M.addEventListener("change", function() {
    var markValue = parseInt(markECON112M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="ECON112M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-ECON112M" checked>
        </td>
        <td id="ECON112M-Heading"> ECON 112 Basic Micro-economics</td>
      `;
      tableSecondYear.appendChild(newRow);
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
  });

  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_ECON112");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });


});

  document.addEventListener("DOMContentLoaded", function() {
  var markECON122M = document.getElementById("mark-ECON122M");
  var cbECON122M = document.getElementById("cb-ECON122M");

  markECON122M.addEventListener("change", function() {
    var markValue = parseInt(markECON122M.value);
    if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
        <td id="ECON122M-Checkbox">
          <input type="checkbox" name="modules[]" id="cb-ECON122M" checked>
        </td>
        <td id="ECON122M-Heading"> ECON 122 Basic Macro-economics</td>
      `;
      tableSecondYear.appendChild(newRow);
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
  });

  var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_ECON122");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });


});

  document.addEventListener("DOMContentLoaded", function() {
  var markINFS113M = document.getElementById("mark-INFS113M");
  var cbINFS113M = document.getElementById("cb-INFS113M");
  var tableSecondYear = document.getElementById("Second-Year-M");
  var headingINFS212M = document.getElementById("INFS212M-td");
  var headingINFS213M = document.getElementById("INFS213M-td");
  var headingINFS214M = document.getElementById("INFS214M-td");
  var headingINFS221M = document.getElementById("INFS221M-td");
  var headingINFS222M = document.getElementById("INFS222M-td");
  var headingINFS223M = document.getElementById("INFS223M-td");

  

var markINFS113M = document.getElementById("mark-INFS113M");
var cbINFS113M = document.getElementById("cb-INFS113M");

markINFS113M.addEventListener("change", function() {
  var markValue = parseInt(markINFS113M.value);

  // Check if markValue is less than 50
  if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
          <td id="INFS113M-Checkbox">
              <input type="checkbox" name="modules[]" id="cb-INFS113M" checked disabled>
          </td>
          <td id="INFS113M-Heading"> INFS 113 Introduction to Computers and Programming </td>
      `;
      // Also, check the checkbox as it's being added to the 2nd table
      tableSecondYear.appendChild(newRow);

      // Get checkboxes for the specified modules in the second table
      var cbINFS212M = document.getElementById("cb-INFS212M");
      var cbINFS213M = document.getElementById("cb-INFS213M");
      var cbINFS214M = document.getElementById("cb-INFS214M");
      var cbINFS221M = document.getElementById("cb-INFS221M");
      var cbINFS222M = document.getElementById("cb-INFS222M");
      var cbINFS223M = document.getElementById("cb-INFS223M");
      

      headingINFS212M.style.backgroundColor = "lightgrey";
      headingINFS213M.style.backgroundColor = "lightgrey";
      headingINFS214M.style.backgroundColor = "lightgrey";
      headingINFS221M.style.backgroundColor = "lightgrey";
      headingINFS222M.style.backgroundColor = "lightgrey";
      headingINFS223M.style.backgroundColor = "lightgrey";
      
    
      cbINFS212M.checked = false;
      cbINFS212M.disabled = true;

      cbINFS213M.checked = false;
      cbINFS213M.disabled = true;

      cbINFS214M.checked = false;
      cbINFS214M.disabled = true;

      cbINFS221M.checked = false;
      cbINFS221M.disabled = true;

      cbINFS222M.checked = false;
      cbINFS222M.disabled = true;

      cbINFS223M.checked = false;
      cbINFS223M.disabled = true;

      
  } else {
      // Get checkboxes for the specified modules in the second table
      var cbINFS212M = document.getElementById("cb-INFS212M");
      var cbINFS213M = document.getElementById("cb-INFS213M");
      var cbINFS214M = document.getElementById("cb-INFS214M");
      var cbINFS221M = document.getElementById("cb-INFS221M");
      var cbINFS222M = document.getElementById("cb-INFS222M");
      var cbINFS223M = document.getElementById("cb-INFS223M");

      headingINFS212M.style.backgroundColor = "";
      headingINFS213M.style.backgroundColor = "";
      headingINFS214M.style.backgroundColor = "";
      headingINFS221M.style.backgroundColor = "";
      headingINFS222M.style.backgroundColor = "";
      headingINFS223M.style.backgroundColor = "";
    
     

      // Check the checkboxes and disable them
      cbINFS212M.checked = true;
      cbINFS212M.disabled = true;

      cbINFS213M.checked = true;
      cbINFS213M.disabled = true;

      cbINFS214M.checked = true;
      cbINFS214M.disabled = true;

      cbINFS221M.checked = true;
      cbINFS221M.disabled = true;

      cbINFS222M.checked = true;
      cbINFS222M.disabled = true;

      cbINFS223M.checked = true;
      cbINFS223M.disabled = true;

    
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
});

var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_INFS113M");
inputFields_ALDE111M.forEach(function(input) {
  input.dispatchEvent(new Event("change"));
});

// Simulate change events on checkboxes
var checkboxes = document.querySelectorAll("input[type='checkbox']");
checkboxes.forEach(function(checkbox) {
  checkbox.dispatchEvent(new Event("change"));
});

});

document.addEventListener("DOMContentLoaded", function() {
var markINFS122M = document.getElementById("mark-INFS122M");
var cbINFS122M = document.getElementById("cb-INFS122M");
var tableSecondYear = document.getElementById("Second-Year-M");
var headingINFS211M = document.getElementById("INFS211M-td");
var headingINFS212M = document.getElementById("INFS212M-td");
var headingINFS224M = document.getElementById("INFS224M-td");

markINFS122M.addEventListener("change", function() {
  var markValue = parseInt(markINFS122M.value);
  var resultValue = parseInt(markINFS122M.value);

  // Check if markValue is less than 50
  if (markValue < 50) {
      // Create a new row and insert it into the second table
      var newRow = document.createElement("tr");
      newRow.innerHTML = `
          <td id="INFS122M-Checkbox">
              <input type="checkbox" name="modules[]" id="cb-INFS122M" checked disabled>
          </td>
          <td id="INFS122M-Heading"> INFS 122 Introduction to Programming </td>
      `;
      // Also, check the checkbox as it's being added to the 2nd table
      tableSecondYear.appendChild(newRow);

      // Get checkboxes for the specified modules in the second table
      var cbINFS211M = document.getElementById("cb-INFS211M");
      var cbINFS212M = document.getElementById("cb-INFS212M");
      var cbINFS224M = document.getElementById("cb-INFS224M");

      headingINFS211M.style.backgroundColor = "lightgrey";
      headingINFS212M.style.backgroundColor = "lightgrey";
      headingINFS224M.style.backgroundColor = "lightgrey";

      cbINFS211M.checked = false;
      cbINFS211M.disabled = true;

      cbINFS212M.checked = false;
      cbINFS212M.disabled = true;

      cbINFS224M.checked = false;
      cbINFS224M.disabled = true;
      
      
  }
  if(resultValue < 50){
   
    headingINFS212M.style.backgroundColor = "lightgrey"; 
   
}

  
  else {
      // Get checkboxes for the specified modules in the second table
      var cbINFS211M = document.getElementById("cb-INFS211M");
      //var cbINFS212M = document.getElementById("cb-INFS212M");
      var cbINFS224M = document.getElementById("cb-INFS224M");

      headingINFS211M.style.backgroundColor = "";
      //headingINFS212M.style.backgroundColor = "";
      headingINFS224M.style.backgroundColor = "";

      // Check the checkboxes and disable them
      cbINFS211M.checked = true;
      cbINFS211M.disabled = true;

     // cbINFS212M.checked = true;
     // cbINFS212M.disabled = true;

      cbINFS224M.checked = true;
      cbINFS224M.disabled = true;
  }
  var INFS122M_passmark = document.getElementById("mark-INFS122M").value;

 if (INFS122M_passmark >= 0 &&  INFS122M_passmark <= 49 ){
    document.getElementById("level-INFS122M").value ="Fail";
 }
 else if(INFS122M_passmark >= 50 &&  INFS122M_passmark <= 74){
      document.getElementById("level-INFS122M").value ="Pass";
 }
 else if(INFS122M_passmark >= 75 &&  INFS122M_passmark <= 100){
    document.getElementById("level-INFS122M").value ="Distinction";
 }

 else {
    alert (" Please enter a valid number between 0 and 100");
 } 

});
var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_INFS122M");
inputFields_ALDE111M.forEach(function(input) {
  input.dispatchEvent(new Event("change"));
});

// Simulate change events on checkboxes
var checkboxes = document.querySelectorAll("input[type='checkbox']");
checkboxes.forEach(function(checkbox) {
  checkbox.dispatchEvent(new Event("change"));
});

  });
  document.addEventListener("DOMContentLoaded", function() {
    var tableSecondYear = document.getElementById("Second-Year-M");
  
    var markSTFM111M = document.getElementById("mark-STFM111M");
    var cbSTFM111M = document.getElementById("cb-STFM111M");
  
    markSTFM111M.addEventListener("change", function() {
      var markValue = parseInt(markSTFM111M.value);
      if (markValue < 50) {
        // Create a new row and insert it into the second table
        var newRow = document.createElement("tr");
        newRow.innerHTML = `
          <td id="STFM111M-Checkbox">
            <input type="checkbox" name="modules[]" id="cb-STFM111M" checked >
          </td>
          <td id="STFM111M-Heading"> STFM 111 Introductory Statistics </td>
        `;
        tableSecondYear.appendChild(newRow);
      
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

    });
    var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_STFM111");
  inputFields_ALDE111M.forEach(function(input) {
    input.dispatchEvent(new Event("change"));
  });
 
  // Simulate change events on checkboxes
  var checkboxes = document.querySelectorAll("input[type='checkbox']");
  checkboxes.forEach(function(checkbox) {
    checkbox.dispatchEvent(new Event("change"));
  });
  
    var markSTFM125M = document.getElementById("mark-STFM125M");
    var cbSTFM125M = document.getElementById("cb-STFM125M");
  
    markSTFM125M.addEventListener("change", function() {
      var markValue = parseInt(markSTFM125M.value);
      if (markValue < 50) {
        // Create a new row and insert it into the second table
        var newRow = document.createElement("tr");
        newRow.innerHTML = `
          <td id="STFM125M-Checkbox">
            <input type="checkbox" name="modules[]" id="cb-STFM125M" checked>
          </td>
          <td id="STFM125M-Heading"> STFM 125 Calculus & Linear Algebra & Probability & Inference </td>
        `;
        tableSecondYear.appendChild(newRow);
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

    });
    var inputFields_ALDE111M = document.querySelectorAll(".textbox-mark_STFM125");
    inputFields_ALDE111M.forEach(function(input) {
      input.dispatchEvent(new Event("change"));
    });
   
    // Simulate change events on checkboxes
    var checkboxes = document.querySelectorAll("input[type='checkbox']");
    checkboxes.forEach(function(checkbox) {
      checkbox.dispatchEvent(new Event("change"));
    });
  
    
  });
  

// Attach a change event listener to the table
document.getElementById("Second-Year-M").addEventListener("change", handleCheckboxChange);

// Function to handle checkbox change
function handleCheckboxChange(event) {
if (event.target.id === "cb-WVES222M") {
  // Check if the checkbox with ID "cb-WVES222M" is unchecked
  if (!event.target.checked) {
    // Change the background color of the corresponding <td> element
    var headingWVES222M = document.getElementById("WVES222M-Heading");
    if (headingWVES222M) {
      headingWVES222M.style.backgroundColor = "lightgrey";
    }
  } else {
    // Restore the default background color when checkbox is checked
    var headingWVES222M = document.getElementById("WVES222M-Heading");
    if (headingWVES222M) {
      headingWVES222M.style.backgroundColor = "";
    }
  }
}
}

function handleCheckboxChange(event) {
if (event.target.type === "checkbox") {
    var row = event.target.closest("tr");
    if (row) {
        if (!event.target.checked) {
            // Change the background color to grey when checkbox is unchecked
            row.style.backgroundColor = "lightgrey";
        } else {
            // Restore the default background color when checkbox is checked
            row.style.backgroundColor = "";
        }
    }
}
}

// Attach a change event listener to the table
tableSecondYear.addEventListener("change", handleCheckboxChange);
// Get the "Validate" button element
var validateButton = document.getElementById("validate");

// Attach a click event listener to the "Validate" button
validateButton.addEventListener("click", function () {
// Call the validate function when the button is clicked
validate();
});

// Validate function (you can modify this function as needed)
function validate() {
// Your validation logic here
alert("Validation completed!"); // Example alert message
}