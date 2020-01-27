import editProduct from './components/editproduct'
import addProduct from './components/addproduct'
import productsList from './components/products-list'
import backend from './components/backend'


export const routes = [
  { path: '/backend', component: backend, name: 'backendRoute' },
  { path: '/editproduct', component: editProduct, name: 'editProductRoute' },
  { path: '/addproduct', component: addProduct, name: 'addProductRoute' },
  { path: '/products-list', component: productsList, name: 'productsList' }
]
