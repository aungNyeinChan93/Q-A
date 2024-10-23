<script setup>
import { useForm } from "@inertiajs/vue3";
import { route } from "../../../../vendor/tightenco/ziggy/src/js";
import { ref } from "vue";


const test = ref("test");
const form = useForm({
    name: null,
    email: null,
    password: null,
    image: null,
    preview: null,
});

const change = (e) => {
    form.image = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};

const submit = () => {
    form.post(route('Auth#registerProcess'),{
        onError(){
            form.reset("password");
        }
    })
};

</script>

<template>
    <section class="container mt-5 mx-auto">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="card rounded-sm shadow-sm">
                    <div class="card-header text-center text-primary">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="" @submit.prevent="submit">

                            <div class="mt-3">
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    v-model="form.name"
                                    class="form-control"
                                    :class="{'border-danger' :form.errors.name}"
                                    placeholder="name"
                                />
                                <small class="text-danger">{{ form.errors.name }}</small>
                            </div>

                            <div class="mt-3">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    v-model="form.email"
                                    class="form-control"
                                    :class="{'border-danger' :form.errors.email}"
                                    placeholder="email"
                                />
                                <small class="text-danger">{{ form.errors.email }}</small>
                            </div>

                            <div class="mt-3">
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    v-model="form.password"
                                    :class="{'form-control':true,'border-danger' :form.errors.password}"
                                    placeholder="password"
                                />
                                <small class="text-danger">{{ form.errors.password }}</small>
                            </div>

                            <div class="mt-3">
                                <div>
                                    <img
                                        :src="form.preview"
                                        alt=""
                                        class="img-fluid w-25"
                                    />
                                </div>
                                <input
                                    type="file"
                                    name="image"
                                    id="image"
                                    :class="{'form-control':true,'border-danger' :form.errors.image}"
                                    @change="change"
                                />
                                <small class="text-danger">{{ form.errors.image }}</small>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <button class="btn btn-sm btn-primary">
                                    Register
                                </button>
                                <Link
                                    :href="route('login')"
                                    class="text-mute fs-6 fw-light text-danger text-decoration-none"
                                    >Login here</Link
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
