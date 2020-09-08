<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="text-center auth-nav py-3">
                        <router-link :to="{name: 'login'}"  class="mr-2">
                            <h4 class="d-inline-block"> login </h4>
                        </router-link> |
                        <router-link to="javascript:;" class="ml-2">
                            <h4 class="text-danger d-inline-block"> register </h4>
                        </router-link>
                    </div>
                    <div class="login-register-form">
                        <form @submit.prevent="register">
                            <div class="form-group">
                                <input type="text" 
                                    class="form-control" 
                                    v-model="form.first_name"
                                    placeholder="First Name"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <input type="text"
                                    class="form-control"
                                    v-model="form.last_name"
                                    placeholder="Last Name"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <input type="email"
                                    class="form-control"
                                    v-model="form.email"
                                    placeholder="Email"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <input type="tel"
                                    class="form-control"
                                    v-model="form.phone"
                                    placeholder="Phone"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <textarea class="form-control"
                                    v-model="form.address"
                                    placeholder="Address"
                                    required
                                ></textarea>
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control"
                                    v-model="form.password"
                                    placeholder="Password"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <input type="password"
                                    class="form-control"
                                    v-model="form.password_confirmation"
                                    placeholder="Confirm Password"
                                    required
                                >
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger px-5" :disabled="registering" type="submit">
                                    <template v-if="registering">Registering</template>
                                    <template v-else>Register</template>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Config from '../../config'
import Axios from 'axios'
import Swal from 'sweetalert2'

export default {
    data(){
        return {
            form:{
                first_name: '',
                last_name: '',
                email: '',
                phone: '',
                password: '',
                address: '',
                password_confirmation: ''
            },

            registering: false,
        }
    },
    methods: {
        register() {
            const url = `${Config.apiBaseUrl}/register`
            this.registering = true
            Axios.post(url, this.form)
                .then(({data}) => {
                   if(data.status == "success") {
                       Swal.fire(
                           'Registered!',
                           'Successfully registered! You can now login',
                           'success'
                       )
                       this.$router.push({name: 'login'})
                   }
                })
                .catch(e => {
                    console.log(e)
                })
                .finally(() => {
                    this.registering = false
                })        
        }
    },
    mounted() {
       
    }
}
</script>

<style scoped>

</style>