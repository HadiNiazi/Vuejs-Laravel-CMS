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
                        <input v-model="editUser.name" type="text" name="name" placeholder="Name"
                            class="form-control">

                    </div>
                    <div class="form-group">
                        <input v-model="editUser.email" type="eamil" name="email" placeholder="Email"
                            class="form-control" >

                    </div>
                    <div class="form-group">
                        <select name="type" v-model="editUser.type" class="form-control" >
                            <option value="">Select User Type</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <textarea v-model="editUser.bio" name="bio" placeholder="Enter a short bio (Optional)" class="form-control"></textarea>

                    </div>
                    <div class="form-group">
                        <input v-model="editUser.password" type="password" name="password" placeholder="password"
                            class="form-control" >

                    </div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" @click="updateUser" class="btn btn-primary">Update User</button>
                    </div>

            </div>



            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        editUser:{
            required:true,
            },
    },
    data: function(){
        return{

        }
    },
    methods:{
        updateUser(){
            axios.put('/api/user/edit/' + this.editUser.id, {
                name : this.editUser.name,
                email : this.editUser.email,
                type : this.editUser.type,
                bio : this.editUser.bio,
                password : this.editUser.password,
            })
            .then(({ data }) => {
                $('#editUser').modal('hide');
                toast.fire({
                icon: 'success',
                title: 'User updated successfully'
                });

                this.$Progress.finish()
              },
              (response) => {
                this.$Progress.fail()
                })

              }

        // loadUsers(){
        //     $('#editUser').modal('hide');
        //     this.$emit('reloadUserList');
        //          }
        }
}
</script>
