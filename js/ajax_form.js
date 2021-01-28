"use strict";
let form = document.querySelector('form');

function responseHandler(serverAnswer) {
  console.log(serverAnswer);
  let comment = document.getElementById('comment');
  let commentDiv = document.createElement("div")
  commentDiv.innerHTML = `
  <span>${serverAnswer}<br></span>
  `;
  comment.append(commentDiv);
}

form.addEventListener('submit', async (event) => {
  event.preventDefault();
  const response = await fetch('handler.php',
  {
    method: 'POST',
    body: new FormData(form)
  });
  const answer = await response.text();
  responseHandler(answer);
});
