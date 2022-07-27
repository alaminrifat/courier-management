const name = document.getElementById('pid').innerText
const submit = document.getElementById('submit')
const form = document.getElementById('pform')
const errorElement = document.getElementById('error')
form.addEventListener('submit',(e) => {
    let messages = []
    

    if(name.value.length < 3) {
        messages.push('Enter Valid Parcel ID')
    }

    if(messages.length > 0) {
        e.preventDefault()
        errorElement.innerHTML = messages.join(', ')
    }

})