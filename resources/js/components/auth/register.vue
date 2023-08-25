<template>
    <!-- HK Wrapper -->
	<div class="hk-wrapper">

<!-- Main Content -->
<div class="hk-pg-wrapper hk-auth-wrapper">
    <header class="d-flex justify-content-between align-items-center">
        <a class="d-flex font-24 font-weight-500 auth-brand" href="#">
            Ovins
        </a>
        <div class="btn-group btn-group-sm">
            <a href="#" class="btn btn-outline-secondary">Help</a>
            <a href="#" class="btn btn-outline-secondary">About Us</a>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 pa-0">
                <div class="auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg-1.jpg);">
                   
                </div>
            </div>
            <div class="col-xl-7 pa-0">
                <div class="auth-form-wrap py-xl-0 py-50">
                    <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                        <form @submit.prevent="register()">
                            <h1 class="display-5 mb-10">Sign up </h1>
                            <p class="mb-30">Create  account </p>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="First name" name="name" type="text" v-model="data.name" >
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="form-control" placeholder="Last name" value="" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" type="email" v-model="data.email" >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" v-model="data.password" >
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Confirm Password" type="password">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-25">
                                <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                            </div>
                            <button class="btn btn-danger btn-block" type="submit">Register</button>
                            <div class="option-sep">or</div>
                            <div class="form-row">
                                <div class="col-sm-6 mb-20">
                                    <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                </div>
                                <div class="col-sm-6 mb-20">
                                    <button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                </div>
                            </div>
                            <p class="text-center">Already have an account? <a href="login.html">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
</template>

<script setup>

import { reactive } from "vue";
import usePosts from "../../services/postservices";
const { signup } = usePosts();


const data = reactive({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",

});

const register = async () => {
    await signup({ ...data });
};

</script>
