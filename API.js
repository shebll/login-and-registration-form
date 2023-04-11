let btnAPI = document.querySelector(
  ".form-register .input-box span.IMDPAPIBtn"
);
let dateInput = document.querySelector(
  ".form-register .input-box:nth-child(5) input"
);
let popupApi = document.querySelector(".popupApi");
btnAPI.addEventListener("click", () => {
  // console.log(dateInput.value);
  if (dateInput.value === "") {
    window.alert("enter your birthdate");
  } else {
    let month = dateInput.value.split("-")[1];
    let day = dateInput.value.split("-")[2];
    popupApi.style.right = "100px";
    const options = {
      method: "GET",
      headers: {
        "X-RapidAPI-Key": "f66c2174b0msh51386304c170aa1p15ff35jsnaba2587efcbc",
        "X-RapidAPI-Host": "imdb8.p.rapidapi.com",
      },
    };
    fetch(
      `https://imdb8.p.rapidapi.com/actors/list-born-today?month=${month}&day=${day}`,
      options
    )
      .then((response) => response.json())
      .then((response) => {
        let list = response;
        element = list[0];
        let id = element.split("/")[2];
        // list.forEach((element) => {
        //   // console.log(element.split("/"));
        //   id = element.split("/")[2];
        // });
        const options = {
          method: "GET",
          headers: {
            "X-RapidAPI-Key":
              "f66c2174b0msh51386304c170aa1p15ff35jsnaba2587efcbc",
            "X-RapidAPI-Host": "imdb8.p.rapidapi.com",
          },
        };
        fetch(
          `https://imdb8.p.rapidapi.com/actors/get-bio?nconst=${id}`,
          options
        )
          .then((response) => response.json())
          .then((response) => {
            console.log(response.name);
            let div = document.createElement("div");
            let actorName = document.createTextNode(response.name);
            div.appendChild(actorName);
            document.querySelector(
              ".popupApi .title"
            ).innerHTML = `porn in ${day}/${month}`;
            document.querySelector(".popupApi .events").appendChild(div);
          })
          .catch((err) => console.error(err));
        // console.log(response.length);
      })
      .catch((err) => console.error(err));
  }
});
