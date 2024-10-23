<script setup>
import { route } from '../../../vendor/tightenco/ziggy/src/js';

defineProps({
    alert: {
        type: String,
        // default: "Success",
    },
    user:{
        type:Object,
    }

});
</script>

<template>
    <section>
        <Link :href="route('Auth#logout')" method="post" as="button" type="button" class="btn btn-sm btn-danger mx-2">Logout</Link>
        <div v-if="alert" class="alert alert-warning alert-dismissible fade show  p-3 col-10 offset-1 mt-3 " role="alert">
            <strong>{{ alert }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card my-2 shadow-sm ">
                    <div class="card-header ">
                        <h3 class="text-primary text-center p-2">{{ $page.component }} || <span class="text-danger">{{ $page.props.auth.user.name }}</span></h3>
                    </div>
                    <div class="card-body">
                        <img :src="'storage/'+$page.props.auth.user.image != null ? ('storage/'+$page.props.auth.user.image):('/storage/userImage/default.png')" alt="img" class="img-fluid w-50">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <!-- side bar -->
                <div class="col-4">
                    <div class="card my-2">
                        <div class="card-header">
                           Question
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Question 1
                                </li>
                                <li class="list-group-item">
                                    Question 1
                                </li>
                                <li class="list-group-item">
                                    Question 1
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- side bar End -->

                <!-- Post  -->
                <div class="col-8">
                    <div class="col-12 ">
                        <div class="card my-2">
                            <div class="card-header">
                               <div class=" float-start">
                                <span class="btn btn-sm btn-secondary">Need Fixed</span>
                                <span class="text-center ms-2 text-primary">What is Laravel?</span>
                               </div>
                                <div class=" float-end">
                                    <a href="" class="btn btn-sm btn-warning px-4 ms-2 ">Fixed</a>
                                    <a href="" class="btn btn-sm btn-danger px-4 ms-2 ">Delete</a>
                                </div>
                            </div>
                            <div class="card-body">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing e
                                lit. Dignissimos accusantium, expedita qui voluptas paria
                                tur eius dolorum reprehenderit mollitia tenetur ducimus,
                                maiores debitis corrupti quos alias quo cumque perspiciati
                                s ipsum earum?</p>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="d-flex action-box col-4">
                                        <div class="ms-2">
                                            <span>Like</span>
                                            <span class="text-danger">10</span>
                                        </div>
                                        <div class="ms-2">
                                            <span>Comment</span>
                                            <span class="text-warning">10</span>
                                        </div>
                                        <div class="ms-2">
                                            <span>Save</span>
                                            <span class="text-info">10</span>
                                        </div>
                                    </div>
                                    <div class="category list col-6">
                                        <span class="bg-success text-white p-1 px-2 rounded shadow-sm ms-2">HTML</span>
                                        <span class="bg-success text-white p-1 px-2 rounded shadow-sm ms-2">CSS</span>
                                    </div>
                                    <div class="col-1 offset-1 ">
                                        <div class="btn btn-sm btn-info">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card my-2">
                            <div class="card-header">
                               <div class=" float-start">
                                <span class="btn btn-sm btn-secondary">Need Fixed</span>
                                <span class="text-center ms-2 text-primary">What is Laravel?</span>
                               </div>
                                <div class=" float-end">
                                    <a href="" class="btn btn-sm btn-warning px-4 ms-2 ">Fixed</a>
                                    <a href="" class="btn btn-sm btn-danger px-4 ms-2 ">Delete</a>
                                </div>
                            </div>
                            <div class="card-body">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing e
                                lit. Dignissimos accusantium, expedita qui voluptas paria
                                tur eius dolorum reprehenderit mollitia tenetur ducimus,
                                maiores debitis corrupti quos alias quo cumque perspiciati
                                s ipsum earum?</p>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="d-flex action-box col-4">
                                        <div class="ms-2">
                                            <span>Like</span>
                                            <span class="text-danger">10</span>
                                        </div>
                                        <div class="ms-2">
                                            <span>Comment</span>
                                            <span class="text-warning">10</span>
                                        </div>
                                        <div class="ms-2">
                                            <span>Save</span>
                                            <span class="text-info">10</span>
                                        </div>
                                    </div>
                                    <div class="category list col-6">
                                        <span class="bg-success text-white p-1 px-2 rounded shadow-sm ms-2">HTML</span>
                                        <span class="bg-success text-white p-1 px-2 rounded shadow-sm ms-2">CSS</span>
                                    </div>
                                    <div class="col-1 offset-1 ">
                                        <div class="btn btn-sm btn-info">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card my-2">
                            <div class="card-header">
                               <div class=" float-start">
                                <span class="btn btn-sm btn-secondary">Need Fixed</span>
                                <span class="text-center ms-2 text-primary">What is Laravel?</span>
                               </div>
                                <div class=" float-end">
                                    <a href="" class="btn btn-sm btn-warning px-4 ms-2 ">Fixed</a>
                                    <a href="" class="btn btn-sm btn-danger px-4 ms-2 ">Delete</a>
                                </div>
                            </div>
                            <div class="card-body">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing e
                                lit. Dignissimos accusantium, expedita qui voluptas paria
                                tur eius dolorum reprehenderit mollitia tenetur ducimus,
                                maiores debitis corrupti quos alias quo cumque perspiciati
                                s ipsum earum?</p>
                            </div>
                            <div class="card-footer ">
                                <div class="row">
                                    <div class="d-flex action-box col-4">
                                        <div class="ms-2">
                                            <span>Like</span>
                                            <span class="text-danger">10</span>
                                        </div>
                                        <div class="ms-2">
                                            <span>Comment</span>
                                            <span class="text-warning">10</span>
                                        </div>
                                        <div class="ms-2">
                                            <span>Save</span>
                                            <span class="text-info">10</span>
                                        </div>
                                    </div>
                                    <div class="category list col-6">
                                        <span class="bg-success text-white rounded shadow-sm ms-2">HTML</span>
                                        <span class="bg-success text-white rounded shadow-sm ms-2">CSS</span>
                                    </div>
                                    <div class="col-1 offset-1 ">
                                        <div class="btn btn-sm btn-info">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Post end -->
            </div>
        </div>
    </section>
</template>
