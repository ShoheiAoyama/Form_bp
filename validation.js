const name_sei =document.getElementById('name_sei')
const name_mei =document.getElementById('name_mei')
const form =document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (name_sei.value === '' || name_sei.value == null){
        messages.push('Name is required')
    }
    if (messages.length >0 ){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})