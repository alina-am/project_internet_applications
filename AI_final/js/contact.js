// preluare date din formular

function logSubmit(event) {

    const form = document.querySelector('form');
    document.querySelector('form').addEventListener('submit', (e) => {
        const formData = new FormData(e.target);

  });
}

// let reviews = [];        
//     const addReview = (event)=>{
//         event.preventDefault();  

//         let review = {
//             id: Date.now(),
//             prenume: document.getElementById('fname').value,
//             nume: document.getElementById('lname').value,
//             review: document.getElementById('message').value,
//         }

//         reviews.push(mesaj);
//         document.forms[0].reset(); 

//         var confirmare = document.createElement("p");
//         var text = document.createTextNode("Mesajul a fost primit. Multumim pentru feedback!");
//         confirmare.appendChild(text);
//         var element = document.getElementById("confirm");
//         element.appendChild(confirmare);

//         //saving to localStorage
//         // localStorage.setItem('MyMovieList', JSON.stringify(movies) );
//     }
//     document.addEventListener('DOMContentLoaded', ()=>{
//         document.getElementById('buton').addEventListener('click', addMesaj);
//     });

function popUp() {
  alert("Multumim pentru feedback!");
}
