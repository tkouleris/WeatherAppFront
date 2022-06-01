<template>
  <div class="hold-transition login-page">
    <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1"><b>Weather</b>APP</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form >
            <div class="input-group mb-3">
              <input v-model="username" type="text" class="form-control" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input v-model="password" type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button @click="login_attempt" type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <!-- /.social-auth-links -->

          <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

</template>

<script>
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(VueAxios,axios)
export default {
  name: 'LoginPageComponent',
  data(){
    return {
      username: null,
      password: null
    }
  },
  methods:{
    login_attempt: function (e){
      e.preventDefault();
      let credentials = {
        'username': this.username,
        'password': this.password
      }
      Vue.axios.post("http://weatherapi.tkouleris.eu/weather/authenticate", credentials)
          .then(
              response =>{
                localStorage.token = response.data.data.jwt;
                localStorage.username = response.data.data.username;
                localStorage.id = response.data.data.userid;
                this.$router.push('/dashboard');
              }
          ).catch(
              error => {
                console.log(error);
                alert('Wrong Username or Password')
              }
          );
    },
    loginAtEnterPressed(event){
      if(event.keyCode !== 13){
        return;
      }
      this.login_attempt();
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
