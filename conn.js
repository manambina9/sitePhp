const body = document.querySelector("body"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeTexte = body.querySelector(".mode-text");

      modeSwitch.addEventListener("click", () =>{
            body.classList.toggle("dark");
      })