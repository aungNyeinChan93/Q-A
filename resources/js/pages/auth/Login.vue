<script setup>
import { useForm } from '@inertiajs/vue3';
import { route } from '../../../../vendor/tightenco/ziggy/src/js';

const form = useForm({
    email:null,
    password:null,
});

const submit = () =>{
    form.post(route("Auth#loginProcess"),{
        onError(){
            form.reset();
        }
    });
}


</script>

<template>
    <section class="container mt-4 mx-auto">
       <div class="row">
            <div class="col-4 offset-4">
                <div class="card rounded-sm shadow-sm">
                    <div class="card-header text-center text-primary">Login</div>
                    <div class="card-body">
                    <form @submit.prevent="submit">
                        <div class="mt-3">
                            <input type="email" name="email" id="email" v-model="form.email" class="form-control" :class="{'border-danger':form.errors.email}" placeholder="email">
                            <small class=" text-danger"> {{ form.errors.email }}</small>
                        </div>
                        <div class="mt-3">
                            <input type="password" name="password" id="password" v-model="form.password" class="form-control"  :class="{'border-danger':form.errors.password}" placeholder="password">
                            <small class=" text-danger"> {{ form.errors.password }}</small>

                        </div>
                        <div class="mt-2 d-flex justify-content-between">
                            <button class="btn btn-sm btn-primary ">Login</button>
                            <Link :href="route('Auth#register')" class="text-mute fs-6 fw-light text-danger text-decoration-none ">Register here</Link>
                        </div>
                    </form>
                </div>
                </div>

            </div>
       </div>
    </section>
</template>
