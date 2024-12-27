document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from submitting and refreshing the page

    // Get form field values
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var age = document.getElementById('age').value;

    // Display the data inside the div
    document.getElementById('displayName').textContent = "Name: " + name;
    document.getElementById('displayEmail').textContent = "Email: " + email;
    document.getElementById('displayAge').textContent = "Age: " + age;
});
