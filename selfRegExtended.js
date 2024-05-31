//ALDE111E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markALDE111E = document.getElementById("mark-ALDE111E");
    var cbALDE111E= document.getElementById("cb-ALDE111E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markALDE111E.addEventListener("change", function() {
        var markValue = parseInt(markALDE111E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="ALDE111E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-ALDE111E" checked>
                </td>
                <td id="ALDE111E-Heading"> ALDE 111 Academic Literacy Development</td>
            `;
            tableSecondYear.appendChild(newRow);
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
    });
  
  
  
  // Function to handle checkbox changes
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

     // Simulate change events on input fields
      var inputFields = document.querySelectorAll(".textbox-mark_ALDE111E");
      inputFields.forEach(function(input) {
        input.dispatchEvent(new Event("change"));
      });

      // Simulate change events on checkboxes
      var checkboxes = document.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(function(checkbox) {
        checkbox.dispatchEvent(new Event("change"));
      });
    
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

//ALDE122E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markALDE122E = document.getElementById("mark-ALDE122E");
    var cbALDE122E = document.getElementById("cb-ALDE122E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markALDE122E.addEventListener("change", function() {
        var markValue = parseInt(markALDE122E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="ALDE122E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-ALDE122E" checked>
                </td>
                <td id="ALDE122E-Heading"> ALDE 122 Academic Literacy Development </td>
            `;
            tableSecondYear.appendChild(newRow);
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
    });
  
  // Function to handle checkbox changes
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

       // Simulate change events on input fields
       var inputFields = document.querySelectorAll(".textbox-mark_ALDE122E");
       inputFields.forEach(function(input) {
         input.dispatchEvent(new Event("change"));
       });
 
       // Simulate change events on checkboxes
       var checkboxes = document.querySelectorAll("input[type='checkbox']");
       checkboxes.forEach(function(checkbox) {
         checkbox.dispatchEvent(new Event("change"));
       });
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

  //BMAN111E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markBMAN111E = document.getElementById("mark-BMAN111E");
    var cbBMAN111E = document.getElementById("cb-BMAN111E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markBMAN111E.addEventListener("change", function() {
        var markValue = parseInt(markBMAN111E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="BMAN111E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-BMAN111E" checked>
                </td>
                <td id=""BMAN111E-Heading">  BMAN 111 Introduction to Business Management </td>
            `;
            tableSecondYear.appendChild(newRow);
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
    });
  
  // Function to handle checkbox changes
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

      // Simulate change events on input fields
      var inputFields = document.querySelectorAll(".textbox-mark_BMAN111E");
      inputFields.forEach(function(input) {
        input.dispatchEvent(new Event("change"));
      });

      // Simulate change events on checkboxes
      var checkboxes = document.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(function(checkbox) {
        checkbox.dispatchEvent(new Event("change"));
      });
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

  //BMAN121E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markBMAN121E = document.getElementById("mark-BMAN121E");
    var cbBMAN121E = document.getElementById("cb-BMAN121E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markBMAN121E.addEventListener("change", function() {
        var markValue = parseInt(markBMAN121E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="BMAN121E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-BMAN121E" checked>
                </td>
                <td id=""BMAN121E-Heading">  BMAN 121 General Management </td>
            `;
            tableSecondYear.appendChild(newRow);
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
       
    });
  
  // Function to handle checkbox changes
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

      // Simulate change events on input fields
      var inputFields = document.querySelectorAll(".textbox-mark_BMAN121E");
      inputFields.forEach(function(input) {
        input.dispatchEvent(new Event("change"));
      });

      // Simulate change events on checkboxes
      var checkboxes = document.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(function(checkbox) {
        checkbox.dispatchEvent(new Event("change"));
      });
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

   //ICOM111E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markICOME111E = document.getElementById("mark-ICOM111E");
    var cbICOM111E = document.getElementById("cb-ICOM111E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markICOME111E.addEventListener("change", function() {
        var markValue = parseInt(markICOME111E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="ICOM111E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-ICOM111E" checked>
                </td>
                <td id=""ICOM111E-Heading">  ICOM 111 Introduction to Communication</td>
            `;
            tableSecondYear.appendChild(newRow);
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
    });
  
  // Function to handle checkbox changes
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

        // Simulate change events on input fields
        var inputFields = document.querySelectorAll(".textbox-mark_ICOM111");
        inputFields.forEach(function(input) {
          input.dispatchEvent(new Event("change"));
        });
  
        // Simulate change events on checkboxes
        var checkboxes = document.querySelectorAll("input[type='checkbox']");
        checkboxes.forEach(function(checkbox) {
          checkbox.dispatchEvent(new Event("change"));
        });
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

     //MTHS119E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markMTHS119E = document.getElementById("mark-MTHS119E");
    var cbMTHS119E = document.getElementById("cb-MTHS119E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markMTHS119E.addEventListener("change", function() {
        var markValue = parseInt(markMTHS119E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="MTHS119E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-MTHS119E" checked>
                </td>
                <td id=""MTHS119E-Heading">   MTHS 119 Foundation Mathematics 1</td>
            `;
            tableSecondYear.appendChild(newRow);
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
    });
  
  // Function to handle checkbox changes
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

     // Simulate change events on input fields
     var inputFields = document.querySelectorAll(".textbox-mark_MTHS119");
     inputFields.forEach(function(input) {
       input.dispatchEvent(new Event("change"));
     });

     // Simulate change events on checkboxes
     var checkboxes = document.querySelectorAll("input[type='checkbox']");
     checkboxes.forEach(function(checkbox) {
       checkbox.dispatchEvent(new Event("change"));
     })
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

   //MTHS129E is  a function to check if the student has passed the module or not 
