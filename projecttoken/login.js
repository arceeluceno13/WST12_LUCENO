        function changePlaceholder(role) {
            if (role === "student") {
                document.getElementById("username").setAttribute("placeholder", "Enter your ID Number");
                document.querySelector('label[for="username"]').textContent = "ID Number:";
            } else if (role === "alumni") {
                document.getElementById("username").setAttribute("placeholder", "Enter your Email Address");
                document.querySelector('label[for="username"]').textContent = "Email Address:";
            }
            else if (role === "employee") {
                document.getElementById("username").setAttribute("placeholder", "Enter your Email Address");
                document.querySelector('label[for="username"]').textContent = "Email Address:";
            }
        }
