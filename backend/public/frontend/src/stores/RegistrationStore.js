const registrationForm = document.querySelector("vfrom");

registrationForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const email = document.querySelector("email").value;
  const password = document.querySelector("password").value;
  const confirmPassword = document.querySelector("password_confirmation").value;

  if (password !== confirmPassword) {
    console.error("A jelszavak nem egyeznek!");
    return;
  }

  try {
    const response = await fetch("http://localhost:8881/api/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        name,
        email,
        password,
      }),
    });

    const data = await response.json();

    if (data.jwt) {
      localStorage.setItem("token", data.jwt);
      console.log("Sikeres regisztráció!");
    } else {
      console.error(data.error);
    }
  } catch (error) {
    console.error(error);
  }
});
