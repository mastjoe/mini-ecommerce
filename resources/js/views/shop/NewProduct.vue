<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <h2 class="animated text-center"><span>New</span> Product</h2>
                    <form @submit.prevent="addProduct()">
                        <div class="form-group">
                            <input type="text"
                                v-model="form.name"
                                class="form-control"
                                placeholder="Product Name"
                                required
                            >
                        </div>
                        <div class="form-group">
                            <select class="form-control"
                                v-model="form.category"
                                required
                            >
                                <option value="">Choose Category</option>
                                <option v-for="category in categories" :key="category.id" :value="category.id">
                                    {{ category.name }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control"
                                v-model="form.description"
                                placeholder="Description"
                            ></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control"
                                v-model="form.supplier"
                                required
                            >
                                <option value="">Choose Supplier</option>
                                <option v-for="supplier in suppliers" :key="supplier.id" :value="supplier.id">
                                    {{ supplier.name }}
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Image</label>
                            <template v-if="form.image">
                                <img ref="imagePreview" class="img-fluid">
                            </template>
                            <input type="file"
                                class="form-control"
                                required
                                placeholder="Upload Image"
                                ref="imageInput"
                                @change="previewImage()"
                            >
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-danger px-5" :disabled="adding" type="submit">
                                <template v-if="adding">Adding Product</template>
                                <template v-else> Add Product</template>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from 'axios'
import Config from '../../config'
import { mapActions, mapState } from 'vuex'

export default {
    data(){
        return {
            form: {
                name: '',
                supplier: '',
                category: '',
                description: '',
                image: '',
            },
            
            imageFile: '',
            adding: false,
            addError: null,
        }
    },
    computed: {
        ...mapState('Supplier', [
            'suppliers'
        ]),
        ...mapState('Category', [
            'categories'
        ]),
    },
    methods: {
        ...mapActions('Supplier', [
            'getSuppliers',
        ]),
        ...mapActions('Category', [
            'getCategories',
        ]),
        addProduct() {
            const url = `${Config.apiBaseUrl}/products`
            this.adding = true;
            const formData = new FormData()
            formData.append('name', this.form.name)
            formData.append('description', this.form.description)
            formData.append('supplier', this.form.supplier)
            formData.append('category', this.form.category)
            formData.append('image', this.imageFile)

            Axios.post(url, formData)
                .then(({data}) => {
                    console.log(data)
                })
                .catch((e) => {
                    console.log(e)
                })
                .finally((e) => {
                    this.adding = false
                })
        },

        previewImage(event) {
            const imageInput = this.$refs.imageInput
            this.imageFile = imageInput.files[0]
            console.log(this.imageFile)
            let reader = new FileReader()
            reader.addEventListener('load', function() {
                this.$refs.imagePreview.src =  reader.result
            }, false)
            reader.readAsDataURL(this.imageFile)
        },
    },
}
</script>

<style scoped>

</style>