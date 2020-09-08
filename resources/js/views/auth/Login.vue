<template>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <div class="text-center auth-nav py-3">
                    <a href="javascript:;" class="mr-2">
                        <h4 class="text-danger d-inline-block"> login </h4>
                    </a> |
                    <router-link :to="{name:'register'}" class="ml-2">
                        <h4 class="d-inline-block"> register </h4>
                    </router-link>
                </div>

                <div class="login-register-form">
                    <form @submit.prevent="login">
                        <div class="form-group">                            
                            <input type="email" 
                                v-model="form.email" 
                                placeholder="Email"
                                class="form-control"
                                required

                            >
                        </div>
                        <div class="form-group">
                            <input type="password" 
                                v-model="form.password" 
                                placeholder="Password"
                                class="form-control"
                                required
                            >
                        </div>
                        <div class="text-right">
                            <a href="javascript:;">Forgot Password?</a>
                        </div>
                        <button class="btn btn-danger px-5" type="submit" :disabled="loading">
                            <template v-if="loading">Authenticating</template>
                            <template v-else>Login</template>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Config from '../../config'
import Axios from 'axios'
import Util from '../../util'
import * as AuthService from '../../services/Auth'
import Swal from 'sweetalert2'
import {mapActions, mapMutations} from 'vuex'

export default {
    data() {
        return {
            form: {
                email: '',
                password: '',
            },

            loading: false,
        }
    },
    methods: {
        ...mapMutations('Auth', [
            'setLoggedUser',
        ]),
        ...mapActions('Auth', [
            'getLoggedUser',
        ]),
        login() {
            const url = `${Config.apiBaseUrl}/login`
            this.loading = true

            Axios.post(url, this.form)
                .then(({data}) => {
                    if(data.status == "success") {
                        AuthService.storeAuth(data.data);
                        Swal.fire('Logged In', data.message, 'success')
                        this.getLoggedUser()
                        this.$router.push({name: 'account'})
                    }
                })
                .catch((e) => {
                    console.log(e)
                })
                .finally(() => {
                    this.loading = false
                })
        }
    }
}
</script>

<style scoped>

</style>