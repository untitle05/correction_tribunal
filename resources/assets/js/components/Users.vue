<template lang="html">
    <div>
        <table class="table table-striped">
            <thread>
                <tr>
                    <th>nom</th>
                    <th>email</th>
                </tr>
            </thread>

            <tbody>
                <tr v-for = "user in users">
                    <td>
                        {{ user.name }}
                    </td>

                    <td>
                        {{ user.email }}
                    </td>
                </tr>
            </tbody>
    </div>
</template>

export default {
        data(){
            return {
                users: []
            }
        },

        methods:{
            fetchUsers(){
                this.$http.get('/users').then(response => {
                    this.user = response.data.users;
                });
            }
        }
}