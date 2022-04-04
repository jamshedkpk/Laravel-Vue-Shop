// We want to use bootstrap
require('./bootstrap')
// We import creatApp namespace from vue
import { createApp } from 'vue'
// We import component which we want to use
import CartButton from './components/AddToCart.vue'
import Router from './routes'
// We create an object of app

import Toaster from "@meforma/vue-toaster";


const app = createApp({})
// We bind this object to our component
app.component('Cart',CartButton)
// We want to use routes and bind with app id dev....
app.use(Router).use(Toaster).mount('#app')