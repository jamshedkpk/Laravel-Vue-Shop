// We want to use bootstrap
require('./bootstrap')
// We import creatApp namespace from vue
import { createApp } from 'vue'
// We import component which we want to use
import HelloWorld from './components/AddToCart.vue'
import Router from './routes'
// We create an object of app
const app = createApp({})
// We bind this object to our component
app.component('Hello', HelloWorld)
// We want to use routes and bind with app id dev....
app.use(Router).mount('#app')