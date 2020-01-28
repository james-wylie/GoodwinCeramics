import editProduct from './components/editproduct'
import addProduct from './components/addproduct'
import productsList from './components/products-list'
import backend from './components/backend'


export const routes = [
  { path: '/backend', component: backend, name: 'backend' },
  { path: '/editproducts/:id', component: editProduct, name: 'editProduct' },
  { path: '/addproduct', component: addProduct, name: 'addProduct' },
  { path: '/products-list', component: productsList, name: 'productsList' }
]
