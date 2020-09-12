function _(x) {
  return document.getElementById(x);
}

function restrict(elem) {
  var tf = _(elem);
  var rx = new RegExp;
  if (elem == "email") {
    rx = /[' "]/gi;
  } else if (elem == "firstname") {
    rx = /[^a-z]/gi;
  } else if (elem == "lastname") {
    rx = /[^a-z]/gi;
  } else if (elem == "phonenumber") {
    rx = /[^0-9]/gi;
  } else if (elem == "roll") {
    rx = /[^0-9A-Z/]/gi;
  }

  tf.value = tf.value.replace(rx, "");
}

function run() {
  var department = $('#dept').val();
  var yearOfAdmission = $('#year').val();
  if (department != "" && yearOfAdmission != "") {
    var yearInRoll = yearOfAdmission.substr(2, 2);
    var rollSoFar = yearInRoll + "/" + department + "/";
    console.log(rollSoFar);
    $('#roll').val(rollSoFar);
  } else {
    $('#roll').val("");
  }
}

function calculateDOB() {
  var DOB = _('date').value;
  console.log(DOB);
  var enteredYear = DOB.substr(0, 4);
  console.log(enteredYear);
  console.log(DOB);
  var enteredMonth = DOB.substr(5, 2);
  console.log(enteredMonth);
  var d = new Date();
  var year = d.getFullYear();
  var month = d.getMonth();
  console.log(month);
  var finalYear = year - enteredYear;
  if (enteredMonth > month) {
    finalYear -= 1;
  }
  _('age_calculated').innerHTML = "Your age is " + finalYear;
}

function addHobby() {
  $('#add-hobby').css('display', 'none');
  $('#hobbies').append('<input type="text" class="input" name="hobby" id="added-hobby" placeholder="Add Hobby">');
  $('#hobbies').append('<button type="submit" onclick="addHobbyFinal()">Submit</button>');
}

function addHobbyFinal() {
  var hobby = $('#added-hobby').val();
  console.log(hobby);
  $("#demo").append('<input type="checkbox" name="hobby[]" class="hobby" value=' + hobby + '><span style="color: #D0D0D0;font-size: 19px;position: relative;bottom: 5px;font-family: Ubuntu, sans-serif;font-weight: 200;">' + hobby + '</span><br>');

}