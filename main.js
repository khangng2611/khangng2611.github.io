const HideNotification = () => {
  document.getElementById("notification").innerHTML = ""
}

const submitjs = () => {
    let full_name = document.getElementById("full-name").value
    let mssv = document.getElementById("mssv").value
    let mail = document.getElementById("email").value
    let midterm = parseInt(document.getElementById("midterm").value)
    let project = parseInt(document.getElementById("project").value)
    let finalterm = parseInt(document.getElementById("finalterm").value)
    let gpa = parseInt(document.getElementById("gpa").value)

    if (full_name && mssv && mail) {
      document.form1.submit();
      document.getElementById("notification").innerHTML = "Nhập điểm thành công !"
      setTimeout(HideNotification, 1000);
    }
    else {
      document.getElementById("notification").innerHTML = "Vui lòng điền đủ thông tin !"
      setTimeout(HideNotification, 2000);
    }
}
  
const reset = () => {
  document.getElementById("full-name").value = null
  document.getElementById("mssv").value = null
  document.getElementById("email").value = null
  document.getElementById("midterm").value = null
  document.getElementById("project").value = null
  document.getElementById("finalterm").value = null
  document.getElementById("gpa").value = null
}