import axios from 'axios'

// The below code will add CSRF tokens to every request! 

const baseURL = window.App.base_url
const headers = {
  'X-CSRF-TOKEN'  : window.laravel.csrfToken,
  'X-Requested-With' : 'XMLHttpRequest'
}

const Parent = axios.create({
  baseURL,
  headers
})

class Http {} extends Parent

export default Http

