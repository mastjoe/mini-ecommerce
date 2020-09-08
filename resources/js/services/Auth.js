import router from '../router'

let authKey = '__auth'

export function storeAuth(payload) {
    saveToLocalStorage(payload)
}

export function clearAuth() {
    localStorage.removeItem(authKey);
}

export function logOut() {
    clearAuth()
    router.push({name: 'home'});
}

export function getAuth() {
    return getFromLocalStorage(authKey)
}

export function authExist() {
    if (getFromLocalStorage()) return true
    return false
}

function saveToLocalStorage(payload) {
    let stringed = JSON.stringify(payload)
    localStorage.setItem(authKey, stringed)
}

function getFromLocalStorage() {
    return JSON.parse(localStorage.getItem(authKey))
}

