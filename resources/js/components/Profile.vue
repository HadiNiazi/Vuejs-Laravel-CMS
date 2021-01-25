<template>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="container-fluid flex-grow-1 container-p-y">

            <div class="row">
              <div class="col-xl-4">

                <!-- Side info -->
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="media">
                      <img src="../../assets/img/avatars/5.png" alt="" class="ui-w-60 rounded-circle">
                      <div class="media-body pt-2 ml-3">

                        <h5 class="mb-2">{{ form.name }}</h5>
                        <div class="text-muted small">{{ form.type }}</div>

                        <div class="mt-2">
                          <a href="javascript:void(0)" class="text-twitter">
                            <span class="ion ion-logo-twitter"></span>
                          </a>
                          &nbsp;&nbsp;
                          <a href="javascript:void(0)" class="text-facebook">
                            <span class="ion ion-logo-facebook"></span>
                          </a>
                          &nbsp;&nbsp;
                          <a href="javascript:void(0)" class="text-instagram">
                            <span class="ion ion-logo-instagram"></span>
                          </a>
                        </div>

                        <div class="mt-3">
                          <a href="javascript:void(0)" class="btn btn-primary btn-sm rounded-pill">+&nbsp; Follow</a>
                          &nbsp;
                          <a href="javascript:void(0)" class="btn icon-btn btn-default btn-sm md-btn-flat rounded-pill">
                            <span class="ion ion-md-mail"></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="border-light m-0">
                  <div class="card-body">
                    <div class="mb-2">
                      <span class="text-muted">Birthday:</span>&nbsp;
                      May 3, 1995
                    </div>
                    <div class="mb-2">
                      <span class="text-muted">Country:</span>&nbsp;
                      <a href="javascript:void(0)" class="text-body">Canada</a>
                    </div>
                    <div class="mb-2">
                      <span class="text-muted">Languages:</span>&nbsp;
                      <a href="javascript:void(0)" class="text-body">English</a>
                    </div>
                    <div class="mb-4">
                      <span class="text-muted">Phone:</span>&nbsp;
                      +0 (123) 456 7891
                    </div>
                    <div class="text-muted">
                      Lorem ipsum dolor sit amet, nibh suavitate qualisque ut nam. Ad harum primis electram duo, porro principes ei has.
                    </div>
                  </div>
                </div>
                <!-- / Side info -->

              </div>
              <div class="col">

                <!-- Info -->
                <div class="no-gutters row-bordered ui-bordered text-center mb-4" id="form-wrapper">

                    <!-- bootstrap form -->
                    <div class="text-center mt-3 user-info"><h5>User Info</h5></div>
                     <form @submit.prevent="updateUser" @keydown="form.onKeydown($event)" class="mt-2">
                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name" placeholder="Name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error class="has-error" :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.email" type="eamil" disabled  name="email" id="email" placeholder="Email"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error class="has-error" :form="form" field="email"></has-error>
                    </div>
                    <div class="form-group">
                        <select name="type"  v-model="form.type" class="form-control" :class=" { 'is-invalid': form.errors.has('type') }">
                            <option value="">Select User Type</option>
                            <option value="author">Author</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <has-error :form="form" class="has-error" field="type"></has-error>
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.bio" name="bio" placeholder="Enter a short bio (Optional)" class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                        <has-error :form="form" class="has-error" field="bio"></has-error>
                    </div>

                    <div class="form-group">
                        <input v-model="form.password" type="password" name="password" placeholder="password"
                            class="form-control" id="has-error" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" class="has-error" field="password"></has-error>
                    </div>

                    <div>
                        <button :disabled="form.busy" type="submit" class="btn btn-block btn-primary">UPDATE</button>
                    </div>
               </form>

                </div>
                <!-- / Info -->

                <!-- Posts -->


                <!-- / Posts -->

              </div>
            </div>

          </div>
            </div>

        </div>
    </div>
</template>

<script>
import EventBus from '../event-bus'


    export default {
        data: function(){
            return{
                form: new Form({
                    id: '',
                    name: '',
                    email: '',
                    type: '',
                    avatar: '',
                    isAdmin: '',
                    bio: '',
                    password: '',
                })
            }
        },
        created(){
            EventBus.$on('loginUser', item => {
                this.form.fill(item);
            });
        },
        methods:{
            updateUser(){
                 this.$Progress.start()
                 this.form.post('/api/user-profile/update/'+ this.form.id, {
                 })
                 .then(({ data }) => {
                      swal("Updated!", "Updated successfully!", "success");
                        this.$Progress.finish()
                    })
                .catch( error => {
                    this.$Progress.fail()
                    console.log( error );
                })
            }
        }
    }
</script>

<style lang="css" scoped>
.user-info {
    font-size: 1rem;
    font-family: "Roboto",-apple-system,BlinkMacSystemFont,"Segoe UI","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
}
.has-error {
    text-align: left;
}
#has-error {
    text-align: left;
}
#email{
    border-color: red;
    cursor: not-allowed;
}
</style>
