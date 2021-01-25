
<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                            <h3 class="card-title" id="element1"><b>Users</b></h3>
                            <button id="element2" class="btn btn-success add-new" data-toggle="modal" data-target="#addNewUser">Add New <i class="fas fa-user-plus fa-fw"></i> </button>
                            <create v-on:reloadUserList="getUsersList" />
                            <edit v-on:reloadUserList="getUsersList" />

                    </div>

                <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Registered At</th>
                                <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr v-for="user in users.data" :key="user.id">
                                    <th scope="row"> {{ user.id }} </th>
                                    <td> {{ user.name }} </td>
                                    <td> {{ user.email }} </td>
                                    <td> {{ user.type | capitalize }} </td>
                                    <td> {{ user.created_at | created_at }} </td>
                                    <td>
                                        <a @click="edit(user)" href="javascript:void(0)" data-toggle="modal" data-target="#editUser"> <i class="fa fa-edit"></i></a>
                                        /
                                        <a @click="deleteUser(user)" href="javascript:void(0)"> <i class="fa fa-trash red"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                   </div>

                <div class="card-footer">
                    <pagination :data="users" @pagination-change-page="getResults"></pagination>
                </div>

                </div>
            </div>
        </div>

    </div>
</template>

<script>
import Create from './Create.vue';
import Edit from './Edit.vue';
import EventBus from '../../event-bus';

    export default {
  components: { Create, Edit },
        data: function(){
            return{
                users: {},
        }
       },
       created(){
                this.getUsersList();
                EventBus.$on('searchedString', item => {

                    axios.get('/api/findUser/'+ item)
                    .then( response => {
                        this.users = response.data;
                        console.log(response.data);
                    })
                    .catch( error => {
                        console.log(error);
                    })
                  });
            },
        methods:{
            getResults(page = 1) {
                    axios.get('api/users?page=' + page)
                    .then((response) => {
                        this.users = response;

                    });
	            	},
            getUsersList(){
                // axios.get('/sanctum/csrf-cookie').then(response => {
                axios.get('/api/users')
                    .then( response => {
                        this.users = response.data;
                    })
                    .catch( error => {
                        console.log(error);
                    })
                    // });
                },

                edit(user){
                EventBus.$emit('editUserInfo', user);
                },
                deleteUser(user){
                    this.$Progress.start();
                    axios.post('/api/user/' + user.id)
                    .then(({ data }) => {
                      swal("Deleted!", "User deleted successfully!", "error");
                        this.getUsersList()
                        // this.users.splice(user, 1);
                        this.$Progress.finish()
                    })
                    .catch( error => {
                        this.$Progress.fail()
                        console.log( error );
                    })
                }


            },

    }
</script>

<style lang="scss" scoped>
.fa-edit {
    color:blue;
}
.fa-trash {
    color: red;
}
#element1 {
    float:left;
    font-family: Merriweather;
    }
#element2 {
    float:right;
    font-family: Merriweather;
    }
table th{
    font-family: Open Sans;
}
table td {
    font-family: Libre Baskerville;
}
</style>
