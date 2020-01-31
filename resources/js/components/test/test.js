import vue from 'vue'
import addProduct from '../addProduct.vue'

describe('addProduct', ()=> {
  it('correctly sets the message on mount', () => {
    const vm = new Vue(addProduct).$mount()
    expect(vm.message).toBe('Hey Hey!')
  })})
