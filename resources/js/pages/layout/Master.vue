<script setup>
import { route } from '../../../../vendor/tightenco/ziggy/src/js';

</script>

<template>
    <div>
        <nav class=" ">
          <div class="d-flex justify-content-between p-3" v-if="$page.props.auth.user">
            <Link :href="route('home')">Home</Link>
            <Link :href="route('login')">Dashboard</Link>
            <Link :href="route('Auth#logout')" class="btn btn-sm btn-warning"  method="post" as="button" type="button">Logout</Link>
          </div>
           <div class="d-flex justify-content-between p-3" v-if="!$page.props.auth.user">
                <Link :href="route('login')">Login</Link>
                <Link :href="route('Auth#register')">Register</Link>
           </div>
        </nav>
        <main>
            <slot/>
        </main>

    </div>
</template>
