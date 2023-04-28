const loginForm = document.querySelector("vfrom");

loginForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const email = document.querySelector("email").value;
  const password = document.querySelector("password").value;

  try {
    const response = await fetch("http://localhost:8881/api/authenticate", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        email,
        password,
      }),
    });

    const data = await response.json();

    if (data.jwt) {
      localStorage.setItem("token", data.jwt);
      console.log("Sikeres bejelentkezés!");
    } else {
      console.error(data.error);
    }
  } catch (error) {
    console.error(error);
  }
});
