//ANIMATION FOR THE SLIDE
var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 8000);

// JavaScript to handle the button click event
document.getElementById("newsFeed-btn").addEventListener("click",function(){
  window.location.href = "HomePage.php";
})

document.getElementById("updateInfo-btn").addEventListener("click", function(){
  window.location.href = "UpdateInfo.php";
})

document.getElementById("selfReg-btn").addEventListener("click",function(){
  window.location.href = "SelfReg.php";
})

document.getElementById("POR-btn").addEventListener("click", function(){
  window.location.href = "POR.php";
})



document.addEventListener('DOMContentLoaded', function () {
  const paymentSelector = document.getElementById('paymentSelector');
  const hiddenContainer = document.getElementById('hiddenContainer');
  const bursaryDiv = document.getElementById('bursaryDiv');
  const financialDiv = document.getElementById('financialDiv');

  paymentSelector.addEventListener('change', function () {
    const selectedOption = paymentSelector.value;
    if (selectedOption === 'bursary') {
      bursaryDiv.style.display = 'block';
      financialDiv.style.display = 'none';
      hiddenContainer.style.display = 'flex';
    } else {
      bursaryDiv.style.display = 'none';
      financialDiv.style.display = 'block';
      hiddenContainer.style.display = 'flex';
    }
  });
});

const form = document.querySelector("form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

form.addEventListener("click", () =>{
  fileInput.click();
});

fileInput.onchange = ({target})=>{
  let file = target.files[0];
  if(file){
    let fileName = file.name;
    if(fileName.length >= 12){
      let splitName = fileName.split('.');
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    uploadFile(fileName);
  }
}
function uploadFile(name){
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/upload.php");
  xhr.upload.addEventListener("progress", ({loaded, total}) =>{
    let fileLoaded = Math.floor((loaded / total) * 100);
    let fileTotal = Math.floor(total / 1000);
    let fileSize;
    (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
    let progressHTML = `<li class="row">
                          <i class="fas fa-file-alt"></i>
                          <div class="content">
                            <div class="details">
                              <span class="name">${name} • Uploading</span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>
                        </li>`;
    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;
    if (loaded == total) {
      if (fileLoaded === 100) {
          // Display an alert when the progress reaches 100%
          window.alert("In accordance with our university's administrative procedures, your confirmation letter will undergo validation by our academic administration. " +
              "Upon successful validation, you will be issued your official Proof Of Registration, provided there are no outstanding issues or discrepancies");
  
          // Use setTimeout to display "proceedButtonTwo" after the alert is closed
          setTimeout(function () {
              const proceedButtonTwo = document.getElementById("proceedButtonTwo");
              proceedButtonTwo.style.display = 'block';
          }, 0);
      }
  
      progressArea.innerHTML = "";
      let uploadedHTML = `<li class="row">
                              <div class="content upload">
                                  <i class="fas fa-file-alt"></i>
                                  <div class="details">
                                      <span class="name">${name} • Uploaded</span>
                                      <span class="size">${fileSize}</span>
                                  </div>
                              </div>
                              <i class="fas fa-check"></i>
                          </li>`;
      uploadedArea.classList.remove("onprogress");
      uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
  }
  
  });
  let data = new FormData(form);
  xhr.send(data);
}


function toggleTableVisibility() {
    var checkbox = document.getElementById("firstYear-M");
    var table = document.getElementById("first-Year-M");

    if (checkbox.checked) {
        table.style.display = "table"; // Show the table
    } else {
        table.style.display = "none";  // Hide the table
    }
}





