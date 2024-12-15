// let carticon = document.querySelector('#cart-icon')
//
// if(document.readyState == 'loading'){
//     document.addEventListener("DOMContentLoaded", ready);
// }else{
//     ready();
// }
//
// //fun
// function ready(){
//     var reomveCartButtons = document.getElementsByClassName('close-cart')
// console.log( reomveCartButtons)
//     for(var i=0;i<reomveCartButtons.length;i++){
//         var button = reomveCartButtons[i]
//         button.addEventListener('click', removeCartItem)
//     }
//     ///quantity changes
//     var quantityInputs = document.getElementsByClassName('num')
//     for(var i=0;i<quantityInputs.length;i++){
//         input.addEventListener('Change', quantityChanged)
//     }
//
//
// }
//
//  function removeCartItem(event){
//     var buttonClicked=event.target
//      buttonClicked.parentElement.remove()
//      updatetotal()
//  }
//
// function quantityChanged(event){
//     var input =event.target
//     if(isNaN(input.value)|| input.value <= 0){
//         input.value=1
//     }
//     updatetotal()
// }
// ///total
// function updatetotal(){
//     var cartcontent = document.getElementsByClassName('cart-content')[0]
//     var cartBoxes = cartcontent.getElementsByClassName('item')
//     var total =0
//
//     for(var i=0;i<cartBoxes.length;i++){
//         var cartBox = cartBoxes[i]
// var priceElement = cartBox.getElementsByClassName('cart-price')[0]
//         var quantityElement = cartBox.getElementsByClassName('num')[0]
//         var price= parseFloat(priceElement.innerText.replace("$",""))
//         var quantity = quantityElement.value
//         total = total + price * quantity
//         document.getElementsByClassName('total-price')[0].innerText ="$3"+total
//     }
//
// }