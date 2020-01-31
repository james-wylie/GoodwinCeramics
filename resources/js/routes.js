import editProduct from './components/editproduct'
import addProduct from './components/addproduct'
import productsList from './components/products-list'
import backend from './components/backend'
import viewProduct from './components/ClientSide/viewProduct'
import clientViewProductList from './components/ClientSide/clientViewProductList'
import home from './components/ClientSide/home'
import contact from './components/ClientSide/contact'
import about from './components/ClientSide/about'
import shop from './components/ClientSide/shop'

export const routes = [
  // CMS ROUTES
  { path: '/backend', component: backend, name: 'backend' },
  { path: '/addproduct', component: addProduct, name: 'addProduct' },
  { path: '/products-list', component: productsList, name: 'productsList' },
  { path: '/editproducts/:id', component: editProduct, name: 'editProduct' },
  // CLIENT SIDE ROUTES
  { path: '/viewproduct/:id', component: viewProduct, name: 'viewproduct' },
  { path: '/viewProductList', component: clientViewProductList, name: 'clientviewproductlist' },
  { path: '/', component: home, name: 'homeRoute' },
  { path: '/contact', component: contact, name: 'contact' },
  { path: '/about', component: about, name: 'about' },
  { path: '/shop', component: shop, name: 'shop' }
  // ORDER ROUTES
]
