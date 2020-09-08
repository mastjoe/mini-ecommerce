
let cartKey = '__cartStore'

export function addProduct(payload) {
    let cart = []
    cart.push(payload);
    putToLocalStorage(cart);
}

export function removeProduct(payload) {

}

function productIsSaved(productName) {
    cart = getFromLocalStorage(cartKey)
    
}

function putToLocalStorage (payload) {
    let parsed = JSON.stringify(payload)
    window.localStorage.setItem(cartKey, parsed)
}

function getFromLocalStorage (payload) {
    let stringed = localStorage.getItem(cartKey)
    return JSON.parse(stringed);
}