
<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><b>Users</b></h3>
                        <div class="card-tools">
                            <button class="btn btn-success add-new" data-toggle="modal" data-target="#addNewUser">Add New <i class="fas fa-user-plus fa-fw"></i> </button>
                            <create v-on:reloadUserList="getUsersList" />
                            <edit :editUser="editUser" />
                        </div>
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

                                <tr v-for="(user, index) in users" :key="index">
                                    <th scope="row"> {{ user.id }} </th>
                                    <td> {{ user.name }} </td>
                                    <td> {{ user.email }} </td>
                                    <td> {{ user.type | capitalize }} </td>
                                    <td> {{ user.created_at | created_at }} </td>
                                    <td>
                                        <a @click="edit(user)" data-toggle="modal" data-target="#editUser"> <i class="fa fa-edit"></i></a>
                                        /
                                        <a href=""> <i class="fa fa-trash red"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                            </table>
                   </div>

                </div>
            </div>
        </div>

    </div>
</template>

<script>
import Create from './Create.vue';
import Edit from './Edit.vue';
    export default {
  components: { Create, Edit },
        data: function(){
            return{
                users:[],
                editUser: ''
        }
       },
        methods:{
            getUsersList(){
                axios.get('/api/users')
                    .then( response => {
                        this.users = response.data;
                    })
                    .catch( error => {
                        console.log(error);
                    })
                },
                edit(user){
                  this.editUser = user;
                }

            },
            mounted(){
                this.getUsersList();
            }
    }
</script>

<style lang="scss" scoped>
.fa-edit {
    color:blue;
}
.fa-trash {
    color: red;
}
.add-new {
    float: right;
}
.fa-edit {

}
</style>
