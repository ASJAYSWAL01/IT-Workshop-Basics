function displayInfo() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
       let gender = document.querySelector('input[name="gender"]:checked');
    gender = gender ? gender.value : "Not Selected";

    let color = document.getElementById("color").value;

    let info = "Name: " + name + "\n" +
               "Email: " + email + "\n" +
               "Mobile No: " + mobile + "\n" +
               "Gender: " + gender + "\n" +
               "Favourite Color: " + color;

    document.getElementById("output").value = info;
}
