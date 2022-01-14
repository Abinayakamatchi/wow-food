 

var form = document.getElementById("form-my");
    
async function handleSubmit(event) {
  event.preventDefault();
  var status = document.getElementById("status");
  var data = new FormData(event.target);
  fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
        'Accept': 'application/json'
    }
  }).then(response => {
    form.reset() 
    status.classList.add('success');
    status.innerHTML = "Thanks for your Valuable Response.";
   
  }).catch(error => {
    status.classList.add('error');
    status.innerHTML = "Oops! There was a problem submitting your form."
  });
}
form.addEventListener("submit", handleSubmit)