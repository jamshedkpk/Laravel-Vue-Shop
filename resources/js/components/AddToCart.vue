<template>
<div>
<Button class="btn btn-danger btn-sm btn-block" v-on:click.prevent="addProductToCart()">Add To Cart</Button>
</div>
</template>
<script>
export default
{
name:'Button-Cart',
props:['productid','userid'],

data(){
return{
cart:
{
'userid':1,
'productid':2
}
}
},

methods:
{
addProductToCart()
{
// Check if user login
if(this.userid==0)
{
this.$toast.error("Please Login Before You Add A Product To Cart",{
type:"error",
position:"top",
duration:"500"
});
}
else
{
// Store product to cart if user login
axios.post('/cart/store',this.cart).then(response=>
{
// To show toaster notifications
this.$toast.success('Record Is Successfully Stored');

}).catch(error=>{
this.$toast.error('Their Is Some Error Please Try Again');
})

}
}
},

}
</script>
