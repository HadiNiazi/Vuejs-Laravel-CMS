<template>
    <div>
        <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="addNewUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewUserLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name" placeholder="Name"
                            class="form-control">

                    </div>
                    <div class="form-group">
                        <input v-model="form.email" type="eamil" name="email" placeholder="Email"
                            class="form-control" >

                    </div>
                    <div class="form-group">
                        <select name="type" v-model="form.type" class="form-control" >
                            <option value="">Select User Type</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <textarea v-model="form.bio" name="bio" placeholder="Enter a short bio (Optional)" class="form-control"></textarea>

                    </div>
                    <div class="form-group">
                        <input v-model="form.password" type="password" name="password" placeholder="password"
                            class="form-control" >

                    </div>

                    <div class="pull-right">
                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" @click="updateUser" class="btn btn-primary">Update User</button>
                    </div>

            </div>



            </div>
        </div>
        </div>
    </div>
</template>

<script>
import EventBus from '../../event-bus'
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
    mounted(){
        EventBus.$on('editUserInfo', user => {
            this.form.fill(user);
            });
    },
    methods:{
        updateUser(){
            this.$Progress.start()
             this.form.post('/api/user/update/' + this.form.id, {
            })
            .then( ({ response }) => {
                $('#editUser').modal('hide');
                toast.fire({
                icon: 'success',
                title: 'User updated successfully'
                });
                this.$Progress.finish();
                this.loadUsers();
              })
               .catch( error => {
                    this.$Progress.fail()
                swal("Wrong!", "Please fill all the required feild!", "error");
               });

              },
              loadUsers(){
                this.$emit('reloadUserList');
                }
              }


}
</script>
