let titleName = document.getElementById('titleName');
let mainSpace = document.getElementById('mainSpace');
let formSpace = document.getElementById('formSpace');
window.addEventListener('load',()=>{
    startSetup();
})

let startSetup = () => {
    curricularAspectView();
}

let curricularAspectView = () => {
    titleName.innerHTML = "Curricular Aspect";
    mainSpace.innerHTML = ` <div class="form-group">
    <select class="form-control" id="titleID">
      <option value="1.1.2">1.1.2</option>
      <option value="1.1.3">1.1.3</option>
      <option value="1.2.1">1.2.1</option>
      <option value="1.2.2">1.2.2</option>
    </select>
  </div> <input class="btn btn-primary" value="Go" type="button" onclick="getFormData()">`;
}
let getFormData = () => {
    let dropdownValue = document.getElementById('titleID');
    //alert(dropdownValue.value);
    switch(dropdownValue.value){
        case '1.1.2': viewFor_1_1_2();
                    break;
        case '1.1.3':
                    break;
        case '1.2.1':
                    break;
        case '1.2.2':
                    break;
    }
}

let viewFor_1_1_2 = () => {
    
    formSpace.style.display = "";
    formSpace.innerHTML = `<form action="u1-1-2.php" method="POST"  enctype="multipart/form-data">
    <small>*Use N/A where not applicable</small>
    <br>
    <div class="form-group">
      <label>Programme Code</label>
      <input type="text" class="form-control" name="programmeCode">
    </div>
  
    <div class="form-group">
      <label>Programme Name</label>
      <input type="text" class="form-control" name="programmeName">
    </div>
    
    <div class="form-group">
      <label>Name of The Department</label>
      <input type="text" class="form-control" name="notd">
    </div>
  
    <div class="form-group">
      <label>Year of Introduction</label>
      <input type="text" class="form-control" name="yoi">
    </div>
  
    <div class="form-group">
      <label>If revision has been carried out in the syllabus during last 5</label>
      <input type="text" class="form-control" name="rev">
    </div>
  
    <div class="form-group">
      <label>Year of Revision</label>
      <input type="text" class="form-control" name="yRev">
    </div>
  
    <div class="form-group">
      <label>Percentage of Syllabus content added or replaced</label>
      <input type="text" class="form-control" name="perSy">
    </div>
  
    <div class="form-group">
      <label>Link of the relevant document</label>
      <input type="text" class="form-control" name="lord">
    </div>
    <div class="form-group">
    <input type="file" name="upload[]" />
    </div>
    <input type="submit" class="btn btn-primary" value="Submit">`
}

let viewData = () => {
    $.ajax({
        url: 'viewdata.php',
        method: 'GET', // or GET
        success: function(msg) {
            document.getElementById('viewSpace').innerHTML = msg;
        }
    });
}