document.addEventListener("DOMContentLoaded", function() {
    var markMTHS129E = document.getElementById("mark-MTHS129E");
    var cbMTHS129E = document.getElementById("cb-MTHS129E");
    var tableSecondYear = document.getElementById("Second-Year-E");
  
    markMTHS129E.addEventListener("change", function() {
        var markValue = parseInt(markMTHS129E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td id="MTHS129E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-MTHS129E" checked>
                </td>
                <td id=""MTHS129E-Heading">   MTHS 129 Foundation Mathematics 1 </td>
            `;
            tableSecondYear.appendChild(newRow);
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
 
    });
  
  // Function to handle checkbox changes
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

    // Simulate change events on input fields
    var inputFields = document.querySelectorAll(".textbox-mark_MTHS129");
    inputFields.forEach(function(input) {
      input.dispatchEvent(new Event("change"));
    });

    // Simulate change events on checkboxes
    var checkboxes = document.querySelectorAll("input[type='checkbox']");
    checkboxes.forEach(function(checkbox) {
      checkbox.dispatchEvent(new Event("change"));
    })
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

  //INFS113E is  a function to check if the student has passed the module or not 
  document.addEventListener("DOMContentLoaded", function() {
    var markINFS113E = document.getElementById("mark-INFS113E");
    var cbINFS113E = document.getElementById("cb-INFS113E");
    var tableSecondYear = document.getElementById("Second-Year-E");
    var headingINFS212E = document.getElementById("INFS212E-Heading");
    var headingINFS221E = document.getElementById("INFS221E-Heading");
    var headingINFS222E = document.getElementById("INFS222E-Heading");
    var cbINFS212E = document.getElementById("cb-INFS212E");
    var cbINFS221E = document.getElementById("cb-INFS221E");
    var cbINFS222E = document.getElementById("cb-INFS222E");
  
    markINFS113E.addEventListener("change", function() {
        var markValue = parseInt(markINFS113E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td  id="INFS113E-Checkbox">
                    <input type="checkbox" name="modules[]" id="cb-INFS113E" checked disabled>
                </td>
                <td id=""INFS113E-Heading">  INFS 113 Introduction to Computers and Programming  </td>
            `;
            tableSecondYear.appendChild(newRow);

       
        headingINFS212E.style.backgroundColor = "lightgrey";
        headingINFS221E.style.backgroundColor = "lightgrey";
        headingINFS222E.style.backgroundColor = "lightgrey";

        

        cbINFS212E.checked=false;
        cbINFS212E.disabled=true;

        cbINFS221E.checked=false;
        cbINFS221E.disabled=true;

        cbINFS222E.checked=false;
        cbINFS222E.diabled=true;
        }
        else{
            // Reset the background color for relevant table headings
        headingINFS212E.style.backgroundColor = "";
        headingINFS221E.style.backgroundColor = "";
        headingINFS222E.style.backgroundColor = "";
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

      
    });
  
  // Function to handle checkbox changes
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

    // Simulate change events on input fields
    var inputFields = document.querySelectorAll(".textbox-mark_INFS113E");
    inputFields.forEach(function(input) {
      input.dispatchEvent(new Event("change"));
    });

    // Simulate change events on checkboxes
    var checkboxes = document.querySelectorAll("input[type='checkbox']");
    checkboxes.forEach(function(checkbox) {
      checkbox.dispatchEvent(new Event("change"));
    })
  
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

   //INFS112E is  a function to check if the student has passed the module or not 
   document.addEventListener("DOMContentLoaded", function() {
    var markINFS112E = document.getElementById("mark-INFS122E");
    var markINFS113E = document.getElementById("mark-INFS113E");
    var cbINFS122E = document.getElementById("cb-INFS122E");
    var tableSecondYear = document.getElementById("Second-Year-E");
    var headingINFS211E = document.getElementById("INFS211E-Heading");
    var headingINFS212E = document.getElementById("INFS212E-Heading");
    var cbINFS211E = document.getElementById("cb-INFS211E");
    var cbINFS212E = document.getElementById("cb-INFS212E");
   
    markINFS112E.addEventListener("change", function() {
        var markValue = parseInt (markINFS112E.value);
        var resultValue = parseInt(markINFS113E.value);
        if (markValue < 50) {
            // Create a new row and insert it into the second table
            var newRow = document.createElement("tr");
            newRow.innerHTML = `
                <td  id="INFS122E-Checkbox"">
                    <input type="checkbox" name="modules[]" id="cb-INFS122E" checked disabled>
                </td>
                <td id="INFS122E-Heading">  INFS 122 Introduction to Programming </td>
            `;
            tableSecondYear.appendChild(newRow);

        headingINFS211E.style.backgroundColor = "lightgrey";
        headingINFS212E.style.backgroundColor = "lightgrey";
       

        cbINFS211E.checked=false;
        cbINFS211E.disabled=true;

        cbINFS212E.checked=false;
        cbINFS212E.disabled=true;

        }
        else if(resultValue < 50){
            headingINFS212E.style.backgroundColor = "lightgrey"; 
        }
       
        else{
            // Reset the background color for relevant table headings
        headingINFS211E.style.backgroundColor = "";
        headingINFS212E.style.backgroundColor = "";
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
    });
  
  // Function to handle checkbox changes
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

      // Simulate change events on input fields
      var inputFields = document.querySelectorAll(".textbox-mark_INFS112E");
      inputFields.forEach(function(input) {
        input.dispatchEvent(new Event("change"));
      });
  
      // Simulate change events on checkboxes
      var checkboxes = document.querySelectorAll("input[type='checkbox']");
      checkboxes.forEach(function(checkbox) {
        checkbox.dispatchEvent(new Event("change"));
      })
  
    // Get the "Validate" button element
    var validateButton = document.getElementById("validate");
  
    // Attach a click event listener to the "Validate" button
    validateButton.addEventListener("click", function() {
        // Call the validate function when the button is clicked
        validate();
    });
  
    // Validate function (you can modify this function as needed)
    function validate() {
        // Your validation logic here
        alert("Validation completed!"); // Example alert message
    }
  });

  

