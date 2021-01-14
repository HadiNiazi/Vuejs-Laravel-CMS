<template>
    <div>
        <div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="addNewUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewUserLabel">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <form @submit.prevent="addNewUser" @keydown="form.onKeydown($event)">

                    <div class="form-group">
                        <input v-model="form.name" type="text" name="name" placeholder="Name"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.email" type="eamil" name="email" placeholder="Email"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="form-group">
                        <select name="type" v-model="form.type" class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                            <option value="">Select User Type</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                        <has-error :form="form" field="type"></has-error>
                    </div>
                    <div class="form-group">
                        <textarea v-model="form.bio" name="bio" placeholder="Enter a short bio (Optional)" class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                        <has-error :form="form" field="bio"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.password" type="password" name="password" placeholder="password"
                            class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                        <has-error :form="form" field="password"></has-error>
                    </div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button :disabled="form.busy" type="submit" class="btn btn-primary">Add User</button>
                    </div>
               </form>
            </div>



            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            users:[],
            form: new Form({
            name: '',
            email: '',
            type: '',
            bio: '',
            password: '',
            // remember: false
        })
        }
    },
    methods:{
        addNewUser(){
            this.$Progress.start();
            this.form.post('/api/user/store')
            .then(({ data }) => {
                this.form.reset();

                toast.fire({
                icon: 'success',
                title: 'User created successfully'
                });

                this.$Progress.finish()
                this.loadUsers();
              },
              (response) => {
                this.$Progress.fail()
                })

        },
        loadUsers(){
            $('#addNewUser').modal('hide');
            this.$emit('reloadUserList');
                 }
        }
}
</script>
